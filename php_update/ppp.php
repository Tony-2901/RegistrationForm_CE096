
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Application Form</title>
    <link rel="stylesheet" href="page2.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=PT+Sans:ital@0;1&display=swap");
    </style>
    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
  </head>
  <body>
    <div class="container">
          <div class="form1">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
              <div class="title">
                <p>Personal Details</p>
              </div>
              <hr />
              <div>
                <label for="can_name">Candidate Name :</label>
                <input type="text" name="can_name" id="can_name" />
                <small><?php echo $errors['can_name'] ?? '' ?></small>
              </div>
              <div>
                <label for="fat_name">Father's Name :</label>
                <input type="text" name="fat_name" id="fat_name" />
                <small><?php echo $errors['fat_name'] ?? '' ?></small>
              </div>
              <div>
                <label for="bd">Candidate Birth date :</label>
                <input type="date" name="bd" id="bd" />
                <small><?php echo $errors['bd'] ?? '' ?></small>
              </div>
              <div>
                <label for="gen">Gender :</label>
                <!-- <input type="radio" name="gen" id="gen"> -->
                <input list="gen" name="gen">
                <datalist name="gen" id="gen">
                  <option value="-select-" selected disabled>-select-</option>
                  <option value="Male">Male</option>
                  <option value="FeMale">FeMale</option>
                </datalist>
                <small><?php echo $errors['gen'] ?? '' ?></small>
              </div>
              <div>
                <label for="id_type" class="space">Identity type :</label>
                <input list="id_type" name="id_type">
                <datalist name="id_type" id="id_type">
                  <option value="-select-" selected disabled>-select-</option>
                  <option value="pan">PAN Card</option>
                  <option value="voter">Voter ID</option>
                  <option value="aadhar">Aadhar Card</option>
                  <option value="driving">Driving Licence</option>
                  <option value="any">Any other valid Govt. photograph id</option>
                </datalist>
                <small><?php echo $errors['id_type'] ?? '' ?></small>
              </div>
              <div>
                <label for="id_no">Identity Number :</label>
                <input type="number" name="id_no" id="id_no" />
                <small><?php echo $errors['id_no'] ?? '' ?></small>
              </div>
              <!-- <div>
              <button type="submit" class="submit" formmethod="POST"  formaction="http://localhost/php_programs/php_project/ashish.php">Submit</button>
            </div> -->
            <!-- </form> -->
          </div>
        <br />
        <!-- <div class="form2"> -->
          <!-- <form action="" method="post"> -->
            <div class="title">
              <p>Present Address</p>
            </div>
            <hr />
            <div>
              <label for="p_name">Premise Name :</label>
              <input type="text" name="p_name" id="p_name" />
              <small><?php echo $errors['p_name'] ?? '' ?></small>
            </div>
            <div>
              <label for="sub_lo">Sub-locality (optional) :</label>
              <input type="text" name="sub_lo" id="sub_lo" />
              <small><?php echo $errors['sub_lo'] ?? '' ?></small>
            </div>
            <div>
              <label for="lo">Locality :</label>
              <input type="text" name="lo" id="lo" />
              <small><?php echo $errors['lo'] ?? '' ?></small>
            </div>
            <div>
              <label>Country :</label>
              <!-- <br /> -->
              <input list="country" name="country" class="datalist-input" />
              <datalist id="country">
                <option value="Afghanistan" />
                <option value="Albania" />
                <option value="Algeria" />
                <option value="American Samoa" />
                <option value="Andorra" />
                <option value="Angola" />
                <option value="Anguilla" />
                <option value="Antarctica" />
                <option value="Antigua and Barbuda" />
                <option value="Argentina" />
                <option value="Armenia" />
                <option value="Aruba" />
                <option value="Australia" />
                <option value="Austria" />
                <option value="Azerbaijan" />
                <option value="Bahamas" />
                <option value="Bahrain" />
                <option value="Bangladesh" />
                <option value="Barbados" />
                <option value="Belarus" />
                <option value="Belgium" />
                <option value="Belize" />
                <option value="Benin" />
                <option value="Bermuda" />
                <option value="Bhutan" />
                <option value="Bolivia" />
                <option value="Bosnia and Herzegovina" />
                <option value="Botswana" />
                <option value="Bouvet Island" />
                <option value="Brazil" />
                <option value="British Indian Ocean Territory" />
                <option value="Brunei Darussalam" />
                <option value="Bulgaria" />
                <option value="Burkina Faso" />
                <option value="Burundi" />
                <option value="Cambodia" />
                <option value="Cameroon" />
                <option value="Canada" />
                <option value="Cape Verde" />
                <option value="Cayman Islands" />
                <option value="Central African Republic" />
                <option value="Chad" />
                <option value="Chile" />
                <option value="China" />
                <option value="Christmas Island" />
                <option value="Cocos (Keeling) Islands" />
                <option value="Colombia" />
                <option value="Comoros" />
                <option value="Congo" />
                <option value="Congo, The Democratic Republic of The" />
                <option value="Cook Islands" />
                <option value="Costa Rica" />
                <option value="Cote D'ivoire" />
                <option value="Croatia" />
                <option value="Cuba" />
                <option value="Cyprus" />
                <option value="Czech Republic" />
                <option value="Denmark" />
                <option value="Djibouti" />
                <option value="Dominica" />
                <option value="Dominican Republic" />
                <option value="Ecuador" />
                <option value="Egypt" />
                <option value="El Salvador" />
                <option value="Equatorial Guinea" />
                <option value="Eritrea" />
                <option value="Estonia" />
                <option value="Ethiopia" />
                <option value="Falkland Islands (Malvinas)" />
                <option value="Faroe Islands" />
                <option value="Fiji" />
                <option value="Finland" />
                <option value="France" />
                <option value="French Guiana" />
                <option value="French Polynesia" />
                <option value="French Southern Territories" />
                <option value="Gabon" />
                <option value="Gambia" />
                <option value="Georgia" />
                <option value="Germany" />
                <option value="Ghana" />
                <option value="Gibraltar" />
                <option value="Greece" />
                <option value="Greenland" />
                <option value="Grenada" />
                <option value="Guadeloupe" />
                <option value="Guam" />
                <option value="Guatemala" />
                <option value="Guinea" />
                <option value="Guinea-bissau" />
                <option value="Guyana" />
                <option value="Haiti" />
                <option value="Heard Island and Mcdonald Islands" />
                <option value="Holy See (Vatican City State)" />
                <option value="Honduras" />
                <option value="Hong Kong" />
                <option value="Hungary" />
                <option value="Iceland" />
                <option value="India" />
                <option value="Indonesia" />
                <option value="Iran, Islamic Republic of" />
                <option value="Iraq" />
                <option value="Ireland" />
                <option value="Israel" />
                <option value="Italy" />
                <option value="Jamaica" />
                <option value="Japan" />
                <option value="Jordan" />
                <option value="Kazakhstan" />
                <option value="Kenya" />
                <option value="Kiribati" />
                <option value="Korea, Democratic People's Republic of" />
                <option value="Korea, Republic of" />
                <option value="Kuwait" />
                <option value="Kyrgyzstan" />
                <option value="Lao People's Democratic Republic" />
                <option value="Latvia" />
                <option value="Lebanon" />
                <option value="Lesotho" />
                <option value="Liberia" />
                <option value="Libyan Arab Jamahiriya" />
                <option value="Liechtenstein" />
                <option value="Lithuania" />
                <option value="Luxembourg" />
                <option value="Macao" />
                <option value="Macedonia, The Former Yugoslav Republic of" />
                <option value="Madagascar" />
                <option value="Malawi" />
                <option value="Malaysia" />
                <option value="Maldives" />
                <option value="Mali" />
                <option value="Malta" />
                <option value="Marshall Islands" />
                <option value="Martinique" />
                <option value="Mauritania" />
                <option value="Mauritius" />
                <option value="Mayotte" />
                <option value="Mexico" />
                <option value="Micronesia, Federated States of" />
                <option value="Moldova, Republic of" />
                <option value="Monaco" />
                <option value="Mongolia" />
                <option value="Montserrat" />
                <option value="Morocco" />
                <option value="Mozambique" />
                <option value="Myanmar" />
                <option value="Namibia" />
                <option value="Nauru" />
                <option value="Nepal" />
                <option value="Netherlands" />
                <option value="Netherlands Antilles" />
                <option value="New Caledonia" />
                <option value="New Zealand" />
                <option value="Nicaragua" />
                <option value="Niger" />
                <option value="Nigeria" />
                <option value="Niue" />
                <option value="Norfolk Island" />
                <option value="Northern Mariana Islands" />
                <option value="Norway" />
                <option value="Oman" />
                <option value="Pakistan" />
                <option value="Palau" />
                <option value="Palestinian Territory, Occupied" />
                <option value="Panama" />
                <option value="Papua New Guinea" />
                <option value="Paraguay" />
                <option value="Peru" />
                <option value="Philippines" />
                <option value="Pitcairn" />
                <option value="Poland" />
                <option value="Portugal" />
                <option value="Puerto Rico" />
                <option value="Qatar" />
                <option value="Reunion" />
                <option value="Romania" />
                <option value="Russian Federation" />
                <option value="Rwanda" />
                <option value="Saint Helena" />
                <option value="Saint Kitts and Nevis" />
                <option value="Saint Lucia" />
                <option value="Saint Pierre and Miquelon" />
                <option value="Saint Vincent and The Grenadines" />
                <option value="Samoa" />
                <option value="San Marino" />
                <option value="Sao Tome and Principe" />
                <option value="Saudi Arabia" />
                <option value="Senegal" />
                <option value="Serbia and Montenegro" />
                <option value="Seychelles" />
                <option value="Sierra Leone" />
                <option value="Singapore" />
                <option value="Slovakia" />
                <option value="Slovenia" />
                <option value="Solomon Islands" />
                <option value="Somalia" />
                <option value="South Africa" />
                <option value="South Georgia and The South Sandwich Islands" />
                <option value="Spain" />
                <option value="Sri Lanka" />
                <option value="Sudan" />
                <option value="Suriname" />
                <option value="Svalbard and Jan Mayen" />
                <option value="Swaziland" />
                <option value="Sweden" />
                <option value="Switzerland" />
                <option value="Syrian Arab Republic" />
                <option value="Taiwan, Province of China" />
                <option value="Tajikistan" />
                <option value="Tanzania, United Republic of" />
                <option value="Thailand" />
                <option value="Timor-leste" />
                <option value="Togo" />
                <option value="Tokelau" />
                <option value="Tonga" />
                <option value="Trinidad and Tobago" />
                <option value="Tunisia" />
                <option value="Turkey" />
                <option value="Turkmenistan" />
                <option value="Turks and Caicos Islands" />
                <option value="Tuvalu" />
                <option value="Uganda" />
                <option value="Ukraine" />
                <option value="United Arab Emirates" />
                <option value="United Kingdom" />
                <option value="United States" />
                <option value="United States Minor Outlying Islands" />
                <option value="Uruguay" />
                <option value="Uzbekistan" />
                <option value="Vanuatu" />
                <option value="Venezuela" />
                <option value="Viet Nam" />
                <option value="Virgin Islands, British" />
                <option value="Virgin Islands, U.S" />
                <option value="Wallis and Futuna" />
                <option value="Western Sahara" />
                <option value="Yemen" />
                <option value="Zambia" />
                <option value="Zimbabwe" />
              </datalist>
              <small><?php echo $errors['country'] ?? '' ?></small>
            </div>
            <div>
              <label for="district">District :</label>
              <input type="text" name="district" id="district" />
              <small><?php echo $errors['district'] ?? '' ?></small>
            </div>
            <div>
              <label for="city">City :</label>
              <input type="text" name="city" id="city" />
              <small><?php echo $errors['city'] ?? '' ?></small>
            </div>
            <div>
              <label for="pin">PIN Code :</label>
              <input type="number" name="pin" id="pin" />
              <small><?php echo $errors['pin'] ?? '' ?></small>
            </div>
            <div>
              <label for="email">Email Address :</label>
              <input type="email" name="email" id="email" />
              <small><?php echo $errors['email'] ?? '' ?></small>
            </div>
            <div>
              <label for="num">Mobile Number :</label>
              <input
                type="number"
                name=""
                id=""
                value="91"
                disabled
                style="width: 35px"
              />
              <input type="number" name="num" id="num" />
              <small><?php echo $errors['num'] ?? '' ?></small>
            </div>
            <!-- <div>
              <button type="submit" class="submit" formmethod="POST"  formaction="http://localhost/php_programs/php_project/ashish.php">Submit</button>
            </div> -->
          <!-- </form> -->
        
        <br />
        <!-- <div class="form3"> -->
          <!-- <form action="" method="post"> -->
            <div class="title">
              <p>Choose Password</p>
            </div>
            <hr />
            <div>
              <label for="pass">Enter Password :</label>
              <input type="password" name="pass" id="pass" />
              <small><?php echo $errors['pass'] ?? '' ?></small>
            </div>
            <div>
              <label for="cpass">Confirm Password :</label>
              <input type="password" name="cpass" id="cpass" />
              <small><?php echo $errors['cpass'] ?? '' ?></small>
            </div>
            <br />
            <div>
              <button type="submit" class="submit" formmethod="POST"  formaction="http://localhost/php_programs/php_update/ashish.php" >Submit</button>
            </div>
          </form>
          </div>
        </div>
    </div>
  </body>
</html>
            
            
