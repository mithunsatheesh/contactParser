<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page 2</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/send_invitrv.gif','images/imprt_buttonrv.gif','images/uploadrv.gif')">
<!--start main div-->
<div class="main">
<p>Get more value out of by inviting your trusted  friends and colleagues to connect</p>
<!--start page div-->
<div class="page">

<!--start left div-->
<div class="leftbox">
<div><img src="images/imprt_contctop.gif" /></div>

<div class="leftbox_inn">
<h1>Import Your Desktop Email Contacts</h1>






    
     <!--start dotted div-->
     <div class="dotted_div">
       <p><strong>Upload a contacts file</strong></p>


     <p> Upload a contacts file from an email application like Outlook,Apple Mail and others.File formats must be.csv, txt, or . vcf. <span class="span"><a href="#">Learn more</a></span></p>
     </div>
       <!--end dotted div-->
       
       
      <!--start browse div-->
      <div class="browse">
        <table width="512" border="0" cellpadding="0" cellspacing="0" class="tabcontact">
          <form action="page3.php" method="post" onsubmit="return validate_upload(this);" enctype="multipart/form-data">
          <tr>
            <td width="125" align="right" class="file">Contacts File:</td>
            <td width="350"><input type="file" name="fileContacts" id="fileContacts" class="contxtfile"  /></td>
            <td width="37">&nbsp;</td>
          </tr>
          <tr>
            <td height="5"></td>
            <td></td>
            <td></td>
          </tr>
          
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="" name="contact_uploader" id="contact_uploader" class="uploadbtn" />&nbsp;&nbsp;&nbsp;&nbsp;<span class="alertbox"><?PHP if(isset($_REQUEST['error']))echo urldecode($_REQUEST['error']); ?></span></td>
            <td>&nbsp;</td>
          </tr>
          </form>
          <tr>
            <td></td>
            <td height="5"></td>
            <td></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>will no send your contacts any email.See our  <span class="span"><a href="#">privacy policy.</a></span><br />
<span class="span"><a href="#">More about importing with MS Outlook</a></span></td>
                  
            <td>&nbsp;</td>
          </tr>
        </table>
      </div>
         <!--end browse div-->
       
       <div class="mandp"></div>
         
</div>
<div><img src="images/imprt_contcbtm.gif"  class="left"/></div>
</div>
<!--end left div-->

</div>
<!--end page div-->
</div>
<!--end main div-->
</body>
</html>
