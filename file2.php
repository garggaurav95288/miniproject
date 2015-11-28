<html>
<head>
<title>my project</title>

</head>
 <body bgcolor="#c1bdba">
 <center>


<form method='post' action='file3.php'>
<table width='400' border='3' bgcolor='#FFF'>



<tr bgcolor='#F5F5F5'>
<td align='right'  height='35'>YEAR</td>
<td  height='35'>
<input type='text' placeholder="YEAR 1944 TO 2013" name='year'>
<font color="red"><?php echo @$_GET ['YEAR']; ?></font>
</td>
</tr>


<tr bgcolor='#F5F5F5' >
<td align='right' height='35'>TOP PEOPLE</td>
<td  height='35'>
<input type='text' name='people_quantity'  placeholder="NUMERIC NUMBER:">
<font color="red"><?php echo @$_GET ['NUMBER'];?></font>
</td>
</tr>

<tr bgcolor='#F5F5F5'>
<td align='right' height='35'>GENDAR</td>
<td height='35'>
<select name='gendar'>
<option value ='null'>Select Gendar</option>
<option value ='Male'>Male</option>
<option value ='Female'>Female</option>
<option value ='Both'>Both</option>
</select>
<font color="red"><?php echo @$_GET ['GENDAR']; ?></font>
</td>
</tr>




<tr  height='50' bgcolor='#FF6347'>
<td align='center' colspan='6' >
<a href="file3.php" target="blank" title='click'><input type='submit' name='submit' value='submit'></a>
</td>
</tr>

</table>
</form>
</div>
</center>
 </div>
 <table width="200" bgcolor="red"> 
 </table>
 
 </body>
 </html>
 
 
 


 

 
 
 