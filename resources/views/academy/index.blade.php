<x-layout>
    <x-slot name="title">Menulis Akademik</x-slot>
    <div class="pb-3 row g-4">
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-2 d-flex justify-content-between">
                        <h6 class="fw-normal">Total 2 users</h6>
                        <ul class="mb-0 list-unstyled d-flex align-items-center avatar-group">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-sm pull-up" aria-label="Kim Merchent"
                                data-bs-original-title="Kim Merchent">
                                <img class="rounded-circle" src="/assets/img/illustrations/man-with-laptop-light.png"
                                    alt="Avatar">
                            </li>

                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h4 class="mb-1">Restricted User</h4>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                class="role-edit-modal"><small>Edit Role</small></a>
                        </div>
                        <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card h-100">
                <div class="row h-100">
                    <div class="col-sm-5">
                        <div class="mt-3 d-flex align-items-end h-100 justify-content-center mt-sm-0">
                            <img src="/assets/img/illustrations/man-with-laptop-light.png" class="img-fluid"
                                alt="Image" width="120"
                                data-app-light-img="illustrations/sitting-girl-with-laptop-light.png"
                                data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="text-center card-body text-sm-start ps-sm-0">
                            <p class="mb-0">Add role, if it does not exist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header pb-5">
            <ul class="nav nav-pills card-header-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-within-card-active" role="tab">Active</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-within-card-link" role="tab">Link</button>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content p-0">
                <div class="tab-pane fade show active" id="navs-pills-within-card-active" role="tabpanel">
                    <div class="table-responsive-sm">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>thumbnail</th>
                                    <th>judul</th>
                                    <th>pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($academies as $no => $item)
                                    <tr>
                                        <td>{{ ++$no }}</td>
                                        <td>
                                            <img class="rounded" width="70px" src="{{ $item->thumbnail }}"
                                                alt="Avatar">
                                        </td>
                                        <td>{{ Str::limit($item->title, 25, '...') }}</td>
                                        <td>
                                            <div class="d-inline justify-content-center">
                                                <a class="btn btn-info m-1 btn-sm" href="#"><i
                                                        class="bx bx-edit-alt me-1"></i>Lihat</a>
                                                <a class="btn btn-danger m-1 btn-sm" href="#"><i
                                                        class="bx bx-trash me-1"></i>Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-pills-within-card-link" role="tabpanel">
                    <div class="row g-2">
                        <div class="mb-3 col-sm">
                            <label for="title" class="form-label">title</label>
                            <input type="text" id="title" class="form-control" placeholder="Enter title">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3 col-sm">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail" id="thumbnail">
                            @error('thumbnail')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="description" class="form-label">Isi Materi</label>
                            <textarea class="form-control" name="description" id="editor" rows="3"></textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
        <style>
            table.dataTable thead tr,
            table.dataTable thead th,
            table.dataTable tbody th,
            table.dataTable tbody td {
                text-align: center;
            }
        </style>
    @endsection

    @section('js')
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
        @include('ckeditor')
    @endsection

</x-layout>
