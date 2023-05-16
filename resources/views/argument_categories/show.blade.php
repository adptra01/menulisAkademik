<x-layout>
    <x-slot name="title"></x-slot>
    <div class="card text-center">
        <div class="card-header mb-4">
            <ul class="nav nav-pills card-header-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-within-card-active" role="tab">lihat</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" data-bs-toggle="tab"
                        data-bs-target="#navs-pills-within-card-link" role="tab">Edit</button>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content p-0">
                <div class="tab-pane fade show active" id="navs-pills-within-card-active" role="tabpanel">
                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Nama kategori</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $category->name }}"
                                id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">keterangan</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="3">{{ $category->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-pills-within-card-link" role="tabpanel">
                    <h4 class="card-title">Special link title</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
