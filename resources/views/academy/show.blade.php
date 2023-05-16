<x-layout>
    <x-slot name="title"></x-slot>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header-banner">
                    <img src="https://source.unsplash.com/random/?course&1
                    " alt="Banner image"
                        width="100%" height="200px" style="object-fit: cover" class="rounded-top">
                </div>
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img src="{{ Storage::url($academy->thumbnail) }}" alt="user image" width="200px"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4 class="fw-bold">{{ $academy->title }}</h4>
                                <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                    <li class="list-inline-item fw-semibold">
                                        <i class="bx bx-pen"></i> Menulis Akademik
                                    </li>
                                    <li class="list-inline-item fw-semibold">
                                        <i class="bx bx-calendar-alt"></i>
                                        {{ Carbon\carbon::parse($academy->created_at)->format('D, d m Y') }}
                                    </li>
                                </ul>
                            </div>
                            <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Edit Materi
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse" id="collapseExample">
                        <div class="p-3 border rounded">
                            <div class="alert alert-primary" role="alert">
                                <strong><i class="bx bx-bell"></i> Peringatan !!!</strong>
                                <p>Jangan menginputkan ulang gambar atau thumbnail jika tidak ingin melakukan perubahan
                                    gambar.</p>
                            </div>

                            @include('academy.edit')
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    {!! $academy->description !!}
                </div>
            </div>
        </div>
    </div>
</x-layout>
