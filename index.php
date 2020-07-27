<?php 
if (isset($_POST['Send'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = 'abyssinie97@gmail.com';
	$headers = "From:".$email;
	if (mail($to, $subject, $message,$headers)) {
	 	echo "sent successfully thank you".".$name.","we will contact you soon!</h1>";
	 } 
	 else{
	 	echo "something went wrong";
	 }
}



 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="part_3">
      <form class="formContainer" action="" method="post" id="getInTouch">
        <h3 class="formHeading">Get in touch</h3>
        <input type="text" name="name" required="" value="" placeholder="Enter your name" class="nameInput input">
        <input type="email" name="email" required="" value="" placeholder="Enter your email adress" class="emailInput input">
        <input type="text" name="subject" re value="" placeholder="Enter subject" class="subjectInput input">
        <textarea form="getInTouch" name="message" placeholder="Enter message" class="messageInput input"></textarea >
        <p class="validattion"></p>
        <input type="submit" name="Send" value="Send" class="submit">

      </form>
</body>
</html>
