<!DOCTYPE html>
<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>{{ config('app.name') }} | Page Not Found</title>

  <!-- Styles -->
  @include('includes.admin.style')

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('dashboard/vendor/css/pages/page-misc.css') }}" />
  <!-- Helpers -->
  <script src="{{ asset('dashboard/vendor/js/helpers.js') }}"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('dashboard/js/config.js') }}"></script>
</head>

<body>
  <!-- Content -->

  <!-- Error -->
  <div class="container-xxl container-p-y">
    <div class="misc-wrapper">
      <h2 class="mb-2 mx-2">Page Not Found :(</h2>
      <p class="mb-4 mx-2">Oops! 😖 The requested URL was not found on this server.</p>
      <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
      <div class="mt-3">
        <img src="{{ asset('dashboard/img/illustrations/page-misc-error-light.png') }}" alt="page-misc-error-light" width="500" class="img-fluid"
          data-app-dark-img="illustrations/page-misc-error-dark.png"
          data-app-light-img="{{ asset('dashboard/img/illustrations/page-misc-error-light.png') }}" />
      </div>
    </div>
  </div>
  <!-- /Error -->

  <!-- / Content -->

  @include('includes.admin.script')

  <!-- Page JS -->
  <!-- ... -->
</body>

</html>
