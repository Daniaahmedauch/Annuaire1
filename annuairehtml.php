<!DOCTYPE html> 
<html>
<head> 
	    <nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">ANNUAIRE</a>
        <a href="#!" class="breadcrumb">FORMULAIRE</a>
   
      </div>
    </div>
  </nav>
<div class="fixed-action-btn">

    <a class="btn-floating btn-large red">

      <i class="large material-icons">mode_edit</i>

    </a>

    <ul>

      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>

      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>

      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>

      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>

    </ul>

  </div>
	<meta charset="utf-8">
	<style type="text/css">
	<link rel="stylesheet" type="text/css" style.css" /> 			


caption 
{
font-family: sans-serif;
}
.bouton
{
float: right; 
}
.nav-wrapper
{
	background-color:black;
}
body
{
	background-color:white;
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }
  .container
  {
  	background-color:black;
  }
 footer
 {
 	background-color:black;
 }
  }
  tr
  {
  	color: black; 

  }

 main
  {
    flex: 1 0 auto;
}

table 
{

   border-collapse: collapse;
}
.highlight
{
	background-color:white;
}
td, th /* Mettre une bordure sur les td ET les th */
{

 border: 1px solid black;
}
#annu
{
display: none;
}


 </style>

     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">


  <!-- Compiled and minified JavaScript -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>


      <!--Let browser know website is optimized for mobile-->

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<title>
	</title>
<body>
<div id="annu">

<?php 
 include("annuaire.php"); 
?>
</div>

<?php
include("formulaire.php");
?>

<table class="highlight" >

	 <tr>

       <td> NOM </td>

       <td> PRENOM </td>

       <td>EMAIL</td>

   </tr>

   <tr>

       <td> Phillipe</td>

       <td> Jonathan</td>

       <td> philippe1jonathan@gmail.com </td>

       </tr>
       <tr>

       <td>Cano Simon </td>

       <td>Luc </td>

       <td>	luc.cano@hotmail.fr</td>

   </tr>
   <tr>
   	<td> Badji </td>
    <td> Adeline </td>
    <td> adeline.contact@gmail.com </td>
   </tr>
   <tr>
   	<td> Lupi </td>
   	<td> Marc </td>
   	<td> marc.lupi@protonmail.com </td>
   </tr>
   <tr>
   	<td> Kurowski  </td>
   	<td> Alexandra </td>
   	<td> alexandrakuro@gmail.com </td>
   </tr>
   <tr>
   	<td> Olivera Ribeiro </td>
   	<td> Marco </td>
   	<td> marcorib1@hotmail.com </td>
   </tr>
   <tr> 
   	<td> Zarrik </td>
   	<td> Houssine </td>
   	<td> houssine.zarrik@orange.fr </td>
   </tr>
   <tr>
   	<td> Gouzenne </td>
   	<td> Dylan </td>
   	<td> houssine.zarrik@orange.fr</td>
   </tr>
   <tr>
   	<td> Sandras</td>
   	<td> Benjamin </td>
   	<td> bensand77@hotmail.fr </td>
   </tr>
   <tr>
   	<td> Morais</td>
   	<td> Helder </td>
   	<td> morais.helder@hotmail.fr </td>
   </tr>
   <tr> 
   	<td> Segond </td>
   	<td> Zakia</td>
   	<td> segondzakia@live.fr</td>
   </tr>
<td> Taha </td>
<td> Max </td>
<td> tahamohamedfr@gmail.com</td>
</tr>
<tr>
	<td> Laportes</td>
	<td> Nicolas</td>
	<td> nicolas.lasportes@gmail.com</td>
	</tr>
	<tr> 
		<td>Clerc </td>
		<td> Nathan </td>
		<td> clerc-nathan@hotmail.fr </td>
	</tr>
	<tr> 
		<td> Gatien </td>
		<td> Oceane </td>
		<td> ogatien@simplon.co </td>
	</tr>


</table>


      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

	
</body>
  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">ACCUEIL ANNUAIRE</h5>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</html>