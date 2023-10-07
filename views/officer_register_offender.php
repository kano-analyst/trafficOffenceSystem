<?php
     include('../include/officer_dashboard.php'); 
    
    ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add New Offence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css"/>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body> 
     
    <section id="main-content">
          <section class="wrapper site-min-height">
              <h1 style="text-align: center;">Register New Offender</h1>
    <form class="form" name="myForm" onsubmit="validate()"action="../controllers/officer_register_offender_handler.php" method="post">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control input-lg" name="name" placeholder="Offender Name"required>
        </div>
        <div class="form-group ">
            <label>Vehicle Chasis Number</label>
            <input type="text" class="form-control input-lg"name="chasis_no" placeholder="Vehicle Chasis Number" required>
        </div> 
        <div class="form-group">
            <label>Vehicle Plate Number</label>
            <input type="text" class="form-control input-lg" name="plate_no" placeholder="Vehicle Plate Number"required>
        </div> 
          <div class="form-group input-lg">
            <label>Vehicle Type</label>
            <select name="vehicle_type" required>
                <option value="">... Select ...</option>
                <option value="car">Car</option>
                <option value="truck">Truck</option>
                <option value="pickup">Pick Up</option>
                <option value="suv">S.U.V</option>
                <option value="bike">Bike</option>
                <option value="tricycle">Tricycle</option>
                 <option value="bicycle">Bicycle</option>
                <option value="trailer">Trailer</option>
            </select>
        </div>
        <div class="form-group input-lg">
            <label>Committed Offence</label>
            <select name="offence"required>
                <option value="">... Select ...</option>
             <option value="LSV">LIGHT/SIGN VIOLATION</option>
              <option value="ROB">ROAD OBSTRUCTION</option>
               <option value="RTV">ROUTE VIOLATION</option>
                <option value="SLV">SPEED LIMIT VIOLATION</option>
                 <option value="VLV">VEHICLE LICENCE VIOLATION</option>
                  <option value="NPV">VEHICLE NUMBER PLATE VIOLATION</option>
                   <option value="DLV">DRIVER’S LICENCE VIOLATION</option>
                   <option value="WOV">WRONGFUL OVERTAKING</option>
                   <option value="RMV">ROAD MARKING VIOLATION</option>
                   <option value="CSV">CAUTION SIGN VIOLATION</option>
                   <option value="DGD">DANGEROUS DRIVING</option>
                   <option value="DUI">DRIVING UNDER ALCOHOL OR DRUG INFLUENCE</option>
                   <option value="OFD">OPERATING A VEHICLE WITH FORGED DOCUMENTS</option>
                   <option value="UTS">UNAUTHORIZED REMOVAL OF OR TAMPERING WITH ROAD SIGNS</option>
                   <option value="DMV">DO NOT MOVE VIOLATION</option>
                   <option value="ICW">INADEQUATE CONSTRUCTION WARNING</option>
                   <option value="CAV">CONSTRUCTION AREA SPEED LIMIT VIOLATION</option>
                   <option value="FMO">FAILURE TO MOVE OVER</option>
                   <option value="FCM">FAILURE TO COVER UNSTABLE MATERIALS</option>
                   <option value="OVL">OVERLOADING</option>
                    <option value="TYY">DRIVING WITH WORN-OUT TYRE OR WITHOUT SPARE TYRE</option>
                    <option value="VWV">DRIVING WITHOUT OR WITH SHATTERED WINDSCREEN</option>
                    <option value="FFF">FAILURE TO FIX RED FLAG ON PROJECTED LOAD</option>
                    <option value="AMD">ASSAULTING MARSHAL ON DUTY</option>
                    <option value="OMD">OBSTRUCTING MARSHAL ON DUTY</option>
                    <option value="ACS">ATTEMPTING TO CORRUPT MARSHAL</option>
                    <option value="CUSTODY_FEE">CUSTODY FEE N200 per day after 24 hours</option>
                    <option value="FEV">DRIVING WITHOUT SPECIFIED FIRE EXTINGUISHER</option>
                    <option value="PMV">DRIVING A COMMERCIAL VEHICLE WITHOUT PASSENGER MANIFEST</option>
                    <option value="SUV">DRIVING WITHOUT SEAT BELT</option>
                    <option value="UPD">USE OF PHONE WHILE DRIVING</option>
                    <option value="UDR">DRIVING A VEHICLE WHILE UNDER 18 YEARS</option>
                    <option value="RMH">RIDING MOTORCYCLE WITHOUT A CRASH HELMET</option>
                    <option value="ESE">EXCESSIVE SMOKE EMISSION</option>
                    <option value="MDV">MECHANICALLY DEFICIENT VEHICLE</option>
                    <option value="FLSD">FAILURE TO INSTALL SPEED LIMITING DEVICE</option>
                    <option value="OTHERS">Others...</option>
            </select>
        </div> 
         <div class="form-group input-lg">
            <label>Degree of Offence</label>
            <select name="offence_degree"required>
                <option value="">... Select ...</option>
             <option value="1">Degree 1</option>
              <option value="2">Degree 2</option>
               <option value="3">Degree 3</option>
            </select>
             
        </div> <br/> <div class="form-group input-lg">
            <label>Confiscated Particular  </label>
            <select name="confiscated_item" required>
                <option value="">... Select ...</option>
                <option value="driving_license">Driving License</option>
                <option value="vehicle_keys">Vehicle Keys</option>
                <option value="vehicle_particulars">Vehicle Particulars</option>
                <option value="plate_number">Plate Number</option>
                <option value="plate_certificate">Plate No. Certificate</option>
                <option value="vehicle_towed">The Vehicle was Towed</option>
                <option value="others">Others...</option>
            </select>
        </div>
   
        <div class="form-group">
            <label>Committed Location</label>
            <input type="text" class="form-control input-lg" name="committed_location" placeholder="Committed Offence Location" required>
        </div>
         <div class="form-group ">
            <label>Offender's Phone Number</label>
            <input type="text" class="form-control input-lg"name="phone" placeholder="Offender's Phone Number" required>
        </div> 
       <div class="form-group">
            <label>Officer's Remark</label>
           <textarea name="remarks" placeholder="Officer's Remarks" rows="10" cols="30"></textarea>
        </div>
        <div class="checkbox">
            <label>
            <input type="checkbox"> All information provided by me is true and accurate
            </label>
        </div>
                <button type="submit" class="btn btn-lg btn-success">Submit</button>
    </form>        	
</section><! --/wrapper -->
</section>
</body>
</html>
