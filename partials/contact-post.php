<?php
    if(isset($_POST['send']) && $_POST['send'] === 'contact' ){
        $formData = $_POST;
        $formErrors = array();
        
        if(!isset($formData['name'])){
            $formErrors['required'][] = 'Name not provided.';
        }else{
            //NAME
            $name = trim($formData['name']);
            if(empty($name)){
                $formErrors['required'][] = 'Name is required.';
            }
        }
        
        if(!isset($formData['email'])){
            $formErrors['required'][] = 'Email not provided.';
        }else{
        //EMAIL
            $email = trim($formData['email']);
            
            if(empty($email)){
                $formErrors['email'][] = 'Email is required';
            }       
            if(strpos($email, '@' ) < 2){
                $formErrors['email'][] = 'Please provide a valid Email address';
            }  
        }
        
        if(!isset($formData['message'])){
            $formErrors['required'][] = 'Message not provided.';
        }else{
        //MESSAGE
            $message = trim($formData['message']);
            if(empty($message)){
                $formErrors['required'][] = 'Message is required.';
            }
        }
        
    }
