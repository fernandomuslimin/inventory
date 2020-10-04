<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Division Request List</h1>
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
				<h3 class="card-title">List of Division Request</h3>
			</div>
			<div class="card-body">
				<button id="btnAddInventory" class="btn btn-primary mb-3" type="button" data-toggle="modal" data-target="modalAddInventory">Add Inventory</button>

				<!-- Modal Add Inventory Start-->
				<div id="modalAddInventory" class="modal">
					<div class="container">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header modal-header-info">
									<h3 class="modal-title">title</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<!-- form start -->
								<form id="addInventoryForm">
									<div class="modal-body">
										<div class="form-group row">
											<label for="goodsName" class="col-sm-4 col-form-label">Goods Name</label>
											<div class="col-sm-8">
												<input name="goodsName" type="text" class="form-control" id="goodsName">
											</div>
										</div>
										<div class="form-group row">
											<label for="brandName" class="col-sm-4 col-form-label">Brand</label>
											<div class="col-sm-8">
												<input name="brandName" type="text" class="form-control" id="brandName">
											</div>
										</div>
										<div class="form-group row">
											<label for="goodsType" class="col-sm-4 col-form-label">Goods Type</label>
											<div class="col-sm-8">
												<input name="goodsType" type="text" class="form-control" id="goodsType">
											</div>
										</div>
										<div class="form-group row">
											<label for="quantity" class="col-sm-4 col-form-label">Quantity</label>
											<div class="col-sm-8">
												<input name="quantity" type="number" class="form-control" id="quantity">
											</div>
										</div>
										<div class="form-group row">
											<label for="unit" class="col-sm-4 col-form-label">Unit</label>
											<div class="col-sm-8">
												<input name="unit" type="text" class="form-control" id="unit">
											</div>
										</div>
										<div class="form-group row">
											<label for="price" class="col-sm-4 col-form-label">Price</label>
											<div class="col-sm-8">
												<input name="price" type="number" class="form-control" id="price">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button id="btnSubmitInventory" type="submit" class="btn btn-info">Save</button>
									</div>
								</form>
								<!-- form end -->
							</div>
						</div>
					</div>

				</div>
				<!-- Modal Add Inventory End -->

				<!-- Modal Send Inventory Start-->
				<div id="modalSendInventory" class="modal">
					<div class="container">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header modal-header-info">
									<h3 class="modal-title">Send Inventory</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<!-- form start -->
								<form id="sendInventoryForm">
									<div class="modal-body">
										<div class="form-group row">
											<label for="goodsName" class="col-sm-4 col-form-label">Goods Name</label>
											<div class="col-sm-8">
												<input name="goodsName" type="text" class="form-control" id="goodsName">
											</div>
										</div>
										<div class="form-group row">
											<label for="brandName" class="col-sm-4 col-form-label">Brand</label>
											<div class="col-sm-8">
												<input name="brandName" type="text" class="form-control" id="brandName">
											</div>
										</div>
										<div class="form-group row">
											<label for="goodsType" class="col-sm-4 col-form-label">Goods Type</label>
											<div class="col-sm-8">
												<input name="goodsType" type="text" class="form-control" id="goodsType">
											</div>
										</div>
										<div class="form-group row">
											<label for="quantity" class="col-sm-4 col-form-label">Quantity</label>
											<div class="col-sm-8">
												<input name="quantity" type="number" class="form-control" id="quantity">
											</div>
										</div>
										<div class="form-group row">
											<label for="unit" class="col-sm-4 col-form-label">Unit</label>
											<div class="col-sm-8">
												<input name="unit" type="text" class="form-control" id="unit">
											</div>
										</div>
										<div class="form-group row">
											<label for="price" class="col-sm-4 col-form-label">Price</label>
											<div class="col-sm-8">
												<input name="price" type="number" class="form-control" id="price">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button id="btnSubmitSendInventory" type="submit" class="btn btn-info">Save</button>
									</div>
								</form>
								<!-- form end -->
							</div>
						</div>
					</div>

				</div>
				<!-- Modal Send Inventory End -->
				<table class="col table table-bordered table-striped" id="tblDivisionReq">
					<thead>
						<tr>
							<th>No</th>
							<th>Division</th>
							<th>Order ID</th>
							<th>Inventory Name</th>
							<th>Goods Type</th>
							<th>Qty</th>
							<th>Unit</th>
							<th>Request Date</th>
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
<footer class="main-footer">
	<div class="float-right d-none d-sm-block">
		<b>Version</b> 3.0.2
	</div>
	<strong>Copyright &copy; 2020 <a href="">Kyrat Studio</a>.</strong> All rights
	reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('asset/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('asset/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/') ?>dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?= base_url('asset/') ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('asset/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Sweet Alert2 -->
<script src="<?= base_url('asset/') ?>plugins/sweetalert2/sweetalert2.all.js"></script>

<script>
	let tblDivisionReq = $('#tblDivisionReq').DataTable();
	// getAllInventory();

	// $('#btnAddInventory').click(function() {
	// 	$('#modalAddInventory').modal('show');
	// 	$('#addInventoryForm').attr('action', '<?= site_url('Inventory/addinventory') ?>');
	// 	$('.modal-title').text('Add New Inventory');
	// });

	// function clearFields() {
	// 	$('#goodsName').val('');
	// 	$('#brand').val('');
	// 	$('#goodstype').val('');
	// 	$('#quantity').val('');
	// 	$('#unit').val('');
	// 	$('#price').val('');
	// }

	// $('#addInventoryForm').submit(function(e) {
	// 	e.preventDefault();
	// 	let data = $('#addInventoryForm').serialize();
	// 	let url = $('#addInventoryForm').attr('action');

	// 	$.ajax({
	// 		url: url,
	// 		method: 'post',
	// 		data: data,
	// 		dataType: 'json',
	// 		type: 'ajax',
	// 		success: function(res) {
	// 			Swal.fire({
	// 				position: 'center',
	// 				type: res.msg_type,
	// 				title: res.msg_body,
	// 				showConfirmButton: false,
	// 				timer: 1500
	// 			}).then((result) => {
	// 				$('#modalAddInventory').modal('hide');
	// 				clearFields();
	// 				getAllInventory();
	// 			});
	// 		},
	// 		error: function(res) {
	// 			Swal.fire(res.msg_head, res.msg_body, res.msg_type);
	// 		}
	// 	});
	// });

	async function getAllDivisionRequest() {
		let url = '<?= site_url('Inventory/getAllInventory') ?>';
		let num = 1;

		$.ajax({
			url: url,
			method: 'get',
			dataType: 'json',
			type: 'ajax',
			success: function(res) {
				tblInventory.clear();
				for (let i = 0; i < res.length; i++) {
					tblInventory.row.add([
						num + i,
						res[i].goods_name,
						res[i].brand,
						res[i].goods_type,
						res[i].quantity,
						res[i].unit,
						res[i].price,
						res[i].created_at,
						"<button class='btn btn-info mr-2 btn-edit' data-id='" + res[i].id + "'><i class='far fa-edit'></i></button>" +
						"<button class='btn btn-danger mr-2 btn-delete' data-id='" + res[i].id + "'><i class='far fa-trash-alt'></i></button>" +
						"<button class='btn btn-success btn-send' data-id='" + res[i].id + "'><i class='fas fa-dolly-flatbed'></i></button>"
					]).draw();

				}
			},
			error: function(res) {
				Swal.fire(res.msg_head, res.msg_body, res.msg_type);
			}
		});
	}

	// $('#tblInventory').on('click', '.btn-delete', function() {
	// 	let id = $(this).data('id');

	// 	Swal.fire({
	// 		title: 'Are you sure want to delete this data?',
	// 		text: "You won't be able to revert this!",
	// 		type: 'question',
	// 		showCancelButton: true,
	// 		confirmButtonColor: '#3085d6',
	// 		cancelButtonColor: '#d33',
	// 		confirmButtonText: 'Delete'
	// 	}).then((result) => {
	// 		if (result.value) {
	// 			$.ajax({
	// 				method: 'delete',
	// 				url: '<?= site_url("Inventory/deleteInventory/") ?>' + id,
	// 				type: 'ajax',
	// 				dataType: 'json',
	// 				success: function(res) {
	// 					Swal.fire({
	// 						position: 'center',
	// 						type: res.msg_type,
	// 						title: res.msg_body,
	// 						showConfirmButton: false,
	// 						timer: 1500
	// 					}).then((result) => {
	// 						getAllInventory();
	// 					});
	// 				},
	// 				error: function(res) {
	// 					Swal.fire(res.msg_head, res.msg_body, res.msg_type);
	// 				}
	// 			});
	// 		}
	// 	});
	// });

	// $('#tblInventory').on('click', '.btn-edit', function() {
	// 	let id = $(this).data('id');
	// 	//end point for sending retrieve Inventory by id
	// 	let url = '<?= site_url('Inventory/getInventoryById/') ?>' + id;

	// 	// Initialization action url for edit
	// 	$('#addInventoryForm').attr('action', '<?= site_url('Inventory/editSelectedInventory/') ?>' + id);

	// 	$('.modal-title').text('Edit Existing Inventory');

	// 	$.ajax({
	// 		url: url,
	// 		dataType: 'json',
	// 		method: 'get',
	// 		type: 'ajax',
	// 		success: function(res) {
	// 			$('#goodsName').val(res.goods_name);
	// 			$('#brandName').val(res.brand);
	// 			$('#goodsType').val(res.goods_type);
	// 			$('#quantity').val(res.quantity);
	// 			$('#unit').val(res.unit);
	// 			$('#price').val(res.price);
	// 			$('#modalAddInventory').modal('show');
	// 		},
	// 		error: function(res) {
	// 			Swal.fire(res.msg_head, res.msg_body, res.msg_type);
	// 		}
	// 	});
	// });

	// $('#tblInventory').on('click', '.btn-send', function() {
	// 	let id = $(this).data('id');

	// 	$('#modalSendInventory').modal('show');

	// });
</script>
</script>
</body>

</html>
