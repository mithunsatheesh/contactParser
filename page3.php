<?PHP
include ("includes/connect.php");
include ("includes/functions.php");
$flag=0;
if(isset($_POST['contact_uploader']))
{
	$flag=1;
  $filename=$_FILES['fileContacts']['tmp_name'];
  $fileuploaded=$_FILES['fileContacts']['name'];
  
  if(preg_match('/\.vcf$/i' ,$fileuploaded))
  {
  
  	$display = vcf_to_array($filename);
     
  }
  elseif(preg_match('/\.csv$/i' ,$fileuploaded))
  {
	  
	  $content = file_get_contents($filename);
	  $display = csv_to_array($content);
  
  }elseif(preg_match('/\.txt$/i' ,$fileuploaded))
  {
	  
	  $content = file_get_contents($filename);
	  $display = csv_to_array($content,"	");
  
  }
  else
  {
	echo "<script language='javascript'>window.location='page2.php?error=".urlencode("please enter a valid contact file")."';</script>";   
  }
   
}
else if(isset($_POST['bulk_del']))
{
	$msg_type="fail";
	if(isset($_POST['chkdelete']))
	{
		foreach($_POST['chkdelete'] as $id)
		{
		if(mysql_query("DELETE FROM ".$_POST['denoter']." WHERE id='".$id."'"))
		$msg="deleted";
		}
	}
}
else if(isset($_POST['btnInvite']))
{
	$msg_type="fail";
	if($_POST['invite_message'])
	{
	if(isset($_POST['sendtothis']))
	{
		foreach($_POST['sendtothis'] as $id)
		{
		if(sendmail($id,$id,INVITE_MAIL_TITLE,$_POST['invite_message']))
		$msg="invited";
		}
	}
	}
}

if($flag)
{
	$get_tmp_contacts=mysql_query("SELECT * FROM contact");	
	
	if(mysql_num_rows($get_tmp_contacts))
	{
		while($fetch_tmp_contacts=mysql_fetch_array($get_tmp_contacts))
		{
		
			if(mysql_num_rows(mysql_query("SELECT * FROM permenent WHERE mail1='".$fetch_tmp_contacts['mail1']."'")))
			{
				continue;
			}
			
			mysql_query("INSERT INTO permenent (firstname,midname,name,title,company,mail1,mail2,mail3,phone1,phone2,phone3,address,wbpage,birthday,otherinfo,contactnotes,im) VALUES('".$fetch_tmp_contacts['firstname']."','".$fetch_tmp_contacts['midname']."','".$fetch_tmp_contacts['name']."','".$fetch_tmp_contacts['title']."','".$fetch_tmp_contacts['company']."','".$fetch_tmp_contacts['mail1']."','".$fetch_tmp_contacts['mail2']."','".$fetch_tmp_contacts['mail3']."','".$fetch_tmp_contacts['phone1']."','".$fetch_tmp_contacts['phone2']."','".$fetch_tmp_contacts['phone3']."','".$fetch_tmp_contacts['address']."','".$fetch_tmp_contacts['wbpage']."','".$fetch_tmp_contacts['birthday']."','".$fetch_tmp_contacts['otherinfo']."','".$fetch_tmp_contacts['contactnotes']."','".$fetch_tmp_contacts['im']."')");
		
		}
	}
	  
	mysql_query("DELETE FROM contact");	  



	if(isset($display))
	{
		
		 
		foreach($display as $id)
		{
			  
		mysql_query("INSERT INTO contact (firstname,midname,name,title,company,mail1,mail2,mail3,phone1,phone2,phone3,address,wbpage,birthday) VALUES('".$id['firstname']."','".$id['midname']."','".$id['name']."','".$id['title']."','".$id['company']."','".$id['mail1']."','".$id['mail2']."','".$id['mail3']."','".$id['phone1']."','".$id['phone2']."','".$id['phone3']."','".$id['address']."','".$id['wbpage']."','".$id['birthday']."')");
			  
		}
	  
	  
	}
} 


if(isset($_REQUEST['load']))
{
	$query_contacts=mysql_query("SELECT * FROM permenent ORDER BY firstname,name");
	$denoter = "permenent";
}
else
{
	$query_contacts=mysql_query("SELECT * FROM contact ORDER BY firstname,name");
	$denoter = "contact";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page3</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/view_edit.css" rel="stylesheet" type="text/css" />
<link href="css/main3.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<!-- This code is for the friend request with thick box -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
 <link href="facebox/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 <script src="facebox/src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'facebox/src/loading.gif',
        closeImage   : 'facebox/src/closelabel.png'
      })
    })
  </script>
<!-- This code is for the friend request with thick box -->
<script type="text/javascript">
$(document).ready(function()
{
	var checkall=$("#chkselall");
	checkall.change(toggleselect);
	function toggleselect()
	{
		if(checkall.is(':checked'))
		{
			$("#mailtospace").html("");
			//$(':checkbox').attr("checked",true);
			$(".dispossible").val(0);
			$(".fonter").trigger('click'); 
		}
		else
		{
			$("#mailtospace").html("");
			//$(':checkbox').attr("checked",false);
			$(".dispossible").val(1);
			$(".fonter").trigger('click'); 
		}
	}
	$(".invite_msg").hide();	
})	
</script>
<script type="text/javascript">

function attacher(id)
{
		
	var trigger = $("#"+id+"trigger").val();
	trigger=parseInt(trigger);
	var mail1 = $("#"+id+"mail1").val();
	var mail2 = $("#"+id+"mail2").val();
	var mail3 = $("#"+id+"mail3").val();
	
	if(mail1=="0")
	mail1=parseInt(mail1);
	
	if(mail2=="0")
	mail2=parseInt(mail2);
	
	if(mail3=="0")
	mail3=parseInt(mail3);
	
	
	if(!trigger)
	{
	var inlinetext="<span id='"+id+"boxentry'>";
	if(mail1)
	inlinetext+="<a href='mailto:"+mail1+"'>"+mail1+"</a><input type='hidden' name='sendtothis[]' value='"+mail1+"' /><br/>";
	if(mail2)
	inlinetext+="<a href='mailto:"+mail2+"'>"+mail2+"</a><input type='hidden' name='sendtothis[]' value='"+mail2+"' /><br/>";
	if(mail3)
	inlinetext+="<a href='mailto:"+mail3+"'>"+mail3+"</a><input type='hidden' name='sendtothis[]' value='"+mail3+"' /><br/>";
	inlinetext+="</span>";
	
	$("#mailtospace").append(inlinetext);
	$(".invite_msg").show(200);
	$("#"+id+"trigger").val(1);
	$("#chkdelete"+id).attr("checked",true);
	$("#contact"+id).css("background","#FF9");
	}
	else
	{
	$("#"+id+"boxentry").remove();	
	$("#"+id+"trigger").val(0);	
	$("#chkdelete"+id).attr("checked",false);
	$("#contact"+id).css("background","#FFF");
	}
		
}



function sorter(letter)
{
	$.ajax({
  url: "dynamic.php?fetch="+letter,
  success: function(data) {
    $('#tableinner').html(data);
    }
});	
return false;
}

</script>
</head>
<body onload="MM_preloadImages('images/deleterv.gif','images/invitrv.gif')">
<!--start third main div-->
<div class="third_main">
<div class="ab_div"><div><img src="images/ab_crvtop.gif" /></div>
<table width="27" border="0" cellspacing="0" cellpadding="0" class="leftbrdr">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td  class="buttonstyle" align="center" valign="middle" onclick="return sorter('a')">A</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('b')">B</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('c')">C</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('d')">D</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('e')">E</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('f')">F</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('g')">G</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('h')">H</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('i')">I</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('j')">J</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('k')">K</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('l')">L</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('m')">M</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('n')">N</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('o')">O</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('p')">P</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('q')">Q</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('r')">R</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('s')">S</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('t')">T</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('u')">U</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('v')">V</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('w')">W</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('x')">X</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('y')">Y</td>
  </tr>
  <tr>
    <td  class="buttonstyle"  align="center" onclick="return sorter('z')">Z</td>
  </tr>
</table>
<div>
<img src="images/ab_crvbtm.gif" /></div>
</div>
<form id="form1" name="form1" method="post" action="">
<!--start select main div-->
<div class="select_maindiv">
<div class="text_div">
These are your other contacts that are not yet connected to you on Linkedin. <strong>Invite them to connect!</strong></div>
<!--start select div-->
<div class="selectdiv">

<!-- select all div-->
<div class="select_all"><table width="587" border="0" align="center" cellpadding="0" cellspacing="0" class="select_table1">
  <tr>
    <td width="21"><label>
      <input type="checkbox" name="chkselall" id="chkselall" />
    </label></td>
    <td width="384">Select All&nbsp;&nbsp;&nbsp;&nbsp;
    <?PHP
	if(isset($_REQUEST['load']))
	{ ?>
    <a href="page3.php" class="viewdetail">load contacts from exported file</a>
    <?PHP 
	}
	else
	{
	?>
    <a href="page3.php?load=all" class="viewdetail">load all saved contacts</a>
    <?PHP
	}
	?>
    </td>
    <td width="182" align="right" style="font-size:11px;">Showing <?PHP echo mysql_num_rows($query_contacts); ?> of <?PHP echo mysql_num_rows($query_contacts); ?> contacts.</td>
  </tr>
</table>
</div>
<!-- end select all div-->

<div class="select_allinner">

<table width="550" border="0" cellspacing="0" cellpadding="0" id="tableinner">
  
 <?PHP 
 if(mysql_num_rows($query_contacts))
 {
	  
  
  while($contact_fetch=mysql_fetch_array($query_contacts))
  {
	  
  ?>
  <tr class="highlighter">
    <td width="16">
      <input type="checkbox" name="chkdelete[]" id="chkdelete<?PHP echo $contact_fetch['id']; ?>" value="<?PHP echo $contact_fetch['id']; ?>" class="impossible" onclick="return attacher(<?PHP echo $contact_fetch['id']; ?>);" />
       </td>
       
    <td width="534" class="fonter" id="contact<?PHP echo $contact_fetch['id']; ?>" onclick="return attacher(<?PHP echo $contact_fetch['id']; ?>);">
    <input type="hidden" id="<?PHP echo $contact_fetch['id']; ?>mail1" value="<?PHP 
	if($contact_fetch['mail1'])
	{ 
		echo $contact_fetch['mail1'];
	} 
	else
	{
	    echo 0;
	} ?>" />
    <input type="hidden" id="<?PHP echo $contact_fetch['id']; ?>mail2" value="<?PHP
	if($contact_fetch['mail2'])
	{ 
		echo $contact_fetch['mail2'];
	} 
	else
	{
	    echo 0;
	}?>" />
    <input type="hidden" id="<?PHP echo $contact_fetch['id']; ?>mail3" value="<?PHP
	if($contact_fetch['mail3'])
	{ 
		echo $contact_fetch['mail3'];
	} 
	else
	{
	    echo 0;
	}
	?>" />
    <input type="hidden" id="<?PHP echo $contact_fetch['id']; ?>trigger" class="dispossible" value="0" />
    <strong>
	<?PHP 
	if($contact_fetch['firstname'])
	echo $contact_fetch['firstname']; 
	?>, <?PHP 
	if($contact_fetch['name'])
	echo $contact_fetch['name'];
	?></strong>&nbsp;&nbsp;&nbsp;&nbsp;
	<?PHP 
	if($contact_fetch['mail1'])
	{ 
		echo $contact_fetch['mail1'];
	} 
	elseif($contact_fetch['mail2'])
	{
		echo $contact_fetch['mail2'];
	}
	elseif($contact_fetch['mail3'])
	{
		echo $contact_fetch['mail3'];
	}
	?><br />
    <strong><?PHP
	if($contact_fetch['title'])
	echo $contact_fetch['title'];
	?></strong>

</td>
 
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td class="viewdetail brdrline"><a rel="facebox" href="viewdetails.php?id=<?PHP echo $contact_fetch['id']."&denoter=".urlencode(base64_encode($denoter)); ?>">View &amp; edit details&#187;</a></td>
  </tr>
  
  <?PHP
  }
  }
  else
  {
	echo "<tr class=\"highlighter\"><td colspan=\"2\">There are no contacts to show.</td></tr> ";
  }
  ?>
  
</table>

</div>

</div>

<!--end select div-->

<div class="deltbutt">
<div class="but1">
<input type="hidden" value="<?PHP echo $denoter; ?>" name="denoter" />
<input type="submit" class="deletebtn" value="" name="bulk_del" id="bulk_del" /></div>

<div class="but2"><a href="index.php"><img src="images/admore.gif" class="right"/></a></div>
</div>
</div>
</form>
<!--end select main div-->


<!--start rt email div-->

<div class="rtemail">
<form action="" method="post" onsubmit="return validbody(this);">
<table width="280" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="29"><img src="images/mail_arow.gif" width="33" height="33" /></td>
    <td width="251"><table width="240" border="0" cellspacing="0" cellpadding="0" class="mailbrdr">
      <tr>
        <td id="mailtospace" class="viewdetail">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="29">&nbsp;</td>
    <td width="251"><table width="240" border="0" cellspacing="0" cellpadding="0" class="mailbrdr">
      <tr>
        <td class="invite_msg viewdetail">Your Message</td>
      </tr>
      <tr>
        <td class="invite_msg"><textarea name="invite_message" id="invite_message" style="width:234px;"></textarea></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" class="inviterbtn" value="" name="btnInvite" /></td>
  </tr>
</table>
</form>

</div>
<!--end rt email div-->

</div>
<!--end third main div-->
</body>
</html>