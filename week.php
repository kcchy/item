 

<?php 
function getTimeFromWeek($dayNum){
    //$dayNum:0-6
    $curDayNum=date("w");
    if($dayNum>$curDayNum) $timeFlag="last ";
    elseif($dayNum==$curDayNum) $timeFlag="";
    //���Ҫ��������Xδ��ʱ�ñ��ܵ�����X else $timeFlag="next";
    else $timeFlag="last ";//��������Xδ��ʱ�����ܵ�����X(�����ݲ�Ϊ��)
    $arryWeekDay = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
    $timeStamp=strtotime("$timeFlag"."$arryWeekDay[$dayNum]");
    return $timeStamp;
       
}
 
echo date("Y-m-d l",getTimeFromWeek(0));echo "<br>";
echo date("Y-m-d l",getTimeFromWeek(1));echo "<br>";
echo date("Y-m-d l",getTimeFromWeek(2));echo "<br>";
echo date("Y-m-d l",getTimeFromWeek(3));echo "<br>";
echo date("Y-m-d l",getTimeFromWeek(4));echo "<br>";
echo date("Y-m-d l",getTimeFromWeek(5));echo "<br>";
echo date("Y-m-d l",getTimeFromWeek(6));echo "<br>";
?>