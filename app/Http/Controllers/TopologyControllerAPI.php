<?php

namespace App\Http\Controllers;


class TopologyControllerAPI extends Controller
{
    public function index()
    {
       
      /*  $curl = curl_init();
        curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://admin:admin@192.168.40.130:8181/restconf/operational/opendaylight-inventory:nodes'
        ]);
        
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);
        
        $json = json_decode($resp, true);
        //str_replace("'", "\'", json_encode($resp));
        
        //$json = json_encode($resp);
        print_r($json);
        
       */

     $url = 'http://admin:admin@192.168.40.130:8181/restconf/operational/network-topology:network-topology';
      $ch = curl_init();
      // Will return the response, if false it print the response
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      // Set the url
      curl_setopt($ch, CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=utf-8","Accept:application/json, text/javascript, */*; q=0.01"));
      // Execute
      $result=curl_exec($ch);
      // Closing
      curl_close($ch);

    // $result = json_encode($result);
      
     $result =json_decode($result,true);

          
      
      // Will dump a beauty json :3
    
        return $result;
        //return view('welcome');
    }

}
