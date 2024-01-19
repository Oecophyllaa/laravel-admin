<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
  public function index()
  {
    return view('pages.admin.dashboard');
  }

  public function profile()
  {
    $user_id = Auth::user()->id;
    $user = User::whereId($user_id)->first();

    return view('pages.admin.profile', compact('user'));
  }

  public function profileUpdate(UpdateProfileRequest $request)
  {
    $validated = $request->validated();
    // dd($validated);

    $user = User::whereId(Auth::user()->id)->first();

    // delete old photo if exists
    if (isset($validated['photo'])) {
      $old_photo = 'storage/' . $user['photo'];
      if (File::exists($old_photo)) {
        File::delete($old_photo);
      } else {
        File::delete('storage/app/public/' . $user['photo']);
      }
    }

    // store photo to storage
    if (isset($validated['photo'])) {
      $validated['photo'] = $request->file('photo')->storeAs('users/photo', uniqid('users-'), 'public');
    }

    // update
    $update = $user->update($validated);
    if ($update) {
      toast()->success('Profile successfuly updated');
      return redirect()->back();
    }

    return abort(500);
  }
}
