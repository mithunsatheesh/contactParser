<?PHP
include "includes/connect.php";
if(isset($_REQUEST['id']) && isset($_REQUEST['denoter']))
{
	$denoter=base64_decode(urldecode($_REQUEST['denoter']));
	$query_contacts=mysql_fetch_array(mysql_query("SELECT * FROM ".$denoter." WHERE id='".$_REQUEST['id']."'"));
}
else if(isset($_POST['btnsubmit']))
{
	if($_POST['inputtitle']=='Add a Title')
		$_POST['inputtitle']="";
		
	if($_POST['inputcompany']=='Add a Company')
		$_POST['inputcompany']="";
		
	if($_POST['inputmail1']=='Add primary email')
		$_POST['inputmail1']="";
		
	if($_POST['inputmail2']=='Add secondary email')
		$_POST['inputmail2']="";
		
	if($_POST['inputmail3']=='Add third email')
		$_POST['inputmail3']="";
		
	if($_POST['inputphone1']=='Add a phone1')
		$_POST['inputphone1']="";
		
	if($_POST['inputphone2']=='Add a phone2')
		$_POST['inputphone2']="";
		
	if($_POST['inputphone3']=='Add a Phone3')
		$_POST['inputphone3']="";
		
	if($_POST['inputaddress']=='Add an address')
		$_POST['inputaddress']="";
		
	if($_POST['inputwbpage']=='Add a Website or Service')
		$_POST['inputwbpage']="";
		
	if($_POST['inputbirthday']=='Add a Birthday')
		$_POST['inputbirthday']="";
		
	if($_POST['inputotherinfo']=='Add Other Info')
		$_POST['inputotherinfo']="";
		
	if($_POST['inputcontactnotes']=='Add Contact Notes')
		$_POST['inputcontactnotes']="";
		
	if($_POST['inputim']=='Add an Instant Message')
		$_POST['inputim']="";
	
	
	mysql_query("UPDATE ".$_POST['denoter']." SET firstname='".mysql_real_escape_string(stripslashes($_POST['inputfirstname']))."',midname='".mysql_real_escape_string(stripslashes($_POST['inputmidname']))."',name='".mysql_real_escape_string(stripslashes($_POST['inputname']))."',title='".mysql_real_escape_string(stripslashes($_POST['inputtitle']))."',company='".mysql_real_escape_string(stripslashes($_POST['inputcompany']))."',mail1='".mysql_real_escape_string(stripslashes($_POST['inputmail1']))."',mail2='".mysql_real_escape_string(stripslashes($_POST['inputmail2']))."',mail3='".mysql_real_escape_string(stripslashes($_POST['inputmail3']))."',phone1='".mysql_real_escape_string(stripslashes($_POST['inputphone1']))."',phone2='".mysql_real_escape_string(stripslashes($_POST['inputphone2']))."',phone3='".mysql_real_escape_string(stripslashes($_POST['inputphone3']))."',address='".mysql_real_escape_string(stripslashes($_POST['inputaddress']))."',wbpage='".mysql_real_escape_string(stripslashes($_POST['inputwbpage']))."',birthday='".mysql_real_escape_string(stripslashes($_POST['inputbirthday']))."',otherinfo='".mysql_real_escape_string(stripslashes($_POST['inputotherinfo']))."',contactnotes='".mysql_real_escape_string(stripslashes($_POST['inputcontactnotes']))."',im='".mysql_real_escape_string(stripslashes($_POST['inputim']))."' WHERE id='".$_POST['edit_id']."'")or die(mysql_error());	
	
	echo "<script language='javascript'>window.location='page3.php';</script>";
}
else
{
	echo "<script language='javascript'>window.location='index.php';</script>";	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View & Edit</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/view_edit.css" rel="stylesheet" type="text/css" />
<link href="css/cmxform.css" rel="stylesheet" type="text/css" />
<style type="text/css">
html
{
	height:auto;
	width:auto;	
}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#viewedit").validate();
});
</script>
<script language="javascript">
function show_hiden(val)
{
	$("#midle").html("<input type=\"text\" name=\"inputmidname\" class=\"contxtbox3\"  value=\""+val+"\"   />");
	$("#midtag").html("<strong>Middle:</strong>");
	return false;
}

function closer()
{
window.parent.location='page3.php?back';
return false;
}
function txtOnFocus(elementId, defaultText)
{ 
   if (document.getElementById(elementId).value == defaultText)
   {
      document.getElementById(elementId).value = "";
   }
}

function txtOnBlur(elementId, defaultText)
{
   var textValue = document.getElementById(elementId).value;

   if (textValue == defaultText || textValue.length == 0)
   {
      document.getElementById(elementId).value = defaultText;
   }
}

</script>

</head>
<body onload="MM_preloadImages('images/savechangrv.gif')">
<!--start view_main main div-->
<div class="view_main">
<div class="view_div">
View & Edit Contact Information
</div>

<!--start table div-->
<div class="table_div">
<form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post" id="viewedit" onsubmit="return validate_contact(this);" ><input type="hidden" name="edit_id" value="<?PHP echo $_REQUEST['id']; ?>" /><input type="hidden" value="<?PHP echo $denoter; ?>" name="denoter" />
<span id="alertbox" class="validationmessage_invalid"></span>
<table width="575" border="0" cellspacing="0" cellpadding="0" class="main_table">
  <tr>
    <td width="100" align="right" valign="top">Name:</td>
    <td width="10" align="right" valign="top">&nbsp;</td>
    <td colspan="3"><table width="441" border="0" cellspacing="0" cellpadding="0" class="name_table">
      <tr>
        <td width="94" height="5" align="right"></td>
        <td colspan="2"></td>
        <td width="21"></td>
      </tr>
      <tr>
        <td align="right"><strong>First :</strong></td>
        <td></td>
        <td width="295"><input type="text" name="inputfirstname" id="inputfirstname" class="required contxtbox3" value="<?PHP echo $query_contacts['firstname']; ?>"  /></td>
        <td></td>
      </tr>
      <tr>
        <td align="right"></td>
        <td width="7"></td>
        <td height="3"></td>
        <td></td>
      </tr>
      <tr>
        <td align="right"><strong>Last :</strong></td>
        <td></td>
        <td height="3"><input type="text" name="inputname" id="inputname" class="required contxtbox3"  value="<?PHP echo $query_contacts['name']; ?>"   /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right" id="midtag">&nbsp;</td>
        <td></td>
        <td height="30" valign="middle" id="midle"><a class="span" onclick="show_hiden(<?PHP echo "'".$query_contacts['midname']."'"; ?>);" style="cursor:pointer;">Show all name fields</a><input type='hidden' value="<?PHP echo $query_contacts['midname']; ?>" name='inputmidname' /></td>
        <td></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="17%" align="right" valign="top">Title :</td>
        <?PHP 
		if($query_contacts['title'])
			$val=$query_contacts['title'];
		else
			$val='Add a Title';
		$value='Add a Title';
		?>
        <td width="2%">&nbsp;</td>
        <td width="81%" class="main_table2"><input type='text' class='inputvisible' name='inputtitle' id='inputtitle'  onfocus="txtOnFocus('inputtitle','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputtitle','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">Company :</td>
        <?PHP 
		if($query_contacts['company'])
			$val=$query_contacts['company'];
		else
			$val='Add a Company';
		$value='Add a Company';
		?>
        <td>&nbsp;</td>
        <td class="main_table2"><input type='text' class='inputvisible'  name='inputcompany' id='inputcompany'  onfocus="txtOnFocus('inputcompany','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputcompany','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="brdr">&nbsp;</td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td colspan="5" align="right" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="17%" align="right" valign="top">Email :</td>
        <?PHP 
		if($query_contacts['mail1'])
			$val=$query_contacts['mail1'];
		else
			$val='Add primary email';
		$value='Add primary email';
		?>
        <td width="2%">&nbsp;</td>
        <td width="81%" class="main_table2"><input type='text' class='inputvisible required email'  name='inputmail1' id='inputmail1'  onfocus="txtOnFocus('inputmail1','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputmail1','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
      <tr>
        <td width="17%" align="right" valign="top">Email2 :</td>
        <?PHP 
		if($query_contacts['mail2'])
			$val=$query_contacts['mail2'];
		else
			$val='Add secondary email';
		$value='Add secondary email';
		?>
        <td width="2%">&nbsp;</td>
        <td width="81%"class="main_table2"><input type='text' class='inputvisible'  name='inputmail2' id='inputmail2'  onfocus="txtOnFocus('inputmail2','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputmail2','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
      <tr>
        <td width="17%" align="right" valign="top">Email3 :</td>
        <?PHP 
		if($query_contacts['mail3'])
			$val=$query_contacts['mail3'];
		else
			$val='Add third email';
		$value='Add third email';
		?>
        <td width="2%">&nbsp;</td>
        <td width="81%"class="main_table2"><input type='text' class='inputvisible'  name='inputmail3' id='inputmail3'  onfocus="txtOnFocus('inputmail3','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputmail3','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">Phone :</td>
        <?PHP 
		if($query_contacts['phone1'])
			$val=$query_contacts['phone1'];
		else
			$val='Add a phone1';
		$value='Add a phone1';
		?>
        <td>&nbsp;</td>
        <td class="main_table2"><input type='text' name='inputphone1' class='inputvisible'  id='inputphone1'  onfocus="txtOnFocus('inputphone1','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputphone1','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
      <tr>
        <td align="right">Phone2 :</td>
        <?PHP 
		if($query_contacts['phone2'])
			$val=$query_contacts['phone2'];
		else
			$val='Add a phone2';
		$value='Add a phone2';
		?>
        <td>&nbsp;</td>
        <td class="main_table2"><input type='text' name='inputphone2' class='inputvisible'  id='inputphone2'  onfocus="txtOnFocus('inputphone2','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputphone2','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
      <tr>
        <td align="right">Phone3 :</td>
        <?PHP 
		if($query_contacts['phone3'])
			$val=$query_contacts['phone3'];
		else
			$val='Add a Phone3';
		$value='Add a Phone3';
		?>
        <td>&nbsp;</td>
        <td class="main_table2"><input type='text' class='inputvisible'  name='inputphone3' id='inputphone3'  onfocus="txtOnFocus('inputphone3','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputphone3','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
       <tr>
        <td align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">IM :</td>
        <td>&nbsp;</td>
        <?PHP 
		if($query_contacts['im'])
			$val=$query_contacts['im'];
		else
			$val='Add an Instant Message';
		$value='Add an Instant Message';
		?>
        <td class="main_table2"><input type='text' class='inputvisible'  name='inputim' id='inputim'  onfocus="txtOnFocus('inputim','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputim','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr> 
      <tr>
        <td align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="brdr">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="5" align="right" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="17%" align="right" valign="top">Address :</td>
        <?PHP 
		if($query_contacts['address'])
			$val=$query_contacts['address'];
		else
			$val='Add an address';
		$value='Add an address';
		?>
        <td width="2%">&nbsp;</td>
        <td width="81%" class="main_table2"><input type='text' class='inputvisible'  name='inputaddress' id='inputaddress'  onfocus="txtOnFocus('inputaddress','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputaddress','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">Website :</td>
        <?PHP 
		if($query_contacts['wbpage'])
			$val=$query_contacts['wbpage'];
		else
			$val='Add a Website or Service';
		$value='Add a Website or Service';
		?>
        <td>&nbsp;</td>
        <td class="main_table2">
		
		<input type='text' class='inputvisible'  name='inputwbpage' id='inputwbpage'  onfocus="txtOnFocus('inputwbpage','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputwbpage','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  />
		
		</td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">Birthday:</td>
        <?PHP 
		if($query_contacts['birthday'])
			$val=$query_contacts['birthday'];
		else
			$val='Add a Birthday';
		$value='Add a Birthday';
		?>
        <td>&nbsp;</td>
        <td class="main_table2"><input type='text' class='inputvisible'  name='inputbirthday' id='inputbirthday'  onfocus="txtOnFocus('inputbirthday','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputbirthday','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="brdr">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="5" align="right" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="17%" align="right" valign="top">Other Info :</td>
        <td width="2%">&nbsp;</td>
        <?PHP 
		if($query_contacts['otherinfo'])
			$val=$query_contacts['otherinfo'];
		else
			$val='Add Other Info';
		$value='Add Other Info';
		?>
        <td width="81%" class="main_table2"><input type='text' class='inputvisible'  name='inputotherinfo' id='inputotherinfo'  onfocus="txtOnFocus('inputotherinfo','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputotherinfo','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right">Contact Notes :</td>
        <td>&nbsp;</td>
		<?PHP 
		if($query_contacts['contactnotes'])
			$val=$query_contacts['contactnotes'];
		else
			$val='Add Contact Notes';
		$value='Add Contact Notes';
		?>
        <td class="main_table2"><input type='text' class='inputvisible'  name='inputcontactnotes' id='inputcontactnotes'  onfocus="txtOnFocus('inputcontactnotes','<?PHP echo $value; ?>');" onblur="txtOnBlur('inputcontactnotes','<?PHP echo $value; ?>');" value="<?PHP echo $val; ?>"  /></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td>&nbsp;</td>
        <td class="brdr">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="5" align="right" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;</td>
    <td align="right" valign="top">&nbsp;</td>
    <td width="105" align="left" valign="top"><input type="submit" class="edit_contact" value="" name="btnsubmit" id="btnsubmit" /></td>
    <td width="7" align="left" valign="middle">&nbsp;</td>
    <td width="353" align="left" valign="middle"><span style="font-weight:normal">Or </span><span class="span"><a onclick="return closer();" >Cancel</a></span></td>
  </tr>
</table>
</form>
</div>
<!--end table div-->

</div>
<!--end view_main div-->
</body>
</html>
