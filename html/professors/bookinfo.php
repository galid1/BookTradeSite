<?
  include $_SERVER['DOCUMENT_ROOT'].'/html/controller/dbConnectDo.php';
  $lname = $_GET['lname'];  //교수님 정보에서 눌렀을때 get파라미터로 넘겨준 정보
  $dname = $_GET['dname']; //교수님 정보에서 눌렀을때 get파라미터로 넘겨준 정보
  $sql = "select book.bname , book.summary
          from book , charge_bl , lecture
          where book.bid = charge_bl.bid and
                lecture.lid = charge_bl.lid and
                lecture.lname = '$lname'";

  $res = mysqli_query($con , $sql);
  $row = mysqli_fetch_array($res);

  $book = $row['bname'].'.jpg';

  $imgPath = "/img/books/$dname/$book";
?>
<!-- 교수님들의 전공 과목에 대한 책의 정보 -->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome BookStore</title>
<link href = "/css/bookinfo.css?ver=1" rel = "stylesheet">
</style>
</head>

<body id ="top">

  <div id = "header">
    <?include $_SERVER['DOCUMENT_ROOT'].'/html/header.php';?>
  </div>

  <div id = "bookinfo-container">
    <div id = "bookinfo">
      <img id = "bookimg" src = <?echo $imgPath;?> >
    </div>

    <div id = "bookname">
        <?echo $row['bname'];?>
    </div>

    <div id = "booksummary">
        <?echo $row['summary'];?>
    </div>
  </div>
</body>



</html>
