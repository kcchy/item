<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language=JavaScript> 
setInterval('refreshCalendarClock()',1000); 
//������ȡ����
function Year_Month(){ 
var now = new Date(); 
var yy = now.getFullYear(); 
var mm = now.getMonth()+1; 
var cl = '<font color="#003366">'; 
if (now.getDay() == 0) cl = '<font color="#003366">'; 
if (now.getDay() == 6) cl = '<font color="#003366">'; 
return(cl + yy + '��' + mm + '��</font>'); }
//������ȡ��
function Date_of_Today(){ 
var now = new Date(); 
var cl = '<font color="#d8006f">'; 
if (now.getDay() == 0) cl = '<font color="#003366">'; 
if (now.getDay() == 6) cl = '<font color="#003366">'; 
return(cl + now.getDate() +'</font>'); } 
//��ȡ�ĸ�����
function Day_of_Today(){ 
var day = new Array(); 
day[0] = "������"; 
day[1] = "����һ"; 
day[2] = "���ڶ�"; 
day[3] = "������"; 
day[4] = "������"; 
day[5] = "������"; 
day[6] = "������"; 
var now = new Date(); 
var cl = '<font color="#003366">'; 
if (now.getDay() == 0) cl = '<font color="#003366">'; 
if (now.getDay() == 6) cl = '<font color="#003366">'; 
return(cl + day[now.getDay()] + '</font>'); } 
//��ȡ��ǰ��ʱ��
function CurentTime(){ 
var now = new Date(); 
var hh = now.getHours(); 
var mm = now.getMinutes(); 
var ss = now.getTime() % 60000; 
ss = (ss - (ss % 1000)) / 1000; 
var clock = hh+':'; 
if (mm < 10) clock += '0'; 
clock += mm+':'; 
if (ss < 10) clock += '0'; 
clock += ss; 
return(clock); } 
function refreshCalendarClock(){ 
document.all.calendarClock1.innerHTML = Year_Month(); 
document.all.calendarClock2.innerHTML = Date_of_Today(); 
document.all.calendarClock3.innerHTML = Day_of_Today(); 
document.all.calendarClock4.innerHTML = CurentTime(); } 
var webUrl = webUrl; 
document.write('<table border="0" cellpadding="0" cellspacing="0" id="time"><tr><td>'); 
document.write('<table id="CalendarClockFreeCode" border="0" cellpadding="0" cellspacing="0" width="200" height="250" '); 
document.write('style="position:absolute;visibility:hidden" >'); 
document.write('<tr><td align="center"><font '); 
document.write('style="cursor:hand;color:#003388;font-family:����;font-size:30pt;line-height:120%" '); 
if (webUrl != 'netflower'){ 
document.write('</td></tr><tr><td align="center"><font '); 
document.write('style="cursor:hand;color:#003388;font-family:���� ;font-size:9pt;line-height:110%" '); 
} 
document.write('</td></tr></table>'); 
document.write('<table border="0" cellpadding="0" cellspacing="0" width="150" bgcolor="#f0f0" height="150">'); 
document.write('<tr><td valign="top" width="100%" height="100%">'); 
document.write('<table border="0" cellpadding="0" cellspacing="0" width="150" bgcolor="#F0f0f0" height="150">'); 
document.write('<tr><td align="center" width="100%" height="100%" >'); 
document.write('<font id="calendarClock1" > </font><br>'); 
document.write('<font id="calendarClock2" > </font><br>'); 
document.write('<font id="calendarClock3" > </font><br>'); 
document.write('<font id="calendarClock4" ><b> </b></font>'); 
document.write('</td></tr></table>'); 
document.write('</td></tr></table>'); 
document.write('</td></tr></table>');

</script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="css/item.css" />
<title>ʱ����ʾ</title>
</head>

<body>
</body>
</html>

