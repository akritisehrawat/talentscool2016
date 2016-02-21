$('.navigation li:nth-child(1)').click(function() {
    //alert("clicked first");
    document.getElementById("app1").style.display = "block";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});

$('.navigation li:nth-child(2)').click(function() {
    //alert("clicked second");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "block";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});

$('.navigation li:nth-child(3)').click(function() {
    //alert("clicked third");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "block";
    document.getElementById("app4").style.display = "none";
});

$('.navigation li:nth-child(4)').click(function() {
    //alert("clicked fourth");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "block";
});

/* Next and previous buttons */
/* app1 next */
$('#app1 .next-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "block";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});
/* app2 prev */
$('#app2 .prev-button').click(function() {
    document.getElementById("app1").style.display = "block";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});
/* app2 next */
$('#app2 .next-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "block";
    document.getElementById("app4").style.display = "none";
});
/* app3 prev */
$('#app3 .prev-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "block";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});
/* app3 next */
$('#app3 .next-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "block";
});
/* app4 previous */
$('#app4 .prev-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "block";
    document.getElementById("app4").style.display = "none";
});

function populateGender() {
    var gender = document.getElementById("gender");
    gender.options[0] = new Option('Select Gender','-1');
    gender.options[1] = new Option('Male','0');
    gender.options[2] = new Option('Female','1');
    gender.options[3] = new Option('Other','2');
    gender.options[4] = new Option('Prefer Not To Say','3');
}

function populateTalentCategory() {
    var talent = document.getElementById("talent_category");
    talent.options[0] = new Option('Select Talent Category','-1');
    talent.options[1] = new Option('Dancer','0');
    talent.options[2] = new Option('Fashion','1');
    talent.options[3] = new Option('Film','2');
    talent.options[4] = new Option('Athlete','3');
    talent.options[5] = new Option('Musician','4');
    talent.options[6] = new Option('Painter','5');
    talent.options[7] = new Option('Other (Specify Below)','6');
}

function populateOpportunities() {
    var opp = document.getElementById("opportunities");
    opp.options[0] = new Option('Select Opportunities','-1');
    opp.options[1] = new Option('Bookings','0');
    opp.options[2] = new Option('Endorsements','1');
    opp.options[3] = new Option('Auditions','2');
    opp.options[4] = new Option('Showcases','3');
    opp.options[5] = new Option('Appearances','4');
    opp.options[6] = new Option('Collaborations','5');
    opp.options[7] = new Option('Jobs','6');
    opp.options[8] = new Option('Internships','7');
}

function populateRepresentation() {
    var rep = document.getElementById("representation");
    rep.options[0] = new Option('Select Representation','-1');
    rep.options[1] = new Option('Manager','0');
    rep.options[2] = new Option('Agent','1');
    rep.options[3] = new Option('Record Deal','2');
    rep.options[4] = new Option('Booking Agent','3');
    rep.options[5] = new Option('Publicist','4');
    rep.options[6] = new Option('Talent Agent','5');
    rep.options[7] = new Option('Brand Manager','6');
}

function populateTalentDevelopment() {
    var td = document.getElementById("talent_development");
    td.options[0] = new Option('Select Talent Development','-1');
    td.options[1] = new Option('Vocal Coach','0');
    td.options[2] = new Option('Acting Coach','1');
    td.options[3] = new Option('Instrument Teacher','2');
    td.options[4] = new Option('Dance Instructor','3');
    td.options[5] = new Option('Art Instructor','4');
    td.options[6] = new Option('School Placement','5');
}

function populateGeneralServices() {
    var gs = document.getElementById("general_services");
    gs.options[0] = new Option('Select General Services','-1');
    gs.options[1] = new Option('Musician','0');
    gs.options[2] = new Option('Vocalist','1');
    gs.options[3] = new Option('Dancer','2');
    gs.options[4] = new Option('Lawyer','3');
    gs.options[5] = new Option('Accountant','4');
    gs.options[6] = new Option('Investor','5');
    gs.options[7] = new Option('Personal Assistant','6');
    gs.options[8] = new Option('Web Designer','7');
    gs.options[9] = new Option('Engineer','8');
    gs.options[10] = new Option('Fitness Trainer','9');
    gs.options[11] = new Option('Camera Crew','10');
}

function populateVanity() {
    var vanity = document.getElementById("vanity");
    vanity.options[0] = new Option('Select Vanity & Luxury Services','-1');
    vanity.options[1] = new Option('Clothing Stylist','0');
    vanity.options[2] = new Option('Hair Stylist','1');
    vanity.options[3] = new Option('Barber','2');
    vanity.options[4] = new Option('Makeup Artist','3');
    vanity.options[5] = new Option('Model','4');
    vanity.options[6] = new Option('Photographer','5');
    vanity.options[7] = new Option('Bodyguard','6');
    vanity.options[8] = new Option('Limo Driver','7');
    vanity.options[9] = new Option('Private Jet Rental','8');
    vanity.options[10] = new Option('Studio Rental','9');
}

var added_links = 0;
function add_link() {
    //alert("in add links");
    added_links = added_links + 1;
    if(added_links >= 4) {
        alert("Cannot add more than 3 new links");
    }
    else {
        document.getElementById("add_links").innerHTML+= '<p><input type="text" focused autocomplete="off" placeholder="New Link" required></input></p>';
    }
}

function countChars() {
    var ta = document.getElementById("describe");
    if(ta.value.length > 1000) {
        ta.value = ta.value.substring(0, 1000);
    }
}

function validateLength(string_id) {
    var name = document.getElementById(string_id);
    if(name.value.length > 50) {
        alert("Length must be less than 50 characters");
        name.value = name.value.substring(0, 50);
    }
}

function validateText(name_id) {
    //alert("validateName");
    var regex = /^[A-Za-z]+$/;
    var name = document.getElementById(name_id);
    if(!regex.test(name.value)) {
        alert("This cannot contain numbers or special characters");
        name.value = "";
    }
    validateLength(name_id);
}


function validateEmail(email_id) {
    //alert("validateEmail");
    var regex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var email = document.getElementById(email_id);
    if(!regex.test(email.value)) {
        alert("Invalid E-mail");
        email.value = "";
    }
}

function validatePhone(phone_id) {
    //alert("validatePhone");
    var regex = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$|^[0-9]{10}$/;
    var phone = document.getElementById(phone_id);
    if(!regex.test(phone.value)) {
        alert("Invalid Phone Number");
        phone.value = "";
    }
}

function validateDOB(dob_id) {
//     alert("validateDOB");
    var regex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;
    var dob = document.getElementById(dob_id);
//     alert(dob.value);
//     if(!regex.test(dob.value)) {
//        alert("Invalid Date of Birth");
//        dob.value = "";
//     }
    var today = new Date();
//     alert(today);
    var dob_date = new Date(dob.value);
//     alert(dob_date);
    var age = today.getFullYear() - dob_date.getFullYear();
//     alert(age);
    var month = today.getMonth() - dob_date.getMonth();
    if (month < 0 || (month == 0 && today.getDate() < dob_date.getDate())) {
        age--;
    }
    if(age < 13) {
        alert("Applicant must be at least 13 years old");
        dob.value = "";
    }
}


function validateImage(image_id) {
    var photo = document.getElementById(image_id);
    var path = photo.value;
    var extension = path.split('.').pop();
    //alert(extension);
    
    if((extension == "gif") || (extension == "png") || (extension == "bmp") || (extension == "jpeg") || (extension == "jpg")) {
        //valid extensions
        //alert("valid extension");
        //do nothing, all's well
    }
    
    else {
        alert("Invalid Extension for Images");
        photo.value = "";
    }
    
}


function validateVideo(video_id) {
    var video = document.getElementById(video_id);
    var path = video.value;
    var extension = path.split('.').pop();
    //alert(extension);
    
    if((extension == "flv") || (extension == "gif") || (extension == "avi") || (extension == "mov") || (extension == "wmv")
    || (extension == "mp4") || (extension == "mpg") || (extension == "mp2") || (extension == "mpeg") || (extension == "mpe") 
    || (extension == "mpv") || (extension == "m4v")) {
        //valid extensions
        //alert("valid extension");
        //do nothing, all's well
    }
    
    else {
        alert("Invalid Extension for Video");
        video.value = "";
    }
    
}



function validateAudio(audio_id) {
    var audio = document.getElementById(audio_id);
    var path = audio.value;
    var extension = path.split('.').pop();
    //alert(extension);
    
    if((extension == "aac") || (extension == "wav") || (extension == "wma") || (extension == "mp3") || (extension == "mp4")) {
        //valid extensions
        //alert("valid extension");
        //do nothing, all's well
    }
    
    else {
        alert("Invalid Extension for Audio");
        audio.value = "";
    }
    
}



jQuery(function($) {
//     var $j = jQuery.noConflict();
//     $j("#dob").datepicker();
    $("#dob").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1916:2016'
    });
});
















