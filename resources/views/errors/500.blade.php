<!DOCTYPE html>
<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>{{ config('app.name') }} | Under Maintenance</title>

  @include('includes.admin.style')

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('backend/vendor/css/pages/page-misc.css') }}" />
  <!-- Helpers -->
  <script src="{{ asset('backend/vendor/js/helpers.js') }}"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('backend/js/config.js') }}"></script>
</head>

<body>
  <!-- Content -->

  <!-- Under Maintenance -->
  <div class="container-xxl container-p-y">
    <div class="misc-wrapper">
      <h2 class="mb-2 mx-2">Under Maintenance!</h2>
      <p class="mb-4 mx-2">Sorry for the inconvenience but we're performing some maintenance at the moment</p>
      <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
      <div class="mt-4">
        <img src="{{ asset('backend/img/illustrations/girl-doing-yoga-light.png') }}" alt="girl-doing-yoga-light" width="500" class="img-fluid"
          data-app-dark-img="illustrations/girl-doing-yoga-dark.png"
          data-app-light-img="{{ asset('backend/img/illustrations/girl-doing-yoga-light.png') }}" />
      </div>
    </div>
  </div>
  <!-- / Under Maintenance -->

  <!-- / Content -->

  @include('includes.admin.script')

  <!-- Page JS -->
  <!-- ... -->
</body>

</html>
