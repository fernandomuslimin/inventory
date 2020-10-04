<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Division Management</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Blank Page</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Manage Division Data</h3>
			</div>
			<div class="card-body">
				<button id="btnAddDivision" class="btn btn-primary mb-3" type="button" data-toggle="modal" data-target="modalAddDivision">Add New Division</button>

				<!-- Modal Add Customer Start-->
				<div id="modalAddDivision" class="modal">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header modal-header-info">
								<h3 class="modal-title">title</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- form start -->
							<form id="addDivisionForm">
								<div class="modal-body">
									<div class="form-group row">
										<label for="divisionName" class="col-sm-4 col-form-label">Division Name</label>
										<div class="col-sm-8">
											<input name="divisionName" type="text" class="form-control" id="divisionName">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button id="btnSubmitDivision" type="submit" class="btn btn-info">Save</button>
								</div>
							</form>
							<!-- form end -->
						</div>
					</div>
				</div>
				<!-- Modal Add Customer End -->

				<table class="col table table-bordered table-striped" id="tblDivision">
					<thead>
						<tr>
							<th>No</th>
							<th>Division Name</th>
							<th>Actions</th>
						</tr>
					</thead>
				</table>
			</div>

		</div>
		<!-- /.card -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
