<?php

$servername = 'localhost';
$username = 'wealthcr_spreadit_global_user';
$password = 'SGpassword@@2019';
$dbname = 'wealthcr_spreadit_global_db';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



//QUERY (SINGLE RECORD) CALCULATOR SETTINGS RECORD
$table = "elc_calculator_settings";
$sql = "SELECT id, yuan_dollar_rate, domestic_transportation_cost, service_charge_percentage FROM {$table} WHERE id = 1";
$result = $conn->query($sql);

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

$yuan_dollar_rate = $data['yuan_dollar_rate'];
$domestic_transportation_cost = $data['domestic_transportation_cost'];
$service_charge_percentage = $data['service_charge_percentage'];




//QUERY (MULTIPLE RECORDS) SHIPPING RATE RECORDS
$table2 = "country_shipping_rate";
$sql2 = "SELECT id, country_slug, country_name, shipping_rate, shipping_rate_cbm FROM {$table2}";
$result2 = $conn->query($sql2);



?>