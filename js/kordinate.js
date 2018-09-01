//dohvacanje podataka sa google mape i ispis tih podataka na mapi...

function initMap() {

  //kreiramo varijablu map i konfiguriramo prikaz mape
  //dohvacamo ga prema id map
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {lat: 45.556, lng: 18.6},  // etf kordinate: 45.55670228086372, 18.695896044373512
    mapTypeId: 'terrain'
  });

  //dohvacanje podataka sa google maps i kreiranje objekta i spremanje u varijablu njenu vrijednost
  // Create an ElevationService
  var elevator = new google.maps.ElevationService;
  var infowindow = new google.maps.InfoWindow({map: map});

  // Add a listener for the click event. Display the elevation for the LatLng of
  // the click inside the infowindow.
  //na klik miša na mapi kreira se pop-up elemnt ili infowindow
  map.addListener('click', function(event) {
    displayLocationElevation(event.latLng, elevator, infowindow);
  });
}

//funkcija ispisuje podatke u infowindow
//predajemo podatke funkciji i provjeravamo dali su ti podatci oke
// dali imamo podatke,
function displayLocationElevation(location, elevator, infowindow) {
  // Initiate the location request
  elevator.getElevationForLocations({
    'locations': [location]
  }, function(results, status) {
    infowindow.setPosition(location);
    if (status === google.maps.ElevationStatus.OK) {
      // Retrieve the first result
      if (results[0]) {
        if(results[0].elevation >= 0){
          // Open the infowindow indicating the elevation at the clicked position.
          infowindow.setContent('Kordinate na ovoj lokaciji su <br>' +
              location  + '<br>a visina je:' + results[0].elevation + ' metara.');
        }else{
          infowindow.setContent('Kordinate na ovoj lokaciji su <br>' +
              location  + '<br>a dubina je:' + results[0].elevation + ' metara.');
        }
        
      } else {
        infowindow.setContent('Nema rezultata');
      }
    } else {
      infowindow.setContent('Error: ' + status);
    }
  });
}