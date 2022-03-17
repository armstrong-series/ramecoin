<?php

namespace App\Helpers;
use Request, Log, Auth;
use Exception;
use PHPMailer\PHPMailer\PHPMailer;

class MailConfig{


    public function composeMail(Request $request){

        try{

        }catch(Exception $error){
            Log::info('Mailing Message:' . $error->getMessage());
        }

    }

}