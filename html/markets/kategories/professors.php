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
              from professor,department,charge_dp
              where professor.pid = charge_dp.pid and
                    department.did = charge_dp.did and
                    department.did = $_GET[id];";
      $res = mysqli_query($con , $sql);

      while($row = mysqli_fetch_array($res)){
        echo "<tr id ='table-row'>";
          echo "<td id = 'table-item'>";
            echo "<a class = 'item' href ='/html/markets/trade/trade.php' target ='_parent.booklist-list'>";
              echo $row['pname'];
            echo '</a>';
          echo '</td>';
        echo '</tr>';
      }
    ?>

  </table>
</body>


</html>
