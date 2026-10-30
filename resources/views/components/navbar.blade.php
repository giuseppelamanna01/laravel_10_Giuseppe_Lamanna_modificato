<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid text-primary">
    <a class="navbar-brand logo" href="{{route('home')}}">ElettronicaLaravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
        <a class="nav-link" href="{{route('contact.us')}}">Contattaci</a>
        <a class="nav-link" href="{{route('device.insert')}}">Inserisci/Salva dispositivo</a>
        <a class="nav-link" href="{{route('device.list')}}">Lista</a>
      </div>
    </div>
  </div>
</nav>