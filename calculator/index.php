<?php

require('cfg/env.php');

?>







<!DOCTYPE html>

<html>
<head><meta charset="euc-kr">
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1674319302866699');
  fbq('track', 'PageView');
</script>
	<title>Estimated Landing Cost Calculator</title>
   <!--Made with love by Mutiullah Samim -->
   
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="China Procurement and Shipping Experts, Estimated Landing Cost Calculator">
    <meta name="keywords" content="Buy, Sell, Shipping, Importation Calculator, Estimated Landing Cost Calculator">
    <meta name="author" content="SPREADIT GLOBAL"> 
	
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	
	<style>
	/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('https://dashboard.spreaditglobal.com/uploads/images/bkg.jpg');
background-size: cover;
background-repeat: no-repeat;
height: auto;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 900px;
margin-top: auto;
margin-bottom: auto;
width: 500px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
		
.{
margin-left: 4px;
}
.frame{
border: 7px double #FFA200;
border-radius: 15px 15px 15px 15px;
}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    
		<center>
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins
			class="adsbygoogle"
			style="display:block"
			data-ad-client="ca-pub-3365533843420015"
			data-ad-slot="2714064530"
			data-ad-format="auto"
			data-full-width-responsive="true"></ins><script>
				 (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</center>    
    
<div class="container">
	<div class="d-flex justify-content-center h-100">
		
		


		
		<div class="card">
			
			<center><img width="120" height="50" style="padding: 7px;" src="https://spreaditglobal.com/assets/img/logo.png"></center>
			
			<div class="card-header">
			<h5 style="color:#ADADAD; text-align: center;">Landing Cost Calculator</h5>
				<h2 style="color:#FFA400; text-align: center; padding: 7px;" class="frame"  id="displayx">$0.00</h2>
				<small style="color: gray; text-align: center;"><center>Estimated Landing Cost</center></small>  
				<!--<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>-->
			</div>
			<div class="card-body">
				<form>

					
		<!-- ELC CALCULATOR DATA -->
		<input type="hidden" name="yuan_dollar_rate" id="yuan_dollar_rate" value="<?php echo $yuan_dollar_rate; ?>" ?>
								
		<input type="hidden" name="domestic_transportation_cost" id="domestic_transportation_cost" value="<?php echo $domestic_transportation_cost; ?>" ?>
								
		<input type="hidden" name="service_charge_percentage" id="service_charge_percentage" value="<?php echo $service_charge_percentage; ?>" ?>
				    
				    
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-ship"></i></span>
						</div>
						<select id="shipping_plan" name="shipping_plan" class="form-control round"  onChange="select_country(this)" required>
											<option value=""> - Shipping Plan- </option>
											<option myplan="air" value="air">Air Shipping (Measures by Weight in KG)</option>
											<option myplan="sea" value="sea">Sea Shipping (Measures by Volume in CBM)</option>
										</select>
					</div>
					    
					<div class="input-group form-group">
						<div class="input-group-prepend">
                            <span class="input-group-text">
                                <svg class="bi bi-arrow-left-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.146 7.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 11l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                                    <path fill-rule="evenodd" d="M2 11a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 11zm3.854-9.354a.5.5 0 0 1 0 .708L3.207 5l2.647 2.646a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
                                    <path fill-rule="evenodd" d="M2.5 5a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </span>
						</div>
						<select id="currency_type" name="currency_type" class="form-control round" required>
											  
											<option value=""> - Currency - </option>
											
											<option value="Dollar">($) US Dollar</option>
											
											<option value="Yuan">(¥) Chinese Yuan</option>
											
										</select>
					</div>
					
					

		                        
					<div class="input-group form-group">
						<div class="input-group-prepend">
<span class="input-group-text">
    <svg class="bi bi-box-seam" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
    </svg>
</span>
						</div>
						<input type="number" step="0.01" min="0.00" max="9999999999"  placeholder="Product (Unit) Cost ($)|(¥) in selected currency" id="costx" class="form-control round" name="costx" required>
						
					</div>	      
					

			
					
					
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
<span class="input-group-text">
    <svg class="bi bi-arrows-collapse" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8zm6-7a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V1.5A.5.5 0 0 1 8 1z"/>
      <path fill-rule="evenodd" d="M10.354 3.646a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L8 5.293l1.646-1.647a.5.5 0 0 1 .708 0zM8 15a.5.5 0 0 0 .5-.5V10a.5.5 0 0 0-1 0v4.5a.5.5 0 0 0 .5.5z"/>
      <path fill-rule="evenodd" d="M10.354 12.354a.5.5 0 0 0 0-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 .708.708L8 10.707l1.646 1.647a.5.5 0 0 0 .708 0z"/>
    </svg>
</span>
						</div>
						<input type="number" step="0.01" min="0.00" max="9999999999"  placeholder="Product (Unit) Weight(Kg) / Volume(CBM)" id="weightx" class="form-control" name="weightx" required>
					</div>		
					
					
					<script>
						$(document).ready(function(){
						  $('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
	
					
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
<span class="input-group-text">
    <svg class="bi bi-minecart-loaded" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M4 15a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm8-1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM.115 3.18A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 14 12H2a.5.5 0 0 1-.491-.408l-1.5-8a.5.5 0 0 1 .106-.411zm.987.82l1.313 7h11.17l1.313-7H1.102z"/>
      <path fill-rule="evenodd" d="M6 1.5a2.498 2.498 0 0 1 4 0c.818 0 1.545.394 2 1 .67 0 1.28.265 1.729.694l-.692.722A1.493 1.493 0 0 0 12 3.5c-.314 0-.611-.15-.8-.4-.274-.365-.71-.6-1.2-.6-.314 0-.611-.15-.8-.4a1.497 1.497 0 0 0-2.4 0c-.189.25-.486.4-.8.4-.507 0-.955.251-1.228.638a2.65 2.65 0 0 1-.634.634 1.511 1.511 0 0 0-.263.236l-.75-.662a2.5 2.5 0 0 1 .437-.391 1.63 1.63 0 0 0 .393-.393A2.498 2.498 0 0 1 6 1.5z"/>
    </svg>
</span>
						</div>
						<input type="number" step="1" min="0" max="9999999999"   placeholder="Product quantity to be purchased"  id="quantityx" class="form-control rounded" placeholder="e.g. 5" name="quantityx" required>
					</div>					
					


					
					
					<div class="input-group form-group">
					    
						<div class="input-group-prepend">
							<span class="input-group-text"><svg class="bi bi-flag-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M3.762 2.558C4.735 1.909 5.348 1.5 6.5 1.5c.653 0 1.139.325 1.495.562l.032.022c.391.26.646.416.973.416.168 0 .356-.042.587-.126a8.89 8.89 0 0 0 .593-.25c.058-.027.117-.053.18-.08.57-.255 1.278-.544 2.14-.544a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5c-.638 0-1.18.21-1.734.457l-.159.07c-.22.1-.453.205-.678.287A2.719 2.719 0 0 1 9 9.5c-.653 0-1.139-.325-1.495-.562l-.032-.022c-.391-.26-.646-.416-.973-.416-.833 0-1.218.246-2.223.916A.5.5 0 0 1 3.5 9V3a.5.5 0 0 1 .223-.416l.04-.026z"/>
</svg></span>
						</div>
						
						<select id="destination_country" name="destination_country" class="form-control round"    required>
										<option value=""> -Shipping Rate- </option>	
											
				<?php  
							
					if ($result2->num_rows > 0) 
					{
					  // output data of each row
					  while($row2 = $result2->fetch_assoc()) 
					  {
						//echo "id: " . $row2["country_slug"];
						  ?>
							
							
							<option cbm="<?= $row2['shipping_rate_cbm']; ?>" myid="<?= $row2['country_slug']; ?>" value="<?= $row2['shipping_rate']; ?>" rate="<?= $row2['shipping_rate']; ?>"><?= $row2['country_name']; ?> ($<?= $row2['shipping_rate']; ?>/kg) or ($<?= $row2['shipping_rate_cbm']; ?>/CBM)</option>
							
							
						  <?php 
					  }
					} 
					else 
					{
					  echo "0 results";
					}
					$conn->close();		
				?>
							
							

											
	
										</select>
						
						
					</div>		                        
		                        
					
					
					<!--<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password">
					</div>-->
					
					
					
					
					
  					<div id="info1" style="color: #FFA400;"></div>
					
					<div id="warningxx" style="color: #FFA400;"></div><br>
					
					  
					
						     <div class="form-actions center">
	                            <!--<button type="button" class="btn btn-warning mr-1">
	                            	<i class="ft-x"></i> Cancel
	                            </button>-->
								
				 
								
								<button type="button" class="btn btn-info mr-1 btn-primary btn-sm" onClick="calculate_elc()">
<svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
  <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z"/>
  <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z"/>
</svg>
									<!--<i class="ft-display"></i>--> Calculate
								</button>

								<button type="button" class="btn btn-warning mr-1 btn-sm" onClick="resetx()">
<svg class="bi bi-backspace" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08z"/>
  <path fill-rule="evenodd" d="M5.83 5.146a.5.5 0 0 0 0 .708l5 5a.5.5 0 0 0 .707-.708l-5-5a.5.5 0 0 0-.708 0z"/>
  <path fill-rule="evenodd" d="M11.537 5.146a.5.5 0 0 1 0 .708l-5 5a.5.5 0 0 1-.708-.708l5-5a.5.5 0 0 1 .707 0z"/>
</svg>
									<!--<i class="ft-delete"></i>--> Reset
								</button>
								 
								 
								 
								 <button type="button" class="round btn btn-warning mr-1 btn-sm" onClick="window.history.back()">
<svg class="bi bi-arrow-90deg-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.104 2.396a.5.5 0 0 1 0 .708L3.457 5.75l2.647 2.646a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M2.75 5.75a.5.5 0 0 1 .5-.5h6.5a2.5 2.5 0 0 1 2.5 2.5v5.5a.5.5 0 0 1-1 0v-5.5a1.5 1.5 0 0 0-1.5-1.5h-6.5a.5.5 0 0 1-.5-.5z"/>
</svg>
									<!--<i class="ft-delete"></i>--> Back
								</button>
						
	                        </div>
					<br>
					<label class="col-md-12 label-control" for="projectinput1" style="color: white;">
						Start buying from Chinese Merchants <br> <a href="https://dashboard.spreaditglobal.com/login/home/login" target="_blank" ><b>Login</b></a> | <a href="https://dashboard.spreaditglobal.com/signup/home/signup" target="_blank"><b>SignUp</b></a>
					</label>
					
					
				</form>
				

				
		<center>
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins
			class="adsbygoogle"
			style="display:block"
			data-ad-client="ca-pub-3365533843420015"
			data-ad-slot="2714064530"
			data-ad-format="auto"
			data-full-width-responsive="true"></ins><script>
				 (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</center>
					

				
		
				
<script>

	
//ELC CALCULATOR
function calculate_elc(select){

	//shipping plan
	var g = document.getElementById("shipping_plan");
	var shipping_plan = g.options[g.selectedIndex].value;
	
	//destination country & rate
	var e = document.getElementById("destination_country");
	var ratex = e.options[e.selectedIndex].value;
	var ratex_cbm = e.options[e.selectedIndex].getAttribute('cbm');
	var countryx = e.options[e.selectedIndex].getAttribute('myid');

	//currency type
	var f = document.getElementById("currency_type");
	var currencyx = f.options[f.selectedIndex].value;
	
	
	//shipping variables
	var costx = document.getElementById("costx").value;
	var quantityx = document.getElementById("quantityx").value;
	var weightx = document.getElementById("weightx").value;
	
	//verify input values
	if(costx == "" || quantityx == "" || weightx == "" || ratex == "" || currencyx == "" || shipping_plan == ""){ 
		
	//display warning
	document.getElementById("warningxx").innerHTML = "You have missing field(s), provide the value(s) above</span>"; exit;
	}
	else
	{	
		//display warning
		document.getElementById("warningxx").innerHTML = "";
	}
	 
	//calculation parameters
	var costx = parseFloat(document.getElementById("costx").value);
	var quantityx = parseFloat(document.getElementById("quantityx").value);
	var weightx = parseFloat(document.getElementById("weightx").value);


	
	//shipping & clearing rate (scr)
	var isc = ratex; //International shipping cost (Dollar/KG)
	var dtc = parseFloat(document.getElementById("domestic_transportation_cost").value); //Domestic transportation cost ($10 per product)
	var ex_rate_yuan_dollar = parseFloat(document.getElementById("yuan_dollar_rate").value); //yuan to dollar
	var percentage = parseFloat(document.getElementById("service_charge_percentage").value);
	var service_charge_percentage = parseFloat(percentage/100);

	
	//CONDITION TO MANAGE SEA SHIPPING ONLY TO NIGERIA FOR NOW
	if(shipping_plan == "air"){}
	if(shipping_plan == "sea"){ratex = ratex_cbm;}
	if((shipping_plan == "sea") && (countryx !== "nigeria")){
		document.getElementById("info1").innerHTML = "The selected Shipping Plan can only be calculated for Nigeria ";exit;
	}
	
	
		//calculate for Dollar price 
		if(currencyx == "Dollar")
		{
			var elc = costx + (costx * service_charge_percentage) + (weightx * ratex) + dtc;
			elc = (parseFloat(elc) * quantityx).toFixed(2);
			elc = parseFloat(elc);

			//format for proper display in dollar currency
			var elcx = '$' + elc.toLocaleString();

			//display result
			document.getElementById("displayx").innerHTML = elcx;
			document.getElementById("info1").innerHTML = "";
		}
	 
		//calculate for Yuan price
		if(currencyx == "Yuan")
		{
			var elc = (costx * ex_rate_yuan_dollar) + ((costx * ex_rate_yuan_dollar) * service_charge_percentage) + (weightx * ratex) + dtc;
			elc = (parseFloat(elc) * quantityx).toFixed(2);
			elc = parseFloat(elc);

			//format for proper display in dollar currency
			var elcx = '$' + elc.toLocaleString();

			//display result
			document.getElementById("displayx").innerHTML = elcx;
			document.getElementById("info1").innerHTML = "";
		}
}	
	
	
	
	
	//DYNAMICALLY SELECT A COUNTRY FOR USER
	function select_country(select)
	{ 
		var my_planx = select.options[select.selectedIndex].getAttribute("myplan");

		if(my_planx == "sea"){
			//dynamically select a country for user
			$("#destination_country [myid='nigeria']").attr("selected","selected");
			document.getElementById("info1").innerHTML = "For now, our calculator does not provide calculation for Sea Shiping outside Nigeria. This means, for a Sea Shipping Plan, destination must be Nigeria as selected.";
		}
		else{
			//document.getElementById("info1").innerHTML = "";
		}
	}
	
	
	

	
	
	
	
	//RESET BUTTON
	function resetx()
	{
		//reset and empty fields
		document.getElementById("costx").value = "";
		document.getElementById("quantityx").value = "";
		document.getElementById("weightx").value = "";
		document.getElementById("destination_country").value = "";
		document.getElementById("shipping_plan").value = "";
		document.getElementById("currency_type").value = "";
		document.getElementById("displayx").innerHTML = "$0.00";
	}
	
	
</script>
				
				
				
				
				
			</div>
			
			

			
			
			
			<div class="card-footer">
				
<?php 
$filename = "count.txt";// the text file to store count
// Open the file foe reading current count
$fp = fopen($filename, 'r');

//Get exiting count
$count = fread($fp, filesize($filename));

//close file
fclose($fp);

//Add 1 to the existing count
$count = $count +1;

//Display the number of hits
echo "<small style='color:white;'>Calc Usage Hits: <b>" . $count. "</b></small>";

//Reopen to modify content
$fp = fopen($filename, 'w');

//write the new count to file
fwrite($fp, $count);

//close file
fclose($fp);
?>
				
			   <small style="color: #969696;" class="d-flex justify-content-cen">Copyright &#169; 2022 &nbsp; <b> Spreadit Limited</b></small>

				
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>