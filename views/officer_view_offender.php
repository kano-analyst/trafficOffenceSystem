<?php
include('../model/conn.php');
include('../include/officer_dashboard.php');
$id= $_GET['identity'];
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
     <link rel="stylesheet" type="text/css" media="screen" href="../css/mystyle.css" />
    <script src="../js/bootstrap.min.js"></script>
    <style>
.table {
    position: center;
    border-collapse: collapse;
    width: auto;
}
.reciept{
   
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>s
       <section id="main-content">
          <section class="wrapper site-min-height">
           <h1 style="text-align: center;">KASTELEA Traffic Offence Payment Invoice</h1>
     <button type-"submit" style="padding:10px;margin-right:30px;text-align: center;" onclick="print()">Print Invoice<button>
<?php
 $query = "SELECT * FROM `offenders` WHERE id='$id' ";
     $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);
          //$str=get_rand_letter(2);
          $LETTER=chr(rand(65,90));
           $LETTER2=chr(rand(65,90));
           $num=mt_rand();
           $transaction_id=$LETTER.$LETTER2.$num;
           $rand1=rand(1111,9999);
            $rand2=rand(1111,9999);
             $rand3=rand(1111,9999);
         $rrr_code=$rand1."-".$rand2."-".$rand3;
          $name=$row['name'];
           $chasis_no=$row['chasis_no'];
           $vehicle_type=$row['vehicle_type'];
           $plate_no=$row['plate_no'];
           $offence=$row['offence'];
           $degree=$row['degree'];
           $confiscated_item=$row['confiscated_item'];
           $committed_location=$row['committed_location'];
           $phone=$row['phone'];
           $date_committed=$row['committed_date'];
           $remark=$row['remark'];
 $query2 = "SELECT * FROM `offences` WHERE code='$offence'";
     $result2 = mysqli_query($conn, $query2);
      $row2 = mysqli_fetch_assoc($result2);
      $offence_name=$row2['offence'];
      $penalty=$row2['penalty'];
      $degree=$row2['degree'];
      $point=$row2['point'];
      $amount= $penalty*$degree*$point;
      $vat=150.00;
?>
<div class="reciept">
<table class="table">
        <tr class="active"><td colspan="7"><h3 align="center">Transaction I.D <?PHP echo $transaction_id;?></h3></td></tr>
        <tr class="active"><td colspan="3">Scan the QR Code to confirm payment<br/><img style="border:groove;padding:1px" height="100px" width=""src="../images/qr_code.png" alt="qr_code image"/></td>
          <td><img src="../images/remita.jpg" height="50px" width="100px" alt=""/></td>
            <td colspan="3" align="right"><h5>Payment Invoice</h5> <br/>Genereated on <?php echo date("D.d-M-Y");?><br/>
            <h5 class="rrrcode">RRR CODE <?PHP echo $rrr_code;?></h5></td></tr>
        <tr class="active"><td colspan="2"><h2>PAYER INFORMATION</h2></td><td colspan="2"></td><td colspan="3"><h2>OFFENCE DETAILS</h2></td></tr>
        <tr class="active"><td>Name:</td><td><?php echo $name;?></td><td colspan="2"></td><td>Committed Offence:</td><td colspan="2"><?php echo $offence_name?></td></tr>
        <tr class="active"><td>Phone:</td><td><?php echo $phone;?></td><td colspan="2"></td><td>Code:</td><td colspan="2"><?php echo $offence?></td></tr>
        <tr class="active"><td>Vehicle Type:</td><td><?php echo $vehicle_type;?></td><td colspan="2"></td><td>Point:</td><td colspan="2"><?php echo $point?></td></tr>
        <tr class="active"><td>Plate Number:</td><td><?php echo $plate_no;?></td><td colspan="2"></td><td>Degree:</td><td colspan="2"><?php echo $degree?></td></tr>
        <tr class="active"><td>Vehicle Chasis No.:</td><td><?php echo $chasis_no;?></td ><td colspan="2"></td><td>Penalty:</td><td colspan="2"><?php echo $penalty?></tr>
        <tr class="active"><td colspan="7"><h2>PAYMENT DETAILS</h2></td></tr>
        <tr class="active"><td>Due date</td><td>Payment Ref</td><td>Service Description</td><td>Amount(NGN)</td><td>Charges(NGN)</td><td>V.A.T(NGN)</td><td>Total(NGN)</td></tr>
        <tr class="active"><td><?php echo $date_committed;?></td><td><?php echo $transaction_id;?></td><td>Penalty For<?php echo " ".$offence_name;?></td><td><?php echo $amount?></td><td>0.00</td><td><?php echo$vat.".00";?></td><td><?php echo $amount+$vat.".00";?></td></tr>
        <tr class="active"><td colspan="7"><h2>PAYMENT CHANNEL INFORMATION</h2></td></tr>
        <tr class="active"><td>Payment Channel</td><td>Authorization Ref</td><td colspan="3"></td><td colspan="2">Generated Barcode</td></tr>
      <tr class="active"><td>Guarantee Trust Bank</td><td><?php echo $transaction_id.".".$rrr_code;?></td><td colspan="3"></td><td colspan="2"> <img height="100px" width=""src="../images/barcode.png" alt="barcode image"/></td></tr>
        
</table>
    </div>
</section>
</section>
</body>
</html>