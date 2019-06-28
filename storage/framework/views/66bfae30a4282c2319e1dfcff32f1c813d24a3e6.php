<?php $__env->startSection('content'); ?>

    <div class="d-flex" justify-content-end>

        <a href=" <?php echo e(route('categories.create')); ?> " class="btn btn-success mb-2">Add Category</a>

    </div>
    
    <div class="card card-default">
        
        <div class="card-header">Categories</div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($category->name); ?>

                        </td>
                        <td>
                            <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-info btn-sm">Edit</a>
                            <button class = "btn btn-danger btn-sm" onclick = "handleDelete(<?php echo e($category->id); ?>)">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">

                <form action ="" method="POST" id="deleteCategoryForm">
                    <?php echo csrf_field(); ?> 
                    <?php echo method_field('Delete'); ?>
                <div class="modal-content">
                         <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this category ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                </div>
            </div>
                </form>

             
            </div>
    </div>

    </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script>
        function handleDelete(id) {
            console.log('deleting.'.form)
            var form = document.getElementById('deleteCategoryForm')
            form.action = '/categories/' + id
            $('#deleteModal').modal('show')
        }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cms\resources\views/categories/index.blade.php ENDPATH**/ ?>