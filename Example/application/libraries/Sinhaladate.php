<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

    public function get_date($date_time_data)
    {
        if (isset($date_time_data['date_time'])) {
            $date_time = $date_time_data['date_time'];
            if ($date_time) {
                return $this->generate_date($date_time_data);
            } else {
                return "Enter date time string to convert";
            }
        } else {
            return "date_time index not found!";
        }
    }

    private function generate_date($date_time_data)
    {
        $want_type = "all";
        $date_format = "y-m-d";
        $m_type = "f";
        $d_type = "f";
        $t_type = "f";
        $join_string = "-";
        $time_format = "12";
        $time_order = "h-m-s-a";

        if (isset($date_time_data['want'])) {
            $w_type = $date_time_data['want'];
            if ($w_type) {
                $want_type = $w_type;
            }
        }

        if (isset($date_time_data['want_m_type'])) {
            $w_m_type = $date_time_data['want_m_type'];
            if ($w_m_type) {
                $m_type = $w_m_type;
            }
        }

        if (isset($date_time_data['want_d_type'])) {
            $w_d_type = $date_time_data['want_d_type'];
            if ($w_d_type) {
                $d_type = $w_d_type;
            }
        }

        if (isset($date_time_data['want_t_type'])) {
            $w_t_type = $date_time_data['want_t_type'];
            if ($w_t_type) {
                $t_type = $w_t_type;
            }
        }

        if (isset($date_time_data['date_join_type'])) {
            $j_type = $date_time_data['date_join_type'];
            if ($j_type) {
                $join_string = $j_type;
            }
        }

        if (isset($date_time_data['format'])) {
            $format = $date_time_data['format'];
            if ($format) {
                $date_format = $format;
            }
        }

        if (isset($date_time_data['time_order'])) {
            $time_order_g = $date_time_data['time_order'];
            if ($time_order_g) {
                $time_order = $time_order_g;
            }
        }

        if (isset($date_time_data['time_format'])) {
            $t_format = $date_time_data['time_format'];
            if ($t_format) {
                $time_format = $t_format;
            }
        }

        $date_time = $date_time_data['date_time'];
        return $this->setup_date($date_time, $want_type, $d_type, $m_type, $t_type, $date_format, $time_format, $join_string, $time_order);
    }

    private function setup_date($date_time, $want, $d_want_type, $m_want_type, $t_want_type, $format, $time_format, $join_string, $time_order)
    {
        $g_year = date("Y", strtotime($date_time));
        $g_month = date("m", strtotime($date_time));
        $g_day = date('w', strtotime($date_time));
        $g_d_m = date('d', strtotime($date_time));


        $month = $this->format_month($g_month, $m_want_type);
        $day = $this->format_day($g_day, $g_d_m, $d_want_type);
        $time = $this->format_time($date_time, $time_format, $t_want_type, $time_order);

        $date = $this->format_all($g_year, $month, $day, $time, $join_string, $format, "date");
        $all = $this->format_all($g_year, $month, $day, $time, $join_string, $format, "all");
        switch ($want) {
            case "y":
                return $g_year;
                break;
            case "m":
                return $month;
                break;
            case "d":
                return $day;
                break;
            case "time":
                return $time;
            case "date":
                return $date;
            case "all":
                return $all;
            default:
                return $all;
                break;
        }
    }

    private function format_month($g_month, $m_want_type)
    {
        $view_month = "";
        foreach ($this->months as $month) {
            if ($month['M_NUM'] == $g_month) {
                switch ($m_want_type) {
                    case 's':
                        $view_month = $month['M_SHORT_NAME'];
                        break;
                    case 'sin':
                        $view_month = $month['M_SINHALA_NAME'];
                        break;
                    case 'f':
                        $view_month = $month['M_FULL_NAME'];
                        break;
                    default:
                        $view_month = $g_month;
                        break;
                }
            }
        }

        return $view_month;
    }

    private function format_day($g_date, $g_d_m, $d_want_type)
    {
        $view_day = "";
        foreach ($this->days as $day) {
            if ($day['D_NUM'] == $g_date) {
                switch ($d_want_type) {
                    case 's':
                        $view_day = $day['D_SHORT_NAME'];
                        break;
                    case 'f':
                        $view_day = $day['D_FULL_NAME'];
                        break;
                    case 'sin':
                        $view_day = $day['D_SINHALA_NAME'];
                        break;
                    default:
                        $view_day = $g_d_m;
                        break;
                }
            }
        }
        return $view_day;
    }

    private function format_time($date_time_string, $time_format, $time_view_type, $time_order)
    {
        $time_view = array();

        $time_string = explode("-", $time_order);

        $time_24 = date('H:i:s', strtotime($date_time_string));
        $time_12 = date('g:i:s', strtotime($date_time_string));
        $time_12_indicator = date('a', strtotime($date_time_string));


        $time_indi = array(
            "f" => "පෙරවරු ",
            "s" => "පෙව ",
            "sin" => "පූර්වභාග "
        );

        if ($time_12_indicator == "pm") {
            $time_indi["f"] = "පස්වරු ";
            $time_indi["s"] = "පව ";
            $time_indi["sin"] = "අපරභාග ";
        }


        foreach ($time_string as $order) {
            switch ($order) {
                case 'h':
                    switch ($time_format) {
                        case '24':
                            array_push($time_view, date('H', strtotime($date_time_string)));
                            break;
                        default:
                            array_push($time_view, date('g', strtotime($date_time_string)));
                            break;
                    }
                    break;
                case 'm':
                    array_push($time_view, date('i', strtotime($date_time_string)));
                    break;
                case 's':
                    array_push($time_view, date('s', strtotime($date_time_string)));
                    break;
                default:
                    break;
            }
        }

        $time = join(":", $time_view);
        foreach ($time_string as $order) {
            switch ($order) {
                case 'a':
                    switch ($time_format) {
                        case '12':
                            $time = $time_indi[$time_view_type] . " " . $time;
                            break;
                        case '24':
                            $time .= "";
                            break;
                        default:
                            $time .= $time_indi[$time_view_type] . " " . $time;
                            break;
                    }
                    break;
                default:
                    break;
            }
        }

        return $time;
    }

    private function format_all($g_year, $month, $day, $time, $join_string, $format, $want)
    {

        $order_explode = explode("-", $format);
        $order_set = array();
        for ($x = 0; $x < count($order_explode); $x++) {
            switch ($order_explode[$x]) {
                case 'm':
                    array_push($order_set, $month);
                    break;
                case 'd':
                    array_push($order_set, $day);
                    break;
                case 'y':
                    array_push($order_set, $g_year);
                    break;
                default:
                    break;
            }
        }

        if ($want == "all") {
            $date_time = join($join_string, $order_set);
            return $date_time . " " . $time;
        } else {
            $date_time = join($join_string, $order_set);
            return $date_time;
        }
    }
}
