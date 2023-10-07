<?php 

 include('../model/conn.php'); 
  include('../include/dashboard2.php');  
  ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <section id="main-content">
        <section class="wrapper site-min-height">
<!-- PANEL -->
							<div class="row">
						<! -- TODO PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="steps pn">
							    <input id='op1' name='op1' type='checkbox' checked/>
							    <label for='op1'>Register Offender</label>
							    <input id='op2' name='op2' type='checkbox' checked/>
							    <label for='op2'>View Offenders</label>
							    <input id='op3' name='op3' type='checkbox' checked/>
							    <label for='op3'>View Offences</label>
							    <input type='submit' value='Overview' id='submit'/>
							</div>
						</div><! --/col-md-4 -->
						
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5><?php echo $_SESSION['name'];?></h5>
								</div>
								<p><img src="../assets/img/profile.jpg" class="img-circle" width="50"></p>
								<p><b><?php echo $_SESSION['username'];?></b></p>
									<div class="row">
										<div class="col-md-6">
											<p class="small mt">MEMBER SINCE</p>
											<p>2012</p>
										</div>
										<div class="col-md-6">
											<p class="small mt">TOTAL REPORTED OFFENCES</p>
											<p>476</p>
										</div>
									</div>
							</div>
						</div><!-- /col-md-4 -->
					 <div class="row">
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="grey-panel pn donut-chart">
                      			<div class="grey-header">
						  			<h5>CRIME RATE</h5>
                      			</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 40,
												color:"#FF6B6B"
											},{
												value: 30,
												color:"#6d3d"
											},
                                            {
												value: 15,
												color:"#9E9d"
											},
											{
												value : 15,
												color : "#fdfdfd"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
								</script>	
						
                    </div><! --/END of ROW OF PANELS -->
                    
        </section>
</section>
</body>
</html>