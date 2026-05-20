<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>HemoConnect</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{

background:
linear-gradient(
135deg,
#eaf7ff,
#ffeef5
);

font-family:Poppins,sans-serif;

overflow-x:hidden;

transition:0.4s;
}

/* ================= DARK MODE ================= */

body.dark-mode{

background:
linear-gradient(
135deg,
#071421,
#12051f
) !important;

color:white;
}

/* ================= SLIDER ================= */

/* ================= SLIDER ================= */

.main-slider{

width:92%;

margin:40px auto;

position:relative;

overflow:hidden;

border-radius:35px;

background:
linear-gradient(
135deg,
rgba(255,255,255,0.55),
rgba(255,255,255,0.25)
);

backdrop-filter:blur(25px);

-webkit-backdrop-filter:blur(25px);

border:1px solid rgba(255,255,255,0.25);

padding:14px;

box-shadow:
0 10px 40px rgba(0,0,0,0.10);
}

/* DARK MODE */

body.dark-mode .main-slider{

background:
linear-gradient(
135deg,
rgba(20,20,35,0.88),
rgba(45,20,55,0.82)
);

}

/* SLIDES */

.slide{

display:none;

width:100%;

animation:fade 1s;

}

/* IMAGES */

.slide img{

width:100%;

max-height:500px;

object-fit:contain;

border-radius:28px;

background:white;

display:block;

margin:auto;

}

/* FADE */

@keyframes fade{

from{
opacity:0.4;
}

to{
opacity:1;
}

}
/* ================= HERO ================= */

.hero-title{

text-align:center;

font-size:78px;

font-weight:900;

margin-top:40px;

background:
linear-gradient(to right,#ff2e63,#ff6b8a);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

.hero-sub{

text-align:center;

font-size:26px;

font-weight:600;

color:#4b5563;

margin-top:10px;

margin-bottom:60px;
}

body.dark-mode .hero-sub{

color:#ffffff !important;
}

/* ================= GLASS CARDS ================= */

.glass-card{

background:
linear-gradient(
135deg,
rgba(255,255,255,0.60),
rgba(255,255,255,0.28)
);

backdrop-filter:blur(22px);

border-radius:30px;

padding:28px;

height:100%;

border:1px solid rgba(255,255,255,0.25);

box-shadow:
0 8px 30px rgba(0,0,0,0.08);

transition:0.4s;
}

.glass-card:hover{

transform:
translateY(-12px)
scale(1.02);

box-shadow:
0 0 25px rgba(255,0,100,0.25),
0 15px 45px rgba(255,0,100,0.15);

}

transform:translateY(-10px);
}

.glass-card h3{

font-size:32px;

font-weight:900;

margin-bottom:20px;

background:
linear-gradient(to right,#ff2e63,#ff758f);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

.glass-card p{

font-size:18px;

line-height:1.9;

color:#374151;
}

/* DARK MODE CARD TEXT */

body.dark-mode .glass-card{

background:
linear-gradient(
135deg,
rgba(20,20,35,0.88),
rgba(45,20,55,0.82)
) !important;

border:1px solid rgba(255,255,255,0.08);
}

body.dark-mode .glass-card p,
body.dark-mode .glass-card li{

color:#ffffff !important;
}

body.dark-mode .glass-card h3{

background:
linear-gradient(to right,#ff2e63,#ff7aa2) !important;

-webkit-background-clip:text !important;

-webkit-text-fill-color:transparent !important;
}

/* ================= SECTION TITLE ================= */

.section-title{

text-align:center;

font-size:60px;

font-weight:900;

margin-top:80px;

margin-bottom:45px;

background:
linear-gradient(to right,#ff2e63,#ff6b8a);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

/* ================= DONOR CARD ================= */

.donor-card{

background:
linear-gradient(
135deg,
rgba(255,255,255,0.60),
rgba(255,255,255,0.28)
);

backdrop-filter:blur(20px);

border-radius:30px;

overflow:hidden;

border:1px solid rgba(255,255,255,0.25);

box-shadow:
0 8px 30px rgba(0,0,0,0.08);

transition:0.4s;
}

.donor-card:hover{

transform:translateY(-10px);
}

.donor-card img{

height:250px;

object-fit:cover;
}

.donor-card .card-body{

padding:25px;
}

.donor-card h4{

font-size:28px;

font-weight:800;

margin-bottom:18px;

color:#111827;
}

.donor-card p{

font-size:17px;

line-height:1.8;

color:#374151;
}

/* DARK MODE DONOR */

body.dark-mode .donor-card{

background:
linear-gradient(
135deg,
rgba(20,20,35,0.88),
rgba(45,20,55,0.82)
) !important;
}

body.dark-mode .donor-card h4,
body.dark-mode .donor-card p{

color:#ffffff !important;
}

/* ================= INFO BOX ================= */

.info-box{

background:
linear-gradient(
135deg,
rgba(255,255,255,0.60),
rgba(255,255,255,0.28)
);

backdrop-filter:blur(20px);

border-radius:35px;

padding:50px;

margin-top:70px;

border:1px solid rgba(255,255,255,0.25);

box-shadow:
0 8px 30px rgba(0,0,0,0.08);
}

.info-box h2{

font-size:50px;

font-weight:900;

margin-bottom:30px;

background:
linear-gradient(to right,#ff2e63,#ff758f);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

.info-box p,
.info-box li{

font-size:19px;

line-height:2;

color:#374151;
}

/* DARK MODE INFO */

body.dark-mode .info-box{

background:
linear-gradient(
135deg,
rgba(20,20,35,0.88),
rgba(45,20,55,0.82)
) !important;

border:1px solid rgba(255,255,255,0.08);
}

body.dark-mode .info-box p,
body.dark-mode .info-box li{

color:#ffffff !important;
}

body.dark-mode .info-box h2,
body.dark-mode .section-title{

background:
linear-gradient(to right,#ff2e63,#ff7aa2) !important;

-webkit-background-clip:text !important;

-webkit-text-fill-color:transparent !important;
}

/* ================= BUTTON ================= */

.custom-btn{

display:inline-block;

padding:16px 40px;

border-radius:50px;

background:
linear-gradient(to right,#ff2e63,#ff758f);

color:white;

font-size:20px;

font-weight:700;

text-decoration:none;

box-shadow:
0 8px 25px rgba(255,0,100,0.30);

transition:0.3s;
}

.custom-btn:hover{

transform:translateY(-5px);

color:white;

text-decoration:none;
}

/* ================= MOBILE ================= */

@media(max-width:768px){

.hero-title{

font-size:42px;
}

.hero-sub{

font-size:18px;
}

.slide img{

max-height:300px;
}

.section-title{

font-size:40px;
}

}

body.dark-mode .glass-card p,
body.dark-mode .glass-card li,
body.dark-mode .glass-card span,
body.dark-mode .glass-card div,
body.dark-mode .glass-card b,
body.dark-mode .glass-card strong,
body.dark-mode .glass-card font{

color:#ffffff !important;
}


/* ================= REWARD SYSTEM ================= */

.reward-section{

width:92%;

margin:70px auto;

padding:50px;

border-radius:35px;

background:
linear-gradient(
135deg,
rgba(255,255,255,0.60),
rgba(255,255,255,0.28)
);

backdrop-filter:blur(20px);

box-shadow:
0 8px 30px rgba(0,0,0,0.08);
}

/* TITLE */

.reward-title{

text-align:center;

font-size:58px;

font-weight:900;

margin-bottom:50px;

background:
linear-gradient(to right,#ff2e63,#ff7aa2);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

/* GRID */

.reward-grid{

display:grid;

grid-template-columns:
repeat(auto-fit,minmax(250px,1fr));

gap:30px;
}

/* CARDS */

.reward-card{

padding:35px;

border-radius:28px;

background:white;

text-align:center;

transition:0.4s;

box-shadow:
0 8px 25px rgba(0,0,0,0.08);
}

.reward-card:hover{

transform:
translateY(-12px)
scale(1.03);

box-shadow:
0 15px 40px rgba(255,0,100,0.15);
}

.reward-card h2{

font-size:34px;

font-weight:800;

margin-bottom:20px;

color:#ff2e63;
}

.reward-card p{

font-size:20px;

font-weight:600;

line-height:1.6;

color:#374151;
}

/* LEADERBOARD */

.leaderboard-box{

margin-top:60px;

padding:35px;

border-radius:28px;

background:white;

box-shadow:
0 8px 25px rgba(0,0,0,0.08);
}

.leaderboard-box h2{

font-size:42px;

font-weight:900;

margin-bottom:30px;

color:#ff2e63;

text-align:center;
}

/* ITEMS */

.leaderboard-item{

display:flex;

justify-content:space-between;

padding:18px 0;

font-size:24px;

font-weight:700;

border-bottom:
1px solid rgba(0,0,0,0.08);
}

/* DARK MODE LEADERBOARD */

body.dark-mode .leaderboard-box{

background:#1f2937;

color:white;

}

body.dark-mode .leaderboard-item{

color:white;

border-bottom:
1px solid rgba(255,255,255,0.15);

}
/* DARK MODE REWARD CARDS */

body.dark-mode .reward-card{

background:#1f2937;

color:white;

}

body.dark-mode .reward-card p{

color:#d1d5db;

}
</style>

</head>

<body>

<?php
$active="home";
include('head.php');
?>

<!-- ================= NEARBY DONOR FINDER ================= -->

<div class="nearby-box">

<h1 class="nearby-title">

📍 Nearby Blood Finder

</h1>

<p class="nearby-sub">

Instantly locate nearby blood banks, hospitals and emergency donor support near your current location.

</p>

<div class="find-buttons">

<button onclick="openBloodBanks()" class="find-btn">

🩸 Blood Banks

</button>

<button onclick="openHospitals()" class="find-btn">

🏥 Hospitals

</button>

<button onclick="openEmergency()" class="find-btn">

🚑 Emergency

</button>

</div>

<div id="locationResult"></div>

</div>

<!-- ================= AI BLOOD CHECKER ================= -->

<div class="nearby-box">

<h1 class="nearby-title">

❤️ AI Blood Compatibility Checker

</h1>

<p class="nearby-sub">

Select your blood group to instantly check compatible donors and recipients.

</p>

<select id="bloodGroup" class="blood-select">

<option value="">Select Blood Group</option>

<option value="O-">O-</option>
<option value="O+">O+</option>
<option value="A-">A-</option>
<option value="A+">A+</option>
<option value="B-">B-</option>
<option value="B+">B+</option>
<option value="AB-">AB-</option>
<option value="AB+">AB+</option>

</select>

<br><br>

<button onclick="checkCompatibility()" class="find-btn">

Check Compatibility

</button>

<div id="compatibilityResult"></div>

</div>
<!-- ================= LIVE STATS ================= -->

<div class="stats-section">

<div class="stat-card">

<h1 class="counter" data-target="10000">0</h1>

<p>Registered Donors</p>

</div>

<div class="stat-card">

<h1 class="counter" data-target="500">0</h1>

<p>Blood Requests Solved</p>

</div>

<div class="stat-card">

<h1 class="counter" data-target="120">0</h1>

<p>Hospitals Connected</p>

</div>

<div class="stat-card">

<h1>24×7</h1>

<p>Emergency Support</p>

</div>

</div>
<!-- ================= HOSPITAL PARTNERS ================= -->

<div class="partner-section">

<h1 class="partner-title">

🏥 Trusted Hospital Partners

</h1>

<div class="partner-grid">

<!-- AIIMS -->

<div class="partner-card">

<img src="hospital/aiims.png">

<h3>AIIMS</h3>

</div>

<!-- AMRI -->

<div class="partner-card">

<img src="hospital/amri.jpg">

<h3>AMRI Hospitals</h3>

</div>

<!-- APOLLO -->

<div class="partner-card">

<img src="hospital/images.jpg">

<h3>Apollo Hospitals</h3>

</div>

<!-- KIMS -->

<div class="partner-card">

<img src="hospital/kims.png">

<h3>KIMS Hospital</h3>

</div>

</div>

</div>
<!-- ================= AI ELIGIBILITY CHECKER ================= -->

<div class="eligibility-box">

<h1 class="eligibility-title">

🧠 AI Health Eligibility Checker

</h1>

<div class="question">

<label>🤒 Do you currently have fever?</label>

<select id="fever">

<option value="no">No</option>

<option value="yes">Yes</option>

</select>

</div>

<div class="question">

<label>🎂 Your Age</label>

<input type="number" id="age" placeholder="Enter your age">

</div>

<div class="question">

<label>⚖️ Your Weight (kg)</label>

<input type="number" id="weight" placeholder="Enter your weight">

</div>

<div class="question">

<label>🏥 Any recent surgery?</label>

<select id="surgery">

<option value="no">No</option>

<option value="yes">Yes</option>

</select>

</div>

<button onclick="checkEligibility()" class="find-btn">

Check Eligibility

</button>

<div id="eligibilityResult"></div>

</div>
<!-- ================= BLOOD REQUEST SYSTEM ================= -->

<div class="request-box">

<h1 class="request-title">

🩸 Emergency Blood Request

</h1>

<div class="request-form">

<select id="reqBlood">

<option value="">Select Blood Group</option>

<option>O+</option>
<option>O-</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>

</select>

<input type="text"
id="reqHospital"
placeholder="Hospital Name">

<select id="reqUrgency">

<option value="">Select Urgency</option>

<option>Critical</option>
<option>High</option>
<option>Normal</option>

</select>

<input type="text"
id="reqContact"
placeholder="Contact Number">

</div>

<br>

<button onclick="postRequest()" class="find-btn">

Post Blood Request

</button>

<div id="requestResult"></div>

</div>

<!-- ================= SCRIPTS ================= -->

<script>

function darkMode(){

document.body.classList.toggle("dark-mode");

}

/* BLOOD BANKS */

function openBloodBanks(){

if(navigator.geolocation){

navigator.geolocation.getCurrentPosition(

function(position){

let lat = position.coords.latitude;

let lon = position.coords.longitude;

document.getElementById("locationResult").innerHTML = `

<div class="location-card">

<h3>🩸 Nearby Blood Banks Found</h3>

<p>

Opening Google Maps with nearby blood banks near your location.

</p>

</div>

`;

let mapsUrl =

`https://www.google.com/maps/search/blood+bank/@${lat},${lon},15z`;

window.open(mapsUrl,'_blank');

},

function(){

alert("Location access denied");

}

);

}else{

alert("Geolocation not supported");

}

}

/* HOSPITALS */

function openHospitals(){

if(navigator.geolocation){

navigator.geolocation.getCurrentPosition(

function(position){

let lat = position.coords.latitude;

let lon = position.coords.longitude;

document.getElementById("locationResult").innerHTML = `

<div class="location-card">

<h3>🏥 Nearby Hospitals Found</h3>

<p>

Opening nearest hospitals in Google Maps.

</p>

</div>

`;

let mapsUrl =

`https://www.google.com/maps/search/hospitals/@${lat},${lon},15z`;

window.open(mapsUrl,'_blank');

},

function(){

alert("Location access denied");

}

);

}else{

alert("Geolocation not supported");

}

}

/* EMERGENCY */

function openEmergency(){

if(navigator.geolocation){

navigator.geolocation.getCurrentPosition(

function(position){

let lat = position.coords.latitude;

let lon = position.coords.longitude;

document.getElementById("locationResult").innerHTML = `

<div class="location-card">

<h3>🚑 Emergency Blood Support</h3>

<p>

Searching emergency blood support centers near your location.

</p>

</div>

`;

let mapsUrl =

`https://www.google.com/maps/search/emergency+blood+bank+hospitals/@${lat},${lon},15z`;

window.open(mapsUrl,'_blank');

},

function(){

alert("Location access denied");

}

);

}else{

alert("Geolocation not supported");

}

}

/* AI BLOOD COMPATIBILITY */

function checkCompatibility(){

let blood = document.getElementById("bloodGroup").value;

let donateTo = "";
let receiveFrom = "";
let emergency = "";

switch(blood){

case "O-":

donateTo = "Everyone";
receiveFrom = "O- only";
emergency = "Universal Donor";

break;

case "O+":

donateTo = "O+, A+, B+, AB+";
receiveFrom = "O+, O-";
emergency = "High Compatibility";

break;

case "A-":

donateTo = "A-, A+, AB-, AB+";
receiveFrom = "A-, O-";
emergency = "Rare Blood Group";

break;

case "A+":

donateTo = "A+, AB+";
receiveFrom = "A+, A-, O+, O-";
emergency = "Common Blood Group";

break;

case "B-":

donateTo = "B-, B+, AB-, AB+";
receiveFrom = "B-, O-";
emergency = "Rare Blood Group";

break;

case "B+":

donateTo = "B+, AB+";
receiveFrom = "B+, B-, O+, O-";
emergency = "Moderate Compatibility";

break;

case "AB-":

donateTo = "AB-, AB+";
receiveFrom = "AB-, A-, B-, O-";
emergency = "Rare Recipient Type";

break;

case "AB+":

donateTo = "AB+ only";
receiveFrom = "Everyone";
emergency = "Universal Recipient";

break;

default:

alert("Please select blood group");

return;

}

document.getElementById("compatibilityResult").innerHTML = `

<div class="compatibility-card">

<h3>🧠 AI Compatibility Result</h3>

<p>

<b>Selected Blood Group:</b> ${blood}<br><br>

<b>Can Donate To:</b> ${donateTo}<br><br>

<b>Can Receive From:</b> ${receiveFrom}<br><br>

<b>Emergency Status:</b> ${emergency}

</p>

</div>

`;

}
/* ================= COUNTER ANIMATION ================= */

const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {

counter.innerText = '0';

const updateCounter = () => {

const target = +counter.getAttribute('data-target');

const c = +counter.innerText;

const increment = target / 100;

if(c < target){

counter.innerText = `${Math.ceil(c + increment)}`;

setTimeout(updateCounter,20);

}else{

counter.innerText = target.toLocaleString() + '+';

}

};

updateCounter();

});
/* ================= ELIGIBILITY CHECKER ================= */

function checkEligibility(){

let fever =
document.getElementById("fever").value;

let age =
document.getElementById("age").value;

let weight =
document.getElementById("weight").value;

let surgery =
document.getElementById("surgery").value;

let resultBox =
document.getElementById("eligibilityResult");

if(
fever === "yes" ||
age < 18 ||
weight < 50 ||
surgery === "yes"
){

resultBox.innerHTML = `

<div class="result-box not-eligible">

❌ Not Eligible To Donate Blood

</div>

`;

}else{

resultBox.innerHTML = `

<div class="result-box eligible">

✅ Eligible To Donate Blood

</div>

`;

}

}
/* ================= BLOOD REQUEST SYSTEM ================= */

function postRequest(){

let blood =
document.getElementById("reqBlood").value;

let hospital =
document.getElementById("reqHospital").value;

let urgency =
document.getElementById("reqUrgency").value;

let contact =
document.getElementById("reqContact").value;

if(
blood==="" ||
hospital==="" ||
urgency==="" ||
contact===""){

alert("Please fill all details");

return;

}

document.getElementById("requestResult").innerHTML = `

<div class="request-card">

<h3>🚨 Blood Request Posted</h3>

<p>

<b>Blood Group:</b> ${blood}<br><br>

<b>Hospital:</b> ${hospital}<br><br>

<b>Urgency:</b> ${urgency}<br><br>

<b>Contact:</b> ${contact}

</p>

<button class="accept-btn">

❤️ Accept Request

</button>

</div>

`;

}

</script>

</body>

</html>

<!-- ================= MODERN IMAGE SLIDER ================= -->

<div class="main-slider">

<div class="slide">
<img src="./image/banner_top.png">
</div>

<div class="slide">
<img src="./image/banner_left_middle.png">
</div>

<div class="slide">
<img src="./image/banner_right_middle.png">
</div>

<div class="slide">
<img src="./image/banner_left_bottom.png">
</div>

<div class="slide">
<img src="./image/banner_right_bottom.png">
</div>

</div>

<script>

let slideIndex = 0;

showSlides();

function showSlides(){

let i;

let slides = document.getElementsByClassName("slide");

for(i = 0; i < slides.length; i++){

slides[i].style.display = "none";

}

slideIndex++;

if(slideIndex > slides.length){

slideIndex = 1;

}

slides[slideIndex-1].style.display = "block";

setTimeout(showSlides,3000);

}

</script>

<!-- ================= HERO ANIMATION ================= -->

<div class="hero-animation">

<div class="blood-drop drop1"></div>

<div class="blood-drop drop2"></div>

<div class="blood-drop drop3"></div>

<div class="blood-drop drop4"></div>

<div class="blood-drop drop5"></div>

<div class="glow glow1"></div>

<div class="glow glow2"></div>

<div class="glow glow3"></div>



</div>

<h1 class="hero-title">

Welcome to HemoConnect

</h1>



<p class="hero-sub">

Smart Blood Bank & Emergency Donor Management Platform

</p>
<div class="container">

<!-- ================= INFO CARDS ================= -->

<div class="row">

<div class="col-lg-4 mb-4">

<div class="glass-card">

<h3>🩸 The Need For Blood</h3>

<p>

<?php

include 'conn.php';

$sql= "select * from pages where page_type='needforblood'";

$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)) {

echo $row['page_data'];

}

?>

</p>

</div>

</div>

<div class="col-lg-4 mb-4">

<div class="glass-card">

<h3>💡 Blood Tips</h3>

<p>

<?php

$sql= "select * from pages where page_type='bloodtips'";

$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)) {

echo $row['page_data'];

}

?>

</p>

</div>

</div>

<div class="col-lg-4 mb-4">

<div class="glass-card">

<h3>❤️ Who You Could Help</h3>

<p>

<?php

$sql= "select * from pages where page_type='whoyouhelp'";

$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)) {

echo $row['page_data'];

}

?>

</p>

</div>

</div>

</div>
</div>
<!-- ================= DONORS ================= -->

<div class="container">

<h1 class="section-title">

Available Donors

</h1>

<div class="row">

<?php

$sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";

$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)) {

?>

<div class="col-lg-4 mb-4">

<div class="donor-card">

<img class="card-img-top" src="./image/banner_top.png">

<div class="card-body">

<h4><?php echo $row['donor_name']; ?></h4>

<p>

<b>Blood Group :</b> <?php echo $row['blood_group']; ?><br>

<b>Mobile :</b> <?php echo $row['donor_number']; ?><br>

<b>Gender :</b> <?php echo $row['donor_gender']; ?><br>

<b>Age :</b> <?php echo $row['donor_age']; ?><br>

<b>Address :</b> <?php echo $row['donor_address']; ?>

</p>

</div>

</div>

</div>

<?php } ?>

</div>
</div>
<!-- ================= INSTANT BLOOD MATCH ================= -->

<div class="container">

<div class="info-box text-center">

<h2>⚡ Instant Blood Match</h2>

<p>

Find nearby blood donors instantly based on blood group and location.

</p>

<div class="row justify-content-center align-items-center mt-4">

<div class="col-lg-4 col-md-12 mb-3">

<select
id="instantBlood"
class="form-control p-3"
style="
height:58px;
font-size:18px;
font-weight:600;
border-radius:10px;
color:#111827;
background:white;
-webkit-text-fill-color:#111827;
">

<option value="">Select Blood Group</option>

<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>

</select>

</div>

<div class="col-lg-4 col-md-12 mb-3">

<input
type="text"
id="userLocation"
class="form-control p-3"
placeholder="Enter your location"
style="
height:58px;
font-size:18px;
font-weight:600;
border-radius:10px;
">

</div>

<div class="col-lg-3 col-md-12 mb-3">

<button
class="custom-btn border-0 w-100"
style="
height:58px;
font-size:18px;
border-radius:50px;
"
onclick="findBloodMatch()">

🔍 Find Match

</button>

</div>

</div>

<div id="matchResult" class="mt-4"></div>

</div>

</div>
<div class="container">

<!-- ================= DONATION APPOINTMENT ================= -->

<div class="container mt-5">

<div class="info-box text-center">

<h2>📅 Donation Appointment Booking</h2>

<p>

Reserve your preferred hospital, date and donation time slot instantly.

</p>

<div class="row justify-content-center align-items-center mt-4">

<!-- HOSPITAL -->

<div class="col-lg-4 mb-3">

<select
id="appointmentHospital"
class="form-control p-3"
style="
height:58px;
font-size:18px;
font-weight:600;
border-radius:12px;
">

<option value="">Select Hospital</option>

<option>AIIMS Bhubaneswar</option>

<option>AMRI Hospital</option>

<option>Apollo Hospital</option>

<option>KIMS Hospital</option>

<option>SUM Hospital</option>

</select>

</div>

<!-- DATE -->

<div class="col-lg-4 mb-3">

<input
type="date"
id="appointmentDate"
class="form-control p-3"
style="
height:58px;
font-size:18px;
font-weight:600;
border-radius:12px;
">

</div>

<!-- SLOT -->

<div class="col-lg-4 mb-3">

<select
id="appointmentSlot"
class="form-control p-3"
style="
height:58px;
font-size:18px;
font-weight:600;
border-radius:12px;
">

<option value="">Select Time Slot</option>

<option>09:00 AM</option>

<option>11:00 AM</option>

<option>01:00 PM</option>

<option>03:00 PM</option>

<option>05:00 PM</option>

</select>

</div>

</div>

<!-- BUTTON -->

<button
class="custom-btn mt-3 border-0"
onclick="bookAppointment()">

✅ Book Appointment

</button>

<!-- RESULT -->

<div id="appointmentResult" class="mt-4"></div>

</div>

</div>

<script>

function bookAppointment(){

let hospital =
document.getElementById("appointmentHospital").value;

let date =
document.getElementById("appointmentDate").value;

let slot =
document.getElementById("appointmentSlot").value;

let result =
document.getElementById("appointmentResult");

if(
hospital === "" ||
date === "" ||
slot === ""
){

result.innerHTML = `

<div class="alert alert-danger">

Please select hospital, date and slot.

</div>

`;

return;

}

result.innerHTML = `

<div class="glass-card">

<h3>

✅ Appointment Confirmed

</h3>

<p>

🏥 <b>Hospital:</b> ${hospital}<br><br>

📅 <b>Date:</b> ${date}<br><br>

⏰ <b>Time Slot:</b> ${slot}

</p>

</div>

`;

}

</script>

<!-- ================= DIGITAL DONOR CARD ================= -->

<div class="container mt-5">

<div class="info-box text-center">

<h2>🧾 Digital Donor Card</h2>

<p>

Generate your smart donor identity card instantly.

</p>

<div class="glass-card mt-4">

<img
src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=HemoConnectDonor"
style="
width:150px;
height:150px;
margin-bottom:20px;
">

<h3>❤️ HemoConnect Donor</h3>

<p>

🩸 Blood Group: <b>O+</b><br><br>

🆔 Donor ID: <b>HC2026X91</b><br><br>

📞 Contact: <b>+91 9876543210</b>

</p>

<button class="custom-btn">

⬇ Download Card

</button>

</div>

</div>

</div>

<!-- ================= ADMIN ANALYTICS ================= -->

<div class="container mt-5">

<div class="info-box text-center">

<h2>📈 Admin Analytics Panel</h2>

<p>

Real-time donation and blood request insights.

</p>

<div class="row mt-5">

<div class="col-lg-4 mb-4">

<div class="glass-card">

<h3>🩸 Monthly Donations</h3>

<h1 style="
font-size:38px;
line-height:1.2;
">

128

</h1>

<p>

Donations recorded this month.

</p>

</div>

</div>

<div class="col-lg-4 mb-4">

<div class="glass-card">

<h3>🔥 Top Blood Group</h3>

<h1 style="
font-size:38px;
line-height:1.2;
">

O+

</h1>

<p>

Most requested blood group.

</p>

</div>

</div>

<div class="col-lg-4 mb-4">

<div class="glass-card">

<h3>📍 Top City Requests</h3>

<h1 style="font-size:38px;">Bhubaneswar</h1>

<p>

Highest emergency requests received.

</p>

</div>

</div>

</div>

</div>

</div>

<!-- ================= SHARE EMERGENCY REQUEST ================= -->
 <!-- ================= REWARD SYSTEM ================= -->

<div class="reward-section">

<h1 class="reward-title">

🏅 Donor Rewards & Leaderboard

</h1>

<div class="reward-grid">

<!-- BADGE 1 -->

<div class="reward-card">

<h2>🩸 First Time Hero</h2>

<p>

Awarded for your first blood donation.

</p>

</div>

<!-- BADGE 2 -->

<div class="reward-card">

<h2>❤️ Lifesaver</h2>

<p>

Given to donors who helped save multiple lives.

</p>

</div>

<!-- BADGE 3 -->

<div class="reward-card">

<h2>👑 Platinum Donor</h2>

<p>

Special badge for regular blood donation heroes.

</p>

</div>

</div>

<!-- LEADERBOARD -->

<div class="leaderboard-box">

<h2>

🏆 Top Donor Leaderboard

</h2>

<div class="leaderboard-item">

<span>🥇 Rahul</span>

<span>12 Donations</span>

</div>

<div class="leaderboard-item">

<span>🥈 Priya</span>

<span>10 Donations</span>

</div>

<div class="leaderboard-item">

<span>🥉 Aman</span>

<span>8 Donations</span>

</div>

</div>

</div>

<!-- ================= SHARE EMERGENCY REQUEST ================= -->

<div class="container mt-5">

<div class="info-box text-center">

<h2>📤 Share Emergency Request</h2>

<p>

Share urgent blood requests instantly across platforms.

</p>

<div class="mt-4">

<!-- WHATSAPP -->

<a
href="https://wa.me/?text=🚨%20Emergency%20Blood%20Needed!%0A%0A🩸%20Blood%20Group:%20O+%0A📍%20Location:%20Bhubaneswar%0A📞%20Contact:%209876543210%0A%0APlease%20help%20urgently.%20Shared%20via%20HemoConnect."
target="_blank"
class="custom-btn m-2">

WhatsApp

</a>

<!-- TELEGRAM -->

<a
href="https://t.me/share/url?url=https://hemoconnect.com&text=🚨 Emergency Blood Needed! 🩸 Blood Group: O+ 📍 Location: Bhubaneswar 📞 Contact: 9876543210 Please help urgently. Shared via HemoConnect."
target="_blank"
class="custom-btn m-2">

Telegram

</a>

<!-- EMAIL -->

<!-- EMAIL -->

<a
href="https://mail.google.com/mail/?view=cm&fs=1&su=Emergency Blood Request&body=🚨 Emergency Blood Needed! %0A%0A🩸 Blood Group: O+ %0A📍 Location: Bhubaneswar %0A📞 Contact: 9876543210 %0A%0APlease help urgently. Shared via HemoConnect."
target="_blank"
class="custom-btn m-2">

Email

</a>

</div>

</div>

</div>

<!-- ================= BLOOD GROUPS ================= -->

<div class="info-box">

<div class="row align-items-center">

<div class="col-lg-6">

<h2>BLOOD GROUPS</h2>

<p>

<?php

$sql= "select * from pages where page_type='bloodgroups'";

$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)) {

echo $row['page_data'];

}

?>

</p>

</div>

<div class="col-lg-6">

<img src="./image/banner_right_middle.png" class="img-fluid rounded">

</div>

</div>

</div>

<!-- ================= UNIVERSAL ================= -->

<div class="info-box">

<div class="row align-items-center">

<div class="col-lg-8">

<h2>UNIVERSAL DONORS & RECIPIENTS</h2>

<p>

<?php

$sql= "select * from pages where page_type='universal'";

$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)) {

echo $row['page_data'];

}

?>

</p>

</div>

<div class="col-lg-4 text-center">

<a href="donate_blood.php" class="custom-btn">

Become A Donor

</a>

</div>

</div>

</div>
<!-- ================= HEMOAI CHATBOT ================= -->

<div id="hemoPopup" class="hemo-popup">

<div class="hemo-header">

❤️ HemoAI Assistant

</div>

<div class="hemo-body" id="hemoBody">

<div class="bot-message">

Hello ❤️ I'm <b>HemoAI</b><br>

Ask me anything about blood donation.

</div>

</div>

<div class="hemo-input">

<input type="text"
id="hemoInput"
placeholder="Type here...">

<button onclick="sendHemoMessage()">

➤

</button>

</div>

</div>

<!-- FLOATING BOT -->

<div id="hemoChatBtn" onclick="toggleHemoChat()">

<div class="hemo-badge">1</div>

<div class="hemo-robot">

<img src="image/hemo_connect_chatbot_avatar.svg">

</div>

<div class="hemo-label">

❤️ HemoAI

</div>

</div>

<?php include('footer.php'); ?>

<script>

function darkMode(){

document.body.classList.toggle("dark-mode");

}

/* ================= HEMOAI CHATBOT ================= */

function toggleHemoChat(){

let popup =
document.getElementById("hemoPopup");

if(
popup.style.display === "block"
){

popup.style.display = "none";

}else{

popup.style.display = "block";

}

}

function sendHemoMessage(){

let input =
document.getElementById("hemoInput");

let message =
input.value;

let body =
document.getElementById("hemoBody");

if(message.trim()==="") return;

/* USER MESSAGE */

body.innerHTML += `

<div style="
text-align:right;
margin-top:15px;
">

<div style="
display:inline-block;
background:#ff2e63;
color:white;
padding:14px 18px;
border-radius:18px;
max-width:80%;
font-size:16px;
word-wrap:break-word;
">

${message}

</div>

</div>

`;

/* TYPING */

body.innerHTML += `

<div id="typingBox"
style="margin-top:15px;">

<div class="bot-message">

🤖 HemoAI is typing...

</div>

</div>

`;

body.scrollTop = body.scrollHeight;

/* AI FETCH */

fetch("chatbot.php",{

method:"POST",

headers:{

"Content-Type":
"application/x-www-form-urlencoded"

},

body:
"message="+encodeURIComponent(message)

})

.then(response=>response.json())

.then(data=>{

document.getElementById("typingBox").remove();

body.innerHTML += `

<div style="
margin-top:15px;
">

<div class="bot-message">

${data.reply}

</div>

</div>

`;

body.scrollTop =
body.scrollHeight;

})

.catch(error=>{

document.getElementById("typingBox").remove();

body.innerHTML += `

<div style="
margin-top:15px;
">

<div class="bot-message">

❌ AI Server Error

</div>

</div>

`;

});

input.value="";

}
function findBloodMatch(){

let blood =
document.getElementById("instantBlood").value;

let location =
document.getElementById("userLocation").value;

let result =
document.getElementById("matchResult");

if(blood==="" || location===""){

result.innerHTML = `

<div class="alert alert-danger">

Please enter blood group and location.

</div>

`;

return;

}

let randomDonors =
Math.floor(Math.random()*5)+1;

let randomDistance =
(Math.random()*5).toFixed(1);

result.innerHTML = `

<div class="glass-card">

<h3>

🩸 ${randomDonors} Donors Available

</h3>

<p>

📍 Within ${randomDistance} KM near <b>${location}</b>

</p>

<a href="need_blood.php"
class="custom-btn">

View Donors

</a>

</div>

`;

}


</script>

</body>

</html>