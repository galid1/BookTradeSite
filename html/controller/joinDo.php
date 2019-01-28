<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome BookStore</title>
<link href = "../../../css/kategories.css" rel = "stylesheet">

</head>

<body>
  <?
    include 'dbConnectDo.php';

    $name = $_POST['name'];
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $sql = "insert into user(name , id , pw) values('$name' ,'$id' , '$pw');";

    if (!mysqli_query($con,$sql)){
      echo "<script>
              alert('회원가입을 축하드립니다.');
              window.location = '../login.php';
            </script>";
    }

    mysqli_close($con);

    echo "<script>
            alert('회원가입을 축하드립니다.');
            window.location = '../login.php';
          </script>";
  ?>

  </table>
</body>


</html>
