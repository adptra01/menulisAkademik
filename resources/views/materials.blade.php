<x-layout>
    <x-slot name="title">Semua Materi</x-slot>
    <h5 class="fw-bold">Menulis Akademik</h5>
    <div class="row mb-5 row-cols-1 row-cols-md-3 g-4">
        @foreach ($academies as $item)
            <div class="col">
                <div class="card bg-dark text-white">
                    <img src="{{ Storage::url($item->thumbnail) }}" class="card-img" alt="..."
                        style="object-fit: cover" width="200px" height="200px">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white">Primary card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h5 class="fw-bold">Menulis Argumen</h5>
    <div class="row mb-5 row-cols-1 row-cols-md-3 g-4">
        @foreach ($arguments as $item)
            <div class="col">
                <div class="card bg-dark text-white">
                    <img src="{{ Storage::url($item->thumbnail) }}" class="card-img" alt="..."
                        style="object-fit: cover" width="200px" height="200px">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white">Primary card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
