<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
    <div class="panel-body">

        <div class="panel-heading">
            Categories
        </div>
            <table class="table table-hover">
                    <thead>
                       <th>Category</th>
                
                       <th>Editing</th>
                
                       <th>Deleting</th>
                    </thead>
                
                    <tbody>
                       
                       <?php if($categories->count()>0): ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($category->name); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('category.edit', ['id'=>$category->id])); ?>" class="btn btn-xs btn-info">
                                            <span class="glypicon glyphicon-pencil"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('category.delete', ['id'=>$category->id])); ?>" class="btn btn-xs btn-danger">
                                            x
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       <?php else: ?>
                       <tr>
                            <th colspan="5" class="text-center">No Published Categories</th>
                
                        </tr>   
                       <?php endif; ?>
                    
                    </tbody>
                </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>