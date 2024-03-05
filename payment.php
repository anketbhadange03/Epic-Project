<?php include 'bookcon.php'?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Booking</title>
  <link rel="stylesheet" href="C:\xampp\htdocs\payment.css">
  <style>body{background-image: url('/spiral.png'); padding:80px; background-size:50%;background-repeat:no-repeat;}</style>

<style>
		.header-bg h3{margin:7px 0; font-size: 17px;}
		.header-name span a i {color: #fff; padding-right: 20px;}


#btn-des{
	color:#fff;
	background-color: #d9534f;
	padding:10px 17px;
	border-radius: 0px;
}
.header-bg h3 { float: left; color:#000; }

.header-bg h3 + span {
    margin: 13px;
    display: block;
    float: left;
}
.header-bg {
    background-color: #fbda0a;
    min-height: 50px;
    color: #ffffff;
}
.content-left{
	background:#ececec!important;
}
.content-right{
	overflow-y:scroll;
	padding:20px 20px 60px 20px;
}
input[type="date"].form-control, input[type="time"].form-control, input[type="datetime-local"].form-control, input[type="month"].form-control { line-height: 18px; }
#hide-flow{
	overflow: hidden!important;
}
#map-canvas{ max-height: 620px;
display: flex;}
.text-danger{
	font-size:14px;
}
.form-control{
	font-size:13px;
}
.select2-container .select2-selection--single .select2-selection__rendered{
	font-size:15px;
}
.padding-disable{
	padding:0px;
}
#priceS{
	font-size:16px;
}
.text-heavy{
	font-size:16px;
	vertical-align: baseline;
	margin-top: 6px;
}
.select2-results__options li{
	font-size: 14px;
}
.select2-container--default{
	width:100%!important;
}

.btn-success{
	background-color: #4CAF50; /* Green */
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
}
</style>
</head>
<body>

   <div id=pay>  </div> 
  
     
     <br>
     <form id="wrapped" method="POST">
					<label class="text-danger">Patient ID *</label>
                    <input name="train" type="text">
          
																			


							
								<label class="text-danger">Patient Name *</label>
								<input name="name" maxlength="50" required="required" class="form-control" type="text" id="passenger_name" placeholder="Enter Passenger Name">
							<br><br>
							
								<label class="text-danger">Name of Healthcare provider</label>
								<input name="mobile" maxlength="10" required="required" class="form-control" type="text" id="passenger_mobile" placeholder="Enter Passenger Mobile">

							<br><br>
									
							

								<label class="text-danger">profession *</label>
								<select class="js-example-basic-single form-control" name="station" id="railway_station">
									<option>Select profession</option> 
																			<option value="pharm">pharmacist</option>
																			<option value="doc">doctor</option>
																			
																	</select><br><br>
								
																	
								<label class="text_danger">Date*</label>
								<input type="Date" name=date required>	
								
								<label class="text_danger">time*</label>
								<input type="time" name=time required>	
								
							
							

													

							<br><br>
								<label class="Duration"> duration*</label>
								<select name="bags" required="required" class="form-control" id="total_bags" value="">
									<option value="10"> 10 mins </option>
									<option value="20"> 20 mins </option>
									<option value="30"> 30 mins </option>
								</select>
								
							

							<br><br>
								<label class="text-danger">Hospital/Pharmacy name *</label><br>
								<input name="coach" maxlength="10" required="required" class="form-control" type="text" id="coach_number" placeholder="Enter Coach Number">
							
                            <br><br>
							
								<label class="text-danger">medicines *</label><br>
								<textarea name="seat" row='50' required="required" class="form-control" type="text" id="seat_number" placeholder="Enter"></textarea>
							     
								<label class="text-danger">Prescription *</label><br>
								<textarea name="email" row='50' cols='50' required="required" class="form-control" type="text" id="email" placeholder="prescribe"> </textarea>
        
								

	
                <br><br>
                                    
									<input type="submit" name="book" id="submit" class="btn-success" value="submit"/>
							
     
         

</form>
</body>
</html>