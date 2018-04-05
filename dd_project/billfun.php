<?php
$conn= mysqli_connect("localhost","root","","telebilling");
//include 'phpadminconnect.php';

function user()
{
if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["state"]) && isset($_POST["add"]) && isset($_POST["numb"])) 
{
    global $conn;
$name= $_POST["firstname"];
$lname= $_POST["lastname"];
$state= $_POST["state"];
$add=  $_POST["add"];
$num=  $_POST["numb"]; 
$query = "select * from bill_db where pno ='$num'";
$run = mysqli_query($conn,$query);
$array = mysqli_fetch_array($run);
$cust_id= $array['cust_id'];
$fname = $array['fname'];
$lname = $array['lname'];
$pno = $array['pno'];
$pay_date = $array['pay_date'];
$billamt =$array['billamt'];
$status = $array['status'];
$recurr_charge = $array['recurr_charge'];
$tax=$array['tax'];
$addr = $array['addr'];
/*if($array[6]=="paid")
{
	//echo '<br><h3 id="display" style="color:white; text-align position:relative; top:-650px; width:500px; background-color:lightslategrey; opacity:0.8; text-align:center; left:350px; border: 0px lightgrey; box-shadow:2px 2px 2px black; border-radius:15px;padding:10px; font-size:32px;">Name '.$array[0]."<br>Bill Amount ".$array[5]."<br> Payment Status- ".$array[6]."<br>Payment Date ".$array[7].'</h3>';
	
	
    //echo '<br><a id="disp" style="color:white;  border-radius:15px; position:relative; top:-530px; left:550px; width:500px; text-decoration:none; background-color:black; padding:30px; opacity:0.8;" href="firstpage.php">LOGOUT</a>';
	
	
}

 else if($array[6]=="unpaid")
{
	//echo '<br><h3 id="display" style="color:white; position:relative;top:-650px; width:500px; background-color:lightslategrey; opacity:0.8; text-align:center; left:350px; border: 0px lightgrey; box-shadow:2px 2px 2px black; border-radius:15px;padding:10px; font-size:32px;">Name '.$array[0]."<br>Bill Amount ".$array[5]."<br> Payment Status- ".$array[6]."<br>Payment Date since ".$array[7].'</h3>';
	echo"	<div id='page-wrap'>

		<textarea id='header'>INVOICE</textarea>
		
		<div id='identity'>
		
			<p id='address'>customer id:
			 $emp_id</br>
 								   phone number : </br>
			
									due date: </p>
								";	
    //echo '<br><a id="disp" style="color:white;  border-radius:15px; position:relative; top:-530px; left:550px; width:500px; text-decoration:none; background-color:lightslategrey; padding:30px; opacity:0.8;" href="firstpage.php">LOGOUT</a>';
	

	
}
 else if($array[6]=="")
{
	echo '<br><h3 id="display" style="color:white; position:relative;top:-650px; width:500px; background-color:lightslategrey; opacity:0.8; text-align:center; left:350px; border: 0px lightgrey; box-shadow:2px 2px 2px black; border-radius:15px;padding:10px; font-size:32px;">YOUR SERVICE HAS NOT YET BEGAN</h3>';
	
	echo '<br><a id="disp" style="color:white;  border-radius:15px; position:relative; top:-530px; left:550px; width:500px; text-decoration:none; background-color:lightslategrey; padding:30px; opacity:0.8;" href="firstpage.php">LOGOUT</a>';
	
}
else
{
	echo " there is error";
}*/
}

echo"	<div id='page-wrap'>

		<textarea id='header'>INVOICE</textarea></br>
		<textarea id='header1'>PURCHASE</textarea>
		
		<div id='identity'>
		
			<p id='address'>customer id:
             $cust_id
             </br>
             employee name: $fname  $lname  </br>
 								   phone number : $pno </br>
			address : $addr</br>
									due date:$pay_date </p>
								

            <div id='logo'>

            
			 
                
              

              <table id='meta'>
                <tr>
                    <td class='meta-head'>Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class='meta-head'>Date</td>
                    <td><textarea id='date'>date_default_timezone_set('Asia/Kolkata');
                   . date('d-m-Y H:i');</textarea></td>
                </tr>
                <tr>
                    <td class='meta-head'>Amount Due</td>
                    <td><div class='due'>$billamt</div></td>
                </tr>
				<tr>
                    <td class='meta-head'>Status</td>
                    <td><div class='due'>$status</div></td>
                </tr>
            </table>
		
		</div>
		
		<div style='clear:both'></div>
		
		
		<table width=100% >
		<caption><h3>Payment details</h3></caption>
		  <tr>
		      
		      
			  <th style='width:400px;'>Description</th>
		      <th>Summary of Current Charges</th>
		      <th>Amount(Rs.)</th>
		  </tr>
		  
		  
		  <tr rowspan='4'>
		     <td rowspan= 6 style='border-right:0px;' > 
				 payments
			 </td>
			 <td>Recurring Charges </td>
			 <td>$recurr_charge</td>
		     
		  </tr>
		  <tr>>
			  <!-- <td ></td> -->
			  <td>One time Charges</td>
			  <td>0.00</td>
			  
</tr>
		 <tr>
		  <!-- <td  ></td> -->
			  <td>Usage Charges</td>
			  <td>0.00</td>
		  </tr>
		  <tr>
		  <!-- <td ></td> -->
			  <td>Discount</td>
			  <td>0.00</td>
		  </tr>
		  <tr>
		  <!-- <td ></td> -->
			  <td>Tax</td>
			  <td>$tax</td>
		  </tr>
		  <tr>
		  <!-- <td ></td> -->
			  <td>Total charges</td>
              <td>$billamt
              </td>
		  </tr>
		
		</table>
		
		
    </div>";

}
function pay()
{
    global $conn;
	
       if($status=="paid")
          {
           echo"Your bill is already paid";
          }
    else
	{
        $insertstatus = "insert into bill_db (status) values ('paid')"; 
        $run_insertpro = mysqli_query($conn,$insertpro);
         echo"payment done";
    }
	
}

?>