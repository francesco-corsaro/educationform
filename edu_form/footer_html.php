<html>
<head>
<title></title>
<style>
<?php include 'griglia_css.php';?>
.row:after {
  content: "";
  display: table;
  clear: both;
}
body{
    font-size:10px;
    padding:10px;
    }
.news{
    width: 100%;
    height: auto;
    background-color: rgba(206,199,178,0.22);
    color: #656565;
    text-align: center;
    font-size: 1.4em;
    padding: 1.5em;
    font-family: 'Manjari', sans-serif;
    }

.footer{
    width: 100%;
    height: auto;
    background-color: #1B0C07;
    color: #ffffff;
    text-align: center;
    font-size: 1.4em;
    padding: 1.5em;
    font-family: 'Manjari', sans-serif;
    }
    <?php include 'colloquio_css.php'; ?>
</style>
</head>
<body>
<div class="row">	
	<div class="col-12">
		<div class="news">
			<p><h2>Rimani aggiornato</h2>Ricevi notizie sui corsi di EduForm, i nostri eventi e molto altro!</p>
			<?php include 'newsletter_form.php'; ?>
					
		</div>
	</div>

	<div class="footer">
	
		<p>ciao</p>

	</div>
</div>
</body>
</html>
<?php
