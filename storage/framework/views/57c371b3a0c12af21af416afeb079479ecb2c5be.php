<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.includes.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="panel panel-default">
    <div class="class panel-heading">
        Edit Blog Settings
    </div>

    <div class="class panel-body">
        <form action="<?php echo e(route('settings.update')); ?>" method="post">

            <?php echo e(csrf_field()); ?>

           
            <div class="form-group">
                <label for="title">Site Name</label>
                <input type="text" name="site_name" value="<?php echo e($settings->site_name); ?>" class="form-control">
            </div>

            <div class="form-group">
                    <label for="title">Address</label>
                    <input type="text" name="address" value="<?php echo e($settings->address); ?>" class="form-control">
                </div>

                <div class="form-group">
                        <label for="title">Contact Phone</label>
                        <input type="text" name="contact_number" value="<?php echo e($settings->contact_number); ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="title">Email</label>
                        <input type="text" name="contact_email" value="<?php echo e($settings->contact_email); ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Update site settings</button>
                        </div>
                    </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>