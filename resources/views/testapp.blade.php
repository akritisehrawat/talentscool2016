<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        TalentsCool | Application
    </title>
    
    <link rel="stylesheet" href="css/application-style-temp2.css" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>

<body>
    
    <div class="header">
        <div>
            <h1><a href="index.html"><img src="images/TSVector.png"></a></h1>
        </div>
    </div>

    <form id = "myform" action = {!! URL::to('formSubmit') !!} method = "post">
      <!--- and i'm high on believeing that you're in love with me token-->
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div id="app1">
        <div class="app_heading">
            <h1>
                Application 
                <div>
                
                </div>
            </h1>
            <p>
                Personal Information
            </p>
        </div>
    
    
        <div class="navigation">
            <ul>
                <li class="personal_li">
                    Step 1 <br><br> <span>Personal Information</span>
                </li>
                <li>
                    Step 2 <br><br> <span>Talent</span>
                </li>
                <li>
                    Step 3 <br><br> <span>More About Yourself</span>
                </li>
                <li>
                    Step 4 <br><br> <span>Desired Services</span>
                </li>
                <!--<li>
                    Step 5 <br><br> <span>Review Application</span>
                </li>
                <li>
                    Step 6 <br><br> <span>Complete</span>
                </li>-->
            </ul>
            <div>
                <br><br><br>*required
            </div>
        </div>
    
        <div class="info"> 
            <p>
                <label>
                    First Name
                </label>
                <input name = "fn" onchange="validateText('first_name');" id="first_name" type="text" class="left" autocomplete="off" placeholder="First Name*" required></input>
            </p>
            <p>
                <label>
                    Last Name
                </label>
                <input name = "ln" onchange="validateText('last_name');" id="last_name" type="text" class="right" autocomplete="off" placeholder="Last Name*" required></input>
            </p>
            <p>
                <label>
                    E-mail
                </label>
                <input name = "email" onchange="validateEmail('email');" id="email" type="text" class="left" autocomplete="off" placeholder="E-mail*" required></input>
            </p>
            <p>
                <label>
                    Phone Number
                </label>
                <input name = "phone" onchange="validatePhone('phone');" id="phone" type="text" class="right" onclick="this.placeholder='(_ _ _) _ _ _ - _ _ _ _';" autocomplete="off" placeholder="Phone Number" required></input>
            </p>
            <p>
                <label>
                    Country
                </label>
                <select id="country" name="country" placeholder="Country" required></select>
            </p>
            <p>
                <label>
                    State
                </label>
                <select id="state" name="state" placeholder="State" required></select>
            </p>
            <p>
                <label>
                    City
                </label>
                <input type="text" onchange="validateText('city');" id="city" name="city" class="left" autocomplete="off" placeholder="City" required></input>
            </p>
            <p>
                <label>
                    Zip Code
                </label>
                <input type="text" name = "zip" class="right" autocomplete="off" placeholder="Zip Code" required></input>
            </p>
            <p>
                <label>
                    Date of Birth
                </label>
                <input onchange="validateDOB('dob');" id="dob" type="text" name ="dob" class="left" autocomplete="off" placeholder="Date of Birth" onclick="this.placeholder='MM/DD/YYYY';" required></input>
            </p>
            <p>
                <label>
                    Gender
                </label>
                <select name="gender" id="gender" class="right" autocomplete="off" required></select>
            </p>
            <p id="profile_photo">
                <label>
                    Headshot
                </label>
                <input type="file" class="right" id="profile_image" onchange="validateImage('profile_image');" style="margin-right: 100px; float: left;" name = "dp" autocomplete="off" placeholder="Profile Photo" required></input>
            </p>
        </div>
    
     <div class="buttons_container">
            <div class="buttons">
                <button class="next-button">
                    Next
                </button>
            </div>
        </div>
    </div>
    
                
    
    <!------------------------------------------------------------------------------------------------------------>

    <div id="app2">
        <div class="app_heading">
            <h1>
                Application
            </h1>
            <p>
                Talent
            </p>
        </div>
    
    
        <div class="navigation">
            <ul>
                <li>
                    Step 1 <br><br> <span>Personal Information</span>
                </li>
                <li class="talent_li">
                    Step 2 <br><br> <span>Talent</span>
                </li>
                <li>
                    Step 3 <br><br> <span>More About Yourself</span>
                </li>
                <li>
                    Step 4 <br><br> <span>Desired Services</span>
                </li>
<!-- 
                <li>
                    Step 5 <br><br> <span>Review Application</span>
                </li>
                <li>
                    Step 6 <br><br> <span>Complete</span>
                </li>
 -->
            </ul>
            <div>
                <br><br><br>*required
            </div>
        </div>
    
        <div class="info"> 
            <p>
                <label>
                    Talent Category
                </label>
                <select id="talent_category"></select>
            </p>
            <p>
                <label>
                    Specific Talent
                </label>
                <input type="text" id="specific_talent" onchange="validateText('specific_talent');"  autocomplete="off" placeholder="Specific Talent" ></input>
            </p>
            <p id="portfolio"  style="padding-bottom: 0px;">
                <label>
                    Image
                </label>
                <input type="file" id="portfolio_image" onchange="validateImage('portfolio_image');" autocomplete="off" placeholder="Portfolio" ></input>
            </p>
            <p id="portfolio" style="padding-bottom: 0px;">
                <label>
                    Audio
                </label>
                <input type="file" id="audio" onchange="validateAudio('audio');" autocomplete="off" placeholder="Audio" ></input>
            </p>
            <p id="portfolio"  style="padding-bottom: 0px;">
                <label>
                    Video
                </label>
                <input type="text" id="video" autocomplete="off" placeholder="Add Link to Video" ></input>
            </p>
        </div>
    
        <div class="buttons_container">
            <div class="buttons">
                <button class="prev-button">
                    Previous
                </button>
                <button class="next-button">
                    Next
                </button>
            </div>
        </div>

    </div>

    <!------------------------------------------------------------------------------------------------------------>


    <div id="app3">

        <div class="app_heading">
            <h1>
                Application
            </h1>
            <p>
                Desired Services
            </p>
        </div>
    
    
        <div class="navigation">
            <ul>
                <li>
                    Step 1 <br><br> <span>Personal Information</span>
                </li>
                <li>
                    Step 2 <br><br> <span>Talent</span>
                </li>
                <li class="services_li">
                    Step 3 <br><br> <span>More About Yourself</span>
                </li>
                <li>
                    Step 4 <br><br> <span>Desired Services</span>
                </li>
<!-- 
                <li>
                    Step 5 <br><br> <span>Review Application</span>
                </li>
                <li>
                    Step 6 <br><br> <span>Complete</span>
                </li>
 -->
            </ul>
            <div>
                <br><br><br>*required
            </div>
        </div>
    
        <div class="info"> 
           <!-- <p style="margin-bottom: 10em;"> -->
           <!-- <p class="describe-section"> -->
            <p>

                <label>
                    Describe Yourself
                </label>
                <textarea id="describe" autocomplete="off" rows="12" placeholder="Describe Yourself (max 1000 characters)*" oninput="countChars();" ></textarea>
            </p>
            <div id="add_links">
                <p>
                    <label>
                        Personal Web/Social Media
                    </label>
                    <input type="text" autocomplete="off" placeholder="Personal Web/Social Media" ></input>
                    <button class="addlink-button" onclick="add_link();">Add Links</button>
                </p>
            </div>
            <p>
                <label>
                    Experiences (Accomplishments)
                </label>
                <input type="text" autocomplete="off" placeholder="Experiences (Accomplishments)" ></input>
            </p>
            <p>
                <label>
                    Current Representative
                </label>
                <input type="text" autocomplete="off" placeholder="Current Representative" ></input>
            </p>        
        </div>
    
        <div class="buttons_container">
            <div class="buttons">
                <button class="prev-button">
                    Previous
                </button>
                <button class="next-button">
                    Next
                </button>
            </div>
        </div>
    
    </div>

    <!------------------------------------------------------------------------------------------------------------>




    <div id="app4">
        <div class="app_heading">
            <h1>
                Application
            </h1>
            <p>
                Additional Information
            </p>
        </div>
    
    
        <div class="navigation">
            <ul>
                <li>
                    Step 1 <br><br> <span>Personal Information</span>
                </li>
                <li>
                    Step 2 <br><br> <span>Talent</span>
                </li>
                <li>
                    Step 3 <br><br> <span>More About Yourself</span>
                </li>
                <li class="additional_li">
                    Step 4 <br><br> <span>Desired Services</span>
                </li>
<!-- 
                <li>
                    Step 5 <br><br> <span>Review Application</span>
                </li>
                <li>
                    Step 6 <br><br> <span>Complete</span>
                </li>
 -->
            </ul>
            <div>
                <br><br><br>*required
            </div>
        </div>
    
        <div class="info"> 
            <p>
                <label>
                    Opportunities
                </label>
                <select id="opportunities" class="left" ></select>
            </p>
            <p>
                <label>
                    Representation
                </label>
                <select id="representation" class="right" ></select>
            </p>
            <p>
                <label>
                    Talent Development
                </label>
                <select id="talent_development" class="left" ></select>
            </p>
            <p>
                <label>
                    General Services
                </label>
                <select id="general_services" class="right" ></select>
            </p>
            <p>
                <label>
                    Vanity & Luxury Services
                </label>
                <select id="vanity" class="left" ></select>
            </p>
            <p>
                <label>
                    Additional Requests
                </label>
                <input type="text" id="additional" onchange="validateText('additional');" class="right" autocomplete="off" placeholder="Additional Requests" ></input>
            </p>
        </div>
    
        <div class="buttons_container">
            <div class="buttons">
                <button class="prev-button">
                    Previous
                </button>
           
                <a style="text-decoration: none; color: white;" href="../renas_code/app-thankyou.html"><button class="submit-button">
                    Submit
                </button></a>
            </div>
        </div>
    </div>
    
    </form>
        
    
<!------------------------------------------------------------------------------------------------------------>
        <footer>
            <div class="social-media-bar">
            <ul>
                <li><a target="_blank" href="https://twitter.com/talentscool"><img src="images/twitter_logo.png" title="Follow us on Twitter!" class="media-icon"></a></li>
                <li><a target="_blank" href="https://www.facebook.com/talentscool"><img src="images/facebook_logo.png" title="Follow us on Facebook!" class="media-icon"></a></li>
                <li><a target="_blank" href="https://www.instagram.com/talentscool/"><img src="images/instagram_logo.png" title="Follow us on Instagram!" class="media-icon"></a></li>
            </ul>
        </div>
            <p>Copyright &copy 2016. Talentscool, Inc. All rights reserved. </p>
        </footer>

</body>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/application-script.js"></script>
<script src="js/countries.js"></script>
<script language="javascript">populateCountries("country", "state");</script>
<script language="javascript">populateGender();</script>
<script language="javascript">populateTalentCategory();</script>
<script language="javascript">populateOpportunities();</script>
<script language="javascript">populateRepresentation();</script>
<script language="javascript">populateTalentDevelopment();</script>
<script language="javascript">populateGeneralServices();</script>
<script language="javascript">populateVanity();</script>
