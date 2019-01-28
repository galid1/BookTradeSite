<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=EUC-KR">
<link href="/css/join.css?ver=0" rel="stylesheet" id="bootstrap-css">
<script type="text/javascript">
	function check(){
		if(!document.join_form.id.value){
			alert("Id를 입력하세요.");
			return false;
		}
		else if(!document.join_form.pw.value){
			alert("Pw를 입력하세요.");
			return false;
		}
		else if(!document.join_form.cpw.value){
			alert("Confirm Pw를 입력하세요.");
			return false;
		}
		else if(!document.join_form.name.value){
			alert("Name을 입력하세요.")
			return false;
		}
		else if(document.join_form.pw.value != document.join_form.cpw.value){
			alert("pw가 일치 하지 않습니다.")
			return false;
		}
	}

	function checkId(){
		if(!document.join_form.id.value){
			alert('Id를 입력하세요.');
		}
		else{
			alert('사용 가능한 Id입니다.');
		}
	}

</script>
</head>
<body>
	<div id="fullscreen_bg" class="fullscreen_bg"/>

	<div class="container">

		<form name = "join_form" class="form-signin" action = "/html/controller/joinDo.php" method = "post" onsubmit="return check()">
			<h1 class="form-signin-heading text-muted">Sign Up</h1>
			<input name = "id" type="text" class="form-control" placeholder="Id : " autofocus="true">
			<input name = "idcheck" type="button" value ="Check" onclick="checkId()">
			<input name = "name" type="text" class="form-control" placeholder="Name : " autofocus="true">
			<input name = "pw" type="password" class="form-control" placeholder="Pw : ">
			<input name = "cpw" type="password" class="form-control" placeholder="Confirm Pw : ">
			<input class="btn btn-lg btn-primary btn-block" type="submit" value = "Sign Up">
			<input type = "button" onclick = "window.location = '/html/login.php'" value = "back">
		</form>

	</div>

</body>
</html>
