<?php $__env->startSection('title', 'List kontrakmatakuli'); ?>
<?php $__env->startSection('pagetitle', 'kontrakmatakuliah'); ?>

<?php $__env->startSection('container'); ?>




<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(session('success')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>


<?php if(session()->has('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo e(session('error')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>




<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data kontrakmatakuliah
</button>

<div class="table-responsive">
    <table class="table table-striped table-hover"> 
<thead>
    <th>No</th> 
    <th>Mahasiswa Id</th>  
    <th>Semester Id</th>  
    <th>action</th>
</thead>
<?php ($no = 1); ?>
<?php $__currentLoopData = $kontrakmatakuliahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($no); ?></td>  
    <td>   
    <b>( <?php echo e($kon->mahasiswa_id); ?> ) </b>  
      <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <?php if($data->id == $kon->mahasiswa_id): ?> 
                 <?php echo e($data->nama_mahasiswa); ?> 
         <?php endif; ?> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </td>  
    <td><b>( <?php echo e($kon->semester_id); ?> ) </b>  
      <?php $__currentLoopData = $semesters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <?php if($data->id == $kon->semester_id): ?> 
                 <?php echo e($data->semester); ?> 
         <?php endif; ?> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </td>  
    <td>
         <form action="<?php echo e(route('kontrakmatakuliah.destroy', $kon->id)); ?>" method="POST"> 
             <a href="<?php echo e(route('kontrakmatakuliah.edit',  $kon->id)); ?>" class="btn btn-secondary  btn-xs"  > <i class="bi bi-pencil"></i></a> 
              <?php echo csrf_field(); ?>
             <?php echo method_field('DELETE'); ?>
             <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger deleteconfirm"><i class="bi bi-trash"></i></button>
         </form> 
    </td>
</tr>
<?php ($no++); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?php echo e(route('kontrakmatakuliah.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data kontrakmatakuliah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Mahasiswa </label>
                         <select class=" form-control block "
                            name="mahasiswa_id" id="mahasiswa_id" required >
                            <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>" >
                                    <?php echo e($data->nama_mahasiswa); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['mahasiswa_id'];
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
                        <label for="nama" class="form-label">Semester </label>
                         <select class=" form-control block "
                            name="semester_id" id="semester_id" required >
                            <?php $__currentLoopData = $semesters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>" >
                                    <?php echo e($data->semester); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['semester_id'];
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </form>
    </div>
</div>



 
<?php $__env->stopSection(); ?>


 
<?php echo $__env->make('../layouts/mainapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\UAS-Illaldwisahputra\resources\views/kontrakmatakuliah/index.blade.php ENDPATH**/ ?>