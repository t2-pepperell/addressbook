<?php if(count($errors) > 0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container">
        <div class="alert alert-danger">
            <?php echo e($error); ?>

        </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session('success')): ?>
 <div class="container">
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
 <div class="container">
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
    </div>
<?php endif; ?>