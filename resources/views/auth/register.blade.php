<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h1 class="text-light">Registrati</h1>
            <div class="col-12 mt-4">
                @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Inserisci il nome:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-light">Inserisci Email:</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-light">Password:</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="conferma" class="form-label text-light">Reinserisci la password:</label>
                        <input type="password" class="form-control" name="password_confirmation" id="conferma">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Effettua registrazione</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>