<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome BookStore</title>
<link href = "/css/login.css?ver=0" rel = "stylesheet">
<script type="text/javascript">
	function check(){
		if(!document.form_signin.id.value){
			alert("ID를 입력하세요.");
			return false;
		}
		else if(!document.form_signin.pw.value){
			alert("PW를 입력하세요.");
			return false;
		}
		return true;
	}
</script>
</head>

<body>

	<div id="fullscreen_bg" class="fullscreen_bg" />

	<div class="container">

		<form name = "form_signin" class="form-signin" action = "controller/loginDo.php" method = "post" onsubmit="return check()">
			<h1 class="form-signin-heading text-muted">Login</h1>
			<input name = "id" type="text"class="form-control" placeholder="ID : " autofocus="">
			<input name = "pw" type="password"class="form-control" placeholder="Password : ">
			<button class="btn btn-lg btn-primary btn-block" type="submit">
				Login</button>
			<input type = "button" value = "join" onclick="window.location='join.php'">
		</form>

	</div>

</body>
</html>
