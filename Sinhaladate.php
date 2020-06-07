<?php

/**
 * Author: Jayendra Matarage
 * Date: 5/31/2020
 * Time: 12:37 AM
 */
class Sinhaladate
{
    private $months = array(
        array(
            "M_NUM" => "01",
            "M_FULL_NAME" => "ජනවාරි",
            "M_SHORT_NAME" => "ජන",
            "M_SINHALA_NAME" => "දුරුතු"
        ),
        array(
            "M_NUM" => "02",
            "M_FULL_NAME" => "පෙබරවාරි",
            "M_SHORT_NAME" => "පෙබ",
            "M_SINHALA_NAME" => "නවම්"
        ),
        array(
            "M_NUM" => "03",
            "M_FULL_NAME" => "මාර්තු",
            "M_SHORT_NAME" => "මාර්",
            "M_SINHALA_NAME" => "මැදින්"
        ),
        array(
            "M_NUM" => "04",
            "M_FULL_NAME" => "අප්‍රේල්",
            "M_SHORT_NAME" => "අප්‍රේල්",
            "M_SINHALA_NAME" => "බක්"
        ),
        array(
            "M_NUM" => "05",
            "M_FULL_NAME" => "මැයි",
            "M_SHORT_NAME" => "මැයි",
            "M_SINHALA_NAME" => "වෙසක්"
        ),
        array(
            "M_NUM" => "06",
            "M_FULL_NAME" => "ජූනි",
            "M_SHORT_NAME" => "ජූනි",
            "M_SINHALA_NAME" => "පොසොන්"
        ),
        array(
            "M_NUM" => "07",
            "M_FULL_NAME" => "ජූලි",
            "M_SHORT_NAME" => "ජූලි",
            "M_SINHALA_NAME" => "ඇසළ"
        ),
        array(
            "M_NUM" => "08",
            "M_FULL_NAME" => "අගෝස්තු",
            "M_SHORT_NAME" => "අගෝ",
            "M_SINHALA_NAME" => "නිකිණි"
        ),
        array(
            "M_NUM" => "09",
            "M_FULL_NAME" => "සැප්තැම්බර්",
            "M_SHORT_NAME" => "සැප්",
            "M_SINHALA_NAME" => "බිනර"
        ),
        array(
            "M_NUM" => "10",
            "M_FULL_NAME" => "ඔක්තෝබර්",
            "M_SHORT_NAME" => "ඔක්",
            "M_SINHALA_NAME" => "වප්"
        ),
        array(
            "M_NUM" => "11",
            "M_FULL_NAME" => "නොවැම්බර්",
            "M_SHORT_NAME" => "නොවැ",
            "M_SINHALA_NAME" => "ඉල්"
        ),
        array(
            "M_NUM" => "12",
            "M_FULL_NAME" => "දෙසැම්බර්",
            "M_SHORT_NAME" => "දෙසැ",
            "M_SINHALA_NAME" => "උඳුවප්"
        )
    );

    private $days = array(
        array(
            "D_NUM" => "1",
            "D_FULL_NAME" => "සඳුදා",
            "D_SHORT_NAME" => "සඳුදා",
            "D_SINHALA_NAME" => "සඳුදා"
        ),
        array(
            "D_NUM" => "2",
            "D_FULL_NAME" => "අඟහරුවාදා",
            "D_SHORT_NAME" => "අඟහ",
            "D_SINHALA_NAME" => "කුජදා"
        ),
        array(
            "D_NUM" => "3",
            "D_FULL_NAME" => "බදාදා",
            "D_SHORT_NAME" => "බදාදා",
            "D_SINHALA_NAME" => "බුධදා"
        ),
        array(
            "D_NUM" => "4",
            "D_FULL_NAME" => "බ්‍රහස්පතින්දා",
            "D_SHORT_NAME" => "බ්‍රහස්",
            "D_SINHALA_NAME" => "ගුරුදා"
        ),
        array(
            "D_NUM" => "5",
            "D_FULL_NAME" => "සිකුරාදා",
            "D_SHORT_NAME" => "සිකු",
            "D_SINHALA_NAME" => "කිවිදා"
        ),
        array(
            "D_NUM" => "6",
            "D_FULL_NAME" => "සෙනසුරාදා",
            "D_SHORT_NAME" => "සෙන",
            "D_SINHALA_NAME" => "ශනිදා"
        ),
        array(
            "D_NUM" => "7",
            "D_FULL_NAME" => "ඉරිදා",
            "D_SHORT_NAME" => "ඉරිදා",
            "D_SINHALA_NAME" => "රිවිදා"
        )
    );

    public function get_date($date_time, $get = "ALL", $month_type = "NUM", $day_type = "NUM", $date_join = "-", $order = "Y-M-D")
    {

        $g_year = date("Y", strtotime($date_time));
        $g_month = date("m", strtotime($date_time));
        $g_day = date('w', strtotime($date_time));

        $view_day = "";
        $view_month = "";
        foreach ($this->days as $day) {
            if ($day['D_NUM'] == $g_day) {
                switch ($day_type) {
                    case 'S':
                        $view_day = $day['D_SHORT_NAME'];
                        break;
                    case 'F':
                        $view_day = $day['D_FULL_NAME'];
                        break;
                    case 'SIN':
                        $view_day = $day['D_SINHALA_NAME'];
                        break;
                    default:
                        $view_day = $g_day;
                        break;
                }
            }
        }

        foreach ($this->months as $month) {
            if ($month['M_NUM'] == $g_month) {
                switch ($month_type) {
                    case 'S':
                        $view_month = $month['M_SHORT_NAME'];
                        break;
                    case 'SIN':
                        $view_month = $month['M_SINHALA_NAME'];
                        break;
                    case 'F':
                        $view_month = $month['M_FULL_NAME'];
                        break;
                    default:
                        $view_month = $g_month;
                        break;
                }
            }
        }

        switch ($get) {
            case 'D':
                return $view_day;
                break;
            case 'M':
                return $view_month;
                break;
            default:
                $order_explode = explode("-", $order);
                $order_set = array();
                for ($x = 0; $x < count($order_explode); $x++) {
                    switch ($order_explode[$x]) {
                        case 'M':
                            array_push($order_set, $view_month);
                            break;
                        case 'D':
                            array_push($order_set, $view_day);
                            break;
                        case 'Y':
                            array_push($order_set, $g_year);
                            break;
                        default:
                            break;
                    }
                }
                return join($date_join, $order_set);
                break;
        }
    }
}
