<div class="col-md-3 left_col menu_fixed">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<!-- logo info -->
			<div class="logo_pic">
				<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/SIRARM-logo-light.png') ?>" alt="..." class="img-circle logo_img"></a>
			</div>

		</div>
		<div class="profile">
			<a href="<?php echo base_url(); ?>" class="site_title"><span style="font-size: 20px;"><?php echo 'SIRARM' ?></span></a>
		</div>


		<div class="clearfix"></div>


		<!-- /menu profile quick info -->
		<br>
		<!-- Sidebar Menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3></h3>
				<ul class="nav side-menu">
					<li><a href="<?php echo base_url('example') ?>"><i class="fa fa-home"></i> Beranda </a></li>
					<?php if ($this->session->userdata('user')->role == 2 || $this->session->userdata('user')->role == 1) : ?>
						<li><a><i class="fa fa-medkit"></i> Obat <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="<?php echo base_url('example/form_med') ?>">Tambah Obat</a></li>
								<li><a href="<?php echo base_url('example/table_med') ?>">Lihat Obat</a></li>
								<li><a href="<?php echo base_url('example/table_exp') ?>">Obat Kedaluwarsa</a></li>
								<li><a href="<?php echo base_url('example/table_stock') ?>">Obat Habis</a></li>

							</ul>
						</li>
					<?php endif; ?>
					<?php if ($this->session->userdata('user')->role == 2 || $this->session->userdata('user')->role == 1) : ?>
						<li><a><i class="fa fa-hospital-o"></i> Kategori & Unit <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="<?php echo base_url('example/form_cat') ?>">Tambah Kategori</a></li>
								<li><a href="<?php echo base_url('example/table_cat') ?>">Lihat Kategori</a></li>
								<li><a href="<?php echo base_url('example/form_unit') ?>">Tambah Unit</a></li>
								<li><a href="<?php echo base_url('example/table_unit') ?>">Lihat Unit</a></li>

							</ul>
						</li>
					<?php endif; ?>

					<?php if ($this->session->userdata('user')->role == 2 || $this->session->userdata('user')->role == 1) : ?>
						<li><a><i class="fa fa-users"></i> Pemasok <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="<?php echo base_url('example/form_sup') ?>">Tambah Pemasok</a></li>
								<li><a href="<?php echo base_url('example/table_sup') ?>">Lihat Pemasok</a></li>
							</ul>
						</li>
					<?php endif; ?>


					<li><a><i class="fa fa-edit"></i> Penjualan <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_invoice') ?>">Tambah Penjualan</a></li>
							<li><a href="<?php echo base_url('example/table_invoice') ?>">Lihat Penjualan</a></li>
							<li><a href="<?php echo base_url('example/invoice_report') ?>">Grafik Penjualan</a></li>
						</ul>
					</li>

					<?php if ($this->session->userdata('user')->role == 2 || $this->session->userdata('user')->role == 1) : ?>
						<li><a><i class="fa fa-shopping-cart"></i> Pembelian <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="<?php echo base_url('example/form_purchase') ?>">Tambah Pembelian</a></li>
								<li><a href="<?php echo base_url('example/table_purchase') ?>">Lihat Pembelian</a></li>
								<li><a href="<?php echo base_url('example/purchase_report') ?>">Grafik Pembelian</a></li>
							</ul>
						</li>
					<?php endif; ?>

					<?php if ($this->session->userdata('user')->role == 2 || $this->session->userdata('user')->role == 1) : ?>
						<li><a href="<?php echo base_url('example/report') ?>"><i class="fa fa-bar-chart"></i> Laporan </a></li>
					<?php endif; ?>

					<?php if ($this->session->userdata('user')->role == 1) : ?>
						<li><a href="<?php echo base_url('user') ?>"><i class="fa fa-bar-chart"></i> User Manajemen </a></li>
						<li><a href="<?php echo base_url('role') ?>"><i class="fa fa-bar-chart"></i> Role Manajemen </a></li>
					<?php endif; ?>

					<li><a href="<?php echo site_url('auth/logout'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 4.001H5v14a2 2 0 0 0 2 2h8m1-5l3-3m0 0l-3-3m3 3H9" />
							</svg> Logout</a></li>



				</ul>
			</div>
		</div>


	</div>
</div>