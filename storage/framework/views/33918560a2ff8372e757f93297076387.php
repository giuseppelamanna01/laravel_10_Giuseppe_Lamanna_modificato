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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-5 text-light">Inserisci il tuo dispositivo preferito o uno di quelli che hai in casa e non usi più da tempo</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 mt-5">
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <form action="<?php echo e(route('device.submit')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Nome:</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" value="<?php echo e(old('name')); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label text-light mt-4">Tipologia dispositivo:</label>
                        <input type="text" name="category" class="form-control" id="category" aria-describedby="categoryHelp" value="<?php echo e(old('category')); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="serialNumber" class="form-label text-light mt-4">Numero seriale:</label>
                        <input type="text" name="serialNumber" class="form-control" id="serialNumber" aria-describedby="serialNumberHelp" value="<?php echo e(old('serialNumber')); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label text-light mt-4">Inserisci un'immagine:</label>
                        <input type="file" name="image" class="form-control" id="image" aria-describedby="imageHelp" value="<?php echo e(old('image')); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mt-5 mb-3">
                        Inserisci dispositivo
                    </button>
</form>
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
<?php endif; ?><?php /**PATH C:\Users\39340\laravel_Storage_Rules\laravel_10_Storage_Rules\resources\views/device/insDev.blade.php ENDPATH**/ ?>