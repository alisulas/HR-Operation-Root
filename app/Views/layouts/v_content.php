 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb2">
                 <h1><?= $title = $title ?? "";?> </h1>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <?php
                if ($isi) {
                    echo view($isi);
                }
                ?>
         </div>
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 