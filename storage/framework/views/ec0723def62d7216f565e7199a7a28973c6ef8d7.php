<?php $__env->startSection('title', 'matakuliah'); ?>
<?php $__env->startSection('pagetitle', 'Detail matakuliah'); ?>

<?php $__env->startSection('container'); ?>
<a href="/matakuliah" class="btn btn-dark mb-3"><i class="bi bi-arrow-bar-left"></i> Kembali</a>

        <!-- Row -->
    <form action="<?php echo e(route('matakuliah.update', $matakuliah->id)); ?>" method="post">
           <?php echo csrf_field(); ?>

                        <?php echo method_field('PUT'); ?>
            <div class="content"> 
               <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_matakuliah" class="form-label">nama matakuliah</label>
                        <input type="text" class="form-control" id="nama_matakuliah" value="<?php echo e($matakuliah->id); ?>"name="nama_matakuliah">
                        <?php $__errorArgs = ['nama_matakuliah'];
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
                        <label for="sks" class="form-label">sks matakuliah</label>
                        <input type="number" class="form-control" id="sks" value="<?php echo e($matakuliah->sks); ?>" name="sks">
                        <?php $__errorArgs = ['sks'];
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
                        <label for="nama" class="form-label">Nama Dosen </label>
                         <select class=" form-control block "
                            name="dosen_id" id="dosen_id" required >
                            <?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($data->id); ?>"  <?php if($data->id == $matakuliah->dosen_id): ?>selected <?php endif; ?>>
                                    <?php echo e($data->nama); ?></option>
                            
                               
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['dosen_id'];
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

<?php echo $__env->make('../layouts/mainapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\UAS-Illaldwisahputra\resources\views/matakuliah/edit.blade.php ENDPATH**/ ?>