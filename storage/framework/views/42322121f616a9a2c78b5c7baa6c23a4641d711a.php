<div class="page-title">

    <?php if(isset($action) && isset($model_title)): ?>
        <div class="title_left">
            <h3><?php echo e($page_title); ?></h3>
        </div>
    <?php endif; ?>
    <div class="title_right">
        <div class="form-group pull-right top_search">

            <?php if($action !=""): ?>
                <a href="javascript:;"
                   data-url='<?php echo e($action); ?>'
                   data-target-modal="<?php echo e($modal_id); ?>"
                   class="btn btn-primary call-model <?php echo e(isset($permission) &&  $permission=="1" ? '':'hidden'); ?>"><i
                        class="fa fa-plus"></i>
                    <?php echo e($page_title); ?>

                </a>
            <?php endif; ?>

        </div>
    </div>
</div>






