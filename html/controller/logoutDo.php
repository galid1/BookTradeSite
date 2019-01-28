<?

  if(!isset($_SESSION['id'])){
    echo "<script>alert('로그인 한 상태가 아닙니다');</script>";
  }
  else{
    session_destroy();
    echo "<script>alert('로그아웃 성공');</script>";
  }

  echo "<script>window.location='/html/login.php'</script>";
  
?>
