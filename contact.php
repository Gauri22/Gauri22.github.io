<?php 
// variable setting
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$feedback = $_REQUEST['feedback'];

//check input fields
if (empty($fname) || empty($lname) || empty($email) || empty($feedback)) 
{
    echo "Please fill all the fields";
}
else 
{
    mail("gauriitankar00@gmail.com", "glyder message", $feedback, "From: $fname,$lname <$email>");
    echo "<script type='text/javascript'>alert('your message sent succesfully');
    window.history.log(-1);
    </script>";
}
?>