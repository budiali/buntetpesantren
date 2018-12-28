<html>
<!-- load header link CSS -->
<?php $this->load->view('_includes/header'); ?>
<body>
<!-- Load Navbar -->
<?php $this->load->view('_includes/navbar'); ?>
<!-- Load Sidebar -->
<?php $this->load->view('_includes/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create New User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo "Hallo! ".$this -> session -> userdata('identity'); ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="col-md-6">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Select2</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- <div class="row">
              <div class="col-md-6"> -->

                 <div id="infoMessage"><?php echo $message; ?></div>

                  <?php echo form_open("auth/create_user"); ?>

                        <p>
                              <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
                              <?php echo form_input($first_name); ?>
                        </p>

                        <p>
                              <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
                              <?php echo form_input($last_name); ?>
                        </p>
                        
                        <?php
                        if ($identity_column !== 'email') {
                              echo '<p>';
                              echo lang('create_user_identity_label', 'identity');
                              echo '<br />';
                              echo form_error('identity');
                              echo form_input($identity);
                              echo '</p>';
                        }
                        ?>

                        <p>
                              <?php echo lang('create_user_company_label', 'company'); ?> <br />
                              <?php echo form_input($company); ?>
                        </p>

                        <p>
                              <?php echo lang('create_user_email_label', 'email'); ?> <br />
                              <?php echo form_input($email); ?>
                        </p>

                        <p>
                              <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
                              <?php echo form_input($phone); ?>
                        </p>

                        <p>
                              <?php echo lang('create_user_password_label', 'password'); ?> <br />
                              <?php echo form_input($password); ?>
                        </p>

                        <p>
                              <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
                              <?php echo form_input($password_confirm); ?>
                        </p>


                        <!-- <p><?php echo form_submit('submit', lang('create_user_submit_btn')); ?></p> -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-info">Save User</button>
                            <button type="reset" class="btn btn-sm btn-danger float-right">Cancel</button>
                          </div>
                          <!-- /.card-footer -->

                  <?php echo form_close(); ?> 

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   

<!-- Load footer JS,Jquery,CSS -->
<?php $this->load->view('_includes/footer'); ?>




