@extends('layouts.admin')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Profile</h4>

    <div class="row">
      <div class="col-md-12">

        <!-- Form Wrapper -->
        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
          @csrf @method('PUT')

          <!-- Card Wrapper -->
          <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>

            <!-- Account -->
            <div class="card-body">
              <div class="d-flex align-items-start align-items-sm-center gap-4">
                @isset($user->photo)
                  <img src="{{ url(Storage::url($user->photo)) }}" alt="user-avatar" class="d-block rounded" height="100" width="100"
                    id="uploadedAvatar" />
                @else
                  <img src="{{ asset('dashboard/img/avatars/default.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100"
                    id="uploadedAvatar" />
                @endisset


                <div class="button-wrapper">
                  <label for="photo" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input type="file" name="photo" id="photo" class="account-file-input @error('photo') is-invalid @enderror" accept="image/*"
                      hidden />
                  </label>

                  <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                    <i class="bx bx-reset d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                  </button>

                  <p class="text-muted mb-0">Allowed PNG, JPG or JPEG. Max size of 2MB</p>
                  @error('photo')
                    <div class="text-danger">
                      <small>{{ $message }}</small>
                    </div>
                  @enderror
                </div>
              </div>
            </div>

            <hr class="my-0" />

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}"
                    class="form-control @error('username') is-invalid @enderror" autofocus />

                  @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="your.email@example.com"
                    class="form-control @error('email') is-invalid @enderror" />

                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="phone_number" class="form-label">Phone Number</label>
                  <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}"
                    placeholder="081234567890" class="form-control @error('phone_number') is-invalid @enderror" />

                  @error('phone_number')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
              </div>
            </div>
            <!-- /Account -->
          </div><!-- /Card Wrapper -->
        </form><!-- /Form Wrapper -->
      </div>
    </div>
  </div>
@endsection
