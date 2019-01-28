<?
  include 'dbConnectDo.php';

  $sql = "select *
          from user;";

  $res = mysqli_query($con , $sql);

  while($row = mysqli_fetch_array($res)){
      if($row['id'] == $_POST['id'] && $row['pw'] == $_POST['pw']){
        session_start();
        $_SESSION['id'] = $_POST['id'];
        echo "<script>
                alert('로그인 성공');
                window.location='../main.php';
              </script>";
      }
  }
  echo "<script>
          alert('아이디 또는 비밀번호가 틀렸습니다.');
          window.location='../login.php';
        </script>";
?>
