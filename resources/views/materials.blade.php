<x-layout>
    <x-slot name="title">Semua Maateri</x-slot>
    <div class="row">
        @foreach ($academies as $item)
            <div class="col-md">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="card-img card-img-left border border-5 border-white rounded"
                                src="{{ Storage::url($item->thumbnail) }}" alt="Card image" width="50px" height="100px"
                                style="object-fit: cover;" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                                <small>Menulis Akademik</small>
                                <p class="card-text"><small
                                        class="text-muted">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
