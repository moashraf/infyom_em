<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterequestRequest;
use App\Http\Requests\UpdaterequestRequest;
use App\Repositories\requestRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\request;
use Flash;
 
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
class requestControllerUSER extends AppBaseController
{
   
    public function store(CreaterequestRequest $request)
    {
       
        $input = $request->all();
 


        try {
     
      $request = request::create($input);
      
      $to = "mohamed.be4em@gmail.com";
      $subject = "highTouch  email";
      $message = mail_code($request->name,$request->email,$request->tel ,$request->message );;
      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      // More headers
      $headers .= 'From: <info@highTouch.com>' . "\r\n";
     // mail($to, $subject, $message, $headers);
       
      
                     
           }  
                   catch (customException $e) {
                return back();
           
           }
               return back();
  
    }
 
}
