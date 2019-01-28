<?
  include "dbConnectDo.php";

  $sql = "select * from counter;";
  $res = mysqli_query($con , $sql);
  $row = mysqli_fetch_array($res);

  $total = $row['total'];
  $today = $row['today'];

  if(!isset($_COOKIE['counter'])){
    setcookie('counter', 'counter',time()+ 3600);

    $today = $today + 1;
    $total = $total + 1;

    $sql = "update counter set today = $today , total = $total;";
    mysqli_query($con , $sql);
  }
  else{
    setcookie('counter','', time() - 3601);
  }
?>
