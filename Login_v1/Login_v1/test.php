<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Showing Location on Google Map</title>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRslNaK8icBhk-UzmDjdukgFZ9RDBXqig"></script>
<script type="text/javascript">
var x=document.getElementById("display");
function showPosition(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showMap, showError);
    } else{
        alert("Sorry, your browser does not support HTML5 geolocation.");
    }
}

function showMap(position){
    // Get location data
    lat = position.coords.latitude;
    long = position.coords.longitude;
    var latlong = new google.maps.LatLng(lat, long);
    str = long+ lat;
    var myOptions = {
        center: latlong,
        zoom: 16,
        mapTypeControl: true,
        navigationControlOptions: {style:google.maps.NavigationControlStyle.SMALL}
    }
    
    var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
    var marker = new google.maps.Marker({position:latlong, map:map, title:"You are here!"});
}
 
// Define callback function for failed attempt
function showError(error){
    if(error.code == 1){
        result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
    } else if(error.code == 2){
        result.innerHTML = "The network is down or the positioning service can't be reached.";
    } else if(error.code == 3){
        result.innerHTML = "The attempt timed out before it could get the location data.";
    } else{
        result.innerHTML = "Geolocation failed due to unknown error.";
    }
}
</script>
</head>
<body>
 <div id="txtHint"></div>
    <button type="button" onclick="showPosition();">Show My Position on Google Map</button>
    <div id="embedMap" style="width: 600px; height: 400px;">
        <!--Google map will be embedded here-->
    </div>
    <br>
    <br>
    
    
    <button onclick="window.location='test1.php?q1='+long+'&q2='+lat;">do for me</button>
    <!-- <iframe target="test1.html"></iframe>   -->
</body>
</html>                            
