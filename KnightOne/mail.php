<?php
if(isset($_POST['submit'])){
  $name=$_POST['q1'];
  $email=$_POST['q2'];
  $subject=$_POST['q3'];
  $msg=$_POST['q4'];

  $mailTo="spark@bennett.edu.in";
//   $subject='New Query from '.$name;
  $message=.$msg;

  mail($mailTo, $subject, $message, $headers);
}
?>
