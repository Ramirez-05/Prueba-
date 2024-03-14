<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<style>
	body {
		display: flex !important;
		justify-content: center !important;
		align-items: center !important;
		height: 100vh !important;
		margin: 0 !important;
	}



	.form-container {
		width: 320px !important;
		border-radius: 0.75rem !important;
		background-color: rgba(17, 24, 39, 1) !important;
		padding: 2rem !important;
		color: rgba(243, 244, 246, 1) !important;
	}

	.title {
		text-align: center !important;
		font-size: 1.5rem !important;
		line-height: 2rem !important;
		font-weight: 700 !important;
	}

	.form {
		margin-top: 1.5rem !important;
	}

	.input-group {
		margin-top: 0.25rem !important;
		font-size: 0.875rem !important;
		line-height: 1.25rem !important;
	}

	.input-group label {
		display: block !important;
		color: rgba(156, 163, 175, 1) !important;
		margin-bottom: 4px !important;
	}

	.input-group input {
		width: 90% !important;
		border-radius: 0.375rem !important;
		border: 1px solid rgba(55, 65, 81, 1) !important;
		outline: 0 !important;
		background-color: rgba(17, 24, 39, 1) !important;
		padding: 0.75rem 1rem !important;
		color: rgba(243, 244, 246, 1) !important;
	}

	.input-group input:focus {
		border-color: rgba(167, 139, 250) !important;
	}

	.forgot {
		display: flex !important;
		justify-content: flex-end !important;
		font-size: 0.75rem !important;
		line-height: 1rem !important;
		color: rgba(156, 163, 175, 1) !important;
		margin: 8px 0 14px 0 !important;
	}

	.forgot a,
	.signup a {
		color: rgba(243, 244, 246, 1) !important;
		text-decoration: none !important;
		font-size: 14px !important;
	}

	.forgot a:hover,
	.signup a:hover {
		text-decoration: underline rgba(167, 139, 250, 1) !important;
	}

	.sign {
		display: block !important;
		width: 100% !important;
		background-color: rgba(167, 139, 250, 1) !important;
		padding: 0.75rem !important;
		text-align: center !important;
		color: rgba(17, 24, 39, 1) !important;
		border: none !important;
		border-radius: 0.375rem !important;
		font-weight: 600 !important;
		margin: 1em 0 !important;
		cursor: pointer !important;
	}

	.social-message {
		display: flex !important;
		align-items: center !important;
		padding-top: 1rem !important;
	}

	.line {
		height: 1px !important;
		flex: 1 1 0% !important;
		background-color: rgba(55, 65, 81, 1) !important;
	}

	.social-message .message {
		padding-left: 0.75rem !important;
		padding-right: 0.75rem !important;
		font-size: 0.875rem !important;
		line-height: 1.25rem !important;
		color: rgba(156, 163, 175, 1) !important;
	}

	.social-icons {
		display: flex !important;
		justify-content: center !important;
	}

	.social-icons .icon {
		border-radius: 0.125rem !important;
		padding: 0.75rem !important;
		border: none !important;
		background-color: transparent !important;
		margin-left: 8px !important;
	}

	.social-icons .icon svg {
		height: 1.25rem !important;
		width: 1.25rem !important;
		fill: #fff !important;
	}

	.signup {
		text-align: center !important;
		font-size: 0.75rem !important;
		line-height: 1rem !important;
		color: rgba(156, 163, 175, 1) !important;
	}

</style>

<body class="">
	<div class="form-container">
		<p class="title">RESET</p>
		<?php echo form_open(''); ?>
		<form class="form ">
			<div class="input-group">
				<label for="correo" class="fw-bold text-light">Correo</label>
				<?php
                $data = [
                'name' => 'correo',
                'id' => 'correo',
                'value' => set_value('correo'),
                'class' => 'form-control',
                'placeholder' => '',
                ];
                echo form_input($data);
                ?>
			</div>

			<div class="input-group">
				<label for="password">Contraseña Actual</label>
				<?php
                    $data = [
                    'name' => 'password',
                    'id' => 'password',
                    'class' => 'form-control',
                    'type' => 'password',
                    'placeholder' => '',
                    ];
                    echo form_password($data);
                ?>
			</div>

            <div class="input-group">
				<label for="password">Contraseña Nueva</label>
				<?php
                    $data = [
                    'name' => 'password_nueva',
                    'id' => 'password_nueva',
                    'class' => 'form-control',
                    'type' => 'password_nueva',
                    'placeholder' => '',
                    ];
                    echo form_password($data);
                ?>
			</div>

			<?php echo form_submit('mysubmit', 'Cambiar Contraseña', 'class=sign'); ?>
		</form>
		<?php echo form_close(); ?>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
	</script>
</body>

</html>
