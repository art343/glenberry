<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled images</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery.min.js"></script> 
<script type='text/javascript' src='jquery.cycle.js'></script> 
 
<script type='text/javascript'> 
		$(function()
		{
			$("#slides").cycle({
        	fx: 'fade',
			prev:   '#prev',
        	next:   '#next',
        	timeout: 0
   			});
		});
 
</script> 

<script type="text/javascript"> 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21440802-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<link rel="shortcut icon" href="imgs/favicon.ico">
</head>





<body>
<div id="wrapper">

<header>
<a href="index.html"><img src="../links/berry_glenn_font.png" alt="#" style="width:320px;"></a>
</header>

<nav>
<span class="artwork"><a href="../artwork.html">Artwork</a></span>              
<span class="statement"><a href="../statement.html">Artist Statement</a></span>
<span class="exhibitions"><a href="../exhibitions.html">Exhibitions</a></span>
<span class="bio"><a href="../biography.html">Bio</a></span>
<span class="links"><a href="../links.html">Links</a></span>
<span class="contact"><a href="../contact.html">Contact</a></span>
</nav>











<a href="contact.html"><em>Say hello</em></a></span>
</div><!-- closes left--><div id="middle2"><div>
  <form method="POST" action="/cgi-bin/formmail.pl">
  <table width="480px" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#fff" bgcolor="#CECDC7">
    <tr>
      <td align="left" valign="top" class="copyMenu"><div align="right">
        <table width="580px" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#333333" bgcolor="#CECDC7">
          <tr>
            <td colspan="2" align="left" valign="top" class="copySubhead"><p>Request Form</p></td>
            </tr>
          <tr>
            <td width="332" align="left" valign="top" class="copySubhead"><div align="right" class="copyMenu"><p>Name:</p></div></td>
            <td width="610" align="left" valign="top"><label>
              <input name="Name" type="text" id="Name" />
              </label></td>
            </tr>
  <tr><td align="left" valign="top" class="copyMenu"><div align="right"><p>Phone:</p></div></td>
    <td align="left" valign="top"><input name="Phone" type="text" id="Phone" /></td>
    </tr>
          <tr>
            <td align="left" valign="top" class="copyMenu"><div align="right"><p>E-mail:</p></div></td>
            <td align="left" valign="top"><input name="Email" type="text" id="Email" /></td>
            </tr>
          <tr>
            
          <tr>
            <td align="left" valign="top" class="copyMenu"><div align="right"><p>Comments/Questions:</p></div></td>
            <td align="left" valign="top"><textarea name="Comments" id="Comments"></textarea></td>
            </tr>
          <tr>
            <td class="copy"><br /></td>
            <td align="center" valign="top" class="copy"><input name="B1" type="submit" onClick="MM_validateForm('Name','','R','Phone','','R','Email','','RisEmail');return document.MM_returnValue" value="Submit" /></td>
            </tr>
          </table>
        </div></td>    
      </table><INPUT type="hidden" value="www.art343.com" name="recipient"><INPUT type="hidden" value=http://www.art343.com/thankyou.php name="redirect"></form><br />
  <img src="imgs/rick_em.jpg" width="180">
  
  
</div><!-- closes middle-->

<div id="footer"></div>
</div><!-- closes container-->
</body>
</html>
