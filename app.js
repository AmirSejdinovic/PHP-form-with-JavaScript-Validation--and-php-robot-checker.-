var title = document.forms["customforma"]["title"];
var firstName = document.forms["customforma"]["firstName"];
var lastName = document.forms["customforma"]["lastName"];
var email = document.forms["customforma"]["email"];
var company = document.forms["customforma"]["company"];
var street = document.forms["customforma"]["street"];
var zip = document.forms["customforma"]["zip"];
var city = document.forms["customforma"]["city"];
var country = document.forms["customforma"]["country"];

//erorir
var title_erorr = document.getElementById("title_erorr");
var firstname_erorr = document.getElementById("firstname_erorr");
var lastname_erorr = document.getElementById("lastname_erorr");
var email_erorr = document.getElementById("email_erorr");
var company_erorr = document.getElementById("company_erorr");
var street_erorr = document.getElementById("street_erorr");
var zip_erorr = document.getElementById("zip_erorr");
var city_erorr = document.getElementById("city_erorr");
var country_erorr = document.getElementById("country_erorr");

//event lsitener
title.addEventListener("blur", nameVerify, true);
firstName.addEventListener("blur", firstNameverify, true);
lastName.addEventListener("blur", lastNameVerify, true);
email.addEventListener("blur", emailValidation, true);
company.addEventListener("blur", companyValidation, true);
street.addEventListener("blur", streetValidation, true);
zip.addEventListener("blur", zipValidation, true);
city.addEventListener("blur", cityValidation, true);
country.addEventListener("blur", countryValidation, true);


function Validate() {
// validate 
if (title.value == "") {
title.style.borderBottom = "1px solid red";
document.querySelector('.title').style.color = "red";
title_erorr.textContent = "You must enter yours title";
title.focus();
return false;
}

if (firstName.value == "") {
firstName.style.borderBottom = "1px solid red";
document.querySelector('.firstname').style.color = "red";
firstname_erorr.textContent = "You must enter your First Name";
firstName.focus();
return false;
}

if (lastName.value == "") {
lastName.style.borderBottom = "1px solid red";
document.querySelector('.lastname').style.color = "red";
lastname_erorr.textContent = "You must enter yours Last name";
lastName.focus();
return false;
}

if (email.value == "") {
email.style.borderBottom = "1px solid red";
document.querySelector('.email').style.color = "red";
email_erorr.textContent = "You must enter yours email";
email.focus();
return false;
}

if (company.value == "") {
company.style.borderBottom = "1px solid red";
document.querySelector('.company').style.color = "red";
company_erorr.textContent = "You must enter name of yours company";
company.focus();
return false;
}

if (street.value == "") {
street.style.borderBottom = "1px solid red";
document.querySelector('.street').style.color = "red";
street_erorr.textContent = "You must enter your email adress";
street.focus();
return false;
}

if (zip.value == "") {
zip.style.borderBottom = "1px solid red";
document.querySelector('.zip').style.color = "red";
zip_erorr.textContent = "You must enter yours zip code";
zip.focus();
return false;
}

if (city.value == "") {
city.style.borderBottom = "1px solid red";
document.querySelector('.city').style.color = "red";
city_erorr.textContent = "You must enter yours city";
city.focus();
return false;
}


if (country.value == "") {
country.style.borderBottom = "1px solid red";
document.querySelector('.country').style.color = "red";
country_erorr.textContent = "You must enter yours country";
country.focus();
return false;
}


}





function nameVerify() {
if (title.value != "") {
title.style.borderBottom = "1px solid #5e6e66";
document.querySelector('.title').style.color = "#5e6e66";
title_erorr.innerHTML = "";
return true;
}
}

function firstNameverify() {
if (firstName.value != "") {
firstName.style.borderBottom = "1px solid #5e6e66";
document.querySelector('.firstname').style.color = "#5e6e66";
firstname_erorr.innerHTML = "";
return true;
}
}

function lastNameVerify() {
if (lastName.value != "") {
lastName.style.borderBottom = "1px solid #5e6e66";
document.querySelector('.lastname').style.color = "#5e6e66";
lastname_erorr.innerHTML = "";
return true;
}
}

function emailValidation() {
if (email.value != "") {
email.style.borderBottom = "1px solid #5e6e66";
document.querySelector('.email').style.color = "#5e6e66";
email_erorr.innerHTML = "";
return true;
}
}

function companyValidation() {
if (company.value != "") {
company.style.borderBottom = "1px solid #5e6e66";
document.querySelector('.company').style.color = "#5e6e66";
company_erorr.innerHTML = "";
return true;
}
}

function streetValidation() {
if (street.value != "") {
street.style.borderBottom = "1px solid #5e6e66";
document.querySelector('.street').style.color = "#5e6e66";
street_erorr.innerHTML = "";
return true;
}
}

function zipValidation() {
if (zip.value != "") {
zip.style.borderBottom = "1px solid #5e6e66";
document.querySelector('.zip').style.color = "#5e6e66";
zip_erorr.innerHTML = "";
return true;
}
}
function cityValidation() {
if (city.value != "") {
city.style.borderBottom = "1px solid #5e6e66";
document.querySelector('.city').style.color = "#5e6e66";
city_erorr.innerHTML = "";
return true;
}
}

function countryValidation() {
if (country.value != "") {
country.style.borderBottom = "1px solid #5e6e66";
document.querySelector('.country').style.color = "#5e6e66";
country_erorr.innerHTML = "";
return true;
}
}