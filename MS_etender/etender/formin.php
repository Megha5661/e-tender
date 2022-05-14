<?php
   if(isset($_POST['cname'])){
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if (!$con){
        die("connection failed due to".mysqli_connect_error());
    }
        echo "Success connecting to the Database Server";
        
    @$cname=$_POST['cname'];
    @$oname=$_POST['oname'];
    @$mno=$_POST['mno'];
    @$email=$_POST['email'];
    @$add=$_POST['add'];
    @$pno=$_POST['pno'];
    @$tno=$_POST['tno'];
    @$ano=$_POST['ano'];
    @$tover=$_POST['tover'];
    @$pname=$_POST['pname'];
    @$exp=$_POST['exp'];
    @$bprice=$_POST['bprice'];

    $sql="INSERT INTO `tender`.`apply` (`Company`, `Owner`, `Mobile`, `Email`, `Address`, `PAN`, `TIN`, `Adhar`, `Turn`, `Project`, `Expr`, `Bid`) VALUES ('$cname', '$oname', '$mno', '$email', '$add', '$pno', '$tno', '$ano', '$tover', '$pname', '$exp', '$bprice');";

    echo $sql;

    if($con->query($sql)==true) {
        echo "Successfully Data has been Entered";
    }
    else {
        echo "Something Error Occurred";
    }
    
    $con->close();
   }
?>