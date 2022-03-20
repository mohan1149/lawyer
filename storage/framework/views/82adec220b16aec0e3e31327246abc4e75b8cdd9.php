<?php $__env->startSection('title',__("t.level_history")); ?>
<?php $__env->startSection('content'); ?>
    <div class="container" style="padding: 15px;margin:15px;margin-top:50px">
        <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-info">
                <div class="panel-heading" style="text-align: center;font-size:20px">
                    <h2 style="text-transform: uppercase">
                        <?php echo e(__("t.".$level->case_level)); ?>

                    </h2>
                </div>
                <div class="panel-body">
                    <div class="container">
                        <table class="table">
                            <tr>
                                <td><?php echo e(__("t.case_number")); ?></td>
                                <td><?php echo e($level->case_num); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.level_notes")); ?></td>
                                <td><?php echo e($level->level_notes); ?></td>
                            </tr>
                        </table>
                        
                    </div>
                </div>
            </div>
            <i class="glyphicon glyphicon-arrow-up" aria-hidden="true" style="display:flex;justify-content: center;padding: 5px;font-size:20px;"></i>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>