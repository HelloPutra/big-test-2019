<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>TEST &mdash; PT. BIG</title>
	<link rel="icon" href="<?= base_url('images/logo.png') ?>" sizes="32x32">
	<!-- inject:css -->
  	<link rel="stylesheet" href="<?= base_url('assets/vendors/fomantic-ui/semantic.min.css') ?>">
</head>
<body style="background-color: #EEEEEE">
	<div class="ui centered grid">
		<div class="four wide computer column" style="margin-top: 10%;">
			<form action="<?= base_url('auth/do_login');  ?>" method="post">
				<div class="ui segment">
					<div class="ui form">
				        <div class="field">
				            <label>USERNAME</label>
				            <input name="username" placeholder="USERNAME" type="text">
				        </div>
				        <div class="field">
				            <label>PASSWOD</label>
				            <input name="password" placeholder="PASSWORD" type="password">
				        </div>
				        <div class="field">
				            <label>JENIS PENGGUNA</label>
				            <select name="role" id="role" class="ui fluid dropdown">
				            	<option value="">PILIH JENIS PENGGUNA</option>
					            <option value="admin">ADMIN</option>
					            <option value="surveyor">SURVEYOR</option>
					            <option value="pengunjung">PENGUNJUNG</option>
				            </select>				            
				        </div>
				    </div>	
				    <br>
				    <button style="width: 100%;" class="ui primary button">
			            <i class="ion-log-in icon"></i>
			            LOGIN
			        </button>
				</div>
			</form>
		</div>
	</div>
</body>
<script src="<?= base_url('assets/vendors/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendors/fomantic-ui/semantic.min.js'); ?>"></script>
</html>
<script>
	$('.ui.fluid.dropdown')
	  .dropdown()
	;
</script>


