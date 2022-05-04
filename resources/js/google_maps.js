window.initializeMap = function () {
    const coordinates = { lat: 48.870, lng: 2.274 };
    const geocoder = new google.maps.Geocoder();
    const map = new google.maps.Map(document.getElementById("map"), {
        center: coordinates,
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 6,
    });
    // Create the initial InfoWindow.
    let infoWindow = new google.maps.InfoWindow({
        content: "Cliquer pour indiquer la localisation de l'intervention.",
        position: coordinates,
    });

    infoWindow.open(map);
    // Configure the click listener.
    map.addListener("click", (mapsMouseEvent) => {
        const position = mapsMouseEvent.latLng;
        // Close the current InfoWindow.
        infoWindow.close();
        // Create a new InfoWindow.
        infoWindow = new google.maps.InfoWindow({
            position: position,
        });
        infoWindow.setContent(
            JSON.stringify(position.toJSON(), null, 2)
        );
        infoWindow.open(map);
        document.getElementById('lat').value = position.lat();
        document.getElementById('lng').value = position.lng();
        geocoder.geocode({'latLng': position}, function(results, status) {
            if(status == google.maps.GeocoderStatus.OK) {
                if(results[0]) {
                    document.getElementById("places").value = results[0].formatted_address;
                    document.getElementById("placesShow").innerHTML = results[0].formatted_address;
                }
                else {
                    document.getElementById("places").value = "Lieux inconnu";
                    document.getElementById("placesShow").innerHTML = "Lieux inconnu";
                }
            }
            else {
                document.getElementById("places").value = status;
                document.getElementById("placesShow").innerHTML = status;
            }
        });
    });
}
