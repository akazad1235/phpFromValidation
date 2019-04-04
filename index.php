<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>php system</title>
<style type="text/css">
	
	.phpCoding{width: 900px; margin: 0 auto; background: #ddd; padding: 20px; }
	.headerOption{width: 900px; padding: 5px; background:green; text-align: center;}
	.mainContant{height: 400px;}
	.footerSection{background: #fff; width: 900px; padding: 5px; background: green; text-align: center;}
	.width{width: 900px; background: #fff;  margin: 4px}
</style>

</head>
<body>
  <div class="phpCoding">
  	
	<section>
		<div class="headerOption">
			<h2>PHP Fundametals Training</h2>
		</div>
		</section>
	<section class="mainContant">
		<hr>
				PHP Form Validation
		<hr>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
			<table>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Website: </td>
					<td><input type="text" name="web"></td>
				</tr>
				<tr>
					<td>Comment: </td>
					<td><textarea name="comment" rows="5" cols="40"></textarea></td>
				</tr>
				<tr>
					<td>Gender: </td>
					<td><input type="radio" value="female" name="gender" > Female			
					<input type="radio" value="value" name="gender" > Male</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>


			<?php
				if ($_SERVER["REQUEST_METHOD"]=="POST") {
					$name=validate($_POST['name']);
					$email=validate($_POST['email']);
					$website=validate($_POST['web']);
					$comment=validate($_POST['comment']);
					$gender=validate($_POST['gender']);

					?>
					<h4>Output</h4>
					<?php

						echo("Your name is: ".$name)."<br>";
						echo("Your email is: ".$email)."<br>";
						echo("Your website is: ".$website."<br>");
						echo("YOur comment is: ".$comment)."<br>";
						echo("Your gender is: ".$gender)."<br>";
					}
					function validate($data){
						$data=trim($data);
						$data=stripcslashes($data);
						$data=htmlspecialchars($data);
						return $data;
					
					
				}
			?>


	</section>
		
	<section>
		<section class="footerSection">
			<div>
				<h2>www.azad.com</h2>
			</div>
		</section>
	
  </div>



</body>
</html>
