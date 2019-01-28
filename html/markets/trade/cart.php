<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href = "/css/cart.css?ver=1" rel = "stylesheet">
<script>
  function OpenWindow() {
      window.open("purchase.php","_blank","top=0,left=0,width=470,height=192,resizable=1,scrollbars=no");
  }
</script>
</head>

<body>

  <?
   $total = 0; //금액 합계 변수
   $uid = $_SESSION['id']; //로그인중인 사용자 아이다

   include $_SERVER['DOCUMENT_ROOT'].'/html/controller/dbConnectDo.php';

   $sql = "select * from cart where uid ='$uid';";

  ?>

  <div>
    <?include '../../header.php';?>
  </div>

  <div id = "header-container">
    <div id = "header">
      <h1>Order</h1>
    </div>
  </div>

  <div id = "table-container">
    <table id = "table">
      <tr id = "table-head">
        <th>Writer</th>
        <th>Image</th>
        <th>Book Name</th>
        <th>Dep</th>
        <th>Price</th>
      </tr>

      <?
        $res = mysqli_query($con , $sql);

          while($row = mysqli_fetch_array($res)){
            $cid = $row['cid'];
            $writer = $row['writer'];
            $bname = $row['bname'];
            $dname = $row['dname'];
            $price = intval($row['price']);

            $imgPath = "/img/books/$dname/$bname.jpg";
        ?>
            <tr style = 'cursor:pointer' id = "table-row" onclick = "window.location ='/html/controller/removeCartDo.php?cid=<?echo $cid;?>'">
              <td><?echo $writer;?></td>
              <td><img id = "bookimg" src = <?echo $imgPath;?>></td>
              <td><?echo $bname;?></td>
              <td><?echo $dname;?></td>
              <td><?echo $price;?></td>
            </tr>
        <?
          $total = $total + $price;
          }
        ?>
    </table>
  </div>

  <div id = "total">
    <div>Total : &nbsp;&nbsp;<?echo "$total";?> </div>
    <div> </div>
  </div>

  <div id = "menu-container">
    <div id ="menu">
      <div>
        <button onclick = "OpenWindow()">Order</button>
      </div>
    </div>
  </div>

</body>

</html>
