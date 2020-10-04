<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('asset/') ?>plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('asset/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('asset/') ?>dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>Inventory</b> Managment System</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Sign in to start your session</p>

				<form id="loginForm">
					<div class="input-group mb-3">
						<input id="username" name="username" type="text" class="form-control" placeholder="Username">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input id="password" name="password" type="password" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- /.col -->
						<div class="col-4">
							<button id="btnSubmitLogin" class="btn btn-primary btn-block">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?= base_url('asset/') ?>plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('asset/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('asset/') ?>dist/js/adminlte.min.js"></script>
	<!-- Sweet Alert 2 -->
	<script src="<?= base_url('asset/') ?>plugins/sweetalert2/sweetalert2.all.js"></script>

	<script>
		$('#loginForm').submit(function(e) {
			e.preventDefault();

			let url = '<?= site_url('Auth/login') ?>';
			let data = $('#loginForm').serialize();
			console.log(data);

			$.ajax({
				url: url,
				type: 'ajax',
				dataType: 'json',
				method: 'post',
				data: data,
				success: function(res) {
					if (res.status) {
						window.location = res.url;
					} else {
						Swal.fire(res.msg_head, res.msg_body, res.msg_type);
					}
				},
				error: function(res) {
					Swal.fire(res.msg_head, res.msg_body, res.msg_type);
				}
			});
		});
	</script>

</body>

</html>
