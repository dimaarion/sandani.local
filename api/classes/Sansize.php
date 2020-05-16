<?php 
class Sansize
{
public function getrequest($get)
{       
        $get =  filter_var($_REQUEST[$get], FILTER_SANITIZE_STRING);
        
        return $get;
}
public function getrequestEmail($get)
{
        $get =  filter_var($_REQUEST[$get], FILTER_SANITIZE_EMAIL);
        
        return $get;
}
public function getrequestInt($get)
{
        $get =  filter_var($_REQUEST[$get], FILTER_SANITIZE_NUMBER_INT);
        
        return $get;
}

}


