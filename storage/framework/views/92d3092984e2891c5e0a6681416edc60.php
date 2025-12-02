<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Graph')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <div class="flex justify-between mb-4">
                        <p>
                            <?php echo e(__('Graph')); ?>

                        </p>

                        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.index','data' => ['onclick' => 'downloadSampleData()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'downloadSampleData()']); ?>
                            Download Sample Data
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                    </div>
                    <div class="flex justify-between mb-4">
                        <canvas id="equityChart" height="120"></canvas>
                    </div>
                    <div class="flex">
                        <p><?php echo e(__('Equity Over Graph Line Chart')); ?></p>
                    </div>
                </div>

                
                <div class="grid grid-cols-2 gap-4 p-6">
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1>Annual Return</h1><p><?php echo e($annualReturn); ?>%</p>
                    </div>
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1>Sharpe Ratio</h1><p><?php echo e($sharpeRatio); ?></p>
                    </div>
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1>Maximum Drawdown</h1><p><?php echo e($maxDrawdown); ?>%</p>
                    </div>
                    <div class="shadow-xl border p-4 rounded-lg">
                        <h1>Calmar Ratio</h1><p><?php echo e($calmarRatio); ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        function downloadSampleData() {
            window.open('<?php echo e(asset("sample_data.csv")); ?>', "_blank");
        }

        const labels = <?php echo json_encode($dates, 15, 512) ?>;
        const equityData = <?php echo json_encode($equity, 15, 512) ?>;

        new Chart(document.getElementById('equityChart'), {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Equity Curve',
                    data: equityData,
                    borderWidth: 2,
                    tension: 0.3,
                }]
            }
        });
    </script>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\chinweihong\Herd\ca_exam_question-master\resources\views/graph/index.blade.php ENDPATH**/ ?>