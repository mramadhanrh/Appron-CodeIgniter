<?php
if (@$form_edit) {
    $title = "Edit Profile";

    //URL jika edit data
    $url = "usrprof/do_edit/" . $id_user;
  }

?> 
<div class="content-wrapper">
	<section class="content-header">
		<h1><?php echo $title?><small>Member</small></h1>
		<ol class="breadcrumb box-title">       
			<?php if ($this->session->userdata('level') == 1) { ?>
				<a class="btn btn-primary btn-sm btn-flat" href="<?php echo base_url('usrprof') ?>">
					<i class="fa fa-arrow-left"></i> Back
				</a>
			<?php } ?>
        </ol><br/>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="box box-primary">
				<form action="<?php echo site_url($url)?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
           
                        <div class="form-group">
							<label for="nama_usr">NAME</label>
                            <input type="text" name="fullname" class="form-control" id="nama_usr" placeholder="NAMA LENGKAP" value="<?php echo @$result->fullname?>"/>
							<small><small>*) Use your real name so people can recognize you.</small></small>
						</div>
                        
                        <div class="form-group">
                            <label for="username">USERNAME</label>
                            <input type="text" name="username" class="form-control" id="username" value="<?php echo @$result->username?>" disabled/>
							<small><small>*) Username cannot be changed.</small></small>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="short_bio">BIO</label>
                            <input type="text" name="bio" class="form-control" id="short_bio" placeholder="BIO" value="<?php echo @$result->bio?>"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="tmpt_lahir">BORN</label>
                            <div class="input-group date" name="birth_date"  id="datepicker" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                                <input class="form-control" type="text" name="birth_date"  placeholder="TANGGAL LAHIR" value="<?php echo @$result->birth_date?>" required>
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </div>
                            </div>

                            <script language="javascript">
                                <!--
                                    function myChanged(v){
	                                   alert("Hello, value has been changed : "+document.getElementById("date1").value+"["+v+"]");
                                    }
                                //-->
                            </script>
						</div>

                        <div class="form-group">
                            <label for="alamat">ADDRESS</label>
                            <input type="text" name="address" class="form-control" id="alamat" placeholder="ADDRESS" value="<?php echo @$result->address?>"/>
                        </div>
						
                        <div class="form-group">
                            <label for="email">EMAIL</label>
                            <input type="text" name="email" class="form-control" id="alamat" placeholder="EMAIL ADDRESS" value="<?php echo @$result->email?>"/>
                        </div>
                        
                        <div class="form-group">
                            <?php
                              if (@$form_edit==TRUE) {
                               ?>
                              <img src="<?php echo base_url().$result->foto?> " width="120" height="130">
                              <?php } ?>
                              <input type="file" name="foto" 
                              class="form-control" id="foto">
                        </div>


					<div class="box-footer">
						<button type="submit" class="btn btn-primary btn-flat">Submit</button>
					</div>
                    </div>
				</form>
			</div>
		</div>
	</section>
</div>