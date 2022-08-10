<?php $__env->startSection('title', 'semester'); ?>
<?php $__env->startSection('pagetitle', 'Detail semester'); ?>

<?php $__env->startSection('container'); ?>
<a href="/semester" class="btn btn-dark mb-3"><i class="bi bi-arrow-bar-left"></i> Kembali</a>

        <!-- Row -->
    <form action="<?php echo e(route('semester.update', $semester->id)); ?>" method="post">
           <?php echo csrf_field(); ?>

                        <?php echo method_field('PUT'); ?>
            <div class="content"> 
                <div class="body"> 

                                    <div class="mb-3">
                                        <label for="semester" class="form-label">Nama semester</label>
                                        <input type="text" class="form-control" id="semester" value="<?php echo e($semester->semester); ?>"name="nama_semester">
                                        <?php $__errorArgs = ['semester'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                      
                                </div>  
                    <button type="submit" class="btn btn-primary">Edit Data</button> 
            </div>
        </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/mainapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\UAS-Illaldwisahputra\resources\views/semester/edit.blade.php ENDPATH**/ ?>