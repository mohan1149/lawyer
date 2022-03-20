<?php $__env->startSection('title',__("t.judgement_history")); ?>
<?php $__env->startSection('content'); ?>
    <div class="container" style="padding: 15px;margin:15px;margin-top:50px">
        <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-info">
                <div class="panel-heading" style="text-align: center;font-size:20px">
                    <h2 style="text-transform: uppercase">
                        <?php echo e(__("t.judgement_history")); ?>

                    </h2>
                </div>
                <div class="panel-body">
                    <div class="container">
                        <table class="table">
                            <tr>
                                <td><?php echo e(__("t.case_level")); ?></td>
                                <td><?php echo e(__("t.".$item->case_level)); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.days")); ?></td>
                                <td><?php echo e($item->days); ?></td>
                            </tr>
                            
                            <tr>
                                <td><?php echo e(__("t.j_from_date")); ?></td>
                                <td><?php echo e($item->j_from_date); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.j_date")); ?></td>
                                <td><?php echo e($item->j_date); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__("t.notes")); ?></td>
                                <td><?php echo e($item->notes); ?></td>
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