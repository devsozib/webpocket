<?php

use App\Models\User;
use App\Models\backend\AppUrl;
use App\Models\backend\BrandColor;
use App\Models\backend\Logo;
use App\Models\backend\SocialIcon;
use App\Models\backend\WebsiteContent;
use Faker\Core\Color;
use Illuminate\Support\Facades\Mail;

function role($role_id)
{
    $user = User::where('role_id', $role_id)->first();
    return $user->role->role_name;
}

function getNotify($type)
{
    if ($type == 1) {
        $fmsg = 'Data Added Successfully';
    } elseif ($type == 2) {
        $fmsg = 'Data Updated Successfully';
    } elseif ($type == 3) {
        $fmsg = 'Data Deleted Successfully';
    } elseif ($type == 4) {
        $fmsg = 'Validation Error!';
    } elseif ($type == 5) {
        $fmsg = 'You Are Not Permitted';
    } elseif ($type == 6) {
        $fmsg = 'Provided Data Already Exists';
    } else {
        $fmsg = 'Message Code Error';
    }
    return $fmsg;
}

function getC4S($type)
{
    if ($type == 'Y') {
        $result = 'Yes';
    } elseif ($type == 'N') {
        $result = 'No';
    } elseif ($type == 1) {
        $result = 'Active';
    } elseif ($type == 0) {
        $result = 'Inactive';
    } else {
        $result = '';
    }
    return $result;
}

function getStatus($type)
{
    if ($type == 1) {
        $result = ['Y' => 'Yes', 'N' => 'No'];
    } elseif ($type == 2) {
        $result = [1 => 'Active', 0 => 'Inactive'];
    } else {
        $result = [];
    }
    return $result;
}

function getArrayData($datas, $key)
{
    $result = isset($datas[$key]) ? $datas[$key] : '';
    return $result;
}

function testMail($data) {
    $companyEmail = 'support@abgpocket.com';
    $emailRecipients = ['support@abgpocket.com']; // Use the desired recipient email addresses

    // Send the email using the provided data
    Mail::send('emails.testmail', ['data' => $data], function ($m) use ($companyEmail, $emailRecipients, $data) {
        $m->from($companyEmail, 'Website Mail');

        foreach ($emailRecipients as $recipient) {
            $m->to($recipient);
        }

        $m->subject($data['msg_subject']); // Use the 'msg_subject' from the data as the email subject
    });
}

function getAppUrl(){
    return AppUrl::first();
}

function socialIcons(){
    return SocialIcon::where('status','1')->orderBy('seq','ASC')->get();
}

function logo(){
    return Logo::first();
}

function getColor(){
    return BrandColor::first();
}

function getAppDev(){
    return WebsiteContent::where('type','AD')->first();
}

function getPS(){
    return WebsiteContent::where('type','PS')->first();
}

function getAP(){
    return WebsiteContent::where('type','AP')->first();   
}

function getCP(){
    return WebsiteContent::where('type','CP')->first();   
}

function getSP(){
    return WebsiteContent::where('type','SP')->first(); 
}