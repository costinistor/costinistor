<?php
// Contact form in page
/*
    $contactMessage = '';

    if(filter_has_var(INPUT_POST, 'submit')){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
        
        if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $contactMessage = '<p class="contact-message error-contact">Please use a valid email</p>';
            }else {
                $toEmail = "nistor_costi@yahoo.com";
                $body = "<h3>".$subject."</h3>
                <p>".$message."</p>
                <p><b>From:</b> ".$name. " <" .$email. "></p>";
    
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
    
                $headers .= "From: " .$name. "<" .$email. ">" . "\r\n";
    
                if(mail($toEmail, $subject, $body, $headers)){
                    $contactMessage = '<p class="contact-message contact-sent">Message sent with success</p>';
                    $name = '';
                    $email = '';
                    $subject = '';
                    $message = '';
                }else{
                    $contactMessage = '<p class="contact-message error-contact">Message failed to be sent</p>';
                }
        
            }
        }else {
            $contactMessage = '<p class="contact-message error-contact">Please fill in all fields</p>';
        }
    }
    */

// Footer contact form
    $f_ContactMessage = '';
    
        if(filter_has_var(INPUT_POST, 'f_submit')){
            $f_name = htmlspecialchars($_POST['f_name']);
            $f_email = htmlspecialchars($_POST['f_email']);
            $f_subject = htmlspecialchars($_POST['f_subject']);
            $f_message = htmlspecialchars($_POST['f_message']);
            
            if(!empty($f_name) && !empty($f_email) && !empty($f_subject) && !empty($f_message)){
                if(filter_var($f_email, FILTER_VALIDATE_EMAIL) === false){
                    $f_ContactMessage = '<p class="contact-message error-contact">Please use a valid email</p>';
                }else {
                    $f_toEmail = "constantin.nistor9@gmail.com";
                    $f_body = "<h3>".$f_subject."</h3>
                    <p>".$f_message."</p>
                    <p><b>From:</b> ".$f_name. " <" .$f_email. "></p>";
        
                    $f_headers = "MIME-Version: 1.0" . "\r\n";
                    $f_headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
        
                    $f_headers .= "From: " .$f_name. "<" .$f_email. ">" . "\r\n";
        
                    if(mail($toEmail, $f_subject, $f_body, $f_headers)){
                        $f_ContactMessage = '<p class="contact-message contact-sent">Message sent with success</p>';
                        $f_name = '';
                        $f_email = '';
                        $f_subject = '';
                        $f_message = '';
                    }else{
                        $f_ContactMessage = '<p class="contact-message error-contact">Message failed to be sent</p>';
                    }
            
                }
            }else {
                $f_ContactMessage = '<p class="contact-message error-contact">Please fill in all fields</p>';
            }
        }
?>