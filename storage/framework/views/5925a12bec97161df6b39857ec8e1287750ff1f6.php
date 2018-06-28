<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.includes.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="panel panel-default">
    <div class="class panel-heading">
        Edit your profile
    </div>

    <div class="class panel-body">
        <form action="<?php echo e(route('user.profile')); ?>" method="post" enctype="multipart/form-data">

            <?php echo e(csrf_field()); ?>

           
            <div class="form-group">
                <label for="title">Username</label>
                <input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control">
            </div>

            <div class="form-group">
                    <label for="title">Email</label>
                    <input type="email" name="email" value="<?php echo e($user->email); ?>" class="form-control">
                </div>

                <div class="form-group">
                        <label for="title">New Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="title">facebook profile</label>
                            <input type="text" name="facebook" value="<?php echo e($user->profile->facebook); ?>" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="title">Youtube profile</label>
                                <input type="text" name="youtube" value="<?php echo e($user->profile->youtube); ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                    <label for="title">Upload Avatar</label>
                                    <input type="file" name="avatar" class="form-control">
                                </div>

                                <div class="form-group">
                                        <label for="title">About you</label>
                                        <textarea name="about" id="about" cols="6" rows="6" class="form-control"><?php echo e($user->profile->about); ?></textarea>
                                        
                                    </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Update profile</button>
                        </div>
                    </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>