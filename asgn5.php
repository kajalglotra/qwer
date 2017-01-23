<?php
mysql_connect("localhost","root","123");
mysql_select_db("test");
$query="SELECT marks,user_id from marks";
mysql_query($query);
$i=1;$avg=0;
if(mysql_fetch_array($query))
{
   for($i=1;$i!=NULL;$i++){
       $mark[$i]=$_GET['marks']['user_id[$i]'];
       echo $avg=$avg+$mark[$i] ;
}
}


?>
