<?php $__env->startSection('title'); ?>
    Agents
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_description'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-xxl flex-grow-1 container-p-y mt-4">
        <div class="col-12 d-lg-flex d-md-flex d-sm-flex d-block align-items-center justify-content-between">
            <div class="row filterLine">
                <?php if(session('result')): ?>
                    <?php if(session('code') == 1): ?>
                        <div class="alert alert-1 alert-primary alert-dismissible mb-3" role="alert">
                            <div class="d-flex align-items-center">
                                <i class="ti ti-circle-check"></i>
                                <?php echo e(session('result')); ?>

                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                        </div>
                    <?php else: ?>
                        <div class="alert  alert-danger alert-dismissible mb-3" role="alert">
                            <div class="d-flex align-items-center">
                                <i class="ti ti-circle-check"></i>
                                <?php echo e(session('result')); ?>

                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>


            </div>

        </div>
        <div class="row filters-line">
            <div class="col-12 form-modal d-lg-flex d-md-flex d-sm-flex d-block align-items-center justify-content-between">
                Ceci ou mettre votre design
            </div>
        </div>
        <div class="col-12 mb-4 mt-4">
        
        </div>
    </div>
    <!-- creer cta modal -->
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\Guide\crm front\resources\views/admin/agent/index.blade.php ENDPATH**/ ?>