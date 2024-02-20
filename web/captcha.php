<?php
// hCAPTCHA API key configuration 

$secretKey = 'ES_345420017aa24144b6a55bd445298303';
$siteKey = '7b033875-9ca8-4ae2-bc4e-f3640bc34068';

// If the form is submitted 
$statusMsg = ''; 

     
    // Validate form fields 
    if(isset($_POST['submit'])){ 
         
        // Validate hCAPTCHA checkbox 
        if(!empty($_POST['h-captcha-response'])){ 
            // Verify API URL 
            $verifyURL = 'https://hcaptcha.com/siteverify'; 
             
            // Retrieve token from post data with key 'h-captcha-response' 
            $token = $_POST['h-captcha-response']; 
             
            // Build payload with secret key and token 
            $data = array( 
                'secret' => $secretKey, 
                'response' => $token, 
                'remoteip' => $_SERVER['REMOTE_ADDR'] 
            ); 
             
            // Initialize cURL request 
            // Make POST request with data payload to hCaptcha API endpoint 
            $curlConfig = array( 
                CURLOPT_URL => $verifyURL, 
                CURLOPT_POST => true, 
                CURLOPT_RETURNTRANSFER => true, 
                CURLOPT_POSTFIELDS => $data 
            ); 
            $ch = curl_init(); 
            curl_setopt_array($ch, $curlConfig); 
            $response = curl_exec($ch); 
            curl_close($ch); 
             
            // Parse JSON from response. Check for success or error codes 
            $responseData = json_decode($response); 
             
            // If reCAPTCHA response is valid 
            if($responseData->success){ 
                // Posted form data 
                // Code to process the form data goes here...
                session_start();
                $_SESSION["VERIFIED"] = true;
                header("Location: track.php?session=" . md5(time()));
                $statusMsg = 'Your contact request has submitted successfully.';
            }else{ 
                $statusMsg = 'Robot verification failed, please try again.'; 
            } 
        }else{ 
            header("Location: index.php?page=error&session=" . md5(time()));
            $statusMsg = 'Please check on the CAPTCHA box.'; 
        } 
    }
    else{ 
       
    } 
 
echo $statusMsg; 
 
?>