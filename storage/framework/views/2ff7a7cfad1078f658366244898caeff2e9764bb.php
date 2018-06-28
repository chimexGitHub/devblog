<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
    <div class="panel-body">

        <div class="panel-heading">
            Tags
        </div>
            <table class="table table-hover">
                    <thead>
                       <th>Tag</th>
                
                       <th>Editing</th>
                
                       <th>Deleting</th>
                    </thead>
                
                    <tbody>
                       
                       <?php if($tags->count()>0): ?>
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($tag->tag); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('tag.edit', ['id'=>$tag->id])); ?>" class="btn btn-xs btn-info">
                                            <span class="glypicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('tag.delete', ['id'=>$tag->id])); ?>" class="btn btn-xs btn-danger">
                                            x
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       <?php else: ?>
                       <tr>
                            <th colspan="5" class="text-center">No Tags yet</th>
                
                        </tr>   
                       <?php endif; ?>
                    
                    </tbody>
                </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>