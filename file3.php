<html>
<head>
<title>link</title>
</head>
<body bgcolor="#c1bdba">
<hr color='red' size='6'>
<h1><marquee behavior="alternate" scrollamount='10' bgcolor='MintCream'>*LIST*</marquee></h1>
<hr color='blue' size='6'>


<table width='400' border='3' bgcolor='#FFF' align="center">

<tr>
<th bgcolor='#1ab188' width="100"><strong>NAME</strong></th>
<th bgcolor='#1ab188' width="100"><strong>AMOUNT</strong></th>
<th bgcolor='#1ab188' width="100"><strong>POSITION</strong></th>
</tr>
</table>



</body>
</html>







<?php
 $conn=mysql_connect("localhost","root");
 $db=mysql_select_db('babynames',$conn);
 $year1 = $_POST['year'];
 $people_quantity1 = $_POST['people_quantity'];
  $gendar1 = $_POST['gendar'];
  
  if(isset($_POST['submit']))
  {
	  
	  if($year1==''|| $year1>2013 || $year1<1944)
      {
	      echo 
		 "<script>window.open('file2.php?YEAR=Year Is Invalid','self')</script>";
		 
		 
		 exit();
	  
      }
	   else if($people_quantity1==''|| $people_quantity1>2900 || $people_quantity1<1)
      {
	       echo 
		  "<script>window.open('file2.php?NUMBER=Not In Range','self')</script>";
		   exit();
	  
      }
	  
	   
	  else if($gendar1=='null')
      {
		  
		  
	      echo 
		 "<script>window.open('file2.php?GENDAR=Please Select option','self')</script>";
		  exit();
	  
      }
	  else
	  {
		  if($gendar1=='Both')
		  {
			     
			     echo nl2br("\n");	
			     $store="Male";
 		         $male_table="$store$year1";
			    $que= "select count(*) from $male_table";
			    $run= mysql_query($que);
			    $row=mysql_fetch_array($run);
		        $count= $row[0];
			    
			   if($count<$people_quantity1)
			   {
				   
				  echo "The limit of male record exceeded";
                   echo nl2br("\n");	
                        echo nl2br("\n");
                    echo nl2br("\n"); 
                  echo nl2br("\n");	 
			   }  
			  else
		      {		  
			       
					 ?>

	                                             <h1>TOP MALE LIST</h1>
					<?php
                   		 
			 
			         $que= "SELECT name,amount,position
                     FROM  $male_table
                     ORDER BY amount DESC
                     LIMIT $people_quantity1";
					 
		              $run= mysql_query($que);
			 
			  while($row=mysql_fetch_array($run))
		      {
			         $name= $row[0];
			         $amount= $row[1];
					 $position=$row[2];
					$position=trim($position,"=");

			 
		      ?>

	         <table width="400" align="center" border="5" bgcolor="Orchid">
             <tr>
             <td align="left" width="100"><?php echo $name;?> </td>
			 <td align="right" width="100"><?php echo $amount;?> </td>
			  <td align="right" width="100"><?php echo $position;?> </td>
             </tr>
			 
			 </table>
			 
		     <?php }
			  }
			 
			 
			   $temp="Female";
               $female_table="$temp$year1";	
			  $que= "select count(*) from $female_table";
			  $run= mysql_query($que);
			  $row=mysql_fetch_array($run);
		      $count= $row[0];
			    //echo $count;
			   if($count<$people_quantity1)
			   {
				  echo "The limit of female record exceeded";  
				   echo nl2br("\n");	
			   }
               else
               {
                     ?>

	                                             <h1>TOP FEMALE LIST</h1>
					<?php
			        echo nl2br("\n");					   
			 	  $que= "SELECT name,amount,position
                  FROM $female_table
                  ORDER BY amount DESC
                  LIMIT $people_quantity1";
				  $run= mysql_query($que);
			      while($row=mysql_fetch_array($run))
		         {
			         $name= $row[0];
			         $amount= $row[1];
					 $position=$row[2];
					 $position=trim($position,"=");
			 
		        ?>

	         <table width="400" align="center" border="5" bgcolor="orange">
             <tr>
             <td align="left" width="100"><?php echo $name;?> </td>
			 <td align="right" width="100"><?php echo $amount;?> </td>
			   <td align="right" width="100"><?php echo $position;?> </td>
             </tr>
			 </table>
		     <?php }
			}
			 
		  }
		 else
		  {
		       
		       $c="$gendar1$year1";
		       //echo $c;
			   $que= "select count(*) from $c";
			   $run= mysql_query($que);
			   $row=mysql_fetch_array($run);
		       $count= $row[0];
			   //echo $count;
			  if($count<$people_quantity1)
			  {
				  echo "The limit of record exceeded";  
			  }  
			  else
			  {  
			 
			    
		      $que= "SELECT name,amount,position
                     FROM $c
                     ORDER BY amount DESC
                     LIMIT $people_quantity1";
					
               $run= mysql_query($que);
			   
		      while($row=mysql_fetch_array($run))
		      {
			         $name= $row[0];
			         $amount= $row[1];
					 $position=$row[2];
					 $position=trim($position,"=");
			 
		      ?>

	 <table width="400" align="center" border="5" bgcolor="yellow">
             <tr>
             <td align="left" width="100"><?php echo $name;?> </td>
			 <td align="right" width="100"><?php echo $amount;?> </td>
			  <td align="right" width="100"><?php echo $position;?> </td>
             </tr>
			 </table>
		     <?php }
		 } 
		  }	 
	  }
  }	  
	  ?>	 
			 
