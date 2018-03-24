<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Make Trip | Explore Pinas</title>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script>

        //For TextBox Search..............
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('txtFrom'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
            });
            var places1 = new google.maps.places.Autocomplete(document.getElementById('txtTo'));
            google.maps.event.addListener(places1, 'place_changed', function () {
                var place1 = places1.getPlace();
            });
        });

        function calculateRoute(rootfrom, rootto) {
            // Center initialized to Naples, Italy
            var myOptions = {
                zoom: 6,
                center: new google.maps.LatLng(11.9005929,119.3427476),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            // Draw the map
            var mapObject = new google.maps.Map(document.getElementById("DivMap"), myOptions);

            var directionsService = new google.maps.DirectionsService();
            var directionsRequest = {
                origin: rootfrom,
                destination: rootto,
                //waypoints: [{location: "daranak falls", stopover: true},
                //        {location: "regina rica", stopover: true},
                //        {location: "treasured mountain", stopover: true}],
                //    optimizeWaypoints: false,
                travelMode: google.maps.DirectionsTravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC
            };
            directionsService.route(
        directionsRequest,
        function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                new google.maps.DirectionsRenderer({
                    map: mapObject,
                    directions: response
                });
            }
            else
                $("#lblError").append("Unable To Find Root");
        }
    );
}

        
        $(document).ready(function () {
            // If the browser supports the Geolocation API
            if (typeof navigator.geolocation == "undefined") {
                $("#lblError").text("Your browser doesn't support the Geolocation API");
                return;
            }
            $("#calculate-route").submit(function (event) {
                event.preventDefault();
                calculateRoute($("#txtFrom").val(), $("#txtTo").val());
            });
        });

         
    </script>
    <style type="text/css">
        #DivMap
        {
            border: 1px solid Black;
            width: 60%;
            height: 400px;
            margin-top: 30px;
            margin-left: 20%;

        }
    </style>
</head>
<body onload= calculateRoute(); style="; font-size: 20px; ">
    <form id="calculate-route" name="calculate-route" action="#" method="get">
    <div id="DivMap">
    </div>

<div margin-left: 20px>

    <div style="text-align: center ;font-size: 30px; margin: 15px; padding: 15px;">
         Make Trip </div>
    
    <br />
    <div align="center">
        <label class="col-md-2 text-center" for="txtFrom">START:</label>
        <input class="col-md-3" type="text" id="txtFrom" name="txtFrom" placeholder="Location From"
            size="20" text-align: right/>
      
        <label class="col-md-2 text-center" for="txtTo">END:</label>
        <input  class="col-md-3" type="text" id="txtTo" name="txtTo" placeholder="Location To"
            size="20" />
        <br />
        <br />
        <input type="submit" />&nbsp; &nbsp;
        <input type="reset" />&nbsp; &nbsp;
        <p id="lblError" style="color: Red; font-size: 17px;" />
    </div>

   
    </form>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRGCizFZ_zls3Hlf4f5yg4hGsMwMaDzH4&libraries=places&callback=initMap" async defer></script>
</body>
</html>
