<?php $__env->startSection('title', 'List semester'); ?>
<?php $__env->startSection('pagetitle', 'semester'); ?>

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


<h1 class="mb-3">List semester</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data semester
</button>

<div class="table-responsive">
    <table class="table table-striped table-hover">

        
<thead>
    <th>No</th> 
    <th>Nama semester</th>  
    <th>action</th>
</thead>
<?php ($no = 1); ?>
<?php $__currentLoopData = $semesters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $smt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($no); ?></td>  
    <td> <?php echo e($smt->semester); ?> </td>  
    <td>
         <form action="<?php echo e(route('semester.destroy', $smt->id)); ?>" method="POST"> 
             <a href="<?php echo e(route('semester.edit',  $smt->id)); ?>" class="btn btn-secondary  btn-xs"  > <i class="bi bi-pencil"></i></a> 
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
        <form action="<?php echo e(route('semester.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data semester</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="semester" class="form-label">Nama semester</label>
                        <input type="text" class="form-control" id="semester" name="semester">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </form>
    </div>
</div>



 
<?php $__env->stopSection(); ?>


 
<?php echo $__env->make('../layouts/mainapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\UAS-Sistem_Informasi_EBisnis-20200121018-Rizky-Ramadhan-master\UAS-Illaldwisahputra\resources\views/semester/index.blade.php ENDPATH**/ ?>