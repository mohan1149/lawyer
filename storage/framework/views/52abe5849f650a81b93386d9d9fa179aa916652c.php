<?php $__env->startSection('title','Case'); ?>

<?php $__env->startSection('content'); ?>

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?php echo e(__('t.cases')); ?></h3>
            </div>

            <div class="title_right">
                <div class="form-group pull-right top_search">
                    <?php if($adminHasPermition->can(['case_add'])): ?>
                        <a href="<?php echo e(route('case-running.create')); ?>" class="btn btn-primary"><?php echo e(__('t.add_case')); ?></a>

                    <?php endif; ?>

                </div>
            </div>
        </div>


        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <div class="row">


                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__('t.from_next_date')); ?>: <span class="text-danger"></span></label>
                                <input type="text" class="form-control dateFrom" id="date_from" readonly="">
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="fullname"><?php echo e(__('t.to_next_date')); ?>: <span class="text-danger"></span></label>
                                <input type="text" class="form-control dateTo" id="date_to" readonly="">
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">


                                <div class="case-margin-top-23"></div>
                                <a href="#" class="btn btn-danger" id="clear"><?php echo e(__('t.clear')); ?></a>
                                <button type="submit" id="search" disabled="disabled" class="btn btn-success"><i
                                        class="fa fa-search"></i> <?php echo e(__('t.search')); ?>

                                </button>
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">

                                <li role="presentation" class="<?php echo e((Request::is('admin/case-running'))?'active':''); ?> ">
                                    <a href="<?php echo e(url('admin/case-running')); ?>"><?php echo e(__('t.running_case')); ?></a>
                                </li>

                                <li role="presentation" class="<?php echo e((Request::is('admin/case-important'))?'active':''); ?> ">
                                    <a href="<?php echo e(url('admin/case-important')); ?>"><?php echo e(__('t.important_case')); ?></a>
                                </li>

                                <li role="presentation" class="<?php echo e((Request::is('admin/case-nb'))?'active':''); ?> ">
                                    <a href="<?php echo e(url('admin/case-nb')); ?>"><?php echo e(__('t.no_board_cases')); ?></a>
                                </li>
                                <li role="presentation" class="<?php echo e((Request::is('admin/case-archived'))?'active':''); ?> ">
                                    <a href="<?php echo e(url('admin/case-archived')); ?>"><?php echo e(__('t.archived_cases')); ?></a>
                                </li>

                            </ul>

                        </div>

                        <table id="case_list" class="table">
                            <thead>
                            <tr>
                                <th width="3%"><?php echo e(__('t.no')); ?></th>
                                <th width="20%"><?php echo e(__('t.client_and_case_details')); ?></th>
                                <th width="35%"><?php echo e(__('t.court_details')); ?></th>
                                <th width="20%"><?php echo e(__('t.petitioner_vs_respondent')); ?></th>
                                <th width="10%"><?php echo e(__('t.next_date')); ?></th>
                                <th width="9%"><?php echo e(__('t.status')); ?></th>
                                <th width="3%"><?php echo e(__('t.action')); ?></th>
                            </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- /page content end  -->


    <div class="modal fade" id="modal-case-priority" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="show_modal">

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-change-court" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="show_modal_transfer">

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-next-date" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="show_modal_next_date">

            </div>
        </div>
    </div>
    <input type="hidden" name="get_case_important_modal"
           id="get_case_important_modal"
           value="<?php echo e(url('admin/getCaseImportantModal')); ?>">

    <input type="hidden" name="get_case_next_modal"
           id="get_case_next_modal"
           value="<?php echo e(url('admin/getNextDateModal')); ?>">

    <input type="hidden" name="get_case_cort_modal"
           id="get_case_cort_modal"
           value="<?php echo e(url('admin/getChangeCourtModal')); ?>">

    <input type="hidden" name="case_url"
           id="case_url"
           value="<?php echo e(url('admin/allCaseList')); ?>">

    <input type="hidden" name="token-value"
           id="token-value"
           value="<?php echo e(csrf_token()); ?>">

    <input type="hidden" name="date_format_datepiker"
           id="date_format_datepiker"
           value="<?php echo e($date_format_datepiker); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/case/case-nb-datatable.js')); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>