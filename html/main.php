<?
	include	"/controller/dbConnectDo.php";
	include "/controller/counterDo.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome BookStore</title>
<link href = "../css/main.css?ver=1" rel = "stylesheet">
<style type="text/css">
a {
	text-decoration: none;
}
</style>
</head>
<body id ="top">

	<!-- menu bar-->
		<? include 'header.php'; ?>

		<!--접속 사용자 정보-->
		<div class = "user-info">

		</div>
		<!--접속 사용자 정보끝-->
	</div>
	<!-- Menubar 끝 -->

	<!-- header -->
	<div class = "header">
	</div>
	<!-- header 끝 -->

	<!-- counter -->
	<div class = "counter" style = "margin-left : 90%">
		Total :	<?echo "$total";?> <br>
		Today :	<?echo "$today";?>
	</div>
	<!-- counter 끝 -->


		<!-- market -->
			<h2 class = "market-head" id = "market-head">MARKET</h2>
	    <section class = "market" id = "market">

					<div class = "computer_b market-col" id = "computer_b">
							<a href = "markets/market.php?id=1"><img class = "market-logo" src = "/img/department/computer.jpg"></a>
							<h4>Computer</h4>
					</div>

					<div class = "infcom_b market-col" id = "infcom_b">
						 <a href = "markets/market.php?id=2">	<img class = "market-logo" src = "/img/department/infcom.jpg"> </a>
							<h4>Information Communication</h4>
					</div>

					<div class = "iot_b market-col" id ="iot_b">
							<a href = "markets/market.php?id=3"><img class = "market-logo" src = "/img/department/iot.jpg"></a>
							<h4>IOT</h4>
					</div>

	    </section>
		<!-- market 끝 -->

	<!-- professors -->

		<h2 class = "professors-head" id = "professors-head">PROFESSORS</h2>
    <section class = "professors" id = "professors">

      <!-- computer professors-->
			<h3 class = "professor-head-h3">Computer</h3>
      <div class = "computer_p" id = "computer_p">

				<?
					$sql = "select pname
									from professor , charge_dp , department
									where professor.pid = charge_dp.pid and
												department.did = charge_dp.did and
												department.did = 1;";

					$res = mysqli_query($con , $sql);

					while($row = mysqli_fetch_array($res)){
				?>
					<div>
							<a href = "professors/computerprofessor.php?pname=<?echo $row['pname']?>">
								<img src = "/img/professors/computer/<?echo $row['pname'];?>.png">
							</a>
							<h4 class = "text-uppercase"><?echo $row['pname'];?></h4>
					</div>
				<?
					}
				?>
      </div>
      <!-- computer professors 끝-->

			<!-- infcom professors-->
			<h3 class = "professor-head-h3">Information Communication</h3>
      <div class = "infcom_p" id = "infcom_p">
				<?
					$sql = "select pname
									from professor , charge_dp , department
									where professor.pid = charge_dp.pid and
												department.did = charge_dp.did and
												department.did = 2;";

					$res = mysqli_query($con , $sql);

					while($row = mysqli_fetch_array($res)){
				?>
				<div>
						<a href = "professors/infcomprofessor.php?pname=<?echo $row['pname'];?>">
							<img src = "/img/professors/infcom/<?echo $row['pname'];?>.png">
						</a>
						<h4 class = "text-uppercase"><?echo $row['pname'];?></h4>
				</div>
				<?
					}
				?>
      </div>
      <!-- infcom professors 끝-->

			<!-- iot professors-->
			<h3 class = "professor-head-h3">IOT</h3>
			<div class = "iot_p" id = "iot_p">
				<?
					$sql = "select pname
									from professor , charge_dp , department
									where professor.pid = charge_dp.pid and
												department.did = charge_dp.did and
												department.did = 3;";

					$res = mysqli_query($con , $sql);

					while($row = mysqli_fetch_array($res)){
				?>
				<div>
						<a href = "professors/iotprofessor.php?pname=<?echo $row['pname'];?>">
							<img src = "/img/professors/iot/<?echo $row['pname'];?>.png">
						</a>
						<h4 class = "text-uppercase"><?echo $row['pname'];?></h4>
				</div>
				<?
					}
				?>
			</div>
			<!-- iot professors 끝-->

    </section>
	<!-- professors 끝 -->

	<!-- footer -->
	<footer>

	</footer>
	<!-- footer 끝 -->

</body>
</html>
