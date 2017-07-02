<div class="btn-group pull-right">
			  <button class="btn btn-primary"><i class="icon-user icon-white"></i> <?php echo $this->session->userdata('nama'); ?></button>
			  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo base_url(); ?>app/change_password"><i class="icon-wrench"></i> Pengaturan Akun</a></li>
				<li><a href="<?php echo base_url(); ?>manage_user"><i class="icon-tasks"></i> Manajemen User</a></li>
				<li><a href="<?php echo base_url(); ?>app/logout"><i class="icon-off"></i> Log Out</a></li>
			  </ul>
			</div>