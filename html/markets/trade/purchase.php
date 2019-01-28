<?
  include $_SERVER['DOCUMENT_ROOT'].'/html/controller/dbConnectDo.php';

  $userid = $_SESSION['id'];

  $sql = "select pw from user where id = '$userid';";

  $res = mysqli_query($con , $sql);
  $row = mysqli_fetch_array($res);

  $userpw = $row['pw'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href = "/css/purchase.css?ver=1" rel = "stylesheet">
<script>
  function purchase(inputpw){
      var parent = window.opener;
      parent.window.open('/html/markets/trade/trade.php', '_self');

      var userpw = <?php echo json_encode($userpw);?>;

      close();

      if(inputpw.value == userpw){
        alert('결제 성공!');
        parent.window.open('/html/controller/clearCartDo.php', '_self');
        return true;
      }
      else{
        alert('비밀번호 오류!');
        return false;
      }
  }
</script>
</head>

<body>

  <div id = "purchase_title">
    <h3>Order</h3>
  </div>

  <hr>

  <div id = "purchase_info">
    <div id = "purchase_pw">
      PASSWORD : <input type ="password" id = "pw"> <br>
    </div>
    <div id = "purchase_msg">
       결제를 위한 비밀번호를 입력해주세요.
    </div>
  </div>

  <hr>

  <div id = "btn_area">
    <button onclick = "purchase(pw)" id = "purchase_btn"> Purchase </button>
  </div>

</body>
</html>
