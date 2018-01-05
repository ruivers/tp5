<?php
    $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y')); //今天开始时间
    $endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1; //今天结束时间
    $beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));//昨天开始时间
    $endYesterday=mktime(0,0,0,date('m'),date('d'),date('Y'))-1;//昨天结束时间
    $beginLastweek=mktime(0,0,0,date('m'),date('d')-date('w')+1-7,date('Y'));//上周开始日期
    $endLastweek=mktime(23,59,59,date('m'),date('d')-date('w')+7-7,date('Y'));//上周结束时间
    $beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));    //本月开始时间



    function d($a){
        return date('Y-m-d H:i:s', $a);
    }


    echo d($beginToday), "<br>".d($endToday), "<br>".d($beginYesterday), "<br>".d($endYesterday);
    echo "<br>";
    echo d($beginLastweek)."<br>", d($endLastweek)."<br>", d($beginThismonth)."<br>";
    echo date('z');
