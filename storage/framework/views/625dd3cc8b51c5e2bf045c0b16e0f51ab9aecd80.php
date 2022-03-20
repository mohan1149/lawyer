<?php $__env->startSection('title',__("t.view_notice")); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <h2><?php echo e(__('t.view_notice')); ?></h2>
                    <div class="x_content">
                        <div class="card">
                            <div class="card-body">
                                <p><?php echo e(__("t.sent_on")); ?></p>
                                <h2 class="alert alert-info"><?php echo e($record->notice_date); ?></h2>
                                <p><?php echo e(__("t.notes")); ?></p>
                                <h4><?php echo e($record->notice_notes); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>