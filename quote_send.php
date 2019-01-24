
<?php
include('includes/header.php');
?>
<img src="images/banner1.jpg" class="img-responsive">
<?php
$to = "bikalpasharma7@gmail.com,info@aroundlaairportshuttle.com,kessi17sabin@gmail.com";
$subject = "New Contact Information From | Breathe Easy HVAC Co.";
$headers = "From: " . strip_tags($_POST['name'])." <".strip_tags($_POST['email'])."> \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

?>

<?php


ob_start();
?>

<?php 
if(empty($_POST['name']))
  { $mmm = "please write your  name "; }
elseif(empty($_POST['email']))
  { $mmm = "please write your email "; }
elseif(empty($_POST['phone']))
  { $mmm = "please write your Phone "; }
elseif(empty($_POST['quote']))
  { $mmm = "please write your Phone "; }
elseif(empty($_POST['location']))
  { $mmm = "please write your Phone "; }
else
{
  ?>
  <p> <b> Contact  Information From  Breathe Easy HVAC Co. </b><br /></p>
  <table id="tableDiv" rules="all" style="border:2px solid  #000; font-size:16px;" cellpadding="10" width="100%">
    <tr>
     <td><b> Name:</b> </td>
     <td> <?=strip_tags($_POST['name'])?><br /></td>
   </tr>
   <tr>
    <td> <b>Email:</b></td>
    <td> <?=strip_tags($_POST['email'])?><br /></td>
  </tr>
  <tr>
    <td> <b>Phone:</b></td>
    <td><?=strip_tags($_POST['phone'])?><br /></td>
  </tr>
 
  <tr>
    <td> <b>Date:</b></td>
    <td><?=strip_tags($_POST['date'])?><br /></td>
  </tr>

    <tr>
    <td> <b>Time:</b></td>
    <td><?=strip_tags($_POST['time'])?><br /></td>
  </tr>

      <tr>
    <td> <b>Quote For:</b></td>
    <td><?=strip_tags($_POST['quote'])?><br /></td>
  </tr>

      <tr>
    <td> <b>Location:</b></td>
    <td><?=strip_tags($_POST['location'])?><br /></td>
  </tr>

  <tr>
    <td> <b>Message:</b></td>
    <td><?=strip_tags($_POST['message'])?><br /></td>
  </tr>
</p>
</table>

<?php 

$message = ob_get_clean();
if(!@mail($to, $subject, $message, $headers))
  $mmm = "Sorry! sending Message failed. Try again.";

else 
  $mmm = " Message sent successfully, we will contact you soon, thank you. | Breathe Easy HVAC Co.";

?>

<?php }
?>

<br>

<div class="container-fluid" style="background: #fff;">
  <h3 style="padding: 20px; color: #000; background: #fff; text-align: center;">
    <b>
      <?php
      echo "$mmm"; 
      ?>
    </b>
  </h3>
</div>

<?php
include('includes/footer.php');
?>