<h2>Create New Investor</h2>

<?php if($errors->any()): ?>
    <div style="color:red">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="<?php echo e(route('investors.store')); ?>">
    <?php echo csrf_field(); ?>
    <label>Investor ID:</label><br>
    <input type="text" name="investor_id" required><br><br>

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit">Create Investor</button>
</form>
<?php /**PATH C:\Users\chinweihong\Herd\ca_exam_question-master\resources\views/investor/create.blade.php ENDPATH**/ ?>