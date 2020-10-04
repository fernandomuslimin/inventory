<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="../../index3.html" class="brand-link">
		<img src="<?= base_url('asset/') ?>dist/img/inventory.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Inventory MS</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<!-- <div class="row">
				<div class="image">
					<img src="<?= base_url('asset/') ?>dist/img/user.webp" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<a href="#" class="d-block"><?= $name ?></a>
				</div>
				<li class="nav-item mt-2">
					<a class="info" href="#" class="d-block"><?= $division_name ?></a>
				</li>
			</div> -->
			<div class="media">
				<img src="<?= base_url('asset/') ?>dist/img/user.webp" class="align-self-start mr-1" alt="...">
				<div class="media-body info">
					<p class="nav-item mt-0" style="color:#c2c7d0"><?= $name ?></p>
					<p class="nav-item mt-0" style="color:#c2c7d0"><?= $division_name ?></p>
				</div>
			</div>


		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
			   with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= site_url('PageSwitch/inventoryPage') ?>" class="nav-link">
						<i class="nav-icon fas fa-warehouse"></i>
						<p>Inventory Management</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('PageSwitch/divisionPage') ?>" class="nav-link">
						<i class="nav-icon fas fa-sitemap"></i>
						<p>Division Management</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('PageSwitch/reqInventoryPage') ?>" class="nav-link">
						<i class="nav-icon fas fa-dolly-flatbed"></i>
						<p>Request Inventory</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('PageSwitch/divisionReqPage') ?>" class="nav-link">
						<i class="nav-icon fas fa-dolly-flatbed"></i>
						<p>Request List</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
