<x-layout>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center text-light mb-4">Accedi</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-light">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-light">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Effettua login</button>
                <p class="mt-3 text-center text-light">Non hai un account? <a href="{{ route('register') }}">Registrati</a></p>
            </form>
        </div>
    </div>
</div>
</x-layout>