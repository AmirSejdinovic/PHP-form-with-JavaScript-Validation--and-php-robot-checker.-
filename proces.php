
<?php

if(isset($_POST['submit']))

if(!empty($_POST['website'])) die();

 $to = 'amir24V@yahoo.com';
 $subject = 'Online registration';
 $subject2 = 'Copy of yours registration';
 $title =  $_POST['title'];
 $firstName =  $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $email = $_POST['email'];
 $company = $_POST['company'];
 $street = $_POST['street'];
 $zip = $_POST['zip'];
 $city = $_POST['city'];
 $country = $_POST['country'];
 $specialDemands = $_POST['specialDemands'];

 


 if(isset($_POST['material'])){
  $material = $_POST['material'];
  $material = "Yes";
}else{
  $material = "no";
}

if(isset($_POST['privacyStatement'])){
  $privacyStatement = $_POST['privacyStatement'];
  $privacyStatement = "Yes";
}else{
  $privacyStatement = "No";
}

if(isset($_POST['hotelYes'])){
  $hotelYes = $_POST['hotelYes'];
  $hotelYes = "Yes";
}else{
  $hotelYes = "No";
}
if(isset($_POST['hotelNo'])){
  $hotelNo = $_POST['hotelNo'];
  $hotelYes = "No";

}else{
  $hotelNo = "";
}


 //validacija forme
 if(empty($title)){
   $titleErorr = "You must enter yours title";
 }else{
   $title = test_input($title);
 }
 if(empty($firstName)){
   $firstNameErorr = "You must enter your first name";
 }else{
   $firstName = test_input($firstName);
 }

 if(empty($lastName)){
   $lastNameErorr = "You must enter yours last name";
 }else{
   $lastName = test_input($lastName);
 }

 if(empty($email)){
   $emailErorr = "You must enter yours email";
 }else{
   $email = test_input($email);
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $emailErorr = "Invalid email";
   }
 }

 if(empty($company)){
   $companyErorr = "You must enter name of your Company";
 }else{
   $company = test_input($company);
 }
if(empty($street)){
  $streetErorr = "You must enter yours addres";
}else{
  $street = test_input($street);
}

if(empty($zip)){
  $zipErorr = "You must enter your Zip code";
}else{
  $zip = test_input($zip);
}

if(empty($city)){
  $cityErorr = "You must enter your City";
}else{
  $city = test_input($city);
}

if(empty($country)){
  $countryErorr = "You must enter your country";
}else{
  $country = test_input($country); 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



 if(empty($titleErorr) && empty($firstNameErorr) && empty($lastNameErorr) && empty($emailErorr) && empty($companyErorr) && empty($streetErorr) && empty($zipErorr) && empty($cityErorr) && empty($countryErorr) ){
  

  $headers = "From: AMCTM2020 online registration form" . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $poruka = "
    <center><h1>Online registration</h1>
     <p><strong>Title: </strong>{$title}</p>
     <p><strong>First name: </strong>{$firstName}</p>
     <p><strong>Last name: </strong>{$lastName}</p>
     <p><strong>Email: </strong>{$email}</p>
     <p><strong>Company: </strong>{$company}</p>
     <p><strong>Addres: </strong>{$street}</p>
     <p><strong>Zip: </strong>{$zip}</p>
     <p><strong>City: </strong>{$city}</p>
     <p><strong>Country: </strong>{$country}</p>
     <p><strong>I agree that my name and affiliation will be included in the conference material : </strong>{$material}</p>
     <p><strong>I agree to and have read the data privacy statement : </strong>{$privacyStatement}</p>
     <p><strong>Will you stay at the hotel where the conference will be held (Hills hotel) : </strong>{$hotelYes}</p>
     <p><strong>Special Demands: </strong>{$specialDemands}</p>
 
    </center>
  ";

   mail($to,$subject,$poruka,$headers);
  
   echo '<div style="text-align:center">
       <h2 class="text-center">Your registratiron is sucesufuly send</h2>
       <p class="text-center">We are contact you wia yours email</p>
       <p>You can go back to our <a href="#">home page</a></p>
   
   </div>';
 }



 

?>