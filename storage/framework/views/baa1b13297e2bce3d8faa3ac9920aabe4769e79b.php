<?php $__env->startSection('title','Team Member'); ?>
<?php $__env->startSection('content'); ?>
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3><?php echo e(__("t.member_list")); ?></h3>
            </div>

            <div class="title_right">
                <div class="form-group pull-right top_search">
                    <a href="<?php echo e(url('admin/client_user/create')); ?>" class="btn btn-primary"><i class="fa fa-plus"></i>
                        <?php echo e(__("t.add_member")); ?>r</a>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table id="user_table" class="table">
                            <thead>
                            <tr>
                                <th width="5%"><?php echo e(__("t.no")); ?></th>
                                <th width="30%"><?php echo e(__("t.name")); ?></th>
                                <th width="30%"><?php echo e(__("t.email")); ?></th>
                                <th><?php echo e(__("t.contact_no")); ?></th>
                                <th><?php echo e(__("t.role")); ?></th>
                                <th><?php echo e(__("t.status")); ?></th>
                                <th width="5%"><?php echo e(__("t.action")); ?></th>
                            </tr>
                            </thead>


                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

    <input type="hidden" name="list"
           id="list"
           value="<?php echo e(url('admin/client-user-list')); ?>">
    <script src="<?php echo e(asset('assets/js/team_member/member-datatable.js')); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>