<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-5 text-light">Inserisci il tuo dispositivo preferito o uno di quelli che hai in casa e non usi più da tempo</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 mt-5">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('device.submit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Nome:</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label text-light mt-4">Tipologia dispositivo:</label>
                        <input type="text" name="category" class="form-control" id="category" aria-describedby="categoryHelp" value="{{old('category')}}">
                    </div>
                    <div class="mb-3">
                        <label for="serialNumber" class="form-label text-light mt-4">Numero seriale:</label>
                        <input type="text" name="serialNumber" class="form-control" id="serialNumber" aria-describedby="serialNumberHelp" value="{{old('serialNumber')}}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label text-light mt-4">Inserisci un'immagine:</label>
                        <input type="file" name="image" class="form-control" id="image" aria-describedby="imageHelp" value="{{old('image')}}">
                    </div>
                    <button type="submit" class="btn btn-primary mt-5 mb-3">
                        Inserisci dispositivo
                    </button>
</form>
            </div>
        </div>
    </div>
</x-layout>