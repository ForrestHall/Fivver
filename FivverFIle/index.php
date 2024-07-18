<!DOCTYPE HTML>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="js/jquery.sticky.js"></script>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

<title>RV  Breakdown</title>
</head>
<!--DB CALLS -->
<?php
$servername = "localhost";
$username = "root";
$password = "********";
$dbname = "US_LOCATIONS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!-- Mobile Nav -->
 <html>
 <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Testimonial</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <h1 class="logo">Navbar</h1>
        </div>
    </nav>
<body>
</header>
<!-- Begin Main Content -->
<div class="hero" style="background-image: url('images/hero_1.jpg');">
  <div class="main-container">
    <div class="brandingbox">
      <h1 class="home-banner">Find a Repair <strong>Anywhere.</strong></h1>
      <p class="subheading">Over 4,000 shops are waiting to get you back on the road.</p>
    </div>
<div class="select-container">
 <!--state div -->
    <!-- <div class="stateselection">
    <form action="submit" method="post">
    <select name="stateSelect" id="state" class="statedrop"> -->
 <!-- php for states -->
      <!-- <?php
            /* echo "<option value='' id='optid'>Select State</option>";
            $sql="SELECT STATE_NAME, ID FROM US_STATES";
            $result=$conn->query($sql);
            $rows = $result->fetch_all(); */
        foreach($rows as $row) {
          echo "<option value='$row[1]' class='statedrop' id='$row[1]'> $row[0] </option>";
        } 
          ?> -->
   <!--  </select>
    </form>
    </div>  
    <div class=cityselection>
      <form name="postCity" id="facilities" method="post">
    <div>
      <select id="city">
        <option>City</option>
      </select>
    </div>
    </form>
  </div>-->
<!-- WRAPPER FOR THE ZIP INPUT-->
      <div class="form-container">
        <form class="zip-form form-wrapper" id="search">
          <input id="search" class="zip-input" type="text" maxlength="5" autocomplete="postal-code" inputmode="numeric" placeholder="Enter ZIP Code" aria-label="Zip Code" name="zipCode" value="">
          <input type="submit" value="go" id="submit">
            <div class="zipfilter">
             <p class="ziptitle">Filter results within:</p>
               <input type="radio" id="twentyfive" name="dist" value="25" checked>
                <label for="twentyfive">25 Miles</label><br>
              <input type="radio" id="fifty" name="dist" value="50">
               <label for="fifty">50 Miles</label><br>
              <input type="radio" id="hundred" name="dist" value="100">
                <label for="hundred">100 Miles</label> 
            </div>
        </form> 
      </div>
 <!--NEAR ME -->
  <div class="nearme">
    <div class="nearmeicon">
      <input type="image" class="locateicon" src="/images/nearme.png">
    </div>
    <div class="locatediv">
      <button class="locate">Results Near Me</button>
    </div>
  </div>
</div>
<!-- END SELECTCONTAINER
 -->
<div class="bdcontent">
  
  <div class="card-container">
    <div class="card">
      <div class="card-header">
        <img src="https://c0.wallpaperflare.com/preview/483/210/436/car-green-4x4-jeep.jpg" alt="rover" />
      </div>
        <div class="card-body">
          <span class="tag tag-teal">Warranty</span>
          <h4>
          We BREAKDOWN what you need to know
          </h4>
          <p>
          Navigating the ins and outs of extended service contracts.
          </p>
        </div>
      </div>
    <div class="card">
      <div class="card-header">
        <img src="https://www.newsbtc.com/wp-content/uploads/2020/06/mesut-kaya-LcCdl__-kO0-unsplash-scaled.jpg" alt="ballons" />
      </div>
      <div class="card-body">
        <span class="tag tag-purple">Insurance</span>
        <h4>
        We BREAKDOWN the Best Providers
        </h4>
        <p>
        Insurance shopping can be overwhelming, we've got your back.
        </p>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <img src="https://images6.alphacoders.com/312/thumb-1920-312773.jpg" alt="city" />
      </div>
        <div class="card-body">
          <span class="tag tag-pink">Maintenance</span>
          <h4>
          10 Tips to Keep you Rolling
          </h4>
          <p>
          Best Maintence and Upkeep Guidelines
          </p>
        </div>
    </div>
  </div>
</div>

<!-- END CARDS -->
<div class="results-container">
<div class="rescard">
  <div class="card-header">Verified</div>
  <div class="card-content">
    <h5 class="card-title"><a class="reslink" href="http://www.rvlandga.com/">RV Land </a></h5>
    <p class-="address"> 3660 Atlanta Hwy, Hiram, GA 30141, United States</p>
    <p class="card-text">Open in</p>
    <a class="gocid" href="https://maps.google.com/?cid=14455453795690553077"><img src="/images/Google_Maps_icon_(2015-2020).svg.png" class="logoG"></a>
    <div class="star-rating"><img src="/images/star-icon.png" class="star-icon"><span class="rating">4.4</span></div>
    <a class="phone call-now btn btn-primary" href="tel:17704852355"><strong>Call Now</strong></a></div></div>
  
</div>
<!-- LINK FARM -->
<div class="link-farm_container">
  <div class="cities-links_container">
    <h2 class="cities-links_heading">Top RV Repair Cities</h2>
      <div class="cities-links_links">
        <a class="link_ref" href="/auto-repair-in-san-antonio-texas">Auto Repair in San Antonio, TX</a>
        <a class="link_ref" href="/auto-repair-in-memphis-tennessee">Auto Repair in Memphis, TN</a>
        <a class="link_ref" href="/auto-repair-in-alexandria-virginia">Auto Repair in Alexandria, VA</a>
        <a class="link_ref" href="/auto-repair-in-denver-colorado">Auto Repair in Denver, CO</a>
        <a class="link_ref" href="/auto-repair-in-fishers-indiana">Auto Repair in Fishers, IN</a>
        <a class="link_ref" href="/auto-repair-in-houston-texas">Auto Repair in Houston, TX</a>
        <a class="link_ref" href="/auto-repair-in-los-angeles-california">Auto Repair in Los Angeles, CA</a>
        <a class="link_ref" href="/auto-repair-in-matthews-north-carolina">Auto Repair in Matthews, NC</a>
        <a class="link_ref" href="/auto-repair-in-billings-montana">Auto Repair in Billings, MT</a>
        <a class="link_ref" href="/auto-repair-in-dover-delaware">Auto Repair in Dover, DE</a>
        <a class="link_ref" href="/auto-repair-in-gilbert-arizona">Auto Repair in Gilbert, AZ</a>
        <a class="link_ref" href="/auto-repair-in-las-vegas-nevada">Auto Repair in Las Vegas, NV</a>
        <a class="link_ref" href="/auto-repair-in-long-beach-california">Auto Repair in Long Beach, CA</a>
        <a class="link_ref" href="/auto-repair-in-moreno-valley-california">Auto Repair in Moreno Valley, CA</a>
        <a class="link_ref" href="/auto-repair-in-sacramento-california">Auto Repair in Sacramento, CA</a>
        <a class="link_ref" href="/auto-repair-in-san-francisco-california">Auto Repair in San Francisco, CA</a>
        <a class="link_ref" href="/auto-repair-in-baton-rouge-louisiana">Auto Repair in Baton Rouge, LA</a>
        <a class="link_ref" href="/auto-repair-in-colorado-springs-colorado">Auto Repair in Colorado Springs, CO</a>
        <a class="link_ref" href="/auto-repair-in-eureka-california">Auto Repair in Eureka, CA</a>
        <a class="link_ref" href="/auto-repair-in-fairburn-georgia">Auto Repair in Fairburn, GA</a>
        <a class="link_ref" href="/auto-repair-in-new-york-new-york">Auto Repair in New York, NY</a>
        <a class="link_ref" href="/auto-repair-in-poughkeepsie-new-york">Auto Repair in Poughkeepsie, NY</a>
        <a class="link_ref" href="/auto-repair-in-rancho-cucamonga-california">Auto Repair in Rancho Cucamonga, CA</a>
        <a class="link_ref" href="/auto-repair-in-ridgeland-mississippi">Auto Repair in Ridgeland, MS</a>
      </div>
  </div>


    


<!--
//Country Select
<select name="<portlet:namespace/>Country" id="countryId" onchange="javascript:countryChange()">
        <option value="0">Select Country</option>
        <option value='US'>United States</option>
        <option value='CA'>Canada</option>
</select>
<label id="stateLabel" style="display: none">State:</label>  
<select name="<portlet:namespace/>State" style="display: none" id="stateId">
</select>
-->



<div class="footer">
  <hr/>
  <footer>
    <ul class="footer-links align-left">
      <li><a href="#">Advertising</a></li>
      <li><a href="#">Warranty</a></li>
      <li><a href="#">Insurance</a></li>
    </ul>
    <ul class="footer-links align-right">
      <li><a href="#">Privacy</a></li>
      <li><a href="#">Terms</a></li>
      <li><a href="#">Sign Up</a></li>
    </ul>
</div>
</div>
</body>
</html>





<script>
//SHow me States
$(document).ready (function(){
$("#state").change(function(){ 
  
  //Get id  of state to fetch cities
  var selectedState =$(this).val();
  console.log(selectedState);
  $("#city").empty();
    $.ajax({
         url: '/city.php',
         type: "POST",
         data: {myState: selectedState}, 
         dataType: "json",
         success: function (result) {
/*          JSON.parse(result); */  
               console.log(result);
              $.each(result, function(i, item) {
                $('#city').append($('<option>').text(item.CITY).attr('value', item.CITY));
              });
        },
    })   
}); 

//City to RF
$("#city").change(function(){ 
  //Get city name to fetch RFs
  var selectedCity =$("#city").val();
  var selectedState =$("#state").val();

  console.log(selectedCity);
  console.log(selectedState);
  $("#rf").empty();

    $.ajax({
         url: '/getRFs.php',
         type: "POST",
         data: {myCity: selectedCity, myState: selectedState},
         dataType: "json",
         success: function (RFresult) {
           console.log(RFresult);
           $.each(RFresult, function(i, item) {
            $(".results-container").show();
            $(".results-container").append($('<p>').text(item.NAME).attr('value', item.NAME)); 
          });  
        },
        fail: function(xhr, textStatus, errorThrown){
       alert('request failed');
    } 
    }) 
}); 
//ZIP CODE-->
$(".zip-form").submit(function(){
  event.preventDefault();
  $(".results-container").empty();
  //Get ZipCode
  var selectedZip=$(".zip-input").val();
  var selectedDist=$("input[name='dist']:checked").val();
  console.log(selectedZip);
  console.log(selectedDist);
      $.ajax({
         url: '/getZip.php',
         type: "POST",
         data: {myZip: selectedZip, myDist: selectedDist}, 
         dataType: "json",
         success: function (RFresult) {
          console.log(RFresult);
          
          $.each(RFresult, function(i, item) {
            const crdMrk=`
            <div class="rescard">
                <div class="card-header">Verified</div>
                  <div class="card-content">
                    <h5 class="card-title">
          ${item.SITE ?`<a class ="reslink" href="${item.SITE}"> ` : ''}${item.NAME}</a>
                    </h5>
          ${item.ADDRESS ? `<p class-="address">${item.ADDRESS}` : ''}</p>
                    <p class="card-text">Open in</p>
                    <a class="gocid" href="${item.MAP}"><img src="/images/Google_Maps_icon_(2015-2020).svg.png" class="logoG"></a>
          ${item.RATE ? `<div class=star-rating><img src=/images/star-icon.png class="star-icon">
                        <span class="rating">${item.RATE}` : ''}</span>
                      </div>
                        <a class="phone call-now btn btn-primary" href="tel:${item.PHONE}">
                        <strong>Call Now</strong></a>
                  </div>
                </div>
            </div>`;
            $(".results-container").show();
            $(".results-container").append(crdMrk);
          });



            /* $(".results-container").append($('<div class="rescard">'+
            '<div class="card-header">Verified</div>'+
            '<div class="card-content">'+
            '<h5 class="card-title">'+'<a class ="reslink" href="'+ item.SITE +'">'+item.NAME +' </a>'+'</h5>'+
            '<p class-="address"> '+item.ADDRESS+'</p>'+
            '<p class="card-text">Open in</p>'+
            '<a class="gocid" href="'+item.MAP+'">'+'<img src="/images/Google_Maps_icon_(2015-2020).svg.png" class="logoG">'+
            '</a>'+'<div class=star-rating>'+'<img src=/images/star-icon.png class="star-icon">'+
            '<span class="rating">'+item.RATE+'</span>'+'</div>'+
            '<a class="phone call-now btn btn-primary" href="tel:'+item.PHONE+'">'+
            '<strong>Call Now</strong>'+'</a>'+'</div>'));
          });   */
        },
        fail: function(xhr, textStatus, errorThrown){
          alert('request failed');
        } 
    }) 
  });

  const options = {
    enableHighAccuracy: false,
    timeout: 5000,
    maximumAge: 0,
    };

 $(".locate").click(function(){
  $(".results-container").empty();

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, error, options);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
    
  function success(pos) {
    lat = pos.coords.latitude;
    lng = pos.coords.longitude;
    const crd = pos.coords;
    $.ajax({
         url: '/nearMe.php',
         type: "POST",
         data: {mylat:lat, mylng:lng}, 
         dataType: "json",
         success: function (RFresult) {
          console.log(RFresult);
          $.each(RFresult, function(i, item) {
          $(".results-container").show();
          $(".results-container").append($('<div class="rescard">'+
          '<div class="card-header">Verified</div>'+
          '<div class="card-content">'
          +'<h5 class="card-title">'+'<a class ="reslink" href="'+ item.SITE +'">'+item.NAME +' </a>'+'</h5>'+
          '<p class-="address"> '+item.ADDRESS+'</p>'+
          '<p class="card-text">Open in</p>'+
          '<a class="gocid" href="'+item.MAP+'">'+'<img src="/images/Google_Maps_icon_(2015-2020).svg.png" class="logoG">'+
          '</a>'+'<div class=star-rating>'+'<img src=/images/star-icon.png class="star-icon">'+
          '<span class="rating">'+item.RATE+'</span>'+'</div>'+
          '<a class="phone call-now btn btn-primary" href="tel:'+item.PHONE+'">'+
          '<strong>Call Now</strong>'+'</a>'+'</div>'));
          });  
        },
        fail: function(xhr, textStatus, errorThrown){
       alert('request failed');
    } 
    }) 
    console.log(lat);
  }
  function error(err) {
  console.warn(`ERROR(${err.code}): ${err.message}`);
}     
}); 
 
 
  
  
});
</script>
 