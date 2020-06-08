<?php
/**
 * Author: Jayendra Matarage
 * Date: 5/31/2020
 * Time: 12:37 AM
 */

include 'Sinhaladate.php';
$date_to_sin = new Sinhaladate();

$date_to_convert = "2020-05-17 13:15:00";
$date_data = $date_to_sin->get_date($date_to_convert, "TIME", "", "","","","12");

echo $date_data;
?>