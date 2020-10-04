<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Request Inventory</h1>
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
				<h3 class="card-title">Input Your Request To The Form Request Below</h3>
			</div>
			<div class="card-body">
				<form id="reqInventoryForm">
					<div class="form-group row">
						<label for="divisionName" class="col-sm-3 col-form-label">Division</label>
						<div class="col-sm-9">
							<input type="text" readonly class="form-control-plaintext" name="divisionName" id="divisionName" value="<?= $division_name ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="goodsList" class="col-sm-3 col-form-label">Inventory Name</label>
						<div class="col-sm-9">
							<select class="form-control select2" id="goodsList" name="goodsList">
								<option></option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="qty" class="col-sm-3 col-form-label">Quantity</label>
						<div class="col-sm-9">
							<input type="number" placeholder="Quantity" class="form-control select2" id="qty" name="qty">
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-9">
							<button id="btnSubmitRequest" class="btn btn-primary">Submit Request</button>
						</div>
					</div>
				</form>
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
<!-- Select2 -->
<script src="<?= base_url('asset/') ?>plugins/select2/js/select2.full.min.js"></script>

<script>
	let tblDivision = $('#tblDivision').DataTable();
	initGoodsName();

	async function initGoodsName() {
		var inventoryList = [];
		$.ajax({
			type: 'ajax',
			url: '<?= site_url('ReqInventory/initInventoryList') ?>',
			method: 'get',
			dataType: 'json',
			success: function(res) {
				console.log(res);
				res.forEach(element => {
					data = {
						'id': element.id,
						'text': element.goods_name
					};
					inventoryList.push(data);
				});
				$('#goodsList').select2({
					placeholder: "Choose Inventory Name",
					data: inventoryList
				});
			},
			error: function(res) {

			}
		});
	}

	$('#reqInventoryForm').submit(function(e) {
		e.preventDefault();
		let data = $('#reqInventoryForm').serialize();
		let url = '<?= site_url('ReqInventory/requestInventory') ?>';

		$.ajax({
			url: url,
			method: 'post',
			type: 'ajax',
			data: data,
			dataType: 'json',
			success: function(res) {
				Swal.fire({
					position: 'center',
					type: res.msg_type,
					title: res.msg_body,
					showConfirmButton: false,
					timer: 1000
				});
			},
			error: function(res) {
				Swal.fire(res.msg_head, res.msg_body, res.msg_type);
			}
		});
	});
</script>
</body>

</html>
