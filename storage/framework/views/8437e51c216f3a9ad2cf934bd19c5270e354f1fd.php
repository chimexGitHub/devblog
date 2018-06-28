<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
    <div class="panel-body">

            <div class="panel-heading">
                    Published Posts
                </div>
            <table class="table table-hover">
                    <thead>
                       <th>Image</th>
                
                       <th>Title</th>

                       <th>Edit</th>
                
                       <th>Trash</th>
                    </thead>
                
                    <tbody>
                        <?php if($posts->count()>0): ?>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                        <td><img src="<?php echo e($post->featured); ?>" alt="<?php echo e($post->title); ?>" width="90px" height="50px"></td>
                                    <td><?php echo e($post->title); ?></td>
                                    
                                    <td>
                                        <a href="<?php echo e(route('post.edit', ['id'=>$post->id])); ?>" class="btn btn-xs btn-info">
                                            <span class="glypicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('post.delete', ['id'=>$post->id])); ?>" class="btn btn-xs btn-danger">
                                            Trash
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr>
                                <th colspan="5" class="text-center">No Published Posts</th>
                    
                            </tr>

                        <?php endif; ?>
                    
                    
                    </tbody>
                </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>