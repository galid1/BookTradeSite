<?
  include 'dbConnectDo.php';

  $cid = $_GET['cid'];

  $sql = "delete from cart where cid = $cid;";

  if (!mysqli_query($con,$sql)){
    echo "<script>
              alert('삭제 실패');
          </script>";
  }
  elseif(!isset($_SESSION['id'])){
    echo "<script>
              alert('삭제 실패(로그인이 필요합니다.)');
              window.location='/html/login.php';
          </script>";
  }
  else{
    echo "<script>
              alert('장바구니에서 해당 상품이 삭제되었습니다');
          </script>";
  }

  mysqli_close($con);

  echo "<script>window.location='/html/markets/trade/cart.php'</script>";
?>
