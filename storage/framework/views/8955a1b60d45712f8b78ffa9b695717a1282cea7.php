<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.includes.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="panel panel-default">
    <div class="class panel-heading">
        Edit post : <?php echo e($post->title); ?>

    </div>

    <div class="class panel-body">
        <form action="<?php echo e(route('post.update', ['id'=>$post->id])); ?>" method="post" enctype="multipart/form-data">

            <?php echo e(csrf_field()); ?>

           
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo e($post->title); ?>">
            </div>

            <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="btn btn-sm btn-default">  
                    
                </div>

                <div class="form-group">
                    <label for="category">Select a Category</label>
                   
                    <select name="category_id" id="category" class="form-control">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="class form-group">

                        <label for="tags">Select tags</label>
                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="checkbox">
                                <label><input type="checkbox" name="tags[]" value="<?php echo e($tag->id); ?>"
                                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($tag->id == $t->id): ?>
                                        checked
                                        <?php endif; ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    ><?php echo e($tag->tag); ?>

                                </label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                <div class="form-group">
                        <label for="content">Content</label>
                       <textarea name="content" id="content" cols="5" rows="5" class="form-control"><?php echo e($post->content); ?></textarea>
                    </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-info" type="submit">Update post</button>
                        </div>
                    </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>