<h2>Edit Investor</h2>

<?php if($errors->any()): ?>
    <div style="color:red">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="<?php echo e(route('investors.update', $investor->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <label>Investor ID:</label><br>
    <input type="text" name="investor_id" value="<?php echo e($investor->investor_id); ?>" readonly><br><br>

    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo e($investor->name); ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo e($investor->email); ?>" required><br><br>

    <button type="submit">Update Investor</button>
</form>
<?php /**PATH C:\Users\chinweihong\Herd\ca_exam_question-master\resources\views/investor/edit.blade.php ENDPATH**/ ?>