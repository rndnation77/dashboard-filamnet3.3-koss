<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH /home/ridho/Videos/projek/rumah-pelangi/resources/views/vendor/filament-forms/components/group.blade.php ENDPATH**/ ?>