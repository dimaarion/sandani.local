<?php
class Sansize
{
        public function getrequest($get)
        {
                return filter_var($_REQUEST[$get], FILTER_SANITIZE_STRING);
        }

        public function getrequestcontent($get)
        {
                return htmlspecialchars($_REQUEST[$get]);
        }

        public function getrequestEmail($get)
        {
                return filter_var($_REQUEST[$get], FILTER_SANITIZE_EMAIL);
        }
        
        public function getrequestInt($get)
        {    
                preg_match('/[0-9\.0-9]+/', $_REQUEST[$get],$num);
                return $num[0];
        }
}
