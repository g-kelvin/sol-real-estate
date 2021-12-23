<?php 
ini_set('display_errors', 0);
require('fpdf/fpdf.php');


require "PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
          
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);



    $pdf = new FPDF('P','mm','A4');                        
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',10);
    // $pdf->Cell(2,8, $pdf->Image('img/admin-01.png',80,2,40,35),0,0,'L');
    $pdf->Ln(16,100);
    $pdf->Cell(60,10,'',0);
    $pdf->Cell(62,10,'STUDENT ADMISSION LETTER. ',0,1,'C');
    $pdf->Cell(60,5,'',0);
    $pdf->Cell(62,2,'Embu - Siakago Road, Embu - Kenya.',0,1,'C');
    $pdf->Cell(60,10,'',0);
    $pdf->Cell(62,8,'+254 720 616 843 | info@thebeaconacademy.sc.ke',0,1,'C');
    $pdf->Ln(8,0);


    $pdf->Cell(60,10,'',0);
    $pdf->Cell(62,10,'OUR VISION',0,1,'C');
    $pdf->Cell(60,5,'',0);
    $pdf->Cell(62,2,'Is to be the most competent change agent and to be the most transformative learning ',0,1,'C');
    $pdf->Cell(60,10,'',0);

    $pdf->Cell(62,8,'institution for academic excellence.',0,1,'C');

    $pdf->Cell(60,10,'',0);
    $pdf->Cell(62,10,'OUR MISSION',0,1,'C');
    $pdf->Cell(60,5,'',0);
    $pdf->Cell(62,2,'Is to raise a generation of Highly effective Humanitarian not just average not just madiocre  ',0,1,'C');
    $pdf->Cell(60,10,'',0);

    $pdf->Cell(62,8,'but Great Men And Women in the region and beyond.',0,1,'C');
    $pdf->Ln(8,0);

    $pdf->Cell(6,8,"NB: Payments referred to herein shall not be refundable under any circumstances, including but not limited ",0,1,'L');
    $pdf->Cell(6,8,"to the termination of this Agreement for whatever reason. ",0,1,'L');


    $pdf->Cell(6,8,"Parent | Guardian Signature:............................................. ",0,1,'L');
    $pdf->Cell(6,8,"Manage Director Signature:............................................... ",0,1,'L');
    $pdf->Cell(6,8,"School Additional  Comments:.............................................................................................................................. ",0,1,'L');



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
            header('refresh:0.1;url=databookings.php');
        }
    }
    
    $to   = 'kelvingauki@gmail.com';
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






                                           
            


 // }
                                                                                
    
  ?>