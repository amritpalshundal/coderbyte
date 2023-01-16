<?php
    class HttpRequest
    {
        public function postRequest($url, $data, $header)
        {

            $options = array(
                'http' => array(
                  'method'  => 'POST',
                  'content' => json_encode( $data ),
                  'header'=> $header 
                  )
              );
              
              $context  = stream_context_create( $options );
              $result = file_get_contents( $url, false, $context );
              
              return $result;
        }
    }
?>