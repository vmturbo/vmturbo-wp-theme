<?php 
if(isset($_POST['submit'])){
$contact_time = addslashes(trim($_POST['contact_time']));
$contact_message = addslashes(trim($_POST['contact_message']));
$contact_ae = addslashes(trim($_POST['contact_ae']));
$contact_user = addslashes(trim($_POST['contact_user']));
//send email
$to 	= 'asena.woodward@vmturbo.com, nicky.chu@vmturbo.com, '.$contact_ae.'';
$subject = '[PROJECT SNIPER] - '.$contact_user.'';
$message = '<html>
<body>
  <table width="500" >
    <tr>
      <td>Times</td><td style="text-align:right;">'.$contact_time.'</td>
    </tr>
    <tr>
      <td>Message</td><td style="text-align:right;">'.$contact_message.'</td>
    </tr>
  </table>
</body>
</html>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Asena Woodward <asena.woodward@vmturbo.com>' . "\r\n" .
    'Reply-To: Asena Woodward <asena.woodward@vmturbo.com>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
header('Location: http://vmturbo.com/autopilot/thank-you/');

}
?>