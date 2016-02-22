<?php
$action = isset($_GET['pid']) ? $_GET['pid'] : '';

switch ($action) {
    case 'getSchedule':
        echo getSchedule($_GET['date']);
        break;
    case 'setAppoitnment':
//         print_r($_POST);
//         break;
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        echo setAppointment($name, $phone);
        break;
    default:
        echo "none";
}

function getSchedule($date)
{
    $min = array(
        "00",
        "30"
    );

    $out = '';
    $hour = 0;
    $amORpm = 'am';
    for ($i = 8; $i < 21; $i ++)
        foreach ($min as $v){
        $hour = $i;
            if( $hour > 12 ){
                $hour -= 12;
            }
            if( $hour > 11 ){
                $amORpm = 'pm';
            }
            $time = "{$hour}_{$v}";
            $out .= "<div id='{$date}_{$hour}_{$v}'>
                    $hour:$v $amORpm
                    <span class='{$time}_name'></span>
                    <span class='glyphicon glyphicon-plus time_slot_add' id='$time' style='float: right; color: green;'></span>
                    <hr>
                    </div>";
    }
    
    $out .= file_get_contents('templates/setAppointment.html');
    
    $out .="<script src='scripts/appointment.js'></script>";
    
    return $out;
}

function setAppointment($name, $phone){
    $str = "Received $name : $phone<br>";
    $str .= "Functionality still being worked on.";
    return $str;
}
