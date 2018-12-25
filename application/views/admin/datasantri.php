<!DOCTYPE html>
<html>
<?php $this->load->view('_includes/header'); ?>
<body>
<?php $this->load->view('_includes/navbar'); ?>

<?php $this->load->view('_includes/sidebar'); ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Santri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'dashboard'; ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">
   <div class="row">
    <div class="col-12">
     <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Santri</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                
                <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>NAMA SANTRI</th>
                  <th>TEMPAT LAHIR</th>
                  <th>TANGGAL LAHIR</th>
                  <th>ALAMAT</th>
                </tr>

                <?php 
                $no = 1;
                foreach($santri as $row) :
                 ?>
                
                <tr>
                	<td><?php echo $no++; ?></td>
                	<td><?php echo $row -> nis; ?></td>
                	<td><?php echo $row -> nama_santri; ?></td>
                	<td><?php echo $row -> tempat_lahir_santri; ?></td>
                	<td><?php echo $row -> tanggal_lahir_santri; ?></td>
                	<td><?php echo $row -> alamat_santri; ?></td>
                </tr>

       			<?php endforeach; ?>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->




<?php $this->load->view('_includes/footer'); ?>

