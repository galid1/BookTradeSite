<?
  include $_SERVER['DOCUMENT_ROOT'].'/html/controller/dbConnectDo.php';

  $pname = $_GET['pname']; // get방식으로 넘겨받은 교수이름

  $sql = "select lname
          from professor , lecture , charge_lp
          where professor.pid = charge_lp.pid and
                lecture.lid = charge_lp.lid and
                professor.pname = '$pname';";

  $res = mysqli_query($con , $sql);

  $dname = "IOT"; //bookinfo.php 에서 이미지 경로 구별을 위해 사용할 변수
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome BookStore</title>
<link href = "/css/professors.css?ver=0" rel = "stylesheet">
</head>

<body id ="top">

  <div id = "professor-imgarea">
      <img id = "professor-img" src ="/img/professors/iot/<?echo $pname;?>.png">
  </div>

  <div id = "professor-infoarea">
    <div>
      NAME : <?echo $pname;?>
    </div>
    <div>
      DEPARTMENT : IOT
    </div>
    <div id ="subject">
      SUBJECT :
      <?
        while($row = mysqli_fetch_array($res)){
      ?>
        <div>
          <a id = "bookitem" href="/html/professors/bookinfo.php?lname=<?echo $row['lname'];?>&dname=<?echo $dname;?>">
            <?echo $row['lname'];?>
          </a>
        </div>
      <?
        }
      ?>
    </div>
  </div>

</body>



</html>
