<?PHP 
include "includes/functions.php";
include "includes/connect.php";
if(isset($_REQUEST['fetch']))
{
	$query_contacts=mysql_query("SELECT * FROM contact WHERE firstname LIKE '".$_REQUEST['fetch']."%'");
	$output="";
	if(mysql_num_rows($query_contacts))
	{
			  
		  
		while($contact_fetch=mysql_fetch_array($query_contacts))
		{
				  
			  
			$output.="<tr class=\"highlighter\">
			<td width=\"16\">
			<input type=\"checkbox\" name=\"chkdelete[]\" id=\"chkdelete".$contact_fetch['id']."\" value=\"".$contact_fetch['id']."\" class=\"impossible\" onclick=\"return attacher(".$contact_fetch['id'].");\" />
			</td>
			<td width=\"534\" class=\"fonter\" id=\"contact".$contact_fetch['id']."\" onclick=\"return attacher(".$contact_fetch['id'].");\">
    <input type=\"hidden\" id=\"".$contact_fetch['id']."mail1\" value=\""; 
	if($contact_fetch['mail1'])
	{ 
		$output.= $contact_fetch['mail1'];
	} 
	else
	{
	    $output.= 0;
	} 
    
	$output.="\" />
    <input type=\"hidden\" id=\"".$contact_fetch['id']."mail2\" value=\"";
	if($contact_fetch['mail2'])
	{ 
		$output.= $contact_fetch['mail2'];
	} 
	else
	{
	    $output.= 0;
	}
	$output.="\" />
    <input type=\"hidden\" id=\"".$contact_fetch['id']."mail3\" value=\"";
	if($contact_fetch['mail3'])
	{ 
		 $output.=  $contact_fetch['mail3'];
	} 
	else
	{
	     $output.=  0;
	}
	$output.="\" />
    <input type=\"hidden\" id=\"".$contact_fetch['id']."trigger\" class=\"dispossible\" value=\"0\" />
    <strong>
	"; 
	if($contact_fetch['firstname'])
	$output.= $contact_fetch['firstname']; 
	$output.=",";
	if($contact_fetch['name'])
	$output.= $contact_fetch['name'];
	$output.="</strong>&nbsp;&nbsp;&nbsp;&nbsp;";
	
	if($contact_fetch['mail1'])
	{ 
		$output.= $contact_fetch['mail1'];
	} 
	elseif($contact_fetch['mail2'])
	{
		$output.= $contact_fetch['mail2'];
	}
	elseif($contact_fetch['mail3'])
	{
		$output.= $contact_fetch['mail3'];
	}
	$output.= "<br />
    <strong>";
	
	if($contact_fetch['title'])
	$output.= $contact_fetch['title'];
	
	$output.= "</strong>

</td>
			 </tr>
			 <tr>
			<td>&nbsp;</td>
			<td class=\"viewdetail brdrline\"><a rel=\"facebox\" href=\"viewdetails.php?id=".$contact_fetch['id']."\">View &amp; edit details&#187;</a></td>
			</tr>";
				
			  
		}
	}
	else
	{
		$output.= "<tr class=\"highlighter\"><td colspan=\"2\">There are no contacts to show.</td></tr> ";
	}
echo  $output; 
}
?>