

<?php $__env->startSection('content'); ?>
    <h2>Student List</h2>
    <a href="index.php?action=create" class="btn btn-primary mb-3">Add Student</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student['name']); ?></td>
                    <td><?php echo e($student['email']); ?></td>
                    <td><?php echo e($student['course']); ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?php echo e($student['id']); ?>" class="btn btn-edit">Edit</a>
                        
                        <a href="index.php?action=delete&id=<?php echo e($student['id']); ?>" 
                           class="btn btn-delete" 
                           onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\workshop8\app\views/students/index.blade.php ENDPATH**/ ?>