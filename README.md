# Date-to-Sinhala
Convert Date string to Sinhala Date

### function parameters

get_date($date_time, $get = "ALL", $month_type = "NUM", $day_type = "NUM", $date_join = "-", $order = "Y-M-D")

* $date_time -> input date string
    * example -> "2020-05-16"

* $get -> return value
    * "ALL" -> default value and return year, month and date
    * "M" -> return month,
    * "D" -> return day

* $month_type -> month return format
    * "NUM" -> return month as number,
    * "SIN" -> return month as Sinhala Old format (දුරුතු, නවම්, මැදින්..)
    * "F" -> return full Sinhala name of month (ජනවාරි, පෙබරවාරි, මාර්තු...)
    * "S" -> return short Sinhala name of month (ජන, පෙබ, මාර්...)
    
* $day_type -> day return format
    * "NUM" -> return day as number,
    * "F" -> return full Sinhala name of day (සඳුදා, අඟහරුවාදා...)
    * "S" -> return short Sinhala name of day (අඟහ, බ්‍රහස්, සිකු...)
    * "SIN" -> return short Sinhala name of day (රිවිදා, කිවිදා, බුධදා...)
    
* $date_join -> glue symbol of date
    * example $ -> 2020$වෙසක්$සෙන
     
* $order -> return order of date
    * Y-M-D, Y-D-M, Y-D , M-D...
      
      
### Examples
```sh
$date_to_convert = "2020-05-16";
```
### 01

```sh
$date_data = $date_to_sin->get_date($date_to_convert, "ALL");
echo $date_data;
```
```
Output -> 2020-05-6
```

### 02

```sh
$date_data = $date_to_sin->get_date($date_to_convert, "M");
echo $date_data;
```
```
Output -> 05
```

### 03

```sh
$date_data = $date_to_sin->get_date($date_to_convert, "M","SIN");
echo $date_data;
```
```
Output -> වෙසක්
```

### 04

```sh
$date_data = $date_to_sin->get_date($date_to_convert, "D","","F");
echo $date_data;
```
```
Output -> සෙනසුරාදා
```


### 05

```sh
$date_data = $date_to_sin->get_date($date_to_convert, "D","","S");
echo $date_data;
```
```
Output -> සෙන
```

### 07

```sh
$date_data = $date_to_sin->get_date($date_to_convert, "D","","SIN");
echo $date_data;
```
```
Output -> ශනිදා
```


### 08

```sh
$date_data = $date_to_sin->get_date($date_to_convert, "ALL","SIN","S");
echo $date_data;
```
```
Output -> 2020-වෙසක්-සෙන
```


### 09

```sh
$date_data = $date_to_sin->get_date($date_to_convert, "ALL","SIN","S","/");
echo $date_data;
```
```
Output -> 2020/වෙසක්/සෙන
```

### 10

```sh
$date_data = $date_to_sin->get_date($date_to_convert, "ALL","SIN","S","/","D-M-Y");
echo $date_data;
```
```
Output -> සෙන/වෙසක්/2020
```


### 11

```sh
$date_data = $date_to_sin->get_date($date_to_convert, "ALL","SIN","S","/","M-D");
echo $date_data;
```
```
Output -> වෙසක්/සෙන
```