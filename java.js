var x =document.getElementById("demo");
var y,z;
function getLocation() {
    if (navigator.geolocation) {
        //x.innerHTML = "Geolocation is  supported by this browser.";
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position)
{
    var latlon = position.coords.latitude + "," + position.coords.longitude;
  
    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center=
    "+latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyBthmiyAJPZhnevjY134eCOhVLPpw07Yb4";

    document.getElementById("map").innerHTML = "<img src='"+img_url+"'>";
}
// function initMap()
// {
//     var mapProp= {
//         center:new google.maps.LatLng(y,z),
//         zoom:5,
//       };
//       var map = new google.maps.Map(document.getElementById("map"),mapProp);
// }
