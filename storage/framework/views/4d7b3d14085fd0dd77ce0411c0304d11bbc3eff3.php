<?php $__env->startSection('title','Vendor Create'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('component.heading' , [

        'page_title' => __("t.add_vendor"),
        'action' => route('vendor.index') ,
        'text' => 'Back'
         ]); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <form id="add_vendor" name="add_vendor" role="form" method="POST" action="<?php echo e(route('vendor.store')); ?>"
              enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <?php echo $__env->make('component.error', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="x_panel">

                    <div class="x_content">

                        <div class="row">

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="company_name"><?php echo e(__("t.company_name")); ?> <span class="text-danger"></span></label>
                                <input type="text" placeholder="" class="form-control" name="company_name"
                                       id="company_name">
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="f_name"><?php echo e(__("t.first_name")); ?> <span class="text-danger"></span></label>
                                <input type="text" placeholder="" class="form-control" id="f_name" name="f_name">
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="l_name"><?php echo e(__("t.last_name")); ?> <span class="text-danger"></span></label>
                                <input type="text" placeholder="" class="form-control" id="l_name" name="l_name">
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="email"><?php echo e(__("t.email")); ?> <span class="text-danger"></span></label>
                                <input type="email" placeholder="" class="form-control" id="email" name="email">
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="mobile"><?php echo e(__("t.mobile_no")); ?>. <span class="text-danger">*</span></label>
                                <input type="text" placeholder="" class="form-control" id="mobile" name="mobile"
                                       data-rule-required="true"
                                       data-rule-number="true"
                                       data-msg-required="Mobile no is required"
                                       data-rule-minlength="10"
                                       data-rule-maxlength="10">
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label for="alternate_no"><?php echo e(__("t.alternate_no")); ?><span class="text-danger"></span></label>
                                <input type="text" placeholder="" class="form-control" id="alternate_no"
                                       name="alternate_no"
                                       data-rule-required="false"
                                       data-rule-number="true"
                                       data-rule-minlength="10"
                                       data-rule-maxlength="10">
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label for="address"><?php echo e(__("t.address")); ?> <span class="text-danger">*</span></label>
                                <input type="text" placeholder="" class="form-control" id="address" name="address"
                                       data-rule-required="true" data-msg-required="Adress is required">
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="country"><?php echo e(__("t.country")); ?> <span class="text-danger">*</span></label>
                                <select class="form-control select-change country-select2" data-rule-required="true"
                                        data-msg-required=" Please select country selct2-width-100" name="country"
                                        id="country"
                                        data-url="<?php echo e(route('get.country')); ?>"
                                        data-clear="#city_id,#state"
                                >
                                    <option value=""><?php echo e(__("t.select_country")); ?></option>

                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="state"><?php echo e(__("t.state")); ?> <span class="text-danger">*</span></label>
                                <select id="state" name="state"

                                        data-url="<?php echo e(route('get.state')); ?>"
                                        data-target="#country"
                                        data-clear="#city_id"
                                        class="form-control state-select2 select-change" data-rule-required="true"
                                        data-msg-required=" Please select state">
                                    <option value=""><?php echo e(__("t.select_state")); ?></option>


                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="city"><?php echo e(__("t.city")); ?> <span class="text-danger">*</span></label>
                                <select id="city_id" name="city_id"
                                        data-url="<?php echo e(route('get.city')); ?>"
                                        data-target="#state"
                                        class="form-control city-select2" data-rule-required="true"
                                        data-msg-required=" Please select city">
                                    <option value=""> <?php echo e(__("t.select_city")); ?></option>


                                </select>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <label for="gst">GSTIN </label>
                                <input type="text" placeholder="" class="form-control" id="gst" name="gst">
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <label for="pan">PAN</label>
                                <input type="text" placeholder="" class="form-control" id="pan" name="pan">
                            </div>


                            <div class="form-group pull-right">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <br>
                                    <a href="<?php echo e(route('vendor.index')); ?>" class="btn btn-danger"><?php echo e(__("t.cancel")); ?></a>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-save"
                                                                                     id="show_loader"></i>&nbsp;<?php echo e(__("t.save")); ?>

                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/admin/js/selectjs.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/vendor/vendor.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>