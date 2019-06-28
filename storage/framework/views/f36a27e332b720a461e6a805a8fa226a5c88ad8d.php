<?php $__env->startSection('content'); ?>

    <div class="card card-default">
        
        <div class="card-header">
            <?php echo e(isset($category) ? 'Edit Category': 'Create Category'); ?>

        </div>

        <div class="card-body">

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="list-group">

                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item text danger">
                                <?php echo e($error); ?>

                            </li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(isset($category) ? route('categories.update', $category->id) : route('categories.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <?php if(isset($category)): ?>
                <?php echo method_field('PUT'); ?>
            <?php endif; ?>    
                <div class="form-group">

                    <label for="name">Name</label>
                    <input type="text" id="name"class="form-control" name="name" value="<?php echo e(isset($category) ? $category->name : ''); ?>">

                </div>

                <div class="form-group">
                    <button class="btn btn-success">
                        <?php echo e(isset($category) ? 'Update Category': 'Add Category'); ?>


                    </button>
                </div>

            </form>

        </div>    
    
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cms\resources\views/categories/create.blade.php ENDPATH**/ ?>