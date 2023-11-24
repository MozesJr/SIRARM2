<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style>
		body {
			height: 100vh;
			background-color: #4CAF50;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.card {
			min-width: 500px;
		}
	</style>
</head>

<body>
	<div class="card">
		<div class="card-body">
			<h2 class="card-title text-center">Login Page</h2>
			<?php echo isset($error) ? '<div class="alert alert-danger">' . $error . '</div>' : ''; ?>
			<form method="post" action="<?php echo site_url('auth/login'); ?>" class="mt-3">
				<div class="mb-3 text-center">
					<label for="username" class="form-label">Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username" required>
				</div>
				<div class="mb-3 text-center">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" required>
				</div>
				<center>
					<button type="submit" class="btn btn-success text-center">Login</button>
				</center>
			</form>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>