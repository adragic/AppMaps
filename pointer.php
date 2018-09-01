<!-- dokument koji prikazuje korisniku mapu i rezultate i tu se nalazi key za provjeru indetifikacije kod google mapss -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"><!--Standard za znakove-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Maps</title>

    <style>
      #map {
        height: 500px;
      }
    </style>
  </head>
  <body>
    
    <div id="map"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>


    <!-- js od aplikacije tj tvoj js di dohvacas podatke i ispisujes korisniku-->
	<script type="text/javascript" src="js/kordinate.js"></script>

	<!-- js koji sadrži tvoj key koji ce google provjeriti prilikom zahtjeva na njihov server-->
	        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbCZpkzDLFbrHyyD7DWLrtxO8YFs46ucQ&callback=initMap"
  type="text/javascript"></script>


  </body>
</html>










