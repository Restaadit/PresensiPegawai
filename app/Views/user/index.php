     <?= $this->extend('templates/index'); ?>


     <?= $this->section('page-content'); ?>
     <!-- Begin Page Content -->
     <div class="container-fluid">

         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

         <div class="row">
             <div class="col-lg-10">


                 <div id="profil" class="card mb-3" style="max-width: 540px;">
                     <div class="row g-0">
                         <div class="col-md-4">
                             <img src="<?= base_url('/img/' . user()->user_image) ?>" alt="<?= user()->fullname; ?>" width="200px">
                         </div>
                         <div class="col-md-8">
                             <div class="card-body">
                                 <ul class="list-group list-group-flush">
                                     <li class="list-group-item">
                                         <h4>
                                             <?= user()->username; ?>
                                         </h4>

                                     </li>

                                     <?php if (user()->fullname) : ?>
                                         <li class="list-group-item"><?= user()->fullname; ?></li>
                                     <?php endif; ?>

                                     <li class="list-group-item"><?= user()->email; ?></li>
                                     <li class="list-group-item"><?= user()->alamat; ?></li>
                                     <li class="list-group-item"><?= user()->jabatan; ?></li>
                                     <li class="list-group-item"><?= user()->nip; ?></li>

                                 </ul>

                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>

     </div>
     <!-- /.container-fluid -->
     <?= $this->endSection(); ?>