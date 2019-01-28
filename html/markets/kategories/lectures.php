<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome BookStore</title>
<link href = "../../../css/kategories.css" rel = "stylesheet">

</head>

<body>
  <?
    include $_SERVER['DOCUMENT_ROOT'].'/html/controller/dbConnectDo.php';
  ?>

  <table id = "table">
    <trid = "navbar-row">
      <th>NAME</td>
    </tr>

  <?
    $sql = "select *
            from lecture , department , charge_dl
            where lecture.lid = charge_dl.lid and
                  department.did = charge_dl.did and
                  department.did = $_GET[id];";
    $res = mysqli_query($con , $sql);

    while($row = mysqli_fetch_array($res)){
      echo "<tr id ='table-row'>";
        echo "<td id = 'table-item'>";
          echo "<a class = 'item' href ='/html/markets/trade/trade.php' target ='_parent.booklist-list'>";
            echo $row['lname'];
          echo '</a>';
        echo '</td>';
      echo '</tr>';
    }
  ?>

  </table>
</body>


</html>
