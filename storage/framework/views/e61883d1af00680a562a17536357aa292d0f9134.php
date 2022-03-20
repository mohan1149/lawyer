<?php $__env->startSection('title','Add Expense'); ?>
<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('assets/css/invoice_css.css')); ?>" rel="stylesheet">

    <form class="repeater" id="add_expense" name="add_expense" role="form" method="POST"
          action="<?php echo e(route('expense.store')); ?>" autocomplete="off">

        <?php echo csrf_field(); ?>
        <div class="page-title">
            <div class="title_left">
                <h3><?php echo e(__("t.add_expense")); ?></h3>
            </div>

            <div class="title_right">
                <div class="form-group pull-right top_search">


                    <a href="<?php echo e(url('admin/expense')); ?>" class="btn btn-primary"><?php echo e(__("t.back")); ?></a>


                </div>
            </div>
        </div>
        <div class="x_panel">

            <div class="x_content">

                <section class="content invoice">

                    <div class="row"><br>
                        <div class="col-xs-12 invoice-header" align="center">
                            <h1><?php echo e(__("t.expense")); ?></h1>
                        </div>


                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="row invoice-info">
                        <div class="col-sm-4">


                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="vendor"><?php echo e(__("t.vendor")); ?> <span class="text-danger">*</span></label>
                                    <select class="form-control select2" name="vendor_id" id="vendor_id"
                                            onchange="getVendorBillingAddress(this.value);" data-rule-required="true">
                                        <option value=""><?php echo e(__("t.select_vendor")); ?></option>
                                        <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                value="<?php echo e($vendor->id); ?>"><?php if($vendor->company_name!=''): ?><?php echo e($vendor->company_name); ?><?php elseif($vendor->first_name!=''): ?><?php echo e($vendor->first_name.' '.$vendor->last_name); ?><?php else: ?>
                                                    'N/A' <?php endif; ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select><br><br>
                                    <label for="billed_from"><?php echo e(__("t.billed_from")); ?> </label><br>

                                    <div class="show_vendor_detail">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                        </div>

                        <div class="col-sm-4 form-horizontal form-label-left">


                            <div class="form-group">
                                <label class="control-label col-md-5 col-sm-3 col-xs-12"><?php echo e(__("t.bill_no")); ?>: <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <input type="text" placeholder="" class="form-control " id="inv_no" name="inv_no">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-5 col-sm-3 col-xs-12"><?php echo e(__("t.bill_date")); ?>: <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <input type="text" placeholder="" class="form-control inc_Date" id="inv_date"
                                           name="inv_date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-5 col-sm-3 col-xs-12"><?php echo e(__("t.bill_due_date")); ?>: <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <input type="text" placeholder="" class="form-control due_Date" id="due_Date"
                                           name="due_Date">
                                </div>
                            </div>


                        </div>

                    </div>
                    <br><br>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table tableInv" id="purchaseInvoice" data-repeater-list="group">
                                    <thead class="thead-inverse">
                                    <tr class="tbl_header_color dynamicRows">
                                        <th width="30%" class="text-center">
                                            <?php echo e(__("t.items")); ?>

                                            <span class="text-danger">*</span>
                                        </th>
                                        <th width="" class="text-center"><?php echo e(__("t.description")); ?>


                                        </th>
                                        <th width="10%" class="text-center">
                                            <?php echo e(__("t.qty")); ?>

                                            <span class="text-danger">*</span>
                                        </th>
                                        <th width="10%" class="text-center">
                                            <?php echo e(__("t.rate")); ?>

                                            <span class="text-danger">*</span>
                                        </th>
                                        <th class="hide with_tax" width="15%" class="text-center"><?php echo e(__("t.tax_per")); ?> (%)</th>
                                        <th class="hide with_tax" width="10%" class="text-center"><?php echo e(__("t.tax")); ?> (₹)</th>
                                        <th width="10%" class="text-center"><?php echo e(__("t.amount")); ?></th>
                                        <th width="5%" class="text-center"><?php echo e(__("t.action")); ?></th>
                                    </tr>
                                    </thead>


                                    <tbody>

                                    <tr data-repeater-item>
                                        <th width="30%" class="text-center">
                                            <select class="form-control sel categories_ids" name="categories_ids"
                                                    id="categories_ids" data-rule-required="true">
                                                <option value=""><?php echo e(__("t.select_category")); ?></option>
                                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        <th width="" class="text-center">
                                            <input type="text" class="form-control" id="description" name="description"

                                            ></th>
                                        <th width="10%" class="text-center">
                                            <input type="text" class="form-control qty" id="qty" name="qty"
                                                   data-rule-required="true" maxlength="10"
                                                   onkeypress='return isNumber(event)'
                                            >
                                        </th>
                                        <th width="10%" class="text-center">
                                            <input type="text" class="form-control rate"
                                                   onkeypress='return isFloatsNumberKey(event)' id="rate" name="rate"
                                                   data-rule-required="true" maxlength="10"
                                            >
                                        </th>

                                        <th width="10%" class="text-center">
                                            <input type="text" class="form-control amount" id="amount" name="amount"
                                                   data-rule-required="true" readonly=""
                                            ></th>
                                        <th width="5%" class="text-center">

                                            <button type="button" data-repeater-delete type="button"
                                                    class="btn btn-danger waves-effect waves-light"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i></button>

                                        </th>
                                    </tr>

                                    </tbody>

                                    <br>


                                </table>


                            </div>
                            <br>
                            <button data-repeater-create type="button" value="Add New"
                                    class="btn btn-success waves-effect waves-light btn btn-success-edit" type="button">
                                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<?php echo e(__("t.add_more")); ?>

                            </button>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div>
                                        <p class="text-danger">* Mandatory fields</p>
                                        <ul/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-7 col-md-7">
                                    <div class="contct-info">
                                        <div class="form-group">
                                            <label class="discount_text"> <?php echo e(__("t.note")); ?>

                                            </label>
                                            <textarea class="form-control" id="note" name="note" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="pull-right col-md-5">
                                    <table class="table row-border dataTable no-footer" id="tab_logic_total">
                                        <tr>
                                            <th class="text-left expence-p-top-18"><?php echo e(__("t.subtotal")); ?></th>
                                            <td class="text-center">
                                                <input type="text" name="subTotal" class="form-control subTotalinv"
                                                       id="subTotal"
                                                       readonly=""
                                                >
                                            </td>
                                        </tr>
                                    </table>

                                    <table class="table row-border dataTable no-footer" id="tab_logic_total">
                                        <tr>
                                            <th class="text-center">
                                                <select id="tax" class="tax" name="tax" class="form-control">
                                                    <option MyTax="" value=""><?php echo e(__("t.select_tax")); ?></option>
                                                    <?php $__currentLoopData = $tax; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option MyTax="<?php echo e($t->per); ?>"
                                                                value="<?php echo e($t->id); ?>"><?php echo e($t->name.' '.$t->per.'%'); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </th>
                                            <td class="text-center">
                                                <input type="text" value="" name="taxVal"
                                                       class="form-control subTotalinv"
                                                       id="taxVal" readonly=""
                                                >
                                            </td>
                                        </tr>
                                    </table>

                                    <table class="table row-border dataTable no-footer" id="tab_logic_total">

                                        <tr>
                                            <th class="text-left expence-p-top-18"><?php echo e(__("t.total")); ?></th>
                                            <td class="text-center total-width-expence ">
                                                <input type="text" name="total"

                                                       class="form-control total-width-expence-border" id="grandTotal"
                                                       readonly="">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3 text-center">
                                    <a href="<?php echo e(url('admin/invoice')); ?>" class="btn btn-danger"> <?php echo e(__("t.cancel")); ?></a>

                                    <button type="submit" name="btn_add_offer" class="btn_add_offer btn btn-success"><i
                                            class="fa fa-save" id="show_loader"></i>&nbsp;<?php echo e(__("t.save")); ?>

                                    </button>

                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12 pull-right">
                                    <div id="msgemail" class="msgemail-expence"></div>
                                </div>
                            </div>
                            <br>
                            <br>

                        </div>
                    </div>

                </section>
            </div>
        </div>


    </form>

    <input type="hidden" name="expense_create"
           id="expense_create"
           value="<?php echo e(url('admin/expense-create')); ?>">

    <input type="hidden" name="getVendorDetailById"
           id="getVendorDetailById"
           value="<?php echo e(url('admin/getVendorDetailById')); ?>">

    <input type="hidden" name="date_format_datepiker"
           id="date_format_datepiker"
           value="<?php echo e($date_format_datepiker); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/js/expense/expense-validation.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/repeter/repeatercustome.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>