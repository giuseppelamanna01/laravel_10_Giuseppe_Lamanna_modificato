<x-layout>
<div class="container mt-5">
  <div class="row">
    <h1 class="text-light">Dettaglio del dispositivo</h1>
    <div class="col-md-6">
      <img src="{{ Storage::url($device->image) }}" class="img-fluid rounded" alt="Immagine di dettaglio del dispositivo">
    </div>
    <div class="col-md-6">
      <h1 class="text-light">{{ $device->name }}</h1>
      <p class="text-light">Categoria: {{ $device->category }}</p>
      <p class="text-light">Serial Number: {{ $device->serialNumber }}</p>
      <a href="{{ route('device.list') }}" class="btn btn-secondary mt-3">Torna alla lista</a>
    </div>
  </div>
</div>
</x-layout>