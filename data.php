          
<?php 
// $con= mysqli_connect("localhost","thebeaco_admin", "7RWMt24Yv+v9*k","thebeaco_thebeacon");
$con= mysqli_connect("localhost","root", "","sol");
if($con){
   if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $kind = $_POST['kind'];
    $bedroom = $_POST['bedroom'];
    $address = $_POST['address'];
    $town= $_POST['town'];
    $county = $_POST['county'];
    $postal = $_POST['postal'];
    $gender = $_POST['gender'];
    $people = $_POST['people'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $additional = $_POST['additional'];
    $housename = $_POST['housename'];
  

    echo "$gender";


    $qry=mysqli_query( $con," INSERT INTO `bookings` (`bookingid`, `fname`, `lname`, `tel`, `email`, `kind`, `address`, `town`, `county`,`postal`,  `bedroom`, `gender`, `people`, `date1`, `date2`, `additional`, `housename`, `status`) 

        VALUES (NULL, '$fname', '$lname', '$tel', '$email', '$kind', '$address', '$town', '$county', '$postal', '$bedroom', '$gender','$people', '$date1', '$date2', '$additional', '$housename', 'Pending') " );

    if($qry)
    {
      echo"<br> <br>Congratulations ".$fname." ".$lname.  " for Enrolling with The Beacon Academy Embu <br> <br> ";
    }

    else{
      echo "Data Posting Error";
    }

  
    
    }
    else{
      echo "No Data Posted";
    }
  
}
else{
  echo "Connection Declined";
}
?>

