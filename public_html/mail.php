<?php
  /*if(empty($_REQUEST['textfield'])){
   $msg="First name can not be left blank";
  }
  else if(empty($_REQUEST['textfield3'])){
   $msg="Last name can not be left blank";
  }
  else if(empty($_REQUEST['company'])){
   $msg="Company name can not be left blank";
  }
  else if(empty($_REQUEST['Designation'])){
   $msg="Designation name can not be left blank";
  }
  else if(empty($_REQUEST['city'])){
   $msg="City name can not be left blank";
  }
   else if(empty($_REQUEST['email1'])){
  $msg="Email can not be left blank";
  }
  else if(!eregi("^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$",$_POST['email']))
		{
			$msg="Please enter a valid email id";
		}
  else if(empty($_REQUEST['phone'])){
  $msg="Phone number can not be left blank";
  }	
   else if(!is_numeric($_REQUEST['phone'])){
  $msg="Phone number can not be left blank";
  }	
  else if(empty($_REQUEST['query'])){
  $msg="Query type can not be left blank";
  }
  else if(empty($_REQUEST['ctc'])|| $_REQUEST['ctc']=='MAX 100 WORDS'){
  $msg="Expected CTC(Per Annum) can not be left blank";
  }
  
  else{*/
  $from=$_POST['email'];
				$subject = '3D:contact information';
				$too='admin@threede.com';
				$message = '<table width="398" border="0" align="center" style="border:5px solid #003399;">
  <tr>
    <td>First Name</td>
    <td><b>'.$_REQUEST['textfield'].'</b></td>
  </tr>
   <tr>
    <td>Last Name</td>
    <td><b>'.$_REQUEST['textfield3'].'</b></td>
  </tr>
  <tr>
    <td>Company</td>
    <td><b>'.$_REQUEST['company'].'</b></td>
  </tr>
   <tr>
    <td>Designation</td>
    <td><b>'.$_REQUEST['Designation'].'</b></td>
  </tr>
   <tr>
    <td>City</td>
    <td><b>'.$_REQUEST['city'].'</b></td>
  </tr>
   <tr>
    <td>Email</td>
    <td><b>'.$_REQUEST['email'].'</b></td>
  </tr>
   <tr>
    <td>Phone</td>
    <td><b>'.$_REQUEST['phone'].'</b></td>
  </tr>
 
  <tr>
    <td>Query Type</td>
    <td><b>'.$_REQUEST['query'].'</b></td>
  </tr>
  <tr>
    <td>Expected CTC</td>
    <td><b>'.$_REQUEST['ctc'].'</b></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>';

            $headers = 'MIME-Version: 1.0' . "\r\n";
			$headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers.="FROM:".$from;
			
			
			mail($too, $subject, $message, $headers);
			
			header("location:contact.html");
			//}
?>
<table width="100%" border="0">
  <tr>
    <td align="center"><?php echo $msg;?></td>
  </tr>
  <tr>
    <td align="center"><a href="contact.html">Back</a></td>
  </tr>
</table>


