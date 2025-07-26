<?php if (isset($component)) { $__componentOriginald489e48d6214ecaf87e4b6a8ce684ad1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald489e48d6214ecaf87e4b6a8ce684ad1 = $attributes; } ?>
<?php $component = Filament\View\LegacyComponents\Widget::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Filament\View\LegacyComponents\Widget::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => ['class' => 'bg-white dark:bg-gray-900 dark:text-gray-100']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-white dark:bg-gray-900 dark:text-gray-100']); ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $cabangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cabang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 shadow-sm p-6 hover:shadow-md transition">
                    <h3 class="text-lg font-semibold text-primary-600 dark:text-primary-400 mb-4">
                        <?php echo e($cabang['nama_kost']); ?>

                    </h3>

                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-gray-800 dark:text-gray-300">Tersedia</span>
                            <span class="font-semibold text-green-600 dark:text-green-400"><?php echo e($cabang['tersedia']); ?></span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="font-bold text-gray-800 dark:text-gray-300">Terisi</span>
                            <span class="font-semibold text-red-600 dark:text-red-400"><?php echo e($cabang['terisi']); ?></span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="font-bold text-gray-800 dark:text-gray-300">Maintenance</span>
                            <span class="font-semibold text-yellow-500 dark:text-yellow-400"><?php echo e($cabang['maintenance']); ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b945b32438afb742355861768089b04)): ?>
<?php $attributes = $__attributesOriginal9b945b32438afb742355861768089b04; ?>
<?php unset($__attributesOriginal9b945b32438afb742355861768089b04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b945b32438afb742355861768089b04)): ?>
<?php $component = $__componentOriginal9b945b32438afb742355861768089b04; ?>
<?php unset($__componentOriginal9b945b32438afb742355861768089b04); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald489e48d6214ecaf87e4b6a8ce684ad1)): ?>
<?php $attributes = $__attributesOriginald489e48d6214ecaf87e4b6a8ce684ad1; ?>
<?php unset($__attributesOriginald489e48d6214ecaf87e4b6a8ce684ad1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald489e48d6214ecaf87e4b6a8ce684ad1)): ?>
<?php $component = $__componentOriginald489e48d6214ecaf87e4b6a8ce684ad1; ?>
<?php unset($__componentOriginald489e48d6214ecaf87e4b6a8ce684ad1); ?>
<?php endif; ?><?php /**PATH /home/ridho/Videos/projek/rumah-pelangi/resources/views/filament/widgets/kamar-status-per-cabang.blade.php ENDPATH**/ ?>