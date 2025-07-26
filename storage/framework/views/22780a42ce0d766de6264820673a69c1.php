<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page_LaporanKeuangan')): ?>
    <?php if (isset($component)) { $__componentOriginalbe23554f7bded3778895289146189db7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe23554f7bded3778895289146189db7 = $attributes; } ?>
<?php $component = Filament\View\LegacyComponents\Page::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Filament\View\LegacyComponents\Page::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">
                📊 Laporan Bulan <?php echo e(\Carbon\Carbon::create($filterTahun, $filterBulan)->translatedFormat('F Y')); ?>

            </h2>

            <div class="flex flex-wrap gap-3">
                <?php if (isset($component)) { $__componentOriginal6330f08526bbb3ce2a0da37da512a11f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['wire:click' => 'exportExcel','color' => 'success','icon' => 'heroicon-o-document-arrow-down']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'exportExcel','color' => 'success','icon' => 'heroicon-o-document-arrow-down']); ?>
                    Export Excel
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $attributes = $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $component = $__componentOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal6330f08526bbb3ce2a0da37da512a11f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['wire:click' => 'exportPdf','color' => 'danger','icon' => 'heroicon-o-document-text']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'exportPdf','color' => 'danger','icon' => 'heroicon-o-document-text']); ?>
                    Export PDF
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $attributes = $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $component = $__componentOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal6330f08526bbb3ce2a0da37da512a11f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['color' => 'gray','icon' => 'heroicon-o-arrow-left','wire:click' => 'lihatBulanSebelumnya']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'gray','icon' => 'heroicon-o-arrow-left','wire:click' => 'lihatBulanSebelumnya']); ?>
                    Bulan Sebelumnya
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $attributes = $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $component = $__componentOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>

                <!--[if BLOCK]><![endif]--><?php if(! $this->isBulanIni()): ?>
                    <?php if (isset($component)) { $__componentOriginal6330f08526bbb3ce2a0da37da512a11f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['color' => 'primary','icon' => 'heroicon-o-arrow-right','wire:click' => 'lihatBulanBerikutnya']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'primary','icon' => 'heroicon-o-arrow-right','wire:click' => 'lihatBulanBerikutnya']); ?>
                        Bulan Berikutnya
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $attributes = $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $component = $__componentOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>

        
        <div class="space-y-6">
            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $this->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cabang => $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if (isset($component)) { $__componentOriginalee08b1367eba38734199cf7829b1d1e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee08b1367eba38734199cf7829b1d1e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.section.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('heading', null, []); ?> 
                        🏢 Cabang: <span class="font-semibold"><?php echo e($cabang); ?></span>
                     <?php $__env->endSlot(); ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4">
                        <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="text-sm text-gray-500">Pemasukan</div>
                            <div class="text-3xl font-bold text-primary-700">
                                Rp <?php echo e(number_format($info['pemasukan'], 0, ',', '.')); ?>

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

                        <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="text-sm text-gray-500">Pengeluaran</div>
                            <div class="text-3xl font-bold text-yellow-600">
                                Rp <?php echo e(number_format($info['pengeluaran'], 0, ',', '.')); ?>

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

                        <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="text-sm text-gray-500">Laba / Rugi</div>
                            <div class="text-3xl font-bold <?php echo e($info['laba_rugi'] >= 0 ? 'text-emerald-700' : 'text-rose-700'); ?>">
                                Rp <?php echo e(number_format($info['laba_rugi'], 0, ',', '.')); ?>

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

                        <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="text-sm text-gray-500">Cash</div>
                            <div class="text-3xl font-bold text-blue-700">
                                Rp <?php echo e(number_format($info['cash'] ?? 0, 0, ',', '.')); ?>

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

                        <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="text-sm text-gray-500">Transfer</div>
                            <div class="text-3xl font-bold text-indigo-700">
                                Rp <?php echo e(number_format($info['transfer'] ?? 0, 0, ',', '.')); ?>

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
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $attributes = $__attributesOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $component = $__componentOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__componentOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="text-center text-gray-500 text-lg">
                    Tidak ada data untuk bulan ini.
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 my-8">
            <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="text-sm text-gray-500">Total Pemasukan</div>
                <div class="text-2xl font-bold text-primary-700">
                    Rp <?php echo e(number_format($this->totalPemasukan, 0, ',', '.')); ?>

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

            <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="text-sm text-gray-500">Total Pengeluaran</div>
                <div class="text-2xl font-bold text-yellow-700">
                    Rp <?php echo e(number_format($this->totalPengeluaran, 0, ',', '.')); ?>

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

            <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="text-sm text-gray-500">Total Laba / Rugi</div>
                <div class="text-2xl font-bold <?php echo e($this->totalLabaRugi >= 0 ? 'text-green-700' : 'text-red-700'); ?>">
                    Rp <?php echo e(number_format($this->totalLabaRugi, 0, ',', '.')); ?>

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

            <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="text-sm text-gray-500">Total Cash</div>
                <div class="text-2xl font-bold text-blue-700">
                    Rp <?php echo e(number_format($this->totalCash ?? 0, 0, ',', '.')); ?>

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

            <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="text-sm text-gray-500">Total Transfer</div>
                <div class="text-2xl font-bold text-indigo-700">
                    Rp <?php echo e(number_format($this->totalTransfer ?? 0, 0, ',', '.')); ?>

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
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe23554f7bded3778895289146189db7)): ?>
<?php $attributes = $__attributesOriginalbe23554f7bded3778895289146189db7; ?>
<?php unset($__attributesOriginalbe23554f7bded3778895289146189db7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe23554f7bded3778895289146189db7)): ?>
<?php $component = $__componentOriginalbe23554f7bded3778895289146189db7; ?>
<?php unset($__componentOriginalbe23554f7bded3778895289146189db7); ?>
<?php endif; ?>
<?php else: ?>
    <?php if (isset($component)) { $__componentOriginalbe23554f7bded3778895289146189db7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe23554f7bded3778895289146189db7 = $attributes; } ?>
<?php $component = Filament\View\LegacyComponents\Page::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Filament\View\LegacyComponents\Page::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="text-center text-red-500 text-xl font-semibold mt-20">
            🚫 Anda tidak memiliki akses untuk melihat halaman ini.
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe23554f7bded3778895289146189db7)): ?>
<?php $attributes = $__attributesOriginalbe23554f7bded3778895289146189db7; ?>
<?php unset($__attributesOriginalbe23554f7bded3778895289146189db7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe23554f7bded3778895289146189db7)): ?>
<?php $component = $__componentOriginalbe23554f7bded3778895289146189db7; ?>
<?php unset($__componentOriginalbe23554f7bded3778895289146189db7); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/ridho/Videos/projek/rumah-pelangi/resources/views/filament/pages/laporan-keuangan.blade.php ENDPATH**/ ?>