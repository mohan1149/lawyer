<link rel="stylesheet" href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
<?php $__env->startSection('title',__("t.case_roll")); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="container-fluid">
                        <div>
                        </div>
                    </div>
                    <div class="x_content">
                        <table id="slidersTable" class="table responsive responsive-table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__("t.case_number")); ?></th>
                                    <th><?php echo e(__("t.priority")); ?></th>
                                    <th><?php echo e(__("t.client_name")); ?></th>
                                    <th><?php echo e(__("t.next_hearing")); ?></th>
                                    <th><?php echo e(__("t.client_position")); ?></th>
                                    <th><?php echo e(__("t.case_status")); ?></th>
                                    <th><?php echo e(__("t.exe_status")); ?></th>
                                    <th><?php echo e(__("t.notice_status")); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($case->case_number); ?></td>
                                        <td><?php echo e($case->priority); ?></td>
                                        <td><?php echo e($case->first_name.' '.$case->last_name); ?></td>
                                        <td><?php echo e($case->next_date); ?></td>
                                        <td><?php echo e($case->client_position); ?></td>
                                        <td><?php echo e($case->case_status_name); ?></td>
                                        <td><?php echo e($case->exe_status == 0 ? __('t.not_done') : __('t.done')); ?></td>
                                        <td><?php echo e($case->notice_status == 0 ? __('t.not_sent') : __('t.sent')); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#slidersTable').DataTable({
        columnDefs: [
            {
                targets: 4,
                orderable: false,
                searchable: false,
            },
        ],
    });
} );
</script>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>