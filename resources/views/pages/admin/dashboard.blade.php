@extends('layouts.admin')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-8 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">Hello, {{ Auth::user()->username }}! 👋</h5>
                <p class="mb-4">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, repellat?
                </p>

                <a href="{{ route('admin.profile') }}" class="btn btn-sm btn-outline-primary">View Profile</a>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img src="{{ asset('dashboard/img/illustrations/man-with-laptop-light.png') }}" height="140" alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="{{ asset('dashboard/img/illustrations/man-with-laptop-light.png') }}" />
              </div>
            </div>
          </div>
        </div>
      </div><!-- / col -->
    </div><!-- / row -->
  </div>
@endsection
