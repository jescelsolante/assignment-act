<?php
date_default_timezone_set('Asia/Manila');
$hour = date('H');

if ($hour < 12) {
    echo "Good Morning, 
    Philippines!";
} elseif ($hour < 18) {
    echo "Good Afternoon, Philippines!";
} else {
    echo "Good Evening, Philippines!";
}
?>
