<?php
    
    $errorMessages = '';
    // $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    // $email = mysqli_real_escape_string($_POST['email']);
    // // $residentcountry = filter_var($_POST['residentcountry'], FILTER_SANITIZE_STRING);

    // // $regex_phone = "/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/";
    $email = $_POST['email'];
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    // // $countryCode = '';

    // $ip = $_REQUEST['REMOTE_ADDR']; // the IP address to query
    // $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    // if($query && $query['status'] == 'success') 
    // {
    //   $country = filter_var($query['country'], FILTER_SANITIZE_STRING);
    //   $countryCode = filter_var($query['countryCode'], FILTER_SANITIZE_STRING);
    // } 
  
    // if(!preg_match($regex_phone, $phone)) 
    // {
    //     if(!substr( $phone, 0, 1 ) === "+"){
    //         $errorMessages = '<li> Invalid phone number </li>';   
    //     }            
    // }

    // if(!preg_match($regex_email, $email))
    // {   
    //     $errorMessages = $errorMessages . '<li> Invalid email address </li>';
    // }

    // function random_strings($length_of_string) 
    // {   
    //     return substr(sha1(time()), 0, $length_of_string);
    // }

    if(!preg_match($regex_email, $email))
    {   
        $errorMessages = $errorMessages . '<li> Invalid email address </li>';
    }

    if(empty($errorMessages))
    {        
        // $token = random_strings(10);
        // $queryDb="INSERT INTO `registration`(`phoneNumber`, `emailAddress`, `token`, `country`, `countryCode`,`residentcountry`) VALUES ('$phone','$email','$token','$country','$countryCode','$residentcountry')";
        // $queryDb="INSERT INTO `registration`(`emailAddress`) VALUES ('$email')";
        // $queryResult=mysqli_query($con,$queryDb) or die(mysqli_error($con));

        $to = $email;

        $subject = "Zyno Digital Payment Launch";

     $message = "
        <!DOCTYPE html>
            <html lang='en'>
            <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
            </head>
            <main id='content' role='main'>
                <div class='d-lg-flex'>
                <div class='container d-lg-flex align-items-lg-center min-vh-lg-100 space-4'>
                    <div>
                    <div class='alert alert-primary-min media mb-5 mb-md-7' role='alert'>
                        <i class='fas fa-exclamation-circle mt-1 mr-4'></i>
                        <div class='media-body'>
                        <div class='alert alert-success' role='alert'>
                        <h4 class='alert-heading'>Zyno Digital Payment</h4>           
                        </div>
                        <hr/>
                        <p >Thank you for your interest in using our digital payment application. Stay tuned to recieve latest updates on our application</p>
                        <br><br><h3>Thank you!</h3>
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </main>
            </body>
            </html>
            ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <hello@zynopay.com>' . "\r\n";

        mail($to,$subject,$message,$headers); 
    }       

    //     $_SESSION['email']= $email;
    //     header('location: statuspage.php');
    // }
    // else
    // {
    //     $_SESSION['errorMessages']= $errorMessages;        
    //     header('location: errorpage.php');
    // }
     

    // service id: service_4jpw6qc 

 ?> 
