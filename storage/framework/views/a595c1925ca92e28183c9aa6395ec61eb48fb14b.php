<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('pagetitle', 'Dashboard'); ?>

<?php $__env->startSection('container'); ?>
<h1 class="mb-3">Selamat Datang <?php echo e(Auth::user()->name); ?> - Hari ini tanggal : <?php echo e(Carbon\Carbon::now()->format('Y-m-d')); ?></h1>




<?php if(Auth::user()->role=="mahasiswa"): ?>
        <?php
                $absen = App\Models\absen::where('tanggal_absen',Carbon\Carbon::now()->format('Y-m-d'))->get(); 
                $matakuliah = App\Models\matakuliah::get(); 
                $mahasiswa = App\Models\mahasiswa::where('email', Auth::user()->email)->first();   
        ?>
        <?php ($hadir = false); ?> 
        <?php $__currentLoopData = $absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $abs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <?php if(($abs->mahasiswa_id == $mahasiswa->id)): ?>
                <?php $__currentLoopData = $matakuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m => $matkuls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <?php if(($matkuls->id == $abs->matakuliah_id)): ?> 
                        <p> Status Absen Hari ini : </p>
                        <ul>
                            <li><?php echo e($matkuls->nama_matakuliah); ?> : <?php echo e($abs->keterangan); ?> </li>
                        </ul> 
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php ($hadir=true); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            

    <?php if(!$hadir): ?>
        <p>  Status Absen Hari ini : Belum Absen  </p>
    <?php endif; ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/mainapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\UAS-Illaldwisahputra\resources\views/index.blade.php ENDPATH**/ ?>