<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.includes.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="panel panel-default">
    <div class="class panel-heading">
        Create a new Category
    </div>

    <div class="class panel-body">
        <form action="<?php echo e(route('category.store')); ?>" method="post">

            <?php echo e(csrf_field()); ?>

           
            <div class="form-group">
                <label for="title">Category</label>
                <input type="text" name="name" class="form-control">
            </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Store category</button>
                        </div>
                    </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>