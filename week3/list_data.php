<!doctype html>
<html>
  <head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
    <title>Submit Example</title>
  </head>
  <body>
	<main class="container">
	<?php if ($_SERVER['REQUEST_METHOD'] === 'GET'){ ?>
    	<h1>Submitted Values</h1> 
		<table class="table">
		  <caption>The Values Submitted</caption>
		  <tr>
			<th>Key</th>
			<th>Value</th>
		  </tr>
		  <!-- cycle thorugh all possible keys -->
		  <?php foreach ($_GET as $key => $value) : ?>
		  <tr>
			  <td><?php echo $key; ?></td>
			  <!-- If our value is an array then echo out each value in the array otherwise just echo out the value -->
			  <?php
			  if (is_array($value)){
					echo "<td>";
					for ($i = 0; $i < sizeof($value); $i++) {
						if (!$i == 0){
							echo ",";
						}
						echo $value[$i];
					}
					echo "</td>";
				} else {
					echo "<td>".$value."</td>";
				} ?>
		  </tr>
		  <?php endforeach; ?>
		</table>
	<?php }else{ ?>
		<div class="alert alert-danger" role="alert">
			This page can only be used for GET requests!
	  	</div>
	<?php } ?>
	</main>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>