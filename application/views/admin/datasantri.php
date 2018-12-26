<!DOCTYPE html>
<html>
<?php $this->load->view('_includes/header'); ?>
<body>
<?php $this->load->view('_includes/navbar'); ?>

<?php $this->load->view('_includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
              <h3 class="card-title">Data Table With Full Features</h3>
            </div>

             <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>NAMA SANTRI</th>
                  <th>TEMPAT LAHIR</th>
                  <th>TANGGAL LAHIR</th>
                  <th>ALAMAT</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                  <?php 
                $id = 1;
                foreach($santri as $row) :
                 ?>
                <tbody>
                   <tr>
                  <td><?php echo $id++; ?></td>
                  <td><?php echo $row -> nis; ?></td>
                  <td><?php echo $row -> nama_santri; ?></td>
                  <td><?php echo $row -> tempat_lahir_santri; ?></td>
                  <td><?php echo $row -> tanggal_lahir_santri; ?></td>
                  <td><?php echo $row -> alamat_santri; ?></td>
                  <td>
                    <a href="#" class="badge badge-info"><span class="glyphicon glyphicon-trash"></span>Lihat Detail</a>
                  </td>
                </tr>
                </tbody>
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
  </div>
  <!-- /.content-wrapper -->



<?php $this->load->view('_includes/footer'); ?>

  <script src="<?php echo base_url('assets/LTE/')?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/LTE/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/LTE/')?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/LTE/')?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/LTE/')?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/LTE/')?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/LTE/')?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/LTE/')?>dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

 