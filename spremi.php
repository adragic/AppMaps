<?php
//tu primamo podatke sa POST metodom i spremamo ih u bazu podataka
    
    //kreiramo varijable $servername, $username i $password
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "zavrsni_rad";
	$ispis;

	// Create connection, pravis objekt, predajes funkciji podatke
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	// post metodom uvijek dohvacas po name tj imenu... 
	$sql = "INSERT INTO adrese (sirina, duzina, lokacija, tip_lokacije)
    VALUES ('".$_POST["sirina"]."','".$_POST["duzina"]."','".$_POST["lokacija"]."','".$_POST["tip_lokacije"]."')";

    // ako je upit(query) ispravan tj tocan ispiši poruku da je sve uredu
	if ($conn->query($sql) === TRUE) {
    	$ispis = "Podaci su uspješno spremljeni!";
	} else {
	    $ispis = "Error: " . $sql . "<br>" . $conn->error;
	}

	//zatvori konekciju prema bazi
	$conn->close();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>MERA Personal Portfolio Template</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- ANIMATE  CSS -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- PRETTY PHOTO  CSS -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  STYLE SWITCHER CSS -->
    <link href="assets/css/styleSwitcher.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!--PINK STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM FOUR STYLESHEETS (pink,green,blue and brown) HERE-->
    <link href="assets/css/themes/pink.css" id="mainCSS" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

</head>
<body>

 <!-- ABOUT SECTION END-->
    <section id="skill-sec">
        <div class="overlay">
            <div class="container">
                <div class="row pad-top-bottom move-me">
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">

                        <h4>Sirina</h4>
                        <?php echo $_POST["sirina"]; ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">

                        <h4>Duzina </h4>
						<?php echo $_POST["duzina"]; ?>
					</div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center  wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">

                        <h4>Lokacija </h4>
                        <?php echo $_POST["lokacija"]; ?>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">

                        <h4>Tip</h4>
                        <?php echo $_POST["tip_lokacije"]; ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4  wow bounceIn animated" data-wow-duration="1s" data-wow-delay="1s">
                        <h1><?php echo $ispis; ?></h1>
                        <a href="trazilica.php" class="btn btn-style-two btn-lg">NAZAD</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="move-me">
        <a href="#home-sec" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- SCROLL TO TOP SECTION END-->
    <!--  JQUERY CORE SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  SCROLL SCRIPTS -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  WOW ANIMATION SCRIPTS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- EASY PIE CHART SCRIPTS -->
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <!-- PRETTY PHOTO SCRIPTS -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--  STYLE SWITCHER SCRIPTS -->
    <script src="assets/js/styleSwitcher.js"></script>
    <!--  CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
</body>
</html>
