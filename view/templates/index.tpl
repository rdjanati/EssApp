<html>
<head>
<link rel="stylesheet" type="text/css" href="view/css/mystyle.css">
<!-- include javascript in template -->
{literal}
<script language="JavaScript" type="text/javascript">
function submitForm(){
 document.frmLogin.submit();
 return true;
}
{/literal}
</script>  	
</head>
<body>

<div class="login">
  <form name="frmLogin" method="post" action="index.php">
  <input type="text" name="txtUsername" placeholder="Username">  
  <input type="password" name="txtPassword" placeholder="password" id="password">  
  <a href="#" class="forgot">forgot password?</a>
  <input type="button" name="login" value="SignIn" onclick="javascript:submitForm();">
  <input type="hidden" name="login_action" value="checkUser" /> 
  </form>
</div>

</body>
</html>