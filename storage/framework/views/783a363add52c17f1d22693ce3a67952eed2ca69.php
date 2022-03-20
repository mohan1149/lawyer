<link rel="stylesheet" href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
<?php $__env->startSection('title',__("t.case_levels")); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="container-fluid">
                        <div>
                            <div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#level1" aria-controls="level1" role="tab" data-toggle="tab"><?php echo e(__("t.level1")); ?></a></li>
                                    <li role="presentation"><a href="#level2" aria-controls="level2" role="tab" data-toggle="tab"><?php echo e(__("t.level2")); ?></a></li>
                                    <li role="presentation"><a href="#level3" aria-controls="level3" role="tab" data-toggle="tab"><?php echo e(__("t.level3")); ?></a></li>
                                    <li role="presentation"><a href="#level4" aria-controls="level4" role="tab" data-toggle="tab"><?php echo e(__("t.level4")); ?></a></li>
                                    <li role="presentation"><a href="#level5" aria-controls="level5" role="tab" data-toggle="tab"><?php echo e(__("t.level5")); ?></a></li>
                                    <li role="presentation"><a href="#level6" aria-controls="level6" role="tab" data-toggle="tab"><?php echo e(__("t.level6")); ?></a></li>
                                </ul>
                                <br>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="level1">
                                        <table id="tableL1" class="table responsive responsive-table">
                                            <thead>
                                                <tr>
                                                    <th><?php echo e(__("t.case_number")); ?></th>
                                                    <th><?php echo e(__("t.priority")); ?></th>
                                                    <th><?php echo e(__("t.next_hearing")); ?></th>
                                                    <th><?php echo e(__("t.client_position")); ?></th>
                                                    <th><?php echo e(__("t.exe_status")); ?></th>
                                                    <th><?php echo e(__("t.notice_status")); ?></th>
                                                    <th><?php echo e(__("t.actions")); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $data['l1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($case->case_number); ?></td>
                                                        <td><?php echo e($case->priority); ?></td>
                                                        <td><?php echo e($case->next_date); ?></td>
                                                        <td><?php echo e($case->client_position); ?></td>
                                                        <td><?php echo e($case->exe_status == 0 ? __('t.not_done') : __('t.done')); ?></td>
                                                        <td><?php echo e($case->notice_status == 0 ? __('t.not_sent') : __('t.sent')); ?></td>
                                                        <td><a href="/admin/case/level/view/<?php echo e($case->id); ?>/1"><?php echo e(__("t.view")); ?></a></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="level2">
                                        <table id="tableL2" class="table responsive responsive-table">
                                            <thead>
                                                <tr>
                                                    <th><?php echo e(__("t.case_number")); ?></th>
                                                    <th><?php echo e(__("t.priority")); ?></th>
                                                    <th><?php echo e(__("t.next_hearing")); ?></th>
                                                    <th><?php echo e(__("t.client_position")); ?></th>
                                                    <th><?php echo e(__("t.exe_status")); ?></th>
                                                    <th><?php echo e(__("t.notice_status")); ?></th>
                                                    <th><?php echo e(__("t.actions")); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $data['l2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($case->case_number); ?></td>
                                                        <td><?php echo e($case->priority); ?></td>
                                                        <td><?php echo e($case->next_date); ?></td>
                                                        <td><?php echo e($case->client_position); ?></td>
                                                        <td><?php echo e($case->exe_status == 0 ? __('t.not_done') : __('t.done')); ?></td>
                                                        <td><?php echo e($case->notice_status == 0 ? __('t.not_sent') : __('t.sent')); ?></td>
                                                        <td><a href="/admin/case/level/view/<?php echo e($case->id); ?>/2"><?php echo e(__("t.view")); ?></a></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="level3">
                                        <table id="tableL3" class="table responsive responsive-table">
                                            <thead>
                                                <tr>
                                                    <th><?php echo e(__("t.case_number")); ?></th>
                                                    <th><?php echo e(__("t.priority")); ?></th>
                                                    <th><?php echo e(__("t.next_hearing")); ?></th>
                                                    <th><?php echo e(__("t.client_position")); ?></th>
                                                    <th><?php echo e(__("t.exe_status")); ?></th>
                                                    <th><?php echo e(__("t.notice_status")); ?></th>
                                                    <th><?php echo e(__("t.actions")); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $data['l3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($case->case_number); ?></td>
                                                        <td><?php echo e($case->priority); ?></td>
                                                        <td><?php echo e($case->next_date); ?></td>
                                                        <td><?php echo e($case->client_position); ?></td>
                                                        <td><?php echo e($case->exe_status == 0 ? __('t.not_done') : __('t.done')); ?></td>
                                                        <td><?php echo e($case->notice_status == 0 ? __('t.not_sent') : __('t.sent')); ?></td>
                                                        <td><a href="/admin/case/level/view/<?php echo e($case->id); ?>/3"><?php echo e(__("t.view")); ?></a></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="level4">
                                        <table id="tableL4" class="table responsive responsive-table">
                                            <thead>
                                                <tr>
                                                    <th><?php echo e(__("t.case_number")); ?></th>
                                                    <th><?php echo e(__("t.priority")); ?></th>
                                                    <th><?php echo e(__("t.next_hearing")); ?></th>
                                                    <th><?php echo e(__("t.client_position")); ?></th>
                                                    <th><?php echo e(__("t.exe_status")); ?></th>
                                                    <th><?php echo e(__("t.notice_status")); ?></th>
                                                    <th><?php echo e(__("t.actions")); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $data['l4']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($case->case_number); ?></td>
                                                        <td><?php echo e($case->priority); ?></td>
                                                        <td><?php echo e($case->next_date); ?></td>
                                                        <td><?php echo e($case->client_position); ?></td>
                                                        <td><?php echo e($case->exe_status == 0 ? __('t.not_done') : __('t.done')); ?></td>
                                                        <td><?php echo e($case->notice_status == 0 ? __('t.not_sent') : __('t.sent')); ?></td>
                                                        <td><a href="/admin/case/level/view/<?php echo e($case->id); ?>/4"><?php echo e(__("t.view")); ?></a></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="level5">
                                        <table id="tableL5" class="table responsive responsive-table">
                                            <thead>
                                                <tr>
                                                    <th><?php echo e(__("t.case_number")); ?></th>
                                                    <th><?php echo e(__("t.priority")); ?></th>
                                                    <th><?php echo e(__("t.next_hearing")); ?></th>
                                                    <th><?php echo e(__("t.client_position")); ?></th>
                                                    <th><?php echo e(__("t.exe_status")); ?></th>
                                                    <th><?php echo e(__("t.notice_status")); ?></th>
                                                    <th><?php echo e(__("t.actions")); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $data['l5']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($case->case_number); ?></td>
                                                        <td><?php echo e($case->priority); ?></td>
                                                        <td><?php echo e($case->next_date); ?></td>
                                                        <td><?php echo e($case->client_position); ?></td>
                                                        <td><?php echo e($case->exe_status == 0 ? __('t.not_done') : __('t.done')); ?></td>
                                                        <td><?php echo e($case->notice_status == 0 ? __('t.not_sent') : __('t.sent')); ?></td>
                                                        <td><a href="/admin/case/level/view/<?php echo e($case->id); ?>/5"><?php echo e(__("t.view")); ?></a></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="level6">
                                        <table id="tableL6" class="table responsive responsive-table">
                                            <thead>
                                                <tr>
                                                    <th><?php echo e(__("t.case_number")); ?></th>
                                                    <th><?php echo e(__("t.priority")); ?></th>
                                                    <th><?php echo e(__("t.next_hearing")); ?></th>
                                                    <th><?php echo e(__("t.client_position")); ?></th>
                                                    <th><?php echo e(__("t.exe_status")); ?></th>
                                                    <th><?php echo e(__("t.notice_status")); ?></th>
                                                    <th><?php echo e(__("t.actions")); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $data['l6']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($case->case_number); ?></td>
                                                        <td><?php echo e($case->priority); ?></td>
                                                        <td><?php echo e($case->next_date); ?></td>
                                                        <td><?php echo e($case->client_position); ?></td>
                                                        <td><?php echo e($case->exe_status == 0 ? __('t.not_done') : __('t.done')); ?></td>
                                                        <td><?php echo e($case->notice_status == 0 ? __('t.not_sent') : __('t.sent')); ?></td>
                                                        <td><a href="/admin/case/level/view/<?php echo e($case->id); ?>/6"><?php echo e(__("t.view")); ?></a></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                              </div>
                        </div>
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
        $('#tableL1').DataTable({
            columnDefs: [
                {
                    targets: 4,
                    orderable: false,
                    searchable: false,
                },
            ],
        }); 
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        let level = $(e.currentTarget).attr('aria-controls');
        let key = level[level.length-1];
        if( !$('#tableL'+key)[0].attributes.class.nodeValue.includes('dataTable')){
            $('#tableL'+key).DataTable({
                columnDefs: [
                    {
                        targets: 4,
                        orderable: false,
                        searchable: false,
                    },
                ],
            });
        }
    });
} );
</script>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>