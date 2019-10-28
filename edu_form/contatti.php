<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduForm</title>
<link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/30f6f166d3.js"></script>
<style type="text/css">




<?php include 'header_cssf1.php';?>
<?php include 'space_cssf1.php';?>
<?php include 'colonne_css.php';?>




<?php include 'bottone_informati.php' ?>
<?php include 'griglia_css.php';?>
<?php include 'banner.php';?>
<?php include 'Bottone_abbassa_css.php';?>
<?php include 'icone_css.php';?>
<?php include 'colloquio_css.php' ?>
<?php include 'footer1_css.php' ?>
<?php include 'body_p_h2_css.php'; ?>
.carta{
    background-color: white;
    height: auto;
    }
    picture{
    top: 0%;
    
    
    position:sticky;
    z-index: -2;
}
div .test{

  width: 60%;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 1.8em;
  display: inline;
  position:absolute;
  z-index: -2;
  color:white;
  font-family: 'Chilanka', cursive;
}
</style>

</head>
<body>
<?php include 'topnav_burger_html.php' ?>

<div class="col-12">
<picture>
<source srcset="img/foto_P.jpg" media="(max-width: 700px)">
<source srcset="img/xan-griffin-eA2t5EvcxU4-unsplash.jpg">
<img src="img/xan-griffin-eA2t5EvcxU4-unsplash.jpg" alt="Benessere" style="width:auto;">
</picture>

<div class="row">

	<div class="test">“A volte è necessario decidere tra una cosa a cui si è abituatie un'altra che ci piacerebbe conoscere.”<br />&nbsp;&nbsp;&nbsp;&nbsp;Paulo Coehlo</div>

</div>
</div>

<div class="row" >
		<div class="col-12 carta">
			<div class="col-6">
				<h2>EduForm</h2>
                <p>Via Passo Gravina 157, catania<p>
				<p>Tel. 3485686702</p>
                <p>eduform@gmail.com</p>
                <p>Nome pagina facebook<p>
                <p>Nome pagnina instagram</p>
                
			</div>
			<div class="col-6">
				<div class="row">
                	<div class="col-6" id="section5">
                    	<h2>Inserisci i tuoi dati</h2>
                     </div>
					<?php include 'colloquio_form.php' ?>
				</div>
			</div>	
		</div>
	</div>	
	<?php include 'footer1_html.php'; ?>
</body>
</html>

