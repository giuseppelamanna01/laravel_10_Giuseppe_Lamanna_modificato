<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid text-primary">
    <a class="navbar-brand logo" href="<?php echo e(route('home')); ?>">ElettronicaLaravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
        <a class="nav-link" href="<?php echo e(route('contact.us')); ?>">Contattaci</a>
        <a class="nav-link" href="<?php echo e(route('device.insert')); ?>">Inserisci/Salva dispositivo</a>
        <a class="nav-link" href="<?php echo e(route('device.list')); ?>">Lista</a>
      </div>
    </div>
  </div>
</nav><?php /**PATH C:\Users\39340\laravel_Storage_Rules\laravel_10_Storage_Rules\resources\views/components/navbar.blade.php ENDPATH**/ ?>