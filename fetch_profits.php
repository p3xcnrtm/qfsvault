<?php
session_start();

// Database connection
$host = "v8d.h.filess.io"; // e.g., "localhost"
$username = "QfsLedger_fieldzulu"; // e.g., "root"
$password = "46557c4ef79234b6221acecd840ea63f1f9c8534"; 
$database = "QfsLedger_fieldzulu";
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get current time and time 24 hours ago
$now = date('Y-m-d H:i:s');
$yesterday = date('Y-m-d H:i:s', strtotime('-1 day'));

// Fetch total profits for the last 24 hours
$query = "SELECT SUM(profit_amount) AS total_profits_24 FROM profits_table WHERE profit_date BETWEEN '$yesterday' AND '$now'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$profits_24_hours = $row['total_profits_24'] ? $row['total_profits_24'] : 0;

// Fetch previous day's total profits (the 24 hours before yesterday)
$day_before_yesterday = date('Y-m-d H:i:s', strtotime('-2 days'));
$previous_day_query = "SELECT SUM(profit_amount) AS previous_day_profits FROM profits_table WHERE profit_date BETWEEN '$day_before_yesterday' AND '$yesterday'";
$previous_result = $conn->query($previous_day_query);
$previous_row = $previous_result->fetch_assoc();
$previous_profits = $previous_row['previous_day_profits'] ? $previous_row['previous_day_profits'] : 0;

// Calculate percentage increase
if ($previous_profits > 0) {
    $profit_increase_percentage = (($profits_24_hours - $previous_profits) / $previous_profits) * 100;
} else {
    $profit_increase_percentage = 0;
}

// Store profits in session
$_SESSION['profits'] = $profits_24_hours;

// Check if profits increased by at least 4%
if ($profit_increase_percentage >= 4) {
    $increase_status = "Profits have increased by at least 4%.";
} else {
    $increase_status = "Profits have not increased enough. Current increase: " . round($profit_increase_percentage, 2) . "%.";
}

// Store status in session
$_SESSION['increase_status'] = $increase_status;

// Close connection
$conn->close();
?>
