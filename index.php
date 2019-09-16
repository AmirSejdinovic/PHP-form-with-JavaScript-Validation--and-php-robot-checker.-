
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Registrtion form</title>
</head>
<body>
  <div class="container">

    <form  class="customForma" action="proces.php" onsubmit="return Validate()" name="customforma" method="post">
      <h3 class="text-center">Personal data</h3>
      <div class="form-row">
        <div class="form-group col-md-6 title">
          <label for="title">Title</label>
          <input type="text"  name="title" class="form-control" id="title" placeholder="Enter your title">
          <div id="title_erorr" class="val_error"></div>
        </div>

        <div class="form-group col-md-6 firstname">
          <label for="firstName">First Name</label>
          <input type="text"  name="firstName" class="form-control" id="firstName" placeholder="Enter your first name">
          <div id="firstname_erorr" class="val_error"></div>
          <input type="text" id="website" name="website"/>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6 lastname">
          <label for="lastName">Last Name</label>
          <input type="text"  name="lastName" class="form-control" id="lastName" placeholder="Enter your last name">
          <div id="lastname_erorr" class="val_error"></div>
        </div>

        <div class="form-group col-md-6 email">
          <label for="email">Email</label>
          <input type="email"  name="email" class="form-control" id="email" placeholder="Enter your email">
          <div id="email_erorr" class="val_error"></div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6 company">
          <label for="company">Company/Insititution*</label>
          <input type="text"  name="company" class="form-control" id="company" placeholder="Enter company where you work">
          <div id="company_erorr" class="val_error"></div>
        </div>

        <div class="form-group col-md-6 street">
          <label for="street">Street</label>
          <input type="text"  name="street" class="form-control" id="street" placeholder="Enter the addres">
          <div id="street_erorr" class="val_error"></div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6 zip">
          <label for="zip">ZIP*</label>
          <input type="text"  name="zip" class="form-control" id="zip" placeholder="Enter you zip code">
          <div id="zip_erorr" class="val_error"></div>
        </div>

        <div class="form-group col-md-6 city">
          <label for="city">City</label>
          <input type="text"  name="city" class="form-control" id="city" placeholder="Enter your city">
          <div id="city_erorr" class="val_error"></div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6 country">
          <label for="country">Country*</label>
          <input type="text"  name="country" class="form-control" id="country" placeholder="Enter you country">
          <div id="country_erorr" class="val_error"></div>
        </div> 
        
      </div>
      <h3>Register</h3>
      <div class="form-row">
          
            <div class="form-group col-md-6">
                
                <p>I agree that my name and affiliation will be included in the conference material</p>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="material" id="material">
                  <label class="form-check-label" for="material">
                    Yes
                  </label>
                  </div>

              
                   
            </div>
    
            <div class="form-group col-md-6">
                
                    <a href="#">Data privacy statement</a>

                
              <p>I agree to and have read the data privacy statement</p>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name=" privacyStatement" id="privacy">
                <label class="form-check-label" for="privacy">
                  Yes
                </label>
                </div>
            </div>
          </div>

          <div class="form-group">
            <p>Will you stay at the hotel where the conference will be held (Hills hotel)</p>
              <div class="form-check">
                <input class="form-check-input" name="hotelYes" type="checkbox" id="hotelYes">
                <label class="form-check-label" for="hotelYes">
                  Yes
                </label>
                
                
              </div>
              <div class="form-check">
                  <input <input class="form-check-input" name="hotelNo" type="checkbox" id="hotelNo">
                  <label class="form-check-label" for="hotelNo">
                    No
                  </label>
                  </div>

                  <div class="form-group">
                      <label for="specialDemans">Special Demands</label>
                      <textarea class="form-control" name="specialDemands" id="specialDemans" rows="4"></textarea>
                    </div>

          <button type="submit" name="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
  <script src="app.js" type="text/javascript"></script>
</body>
</html>