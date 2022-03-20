<?php $__env->startSection('title',__("t.view_execution")); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <h2><?php echo e(__('t.view_execution')); ?></h2>
                    <div class="x_content">
                        <div class="card">
                            <div class="card-body">
                                <p><?php echo e(__("t.exe_date")); ?></p>
                                <h2 class="alert alert-info"><?php echo e($record->exe_date); ?></h2>
                                <p><?php echo e(__("t.exe_notes")); ?></p>
                                <h4><?php echo e($record->exe_notes); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>