<?php $__env->startSection('title', 'jadwal'); ?>
<?php $__env->startSection('pagetitle', 'Detail jadwal'); ?>

<?php $__env->startSection('container'); ?>
<a href="/jadwal" class="btn btn-dark mb-3"><i class="bi bi-arrow-bar-left"></i> Kembali</a>

        <!-- Row -->
    <form action="<?php echo e(route('jadwal.update', $jadwal->id)); ?>" method="post">
           <?php echo csrf_field(); ?>

                        <?php echo method_field('PUT'); ?>
            <div class="content"> 
                <div class="body"> 

                                    <div class="mb-3">
                                        <label for="jadwal" class="form-label">Nama jadwal</label>
                                        <input type="time" class="form-control" id="jadwal" value="<?php echo e($jadwal->jadwal); ?>"name="jadwal">
                                        <?php $__errorArgs = ['jadwal'];
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
                                        <label for="matakuliah_id" class="form-label">Nama Dosen </label>
                                        <select class=" form-control block "
                                            name="matakuliah_id" id="matakuliah_id" required >
                                            <?php $__currentLoopData = $matakuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($data->id); ?>"  <?php if($data->id == $jadwal->matakuliah_id): ?>selected <?php endif; ?>>
                                                    <?php echo e($data->nama_matakuliah); ?></option> 
                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['matakuliah_id'];
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

<?php echo $__env->make('../layouts/mainapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\UAS-Illaldwisahputra\resources\views/jadwal/edit.blade.php ENDPATH**/ ?>