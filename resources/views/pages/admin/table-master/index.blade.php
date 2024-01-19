@extends('layouts.admin')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-xl">

        <!-- card -->
        <div class="card">
          <h5 class="card-header">Table Master Index</h5>
          <!-- table wrapper -->
          <div class="table-responsive text-nowrap px-3 pb-3">
            <!-- btn create -->
            <a href="{{ route('admin.table-master.create') }}" class="btn btn-primary mb-4">
              <span class="tf-icons bx bx-plus"></span>&nbsp; Create Form
            </a>
            <!-- / btn create -->

            <table class="table table-hover" id="dataTable">
              <thead>
                <tr class="text-nowrap">
                  <th>Id</th>
                  <th>Project</th>
                  <th>Client</th>
                  <th>Due Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Laravel Project</td>
                  <td>Albert Cook</td>
                  <td>{{ date('d-m-Y H:i:s', strtotime('+3 days')) }}</td>
                  <td>
                    <span class="badge bg-label-primary me-1">Active</span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-warning px-2 py-1">
                      <i class="bx bxs-edit"></i>
                    </a><!-- / edit -->

                    <button type="button" class="btn btn-danger px-2 py-1" data-bs-toggle="modal" data-bs-target="#delete-modal-1">
                      <i class="bx bxs-trash"></i>
                    </button><!-- / delete -->

                    <!-- delete modal wrapper -->
                    <div class="modal fade" id="delete-modal-1" tabindex="-1" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Delete Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div><!-- / modal header -->
                          <div class="modal-body">
                            <div class="row">
                              <div class="col">
                                <p>Data <strong>#1</strong> akan dihapus?</p>
                              </div>
                            </div>
                          </div><!-- / modal body -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                              Cancel
                            </button>
                            <button type="button" class="btn btn-danger"
                              onclick="event.preventDefault();document.getElementById('delete-form-1').submit();">
                              Delete
                              <form action="#" method="POST" id="delete-form-1" style="display: none;">
                                @csrf @method('DELETE')
                              </form>
                            </button>
                          </div><!-- / modal footer -->
                        </div><!-- / modal content -->
                      </div>
                    </div><!-- / modal wrapper -->
                  </td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Bootstrap Project</td>
                  <td>Barry Hunter</td>
                  <td>{{ date('d-m-Y H:i:s', strtotime('-1 days')) }}</td>
                  <td>
                    <span class="badge bg-label-success me-1">Completed</span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-warning px-2 py-1">
                      <i class="bx bxs-edit"></i>
                    </a><!-- / edit -->

                    <button type="button" class="btn btn-danger px-2 py-1" data-bs-toggle="modal" data-bs-target="#delete-modal-2">
                      <i class="bx bxs-trash"></i>
                    </button><!-- / delete -->

                    <!-- delete modal wrapper -->
                    <div class="modal fade" id="delete-modal-2" tabindex="-1" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Delete Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div><!-- / modal header -->
                          <div class="modal-body">
                            <div class="row">
                              <div class="col">
                                <p>Data <strong>#2</strong> akan dihapus?</p>
                              </div>
                            </div>
                          </div><!-- / modal body -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                              Cancel
                            </button>
                            <button type="button" class="btn btn-danger"
                              onclick="event.preventDefault();document.getElementById('delete-form-2').submit();">
                              Delete
                              <form action="#" method="POST" id="delete-form-2" style="display: none;">
                                @csrf @method('DELETE')
                              </form>
                            </button>
                          </div><!-- / modal footer -->
                        </div><!-- / modal content -->
                      </div>
                    </div><!-- / modal wrapper -->
                  </td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>Tailwind Project</td>
                  <td>Trevor Baker</td>
                  <td>{{ date('d-m-Y H:i:s', strtotime('+10 days')) }}</td>
                  <td>
                    <span class="badge bg-label-info me-1">Scheduled</span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-warning px-2 py-1">
                      <i class="bx bxs-edit"></i>
                    </a><!-- / edit -->

                    <button type="button" class="btn btn-danger px-2 py-1" data-bs-toggle="modal" data-bs-target="#delete-modal-3">
                      <i class="bx bxs-trash"></i>
                    </button><!-- / delete -->

                    <!-- delete modal wrapper -->
                    <div class="modal fade" id="delete-modal-3" tabindex="-1" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Delete Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div><!-- / modal header -->
                          <div class="modal-body">
                            <div class="row">
                              <div class="col">
                                <p>Data <strong>#3</strong> akan dihapus?</p>
                              </div>
                            </div>
                          </div><!-- / modal body -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                              Cancel
                            </button>
                            <button type="button" class="btn btn-danger"
                              onclick="event.preventDefault();document.getElementById('delete-form-3').submit();">
                              Delete
                              <form action="#" method="POST" id="delete-form-3" style="display: none;">
                                @csrf @method('DELETE')
                              </form>
                            </button>
                          </div><!-- / modal footer -->
                        </div><!-- / modal content -->
                      </div>
                    </div><!-- / modal wrapper -->
                  </td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>React Project</td>
                  <td>Jerry Milton</td>
                  <td>To Be Announced</td>
                  <td>
                    <span class="badge bg-label-warning me-1">Pending</span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-warning px-2 py-1">
                      <i class="bx bxs-edit"></i>
                    </a><!-- / edit -->

                    <button type="button" class="btn btn-danger px-2 py-1" data-bs-toggle="modal" data-bs-target="#delete-modal-4">
                      <i class="bx bxs-trash"></i>
                    </button><!-- / delete -->

                    <!-- delete modal wrapper -->
                    <div class="modal fade" id="delete-modal-4" tabindex="-1" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Delete Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div><!-- / modal header -->
                          <div class="modal-body">
                            <div class="row">
                              <div class="col">
                                <p>Data <strong>#4</strong> akan dihapus?</p>
                              </div>
                            </div>
                          </div><!-- / modal body -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                              Cancel
                            </button>
                            <button type="button" class="btn btn-danger"
                              onclick="event.preventDefault();document.getElementById('delete-form-4').submit();">
                              Delete
                              <form action="#" method="POST" id="delete-form-4" style="display: none;">
                                @csrf @method('DELETE')
                              </form>
                            </button>
                          </div><!-- / modal footer -->
                        </div><!-- / modal content -->
                      </div>
                    </div><!-- / modal wrapper -->
                  </td>
                </tr>

              </tbody>
            </table>
          </div><!-- table wrapper -->
        </div><!-- / card -->

      </div><!-- / end column -->
    </div><!-- / end row -->
  </div><!-- / end wrapper -->
@endsection

@push('after-script')
  <script>
    $('#dataTable').DataTable();
  </script>
@endpush
