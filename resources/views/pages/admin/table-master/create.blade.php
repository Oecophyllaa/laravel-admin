@extends('layouts.admin')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-xl">

        <!-- card -->
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Data Form</h5>
          </div>

          <div class="card-body">
            <!-- form -->
            <form action="#" method="POST">
              @csrf

              <div class="row mb-4">
                <div class="col-lg-6 col-12">
                  <label class="form-label" for="inputField1">Projcet Name</label>
                  <input type="text" name="inputField1" id="inputField1" value="{{ old('inputField1') }}" placeholder="Enter your project name"
                    class="form-control @error('inputField1') is-invalid @enderror" />

                  @error('inputField1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    <small>contoh: IP06001</small>
                  @enderror
                </div><!-- / inputField1 -->
              </div><!-- / row -->

              <div class="row mb-4">
                <div class="col-lg-6 col-12">
                  <label class="form-label" for="inputField2">Client</label>
                  <input type="text" name="inputField2" id="inputField2" value="{{ old('inputField2') }}" placeholder="Enter project client name"
                    class="form-control @error('inputField2') is-invalid @enderror" />

                  @error('inputField2')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div><!-- / inputField2 -->
              </div><!-- / row -->

              <div class="row mb-4">
                <div class="col-lg-6 col-12">
                  <label class="form-label" for="inputDate">Due Date</label>
                  <input type="date" name="inputDate" id="inputDate" value="{{ old('inputDate') }}"
                    class="form-control @error('inputDate') is-invalid @enderror" />

                  @error('inputDate')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div><!-- / inputDate -->
              </div><!-- / row -->

              <button type="submit" class="btn btn-primary">
                <span class="tf-icons bx bxs-save"></span>&nbsp; Simpan
              </button>
            </form><!-- / form -->
          </div>
        </div><!-- / card -->
      </div>
    </div>
  </div>
@endsection
