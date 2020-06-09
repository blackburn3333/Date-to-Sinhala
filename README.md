# Date-to-Sinhala
Convert Date string to Sinhala Date V2.0

### function parameters

$date_data = $date_to_sin->get_date($date_object);

* $date_time -> input data
    * $date_object = array(
          "date_time" => "2020-06-17 13:15:00",
          "want" => "m",
          "want_m_type" => "sin",
          "want_d_type" => "s",
          "want_t_type" => "sin",
          "date_join_type" => "-",
          "format" => "y-m-d",
          "time_format" => "12"
      );
### Input object index details

* date_time -> date time string

* want -> final return value
    * "all" -> return date and time
    * "date" -> return date
    * "time" -> return time
    * "y" -> return year
    * "m" -> return month,
    * "d" -> return day

* want_m_type -> month return format
    * "num" -> return month as number,
    * "sin" -> return month as Sinhala Old format (දුරුතු, නවම්, මැදින්..)
    * "f" -> return full Sinhala name of month (ජනවාරි, පෙබරවාරි, මාර්තු...)
    * "s" -> return short Sinhala name of month (ජන, පෙබ, මාර්...)
   
* want_d_type -> day return format
    * "num" -> return day as number,
    * "sin" -> return short Sinhala name of day (රිවිදා, කිවිදා, බුධදා...)
    * "f" -> return full Sinhala name of day (සඳුදා, අඟහරුවාදා...)
    * "s" -> return short Sinhala name of day (අඟහ, බ්‍රහස්, සිකු...)
    
* want_t_type -> return time type
    * "sin" -> return Sinhala name of time (අපරභාග, පූර්වභාග)
    * "f" -> return full Sinhala name of time (පස්වරු, පෙරවරු)
    * "s" -> return short Sinhala name of time (පව, පෙව)
    
* date_join_type -> glue symbol of date
    * example $ -> 2020$වෙසක්$සෙන
     
* format -> return order of date
    * Y-M-D, Y-D-M, Y-D , M-D...
      
      
### Examples object
```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "time",
    "want_m_type" => "num",
    "want_d_type" => "s",
    "want_t_type" => "f",
    "date_join_type" => "-",
    "format" => "y-m-d",
    "time_format" => "12"
);
```
### 01

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "all"
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> 2020-ජූනි-බදාදා පස්වරු 1:15
```

### 02

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "m"
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> ජූනි
```

### 03

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "m",
    "want_m_type" => "num",
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> 06
```

### 04

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "m",
    "want_m_type" => "f",
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> ජූනි
```


### 05

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "d",
    "want_d_type" => "f",
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> බදාදා
```

### 07

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "d",
    "want_d_type" => "sin",
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> බුධදා
```


### 08

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "date",
    "want_d_type" => "sin",
    "want_m_type" => "s",
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> 2020-ජූනි-බුධදා
```


### 09

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "date",
    "want_d_type" => "sin",
    "want_m_type" => "s",
    "date_join_type" => "/",
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> 2020/ජූනි/බුධදා
```

### 10

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "date",
    "want_d_type" => "sin",
    "want_m_type" => "s",
    "date_join_type" => "/",
    "format" => "d-y-m",
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> බුධදා/2020/ජූනි
```


### 11

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "time",
    "time_format" => "12"
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> පස්වරු 1:15
```

### 12

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "time",
    "want_t_type" => "s",
    "time_format" => "12"
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> පව 1:15
```


### 13

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "time",
    "want_t_type" => "sin",
    "time_format" => "12"
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> අපරභාග 1:15
```

### 14

```sh
$date_object = array(
    "date_time" => "2020-06-17 13:15:00",
    "want" => "time",
    "time_format" => "24"
);
$date_data = $date_to_sin->get_date($date_object);
echo $date_data;
```
```
Output -> 13:15:00
```