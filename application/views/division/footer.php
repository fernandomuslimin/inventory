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
	let tblDivision = $('#tblDivision').DataTable();
	getAllDivision();

	$('#btnAddDivision').click(function() {
		$('#modalAddDivision').modal('show');
		$('.modal-title').text('Add New Division');
		$('#addDivisionForm').attr('action', '<?= site_url('Division/addDivision') ?>');
	});

	$('#btnSubmitDivision').click(function(e) {
		e.preventDefault();
		let data = $('#addDivisionForm').serialize();
		let url = $('#addDivisionForm').attr('action');

		$.ajax({
			url: url,
			method: 'post',
			data: data,
			dataType: 'json',
			type: 'ajax',
			success: function(res) {
				Swal.fire({
					position: 'center',
					type: res.msg_type,
					title: res.msg_body,
					showConfirmButton: false,
					timer: 1500
				}).then((result) => {
					$('#modalAddDivision').modal('hide');
					$('#divisionName').val('');
					getAllDivision();
				});
			},
			error: function(res) {
				Swal.fire(res.msg_head, res.msg_body, res.msg_type);
			}
		});
	});

	function getAllDivision() {
		let url = '<?= site_url('Division/getAllDivision') ?>';
		let num = 1;

		$.ajax({
			url: url,
			method: 'get',
			dataType: 'json',
			type: 'ajax',
			success: function(res) {
				tblDivision.clear();
				for (let i = 0; i < res.length; i++) {
					tblDivision.row.add([
						num + i,
						res[i].division_name,
						"<button class='btn btn-info mr-2 btn-edit' data-id='" + res[i].id + "'><i class='far fa-edit'></i></button>" +
						"<button class='btn btn-danger btn-delete' data-id='" + res[i].id + "'><i class='far fa-trash-alt'></i></button>"
					]).draw();

				}
			},
			error: function(res) {
				Swal.fire(res.msg_head, res.msg_body, res.msg_type);
			}
		});
	}

	$('#tblDivision').on('click', '.btn-delete', function() {
		let id = $(this).data('id');

		Swal.fire({
			title: 'Are you sure want to delete this data?',
			text: "You won't be able to revert this!",
			type: 'question',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Delete'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					method: 'delete',
					url: '<?= site_url("Division/deleteDivision/") ?>' + id,
					type: 'ajax',
					dataType: 'json',
					success: function(res) {
						Swal.fire({
							position: 'center',
							type: res.msg_type,
							title: res.msg_body,
							showConfirmButton: false,
							timer: 1500
						}).then((result) => {
							getAllDivision();
						});
					},
					error: function(res) {
						Swal.fire(res.msg_head, res.msg_body, res.msg_type);
					}
				});
			}
		});
	});

	$('#tblDivision').on('click', '.btn-edit', function() {
		let id = $(this).data('id');
		//end point for sending retrieve division by id
		let url = '<?= site_url('Division/getDivisionById/') ?>' + id;

		// Initialization action url for edit
		$('#addDivisionForm').attr('action', '<?= site_url('Division/updateSelectedDivision/') ?>' + id);

		$('.modal-title').text('Edit Existing Division');

		$.ajax({
			url: url,
			dataType: 'json',
			method: 'get',
			type: 'ajax',
			success: function(res) {
				$('#divisionName').val(res.division_name);
				$('#modalAddDivision').modal('show');
			},
			error: function(res) {
				Swal.fire(res.msg_head, res.msg_body, res.msg_type);
			}
		});
	});
</script>
</body>

</html>
