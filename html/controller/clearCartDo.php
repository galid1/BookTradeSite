<?
  include 'dbConnectDo.php';

  $userid = $_SESSION['id'];

  $sql = "delete from cart where uid = '$userid';";

  mysqli_query($con , $sql);

  echo "<script> window.location='/html/markets/trade/trade.php' </script>";
?>
