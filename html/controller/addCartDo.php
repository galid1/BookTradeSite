<?
  include 'dbConnectDo.php';

  $uid = $_SESSION['id']; //로그인 한 사용자의 id가 담김
  $writer = $_GET['writer'];
  $bname = $_GET['bname'];
  $dname = $_GET['dname'];
  $price = $_GET['price'];

  $sql = "insert into cart(uid , writer , bname , dname , price) values('$uid' , '$writer' , '$bname' , '$dname' , '$price');";

  if(!isset($_SESSION['id'])){
    echo "<script>
              alert('장바구니에 담기 실패(로그인이 필요합니다.)');
              window.location='/html/login.php';
          </script>";
  }
  else{
    mysqli_query($con,$sql);
    echo "<script>
              alert('장바구니에 해당 상품이 담겼습니다.');
          </script>";
  }

  mysqli_close($con);

  echo "<script>window.location='/html/markets/trade/trade.php'</script>";
?>
