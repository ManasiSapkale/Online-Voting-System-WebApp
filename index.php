<!DOCTYPE html>
<html lang ="en">
<head>
     <meta charset="UFT-8">
	 <meta http-equiv="X-UA-Compatible" content="IF=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>PHP Voting system</title>
	 
	 <!-- Bootstrap css link -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
	` integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark">
     <h1 class="text-info text-center p-3">Voting System</h1>
     <div class="bg-info py-4">
	    <h2 class="text-center">Login</h2>
		<div class="container text-center">
		    <form action="./actions/login.php" method="POST">
			    <div class="mb-3">
				    <input type="text" class="form-control w-50 m-auto" name="username" placeholder="enter your name" require="required"maxlength="10" minilength="10">
				</div>
				<div class="mb-3">
				    <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="enter your mobile number" require="required" maxlength="10" minilength="10">
				</div>
				<div class="mb-3">
				    <input type="password" class="form-control w-50 m-auto" name="password" placeholder="enter your password" require="required">
				</div>
				<div class="mb-3">
				    <select name="std" class="form-select w-50 m-auto">
					    <option value="group">Group</option>
						<option value="voter">Voter</option>
					</select>
				</div>	
				<button type="submit" class="btn btn-dark my-4">Login</button>
				<p>Don't have an account?<a href="./partials/Registration.php" class="text-white">Register Here</a></p>
			
			</form>
			
		</div>
	</div>

</body>
</html>