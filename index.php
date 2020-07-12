<?php
/**
 * Author: Jayendra Matarage
 * Date: 5/31/2020
 * Time: 12:37 AM
 */

include 'Sinhaladate.php';
$date_to_sin = new Sinhaladate();

/*$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "time",
    "want_m_type" => "num",
    "want_d_type" => "s",
    "want_t_type" => "f",
    "date_join_type" => "-",
    "format" => "y-m-d",
    "time_format" => "12"
);
*/

$date_object = array(
    "date_time" => "2020-07-12 13:15:00",
    "want" => "all",
    "time_format" => "12",
    "time_order" => "a"
);

$date_data = $date_to_sin->get_date($date_object);

echo $date_data;
?>