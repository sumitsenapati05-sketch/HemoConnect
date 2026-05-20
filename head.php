

<html>

<head>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
html{

scroll-behavior:smooth;

}
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
transition:0.3s;
}

/* ================= BODY ================= */

body{

background:
linear-gradient(
135deg,
#edf7ff 0%,
#f8fafc 50%,
#ffeef4 100%
);

min-height:100vh;

overflow-x:hidden;

color:#111827;

position:relative;
}

/* ================= GLOW EFFECTS ================= */

body::before{

content:"";

position:fixed;

width:450px;
height:450px;

background:rgba(0,255,255,0.10);

filter:blur(130px);

top:-100px;
left:-100px;

z-index:-1;
}

body::after{

content:"";

position:fixed;

width:450px;
height:450px;

background:rgba(255,0,100,0.10);

filter:blur(130px);

bottom:-100px;
right:-100px;

z-index:-1;
}

/* ================= NAVBAR ================= */

.header{

width:95%;

margin:15px auto;

padding:22px 35px;

border-radius:35px;

background:rgba(255,255,255,0.55);

backdrop-filter:blur(20px);

-webkit-backdrop-filter:blur(20px);

border:1px solid rgba(255,255,255,0.25);

display:flex;

justify-content:space-between;

align-items:center;

box-shadow:
0 8px 32px rgba(0,0,0,0.15);

position:sticky;

top:15px;

z-index:999;
}

/* ================= LOGO ================= */

.logo{

font-size:58px;

font-weight:900;

text-decoration:none;

background:
linear-gradient(to right,#ff2e63,#ff6b8a);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;

letter-spacing:1px;

text-shadow:
0 3px 12px rgba(255,0,90,0.15);
}

/* ================= MENU ================= */

.header-right{

display:flex;

align-items:center;

gap:10px;
}

.header-right a{

text-decoration:none;

color:#111827;

font-size:17px;

font-weight:700;

padding:12px 18px;

border-radius:18px;
}

.header-right a:hover{

background:rgba(255,255,255,0.5);

transform:translateY(-2px);

box-shadow:
0 4px 15px rgba(255,255,255,0.08);
}

/* ================= ACTIVE TAB ================= */

a.act{

background:
linear-gradient(
to right,
#ff2e63,
#ff6b8a
);

color:white !important;

box-shadow:
0 4px 15px rgba(255,0,80,0.3);
}

/* ================= ALERT BAR ================= */

.live-alert-bar{

width:95%;

margin:25px auto 35px auto;

height:78px;

border-radius:28px;

display:flex;

align-items:center;

overflow:hidden;

padding:0 28px;

background:
linear-gradient(
135deg,
rgba(255,255,255,0.60),
rgba(255,255,255,0.25)
);

backdrop-filter:blur(22px);

-webkit-backdrop-filter:blur(22px);

border:
1px solid rgba(255,255,255,0.22);

box-shadow:
0 10px 35px rgba(0,0,0,0.12);

position:relative;
}

.dark-mode .live-alert-bar{

background:
linear-gradient(
135deg,
rgba(16,18,35,0.92),
rgba(42,16,52,0.90)
);

border:
1px solid rgba(255,255,255,0.06);
}

/* ================= PULSE DOT ================= */

.pulse-dot{

width:18px;

height:18px;

border-radius:50%;

background:#ff1744;

margin-right:22px;

position:relative;

animation:pulse 1.5s infinite;
}

.pulse-dot::before{

content:"";

position:absolute;

top:-10px;
left:-10px;

width:38px;
height:38px;

border-radius:50%;

background:rgba(255,23,68,0.25);

animation:pulseRing 1.5s infinite;
}

@keyframes pulse{

0%{
transform:scale(1);
}

50%{
transform:scale(1.18);
}

100%{
transform:scale(1);
}

}

@keyframes pulseRing{

0%{
transform:scale(0.5);
opacity:1;
}

100%{
transform:scale(2);
opacity:0;
}

}

/* ================= MOVING ALERT ================= */

.alert-track{

overflow:hidden;

white-space:nowrap;

width:100%;
}

.alert-text{

display:inline-block;

font-size:22px;

font-weight:700;

letter-spacing:0.5px;

color:#111827;

padding-left:100%;

animation:liveTicker 22s linear infinite;
}

.dark-mode .alert-text{

color:#ffffff;
}

@keyframes liveTicker{

0%{
transform:translateX(0%);
}

100%{
transform:translateX(-100%);
}

}

/* ================= DARK BUTTON ================= */

.darkbtn{

width:55px;
height:55px;

border-radius:50%;

border:none;

cursor:pointer;

font-size:24px;

background:white;

color:black;

box-shadow:
0 5px 15px rgba(0,0,0,0.15);
}

.darkbtn:hover{

transform:scale(1.08);
}

/* ================= NEARBY FINDER ================= */

.nearby-box{

width:95%;

margin:40px auto;

padding:45px;

border-radius:35px;

background:
linear-gradient(
135deg,
rgba(255,255,255,0.60),
rgba(255,255,255,0.28)
);

backdrop-filter:blur(20px);

-webkit-backdrop-filter:blur(20px);

border:
1px solid rgba(255,255,255,0.25);

box-shadow:
0 10px 40px rgba(0,0,0,0.10);

text-align:center;
}

.dark-mode .nearby-box{

background:
linear-gradient(
135deg,
rgba(20,20,35,0.88),
rgba(45,20,55,0.82)
);

border:
1px solid rgba(255,255,255,0.08);
}

.nearby-title{

font-size:55px;

font-weight:900;

margin-bottom:15px;

background:
linear-gradient(to right,#ff2e63,#ff7aa2);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

.nearby-sub{

font-size:22px;

font-weight:500;

color:#4b5563;

margin-bottom:35px;
}

.dark-mode .nearby-sub{

color:white;
}

/* ================= BUTTONS ================= */

.find-buttons{

display:flex;

justify-content:center;

gap:20px;

flex-wrap:wrap;
}

.find-btn{

padding:18px 35px;

border:none;

border-radius:60px;

font-size:20px;

font-weight:700;

cursor:pointer;

color:white;

background:
linear-gradient(to right,#ff2e63,#ff6b8a);

box-shadow:
0 10px 30px rgba(255,0,100,0.30);

transition:0.3s;
}

.find-btn:hover{

transform:translateY(-5px);
}

/* ================= LOCATION CARD ================= */

.location-card{

margin-top:35px;

padding:35px;

border-radius:30px;

background:
rgba(255,255,255,0.35);

backdrop-filter:blur(18px);

box-shadow:
0 8px 25px rgba(0,0,0,0.08);
}

.dark-mode .location-card{

background:
rgba(255,255,255,0.08);

color:white;
}

.location-card h3{

font-size:38px;

font-weight:800;

margin-bottom:18px;

background:
linear-gradient(to right,#ff2e63,#ff7aa2);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

.location-card p{

font-size:20px;

line-height:2;
}

/* ================= AI BLOOD CHECKER ================= */

.blood-select{

width:320px;

padding:18px;

font-size:20px;

font-weight:700;

border:none;

border-radius:20px;

outline:none;

background:white;

box-shadow:
0 8px 25px rgba(0,0,0,0.10);
}

/* RESULT CARD */

.compatibility-card{

margin-top:40px;

padding:35px;

border-radius:28px;

background:
rgba(255,255,255,0.35);

backdrop-filter:blur(18px);

box-shadow:
0 8px 25px rgba(0,0,0,0.08);
}

.dark-mode .compatibility-card{

background:
rgba(255,255,255,0.08);

color:white;
}

.compatibility-card h3{

font-size:38px;

font-weight:800;

margin-bottom:18px;

background:
linear-gradient(to right,#ff2e63,#ff7aa2);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

.compatibility-card p{

font-size:21px;

line-height:2;
}

/* ================= DARK MODE ================= */

.dark-mode{

background:
linear-gradient(
135deg,
#071421 0%,
#0f172a 25%,
#111827 60%,
#1e1b4b 100%
) !important;

color:white !important;
}

.dark-mode .header{

background:rgba(255,255,255,0.08) !important;

border:1px solid rgba(255,255,255,0.08);
}

.dark-mode .header-right a{

color:white !important;
}

.dark-mode .logo{

background:
linear-gradient(to right,#ff4d6d,#ffd6de);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

/* ================= RESPONSIVE ================= */

@media(max-width:1000px){

.header{

flex-direction:column;

gap:20px;
}

.header-right{

flex-wrap:wrap;

justify-content:center;
}

.logo{

font-size:42px;
}

.nearby-title{

font-size:40px;
}

}
/* ================= LIVE STATS ================= */

.stats-section{

width:95%;

margin:50px auto;

display:grid;

grid-template-columns:repeat(4,1fr);

gap:25px;
}

/* CARD */

.stat-card{

padding:45px 20px;

border-radius:30px;

text-align:center;

background:
linear-gradient(
135deg,
rgba(255,255,255,0.60),
rgba(255,255,255,0.28)
);

backdrop-filter:blur(20px);

-webkit-backdrop-filter:blur(20px);

border:
1px solid rgba(255,255,255,0.25);

box-shadow:
0 10px 40px rgba(0,0,0,0.10);
}

/* DARK MODE */

.dark-mode .stat-card{

background:
linear-gradient(
135deg,
rgba(20,20,35,0.88),
rgba(45,20,55,0.82)
);

border:
1px solid rgba(255,255,255,0.08);
}

/* NUMBER */

.stat-card h1{

font-size:60px;

font-weight:900;

margin-bottom:15px;

background:
linear-gradient(to right,#ff2e63,#ff7aa2);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

/* TEXT */

.stat-card p{

font-size:22px;

font-weight:600;

color:#4b5563;
}

.dark-mode .stat-card p{

color:white;
}

/* MOBILE */

@media(max-width:1000px){

.stats-section{

grid-template-columns:repeat(2,1fr);
}

}

@media(max-width:600px){

.stats-section{

grid-template-columns:1fr;
}

}

/* ================= HOSPITAL PARTNERS ================= */

.partner-section{

width:95%;

margin:70px auto;

text-align:center;
}

.partner-title{

font-size:60px;

font-weight:900;

margin-bottom:45px;

background:
linear-gradient(to right,#ff2e63,#ff7aa2);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

/* GRID */

.partner-grid{

display:grid;

grid-template-columns:repeat(4,1fr);

gap:30px;
}

/* CARD */

.partner-card{

padding:35px;

border-radius:30px;

background:
linear-gradient(
135deg,
rgba(255,255,255,0.60),
rgba(255,255,255,0.28)
);

backdrop-filter:blur(20px);

-webkit-backdrop-filter:blur(20px);

border:
1px solid rgba(255,255,255,0.25);

box-shadow:
0 10px 40px rgba(0,0,0,0.10);

transition:0.4s;
}

.partner-card:hover{

transform:translateY(-10px) scale(1.03);

box-shadow:
0 15px 45px rgba(255,0,100,0.20);
}

/* DARK MODE */

.dark-mode .partner-card{

background:
linear-gradient(
135deg,
rgba(20,20,35,0.88),
rgba(45,20,55,0.82)
);

border:
1px solid rgba(255,255,255,0.08);
}

/* IMAGE */

.partner-card img{

width:100%;

height:110px;

object-fit:contain;

margin-bottom:18px;
}

/* TEXT */

.partner-card h3{

font-size:28px;

font-weight:800;

color:#111827;
}

.dark-mode .partner-card h3{

color:white;
}

/* MOBILE */

@media(max-width:1000px){

.partner-grid{

grid-template-columns:repeat(2,1fr);
}

}

@media(max-width:600px){

.partner-grid{

grid-template-columns:1fr;
}

.partner-title{

font-size:42px;
}

}

/* ================= AI ELIGIBILITY CHECKER ================= */

.eligibility-box{

width:95%;

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

-webkit-backdrop-filter:blur(20px);

border:
1px solid rgba(255,255,255,0.25);

box-shadow:
0 10px 40px rgba(0,0,0,0.10);
}

.dark-mode .eligibility-box{

background:
linear-gradient(
135deg,
rgba(20,20,35,0.88),
rgba(45,20,55,0.82)
);

border:
1px solid rgba(255,255,255,0.08);
}

.eligibility-title{

font-size:58px;

font-weight:900;

text-align:center;

margin-bottom:40px;

background:
linear-gradient(to right,#ff2e63,#ff7aa2);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

/* QUESTIONS */

.question{

margin-bottom:28px;
}

.question label{

font-size:24px;

font-weight:700;

display:block;

margin-bottom:12px;
}

.dark-mode .question label{

color:white;
}

.question input,
.question select{

width:100%;

padding:18px;

border:none;

border-radius:18px;

font-size:20px;

outline:none;

background:white;
}

/* RESULT */

.result-box{

margin-top:40px;

padding:35px;

border-radius:28px;

text-align:center;

font-size:34px;

font-weight:800;
}

.eligible{

background:
rgba(0,255,120,0.15);

color:#00c853;
}

.not-eligible{

background:
rgba(255,0,80,0.15);

color:#ff1744;
}
/* ================= BLOOD REQUEST SYSTEM ================= */

.request-box{

width:95%;

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

-webkit-backdrop-filter:blur(20px);

border:
1px solid rgba(255,255,255,0.25);

box-shadow:
0 10px 40px rgba(0,0,0,0.10);
}

.dark-mode .request-box{

background:
linear-gradient(
135deg,
rgba(20,20,35,0.88),
rgba(45,20,55,0.82)
);

border:
1px solid rgba(255,255,255,0.08);
}

.request-title{

font-size:58px;

font-weight:900;

text-align:center;

margin-bottom:40px;

background:
linear-gradient(to right,#ff2e63,#ff7aa2);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;
}

/* FORM */

.request-form{

display:grid;

grid-template-columns:repeat(2,1fr);

gap:25px;
}

.request-form input,
.request-form select{

padding:18px;

border:none;

border-radius:18px;

font-size:18px;

outline:none;

background:white;
}

/* REQUEST CARD */

.request-card{

margin-top:40px;

padding:35px;

border-radius:28px;

background:
rgba(255,255,255,0.35);

backdrop-filter:blur(18px);

box-shadow:
0 8px 25px rgba(0,0,0,0.08);
}

.dark-mode .request-card{

background:
rgba(255,255,255,0.08);

color:white;
}

.request-card h3{

font-size:34px;

margin-bottom:18px;

color:#ff2e63;
}

.request-card p{

font-size:20px;

line-height:2;
}

/* ACCEPT BUTTON */

.accept-btn{

margin-top:25px;

padding:16px 35px;

border:none;

border-radius:50px;

font-size:18px;

font-weight:700;

cursor:pointer;

color:white;

background:
linear-gradient(to right,#00c853,#00e676);

box-shadow:
0 8px 25px rgba(0,255,100,0.25);
}

/* MOBILE */

@media(max-width:900px){

.request-form{

grid-template-columns:1fr;
}

}
/* ================= HEMOAI CHATBOT ================= */

#hemoChatBtn{

position:fixed;

bottom:25px;

right:25px;

z-index:99999;

cursor:pointer;

display:flex;

flex-direction:column;

align-items:center;
}

/* ROBOT */

.hemo-robot{

width:95px;

height:95px;

border-radius:50%;

background:
linear-gradient(135deg,#ff2e63,#ff6b8a);

display:flex;

align-items:center;

justify-content:center;

box-shadow:
0 0 35px rgba(255,46,99,0.5);

animation:botFloat 3s ease-in-out infinite;
}

/* ROBOT IMAGE */

.hemo-robot img{

width:78px;

height:78px;

object-fit:contain;
}

/* FLOAT */

@keyframes botFloat{

0%,100%{

transform:translateY(0);
}

50%{

transform:translateY(-10px);
}

}

/* LABEL */

.hemo-label{

margin-top:10px;

padding:10px 22px;

border-radius:30px;

background:
linear-gradient(135deg,#ff2e63,#ff6b8a);

color:white;

font-weight:700;

font-size:18px;

box-shadow:
0 5px 20px rgba(255,46,99,0.4);
}

/* BADGE */

.hemo-badge{

position:absolute;

top:-5px;

right:-2px;

width:30px;

height:30px;

border-radius:50%;

background:#ff1744;

color:white;

display:flex;

align-items:center;

justify-content:center;

font-weight:800;

font-size:14px;

border:3px solid white;

animation:pulseBadge 1.5s infinite;
}

@keyframes pulseBadge{

0%{

transform:scale(1);
}

50%{

transform:scale(1.15);
}

100%{

transform:scale(1);
}

}

/* POPUP */

.hemo-popup{

position:fixed;

bottom:160px;

right:25px;

width:380px;

background:white;

border-radius:30px;

overflow:hidden;

box-shadow:
0 15px 60px rgba(255,0,100,0.25);

z-index:99998;

display:none;

animation:popupShow 0.4s ease;
}

/* DARK MODE */

.dark-mode .hemo-popup{

background:#161625;
}

/* SHOW */

@keyframes popupShow{

from{

opacity:0;

transform:translateY(20px);
}

to{

opacity:1;

transform:translateY(0);
}

}

/* HEADER */

.hemo-header{

padding:18px 22px;

background:
linear-gradient(135deg,#ff2e63,#ff6b8a);

color:white;

font-size:22px;

font-weight:800;
}

/* BODY */

.hemo-body{

padding:20px;

height:260px;

overflow-y:auto;

background:#fff5f7;
}

.dark-mode .hemo-body{

background:#1f1f2f;
}

/* MESSAGE */

.bot-message{

background:white;

padding:18px;

border-radius:20px;

font-size:18px;

line-height:1.7;

box-shadow:
0 5px 15px rgba(0,0,0,0.06);
}

.dark-mode .bot-message{

background:#2b2b40;

color:white;
}

/* INPUT */

.hemo-input{

display:flex;

padding:18px;

gap:10px;

background:white;
}

.dark-mode .hemo-input{

background:#161625;
}

.hemo-input input{

flex:1;

padding:15px;

border:none;

border-radius:16px;

font-size:17px;

outline:none;

background:#f3f4f6;
}

.hemo-input button{

width:60px;

border:none;

border-radius:16px;

background:
linear-gradient(135deg,#ff2e63,#ff6b8a);

color:white;

font-size:22px;

cursor:pointer;
}

/* ================= HERO ANIMATION ================= */

.hero-animation{

position:fixed;

top:0;

left:0;

width:100%;

height:100%;

overflow:hidden;

pointer-events:none;

z-index:-999;

}

/* FLOATING BLOOD DROPS */

.blood-drop{

position:absolute;

width:25px;

height:25px;

background:#ff1744;

border-radius:50% 50% 50% 0;

transform:rotate(-45deg);

opacity:0.6;

animation:floatDrop 10s linear infinite;
}

.blood-drop::before{

content:"";

position:absolute;

width:25px;

height:25px;

background:#ff1744;

border-radius:50%;

top:-12px;

left:0;
}

.blood-drop::after{

content:"";

position:absolute;

width:25px;

height:25px;

background:#ff1744;

border-radius:50%;

top:0;

left:12px;
}

/* DIFFERENT POSITIONS */

.drop1{

left:10%;

animation-delay:0s;
}

.drop2{

left:30%;

animation-delay:2s;
}

.drop3{

left:50%;

animation-delay:4s;
}

.drop4{

left:70%;

animation-delay:6s;
}

.drop5{

left:90%;

animation-delay:8s;
}

/* FLOAT ANIMATION */

@keyframes floatDrop{

0%{

transform:
translateY(100vh)
rotate(-45deg);

opacity:0;
}

20%{

opacity:0.6;
}

100%{

transform:
translateY(-120px)
rotate(-45deg);

opacity:0;
}

}

/* GLOW PARTICLES */

.glow{

position:absolute;

border-radius:50%;

background:
rgba(255,23,68,0.35);

filter:blur(40px);

animation:glowMove 8s ease-in-out infinite;
}

.glow1{

width:200px;

height:200px;

top:10%;

left:10%;
}

.glow2{

width:250px;

height:250px;

top:40%;

right:10%;
}

.glow3{

width:180px;

height:180px;

bottom:10%;

left:40%;
}

/* GLOW MOTION */

@keyframes glowMove{

0%,100%{

transform:translateY(0);
}

50%{

transform:translateY(-30px);
}

}
#instantBlood,
#instantLocation{

width:100% !important;

height:58px !important;

padding:8px 16px !important;

font-size:18px !important;

font-weight:600 !important;

border-radius:10px !important;

border:1px solid #ced4da !important;

box-shadow:none !important;

}

/* BLOOD GROUP DROPDOWN */

#instantBlood{

color:#111827 !important;

background:white !important;

-webkit-text-fill-color:#111827 !important;

}

/* DROPDOWN OPTIONS */

#instantBlood option{

font-size:18px !important;

color:#111827 !important;

background:white !important;

}
</style>

</head>

<body>

<!-- ================= NAVBAR ================= -->

<div class="header">

<a href="home.php" class="logo">

HemoConnect

</a>

<div class="header-right">

<a href="about_us.php"
class="<?php if($active=='about') echo 'act'; ?>">

About Us

</a>

<a href="why_donate_blood.php"
class="<?php if($active=='why') echo 'act'; ?>">

Why Donate Blood

</a>

<a href="donate_blood.php"
class="<?php if($active=='donate') echo 'act'; ?>">

Become A Donor

</a>

<a href="need_blood.php"
class="<?php if($active=='need') echo 'act'; ?>">

Need Blood

</a>

<a href="contact_us.php"
class="<?php if($active=='contact') echo 'act'; ?>">

Contact Us

</a>

<button onclick="darkMode()" class="darkbtn">

🌙

</button>

</div>

</div>

<!-- ================= LIVE ALERT BAR ================= -->

<div class="live-alert-bar">

<div class="pulse-dot"></div>

<div class="alert-track">

<div class="alert-text">

🚨 O- Blood Needed at AIIMS Bhubaneswar • 
🩸 AB+ Emergency Request Active • 
📍 5 Donors Available Nearby • 
❤️ Donate Blood Save Lives • 
🏥 Emergency Support Active 24×7 •

</div>

</div>

</div>

