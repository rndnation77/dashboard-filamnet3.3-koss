<!--[if BLOCK]><![endif]--><?php $__currentLoopData = $getActions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!--[if BLOCK]><![endif]--><?php if($action->isVisible()): ?>
        <?php echo e($action); ?>

    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /home/ridho/Videos/projek/rumah-pelangi/resources/views/vendor/filament-forms/components/actions/action-container.blade.php ENDPATH**/ ?>