<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<div class="container mt-5">
  <div class="row">
    <h1 class="text-light">Dettaglio del dispositivo</h1>
    <div class="col-md-6">
      <img src="<?php echo e(Storage::url($device->image)); ?>" class="img-fluid rounded" alt="Immagine di dettaglio del dispositivo">
    </div>
    <div class="col-md-6">
      <h1 class="text-light"><?php echo e($device->name); ?></h1>
      <p class="text-light">Categoria: <?php echo e($device->category); ?></p>
      <p class="text-light">Serial Number: <?php echo e($device->serialNumber); ?></p>
      <a href="<?php echo e(route('device.list')); ?>" class="btn btn-secondary mt-3">Torna alla lista</a>
    </div>
  </div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\39340\laravel_Storage_Rules\laravel_10_Storage_Rules\resources\views/device/dettaglio.blade.php ENDPATH**/ ?>