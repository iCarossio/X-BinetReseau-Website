<?php
    session_cache_limiter( 'nocache' );
    header( 'Expires: ' . gmdate( 'r', 0 ) );
    header( 'Content-type: application/json' );


    $to         = 'antoine.carossio@me.com';  // put your email here

    $email_template = 'mail.html';

    $subject      = strip_tags($_POST['subject']);
    $email        = strip_tags($_POST['email']);
    // $phone      = strip_tags($_POST['phone']);
    $name         = strip_tags($_POST['name']);
    $organisation = strip_tags($_POST['organisation']);
    $message      = nl2br( htmlspecialchars($_POST['message'], ENT_QUOTES) );
    $result       = array();


    if(empty($name)){

        $result = array( 'response' => 'error', 'empty'=>'name', 'message'=>'<strong>Error!</strong>&nbsp; Name is empty.' );
        echo json_encode($result );
        die;
    }

    if(empty($organisation)){

        $result = array( 'response' => 'error', 'empty'=>'name', 'message'=>'<strong>Error!</strong>&nbsp; Organisation is empty.' );
        echo json_encode($result );
        die;
    } 

    if(empty($email)){

        $result = array( 'response' => 'error', 'empty'=>'email', 'message'=>'<strong>Error!</strong>&nbsp; Email is empty.' );
        echo json_encode($result );
        die;
    } 

    if(empty($message)){

         $result = array( 'response' => 'error', 'empty'=>'message', 'message'=>'<strong>Error!</strong>&nbsp; Message body is empty.' );
         echo json_encode($result );
         die;
    }
    


    $headers  = "From: " . $name . ' ['. $organisation .'] <' . $email . '>' . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


    $templateTags =  array(
        '{{subject}}' => $subject,
        '{{email}}'=>$email,
        '{{message}}'=>$message,
        '{{organisation}}'=>$organisation,
        '{{name}}'=>$name
        //'{{phone}}'=>$phone
        );


    $templateContents = file_get_contents( dirname(__FILE__) . '/../templates/'.$email_template);

    $contents =  strtr($templateContents, $templateTags);

    if ( mail( $to, $subject, $contents, $headers ) ) {
        $result = array( 'response' => 'success', 'message'=>'<strong>Merci !</strong>&nbsp; Votre message a bien été envoyé. Nous vous répondrons très prochainement.' );
    } else {
        $result = array( 'response' => 'error', 'message'=>'<strong>Erreur !</strong>&nbsp; Échec de l\'envoi du message.'  );
    }

    echo json_encode( $result );

    die;