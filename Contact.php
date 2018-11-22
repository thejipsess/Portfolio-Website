<?php include 'header.php'; ?>

<?php 

$submit = "";
$msg = "nothing happend yet";
$status = "warning";

if (filter_has_var(INPUT_POST, 'submit')) 
{
	ChromePhp::log('submit');
	$name= htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['message']);

	ChromePhp::log($name);
	ChromePhp::log($email);
	ChromePhp::log($message);

	if(!empty($name) && !empty($email) && !empty($message))
	{
		
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false ) 
		{
			ChromePhp::log('email is false');
			$msg = 'The email you entered seems to be invalid';
			$submit = true;
		} else 
		{
			ChromePhp::log('email is good');
			
			ChromePhp::log($msg);

			//SETUP WHEN SERVER IS ONLINE
			//send message to personal email
			$toEmail = 'jipdekok@hotmail.com';
			$subject = 'Contact request from '.$name;
			$body = '<h1>Contact Request</h1>
			<h3>Name: </h3><p>'.$name.'</p>
			<h3>Email: </h3><p>'.$email.'</p>
			<h3>Message: </h3><p>'.$message.'</p>';
			//Email header
			$headers = "NIME-Version: 1.0" ."/r/n";
			$headers .= "Content-Type:text/html;charset=UTF-8" . "/r/n";

			//additional headers
			$headers .= "From: " .$name. "<".$email.">". "/r/n";

			if(mail($toEmail, $subject, $body, $headers))
			{
				//Email sent
				$msg = 'message was succesfully sent!';
				$satus = 'succes';

						$submit = true;
					} else {
						$msg = 'Unfortunetely there was a server error.
						feel free to contact me on my email adress: jipdekok@hotmail.com';
						$status = 'danger';
						$submit = true;

					}
				}	



			} else 
			{
				$msg = 'Please fill in all fields.';
				$status = 'warning';
				$submit = true;
				ChromePhp::log('not all fields are filled in. by means on !empty()');
				ChromePhp::log($submit);
			}
		}
		?>

		<div id="contactInfo">
			<section class="contactForm">
				<h3> Contact form</h3>

				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

					<div class="form">
						<label>Name</label>
						<br>
						<input type="text" name="name" class="formItem" value="<?php echo isset($_POST['name']) ? $name : ''?>">
					</div>
					<br>
					<div class="form">
						<label>Email</label>
						<br>
						<input type="text" name="email" class="formItem" value="<?php echo isset($_POST['email']) ? $email : ''?>">
					</div>
					<br>
					<div class="form">
						<label>Message</label>
						<br>
						<textarea name="message" class="formItem"><?php echo isset($_POST['message']) ? $message : ''?></textarea>
					</div>
					<br>
					<button type="submit" name="submit" class="btn" id="submit">Submit</button>
					<?php if($submit != ""): ?>
						<script>
							var msg = <?php echo json_encode($msg); ?>;
							var status = <?php echo json_encode($status); ?>;
							openAlertBar(msg, status);
						</script>

					<?php endif; ?>
				</form>
			</section>
			<br>
		</div>

		<aside class="sideBar" id="personalDetails">
			<ul>
				<li>
					<?php echo $lang["name"]; ?>
				</li>
				<li>
					<?php echo $lang["email"]; ?>
				</li>
				<li>
					<?php echo $lang["linkedin"]; ?>
				</li>
				<li>
					<?php echo $lang["github"]; ?>
				</li>
			</ul>
		</aside>

		<div class="clr">
		</div>

		<?php include 'footer.php'; ?>