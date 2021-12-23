<?php 
// $con= mysqli_connect("localhost","thebeaco_admin", "7RWMt24Yv+v9*k","thebeaco_thebeacon");
include "myinvoice.php"; 
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
    // echo "$lname";

     $feedback="SELECT * from bookings WHERE status = 'pending' and Housename = '$housename' ";
        if ($result=mysqli_query($con,$feedback) )
        {
        // Return the number of rows in result set
        $rows=mysqli_num_rows($result);
        if ($rows >0) {
            echo "Sorry ".$fname." ".$lname.  ", We regret to inform you that this house is already Booked ";
            header('refresh:0.1;url=book.php');
        }
        else
        {
            
    $qry=mysqli_query( $con," INSERT INTO `bookings` (`bookingid`, `fname`, `lname`, `tel`, `email`, `kind`, `address`, `town`, `county`,`postal`,  `bedroom`, `gender`, `people`, `date1`, `date2`, `additional`, `housename`, `status`) 

        VALUES (NULL, '$fname', '$lname', '$tel', '$email', '$kind', '$address', '$town', '$county', '$postal', '$bedroom', '$gender','$people', '$date1', '$date2', '$additional', '$housename', 'Pending') " );

    if($qry)
    {
          // echo"<br> <br>Congratulations ".$fname." ".$lname.  " For Booking ".$kind." With us <br> <br> ";
        require('fpdf/fpdf.php');
        require "PHPMailer/PHPMailerAutoload.php";

        function smtpmailer($to, $from, $from_name, $subject, $body)
            {
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
           
           //   $path = 'reseller.pdf';
           //   $mail->AddAttachment($path);



        $pdf = new FPDF('P','mm','A4');                        
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(2,8, $pdf->Image('img/core-img/logo.png',80,2,40,35),0,0,'L');
        $pdf->Ln(24,100);
        $pdf->Cell(60,10,'',0);
        $pdf->Cell(62,10,'Shabach Gardens Invoice ',0,1,'C');
        $pdf->Cell(60,5,'',0);
        $pdf->Cell(62,2,'Kiambu Road, Nairobi - Kenya.',0,1,'C');
        $pdf->Cell(60,10,'',0);
        $pdf->Cell(62,8,'+254 718 987 527 | info@shabachgardens.com',0,1,'C');
        $pdf->Ln(8,0);

        $pdf->Cell(10,8, "Dear ");
        // echo "$fname";
        $pdf->Cell(0,8, " {$fname} {$lname} ," ,0,0,'L');
        // $pdf->Cell(70,8, "  {$rows['fname']}");
        $pdf->Ln(8,0);
        $pdf->Cell(0,8, "We are happy to inform you that your reservation was successful. find the details Below.  ",0,0,'L');

        $pdf->Ln(8,0);
        $pdf->Cell(65,8, "Your Invoices from {$date1} to {$date2}   ",0,0,'L');
        $pdf->Ln(8,0);
        $pdf->Cell(55,8,"Kind of House: {$kind}"   ,1,0,'L');
        $pdf->Cell(78,8,"No of Rooms: {$bedroom}"   ,1,0,'L');
        $pdf->Cell(55,8,"No of People: {$people}"   ,1,0,'L');
        $pdf->Ln(8,0);

        $pdf->Ln(16,0);
        $pdf->Cell(65,8, "FOLLOW THE STEPS TO PAY  ",0,0,'L');
        $pdf->Ln(8,100);

        $pdf->Cell(6,10," Go to M-PESA on your phone",0,1,'L');

        $pdf->Cell(6,2,'Select Pay Bill option',0,1,'L');

        $pdf->Cell(6,8,"Enter Business no. xxx xxxx ",0,1,'L');
        $pdf->Cell(6,8,"Enter ID Number as the account numbe",0,1,'L');
        $pdf->Cell(6,8,"Enter the Amount Ksh. 25,000",0,1,'L');
        $pdf->Cell(6,8,"Enter your M-PESA PIN and Send",0,1,'L');
        $pdf->Ln(8,0);



        $pdf->Cell(60,10,'',0);
        $pdf->Cell(62,10,'OUR VALUES',0,1,'C');
        $pdf->Cell(60,5,'',0);
        $pdf->Cell(62,2,'Integrity , Community ,Respect for people, Innovative & Tranquility ',0,1,'C');
        $pdf->Cell(60,10,'',0);

        $pdf->Cell(62,8,'institution for academic excellence.',0,1,'C');

        $pdf->Cell(60,10,'',0);
        $pdf->Cell(62,10,'OUR MISSION',0,1,'C');
        $pdf->Cell(60,5,'',0);
        $pdf->Cell(62,2,' is to provide a welcoming, beautiful, and peaceful living environment on kiambu road.We want  ',0,1,'C');
        $pdf->Cell(60,10,'',0);

        $pdf->Cell(62,8,'to provide a space that people always feel good about coming home to',0,1,'C');
        $pdf->Ln(8,0);

        $pdf->Cell(6,8,"NB: Payments referred to herein shall not be refundable under any circumstances, including but not limited ",0,1,'L');
        $pdf->Cell(6,8,"to the termination of this Agreement for whatever reason. ",0,1,'L');


        $pdf->Cell(6,8,"Tenant  Signature:................................................ ",0,1,'L');
        $pdf->Cell(6,8,"Director Signature:............................................... ",0,1,'L');
        $pdf->Cell(6,8,"Additional  Comments:.............................................................................................................................. ",0,1,'L');



        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.shabachgardens.com';
        $mail->Port = 465;  
        $mail->Username = 'info@shabachgardens.com';
        $mail->Password = 'Sol#Info@Real890';



        $x = $pdf->Output('Invoice.pdf', 'D');
        $path = '$x';
        $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="info@shabachgardens.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        // $mail->AddAttachment($path, '', $encoding = 'base64', $type = 'application/pdf');
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            echo " parent.window.location.reload(); ";
        }
    }
    }
   
        $to   = $email;
        $from = 'info@shabachgardens.com';
        $name = 'Shabach';
        $subj = 'Invoice From Shabach Gardens';
        $msg = 'This is to remind you that you have to pay the below Invoice. Kindly find attached.';
        
        // print_r($pdfinvoice); exit();

        $error=smtpmailer($to, $from, $name, $subj, $msg);
        if($error)
            {
                $error ="Please try Later, Error Occured while Processing...";
                return $error; 
            }
            else 
            {
                header('refresh:0.1;url=databookings.php');
            }
    }

    else{
      echo "Data Posting Error";
    }
        }
        // Free result set
        mysqli_free_result($result);

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
