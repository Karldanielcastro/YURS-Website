<?php
include_once 'db.php';
echo "Test";
if(isset($_POST['submit_1']))
{	 
print_r($_POST);

	 $email = $_POST['email'];
	 $rating= $_POST['rating'];
	 $comment = $_POST['comments'];
	 
	 $sql = "INSERT INTO feedback (email, rating, comments)
	 VALUES ('$email','$rating','$comment')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("location: ../in-5.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>



 </body>
</html>