<?php $__env->startSection('title','Case Transfer'); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_content">
                    <div class="x_title">
                        <h2> <?php echo e(__("t.case")); ?></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>

                                <a class="card-header-color "
                                   href="<?php echo e(url('admin/case-running-download/'.$case_id.'/download')); ?>"
                                   title="Download case file"><i class="fa fa-download fa-2x"></i></a>
                            </li>
                            <li>
                                <a class="card-header-color "
                                   href="<?php echo e(url('admin/case-running-download/'.$case_id.'/print')); ?>"
                                   title="Print case file" target="_blank"><i class="fa fa-print fa-2x"></i></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <br>
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation"
                                class="<?php if(Request::segment(2)=='case-running'): ?>active @ else <?php endif; ?>"><a
                                    href="<?php echo e(route('case-running.show',$case_id)); ?>"><?php echo e(__("t.details")); ?></a>
                            </li>
                            <li role="presentation"
                                class="<?php if(Request::segment(2)=='case-history'): ?>active @ else <?php endif; ?>"><a
                                    href="<?php echo e(url( 'admin/case-history/'.$case_id)); ?>"><?php echo e(__("t.history")); ?></a>

                            </li>
                            <li role="presentation"
                                class="<?php if(Request::segment(2)=='case-transfer'): ?>active @ else <?php endif; ?>"><a
                                    href="<?php echo e(url('admin/case-transfer/'.$case_id)); ?>"><?php echo e(__("t.transfer")); ?></a>
                            </li>
                        </ul>

                    </div>

                    <table id="case_transfer_list" class="table row-border">
                        <thead>
                        <tr>
                            <th width="5%"><?php echo e(__("t.no")); ?></th>
                            <th width="25%"><?php echo e(__("t.registration_no")); ?></th>
                            <th width="15%"><?php echo e(__("t.transfer_date")); ?></th>
                            <th width="25%"><?php echo e(__("t.from_courtnumber_and_judge")); ?></th>
                            <th width="30%"><?php echo e(__("t.to_courtnumber_and_judge")); ?> </th>

                        </tr>
                        </thead>

                    </table>

                </div>
            </div>
        </div>


    </div>

    <div id="load-modal"></div>
    <input type="hidden" name="token-value"
           id="token-value"
           value="<?php echo e(csrf_token()); ?>">
    <input type="hidden" name="case_ids"
           id="case_ids"
           value="<?php echo e($case_id); ?>">
    <input type="hidden" name="allCaseTransferLists"
           id="allCaseTransferLists"
           value="<?php echo e(url('admin/allCaseTransferList')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/case/case-transfer-datatable.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>