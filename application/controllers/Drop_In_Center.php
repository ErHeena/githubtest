<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Drop_In_Center extends CI_Controller{

  public function index(){

    //get listing data
    $listingData = $this->getListingData();

    $data['listingData'] = $listingData;

    $this->load->view('kit_request',$data);
  }

  //get Listing Data using curl
  public function getListingData(){

    $url = 'https://softonauts.com/clients/Android/get-drop-in-navigator-list';

    $user_id = $this->session->userdata('user_id');
    $postvars = 'user_id='.$user_id;

    $crl = curl_init();
    $header[] = "Authorization: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM";

    curl_setopt($crl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($crl,CURLOPT_URL,$url);
    curl_setopt($crl,CURLOPT_POSTFIELDS,$postvars);
    curl_setopt($crl,CURLOPT_RETURNTRANSFER, true);

    $rest = curl_exec($crl);

    $res = json_decode($rest,true);

    $msg = $res['message'];

    if($msg == 'success'){
      return $res['drop_in_navigator_list'];
    }else{
      return false;
    }

  }

}


 ?>
