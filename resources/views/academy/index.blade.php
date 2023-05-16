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
    @include('academy.create')
</x-layout>
