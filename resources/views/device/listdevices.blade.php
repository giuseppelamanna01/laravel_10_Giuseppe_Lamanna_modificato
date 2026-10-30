<x-layout>
    <div class="container">
        <h1 class="text-light">Raggruppa tutti i tuoi dispositivi elettronici in questa pagina</h1>

        <div class="row">
            @foreach($devices as $device)
                <div class="col-12 col-md-4 mt-3">
                    <div class="card">
                        <div class="card-body">
                           <a href="{{ route('device.dettaglio', $device) }}">
                                <img src="{{ Storage::url($device->image) }}" class="immagine">
                            </a>
                            <h5 class="card-title">{{ $device->name }}</h5>
                            <p class="card-text">{{ $device->category }}</p>
                            <p class="card-text">{{ $device->serialNumber }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>