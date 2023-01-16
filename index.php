<?php
    require_once('HttpRequest.php');
    $httpRequest = new HttpRequest();

    $Url = "https://corednacom.corewebdna.com/assessment-endpoint.php";
    $header = "Content-Type: application/json\r\n".
     "Accept: application/json\r\n".
        "Authorization: Bearer d417fcbc-94b7-4357-aff3-536c33364428";
    $data = array('name' => 'Amritpal Singh', 'email' => 'programmerapsingh@gmail.com', 'url' => 'https://github.com/amritpalshundal/coderbyte');

    $response = $httpRequest->postRequest($Url, $data, $header);
    echo $response;
?>