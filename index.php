<?php include 'class.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculation using OOP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row justify-content-center my-5">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">PHP OOP Calculator</h4>
					</div>
					<div class="card-body">
						<form action="" method="POST">
							<div class="mb-3">
								<input type="number" name="num1" class="form-control" placeholder="Input First Number" required>
							</div>

							<div class="mb-3">
								<select name="sign" class="form-select">
									<option value="add">+</option>
									<option value="sub">-</option>
									<option value="multi">*</option>
									<option value="div">/</option>
								</select>
							</div>

							<div class="mb-3">
								<input type="number" name="num2" class="form-control" placeholder="Input Last Number" required>
							</div>

							<div class="mb-3 d-grid">
								<input type="submit" name="submit" class="btn btn-success" value="Calculate">
							</div>
						</form>
					</div>
				</div>

				<?php 

				if (isset($_POST['submit'])) {
					$num1 = $_POST['num1'];
					$sign = $_POST['sign'];
					$num2 = $_POST['num2'];


					$data = new Calc($num1, $sign, $num2);
				    echo $data->calculation();
				}


				?>

			</div>
		</div>
	</div>
	
</body>
</html>