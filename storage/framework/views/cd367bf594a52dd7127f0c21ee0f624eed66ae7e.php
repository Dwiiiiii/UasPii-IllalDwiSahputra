<?php $__env->startSection('title', 'Mahasiswa'); ?>
<?php $__env->startSection('pagetitle', 'Detail Mahasiswa'); ?>

<?php $__env->startSection('container'); ?>
<a href="/mahasiswa" class="btn btn-dark mb-3"><i class="bi bi-arrow-bar-left"></i> Kembali</a>

        <!-- Row -->
        <div class="row gx-5">
            <!-- Column -->
            <div class="col">
                <div class="white-box">
                    <div class="user-bg"> <img width="100%" alt="<?php echo e($mahasiswa->nama_mhs); ?>"
                            src="https://source.unsplash.com/600x400?programming">
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)"><img src="https://source.unsplash.com/400x400?face"
                                        class="thumb-lg img-circle" alt="img"></a>
                                <h4 class="text-white mt-2"><?php echo e($mahasiswa->nama_mhs); ?></h4>
                                <h5 class="text-white mt-2"><?php echo e($mahasiswa->email); ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Detail Mahasiswa</h2>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nama : <?php echo e($mahasiswa->nama_mhs); ?></li>
                            <li class="list-group-item">Nim : <?php echo e($mahasiswa->nim); ?></li>
                            <li class="list-group-item">email : <?php echo e($mahasiswa->email); ?></li>
                            <li class="list-group-item">umur : <?php echo e($mahasiswa->umur); ?></li>
                            <li class="list-group-item">Alamat : <?php echo e($mahasiswa->alamat); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/mainapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\UAS-Illaldwisahputra\resources\views/Mahasiswa/show.blade.php ENDPATH**/ ?>