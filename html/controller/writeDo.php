<?
  include 'dbConnectDo.php';

  $title = $_POST['title'];
  $content = $_POST['content'];
  $writer = $_SESSION['id'];

  $department = $_POST['department'];
  $bookname = $_POST['bookname'];
  $price = $_POST['price'];

  $sql = "insert into board(title, content , writer , dname , bname , price)
      values('$title' , '$content' , '$writer' , '$department' , '$bookname' , '$price');";

  if(!isset($_SESSION['id'])){
    echo "<script>
            alert('글 업로드 실패(로그인이 필요합니다)');
            window.location = '../login.php';
          </script>";
  }
  elseif(strlen($title) < 1){
    echo "<script>
            alert('타이틀을 입력하세요');
            window.location = '/html/markets/trade/write.php';
          </script>";
  }
  elseif($department == 'default'){
    echo "<script>
            alert('부서를 선택하세요');
            window.location = '/html/markets/trade/write.php';
          </script>";
  }
  elseif($bookname == 'default'){
    echo "<script>
            alert('책을 선택하세요');
            window.location = '/html/markets/trade/write.php';
          </script>";
  }
  elseif(strlen($price) <= 0){
    echo "<script>
            alert('가격을 한자리 이상 입력하세요');
            window.location = '/html/markets/trade/write.php';
          </script>";
  }
  else{
    mysqli_query($con , $sql);
    echo "<script>
            alert('글 업로드 성공');
            window.location = '../markets/trade/trade.php';
          </script>";
  }

  mysqli_close($con);


?>
