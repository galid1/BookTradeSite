<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="/css/trade.css?ver=1" rel = "stylesheet">
<script>

  function addCart(){
    alert('장바구니에 추가되었습니다.');
  }

</script>
</head>

<body>

  <?
    include $_SERVER['DOCUMENT_ROOT'].'/html/controller/dbConnectDo.php';

    $sql = "select * from board;";
  ?>

  <div>
    <h1>TRADE</h1>
  </div>
  <div id = "container">
    <div id = "container-table">
        <!-- table -->
          <table id = "table">
            <!-- 테이블 헤더-->
            <tr id = "table-head">
              <th>Num</th>
              <th>Title</th>
              <th>Book Name</th>
              <th>Dep</th>
              <th>Price</th>
              <th>Writer</th>
              <th>Date</th>
            </tr>
            <!-- 테이블 헤더 끝-->
            <!-- 테이블 데이터-->
             <? //하나의 로우를 a태그로
               $res = mysqli_query($con , $sql);
               while($row = mysqli_fetch_array($res)){
                 $bid = $row['bid'];
                 $bname = $row['bname'];
                 $dname = $row['dname'];
                 $uname = $row['writer'];
                 $price = $row['price'];

                 $imgPath = "/img/books/$dname/$bname.jpg";
              ?>
                <tr style = 'cursor:pointer' onclick = "window.location='/html/controller/addCartDo.php?bid=<?echo $bid?>
                      &bname=<?echo $bname?>&dname=<?echo $dname?>&writer=<?echo $uname?>&price=<?echo $price?>'"/>

                   <td><?echo $row['bid'];?></td>
                   <td>
                    <?echo $row['title'];?> <img id = "bookimg" src = <?echo $imgPath;?>>
                   </td>
                   <td><?echo $row['bname'];?></td>
                   <td><?echo $row['dname'];?></td>
                   <td><?echo $row['price'];?></td>
                   <td><?echo $row['writer'];?></td>
                   <td><?echo $row['date'];?></td>
                 </tr>
             <?
               }
             ?>
            <!-- 테이블 데이터 끝-->
          </table>
        <!-- table 끝 -->
    </div>

    <div id = "container-menu">
      <div>
        <a href = "/html/main.php">Main</a>
      </div>
      <div>
        <a href = "cart.php">Cart</a>
      </div>
      <div>
        <a href = "write.php">Write</a>
      </div>
    </div>
  </div>
</body>

</html>
