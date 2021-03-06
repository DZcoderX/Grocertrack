<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        
        <link type="text/css" rel="stylesheet" href="../css/styleWelcome.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
         <link href="../css/stylesView.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>

    <body>
		<!--This is the carousel -->
		<div class="carousel carousel-slider center" data-indicators="true">
		

		
		<div class="carousel-item red white-text" href="#one!">
		  <h2>Find 1</h2>
		  <p class="white-text">Find the total sales from customers with 0 or more dependent
          within a time period.</p>
            
            <a class="waves-effect waves-light btn-large darkred"  href="./view1.php"><i class="material-icons left">cloud</i>Find</a>
		</div>
		<div class="carousel-item amber white-text" href="#two!">
		  <h2>Find 2</h2>
		  <p class="white-text">Find the sum of sales for each store within a given time interval.</p>
            
            
		  <a class="waves-effect waves-light btn-large darkred" href="./view2.php"><i class="material-icons left">cloud</i>Find</a>
		  
		</div>
		<div class="carousel-item orange white-text" href="#three!">
		  <h2>Find 3</h2>
		  <p class="white-text">Find all items that have 2 or more promotions in a given month.</p>
            
		  <a class="waves-effect waves-light btn-large darkred" href="./view3.php"><i class="material-icons left" >cloud</i>Find</a>
			
            
		</div>
            
            <div class="carousel-item pink white-text" href="#three!">
		  <h2>Find 4</h2>
		  <p class="white-text">Find all the promotions offered by a specific brand and give the total rebate amount given back.</p>
            
		  <a class="waves-effect waves-light btn-large darkred" href="./view4.php"><i class="material-icons left" >cloud</i>Find</a>
			
            
		</div>
	  </div>
        
<!--        End of carousel-->
		
	
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
	  <script type="text/javascript">
	  $(document).ready(function(){
      $('.carousel').carousel();
		});
		$('.carousel.carousel-slider').carousel({fullWidth: true});
		
		$('.carousel').carousel({
    padding: 200    
});
autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 15000);
}
		</script>
    </body>
  </html>