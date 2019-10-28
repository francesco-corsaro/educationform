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


 	<div class="leftcolumn">
    	<div class="card">
      		<h2>Chi siamo?</h2>
      		<p>Siamo una giovane impresa costituita da professionisti di diversa formazione. Il nostro obbiettivo è di sviluppare soft e hard skill dei nostri corsisti con il fine di avvicinare il mondo accademico al mondo del lavoro. Il nostro team è composto da giovani laureati e professionisti specializzati nel settore che si occupano di formazione da diversi anni.</p>
    	</div>
    </div>
    <div class="leftcolumn">
    	<div class="card">
      		<h2>La nostra proposta</h2>
      		<p>I nostri corsi pretendono di far acquisire al corsista non solo le competenze necessario alla professione da svolgere ma anche lo sviluppo di soft skill personali indispensabili per l’inserimento nell’ambiente lavorativo</p>
    	</div>
	</div> 
	
		<div class="leftcolumn">
			<div class="card">
			<h2>Perchè sceglierci</h2>
			<p>Docenti eccellenti selezionati tra i migliori formatori</p>
			<p>Metodo di studio interattivo e con supporto del tutor personale</p>
			<p>Consulenza personalizzata</p>
			<p>Alta qualità a prezzi competitivi con possibilità di rateizzazione</p>
			<p>Approccio multidisciplinare  integrato e intersettoriale</p>
			<p>Siamo moderni e sempre sul pezzo</p>
			</div>
		</div>	
	
	<div>
	<?php include 'tre_col_html.php'; ?>
	</div>
	 
	

	
</div>
<div class="row" >
		<div class="col-12 carta">
			<div class="col-6" id="section5">
				<h2>Inserisci i tuoi dati</h2>
				<p>Verrai ricontatto nel più breve temppo possibile</p>
			</div>
			<div class="col-6">
				<div class="row">
					<?php include 'colloquio_form.php' ?>
				</div>
			</div>	
		</div>
	</div>	
	<?php include 'footer1_html.php'; ?>
</body>
</html>
