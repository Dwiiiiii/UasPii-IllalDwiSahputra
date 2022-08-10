<?php $__env->startSection('title', 'Mahasiswa'); ?>
<?php $__env->startSection('pagetitle', 'Detail Mahasiswa'); ?>

<?php $__env->startSection('container'); ?>
<a href="/mahasiswa" class="btn btn-dark mb-3"><i class="bi bi-arrow-bar-left"></i> Kembali</a>

        <!-- Row -->
    <form action="<?php echo e(route('mahasiswa.update', $mahasiswa->id)); ?>" method="post">
           <?php echo csrf_field(); ?>

                        <?php echo method_field('PUT'); ?>
            <div class="content"> 
                <div class="body"> 

                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Mahasiswa</label>
                                        <input type="text" class="form-control" id="nama_mahasiswa" value="<?php echo e($mahasiswa->nama_mahasiswa); ?>"name="nama_mahasiswa">
                                        <?php $__errorArgs = ['nama_mahasiswa'];
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
                                    
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat Mahasiswa</label>
                                        <textarea class="form-control" id="alamat" name="alamat" ><?php echo e($mahasiswa->alamat); ?></textarea>
                                        <?php $__errorArgs = ['alamat'];
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
                                    
                                    <div class="mb-3">
                                        <label for="no_tlp" class="form-label">no_tlp Mahasiswa</label>
                                        <input type="number" class="form-control" id="no_tlp" value="<?php echo e($mahasiswa->no_tlp); ?>"name="no_tlp">
                                        <?php $__errorArgs = ['no_tlp'];
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
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Mahasiswa</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo e($mahasiswa->email); ?>">
                                        <?php $__errorArgs = ['email'];
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

<?php echo $__env->make('../layouts/mainapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\UAS-Sistem_Informasi_EBisnis-20200121018-Rizky-Ramadhan-master\UAS-Sistem_Informasi_EBisnis-20200121018-Rizky-Ramadhan-master\resources\views/Mahasiswa/edit.blade.php ENDPATH**/ ?>