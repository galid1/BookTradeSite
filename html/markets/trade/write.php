<?
  $comBooks = array();
  $infcomBooks = array();
  $iotBooks = array();

  include $_SERVER['DOCUMENT_ROOT'].'/html/controller/dbConnectDo.php';

  $sql = "select *
          from book, department , charge_bd
          where book.bid = charge_bd.bid and
                department.did = charge_bd.did and
                department.did = 1;";

  $res = mysqli_query($con , $sql);

  while($row = mysqli_fetch_array($res)){
    $comBooks[] = $row['bname'];
  }

  $sql = "select *
          from book, department , charge_bd
          where book.bid = charge_bd.bid and
                department.did = charge_bd.did and
                department.did = 2;";

  $res = mysqli_query($con , $sql);

  while($row = mysqli_fetch_array($res)){
    $infcomBooks[] = $row['bname'];
  }

  $sql = "select *
          from book, department , charge_bd
          where book.bid = charge_bd.bid and
                department.did = charge_bd.did and
                department.did = 3;";

  $res = mysqli_query($con , $sql);

  while($row = mysqli_fetch_array($res)){
    $iotBooks[] = $row['bname'];
  }

  $comBooks = json_encode($comBooks);
  $infcomBooks = json_encode($infcomBooks);
  $iotBooks = json_encode($iotBooks);

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome BookStore</title>
<link href = "/css/write.css" rel = "stylesheet">
<script>
function result(){
  alert("글 업로드 완료.");
}

function doChange(selected, targetId){
    var val = selected.options[selected.selectedIndex].value;
    var targetE = document.getElementById(targetId);
    var arr;

    removeAll(targetE);


    if(val == 'computer'){
        arr = <?= $comBooks ?>;

        arr.forEach(function (array) {
          addOption(array, targetE);
        });
    }
    else if(val == 'infcom'){
        arr = <?= $infcomBooks ?>;

        arr.forEach(function (array) {
          addOption(array, targetE);
        });
    }
    else if(val == 'iot'){
        arr = <?= $iotBooks ?>;

        arr.forEach(function (array) {
          addOption(array, targetE);
        });
    }
}

function addOption(value, e){
    var o = new Option(value);
    try{
        e.add(o);
    }catch(ee){
        e.add(o, null);
    }
}

function removeAll(e){
    for(var i = 0, limit = e.options.length; i < limit - 1; ++i){
        e.remove(1);
    }
}
</script>
</head>

<body>

  <div id = "container">
    <h1 id = "">Write</h1>
    <form action = "/html/controller/writeDo.php" method="post">
      <table>
        <tr>
          <th id = "header">Title</th>
          <td id = "content"> <input name = "title" id = "title" type = "text"></td>
        </tr>
        <tr>
          <th id = "header">Content</th>
          <td id = "content">
            <input name = "content" id = "content-area" type = "textarea" rows = "40">
          </td>
        </tr>
        <tr id = "bookinfo-row">
          <th id = "header">Book Info</th>
          <td id = "content">
            <div id = "bookinfo">
              <div id = "bookinfo-department">
                <div>Department</div>
                <select id = "selectbox1" name = "department" onchange="doChange(this,'selectbox2')">
                  <option value = "default">default</option>
                  <option value = "computer">Computer</option>
                  <option value = "infcom">InfCom</option>
                  <option value = "iot">IOT</option>
                </select>
              </div>
              <div id = "bookinfo-name">
                <div>Name </div>
                <select id = "selectbox2" name = "bookname">
                  <option value = "default">default</option>
                </select>
              </div>
              <div id = "bookinfo-price">
                <div>Price</div>
                <div><input id = "price" name = "price" type = "text"></div>
              </div>
            </div>
          </td>
        </tr>
      </table>

      <input type = "button" id = "backbtn" onclick="window.location='trade.php'" value = "Back">
      <input id = "writebtn" type ="submit" value = "Write">
    </form>

  </div>


</body>

</html>
