<?php
include_once '../header/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Asset/Css/styleHome.css">
    <title>HOME</title>
</head>
<body> 

	<header class="container-fluid">
	 <h1 class="h1 text-center text-light bg-success py-2 mt-5">CARROUSEL</h1>
	</header>

	<main class="container-fluid">
		<div id="slider" class="row">

			<ul class="list-group">
				<li class="list-group-item"><img src="../Asset/Images/photo-1470843810958-2da815d0e041 (1).jpg" class="" alt="image 1"></li>
				<li class="list-group-item"><img src="../Asset/Images/photo-1497319554959-4e58967a9fa6 (1).jpg" class="" alt="image 2"></li>
				<li class="list-group-item"><img src="../Asset/Images/photo-1552819289-824d37ca69d2 (1) (1).jpg" class="" alt="image 3"></li>
				<li class="list-group-item"><img src="../Asset/Images/photo-1590742043219-b57102a288ae (1).jpg" class="" alt="image 4"></li>

				<i class="previous fa-solid fa-circle-chevron-left"></i>
				<i class="next fa-solid fa-circle-chevron-right"></i>
			</ul>
		</div>
	
		
    <!-- section a votre service  -->
    <section id="service" class="row vh-100 text-center pt-5 mb-3 p-3 m-2 ms-auto">
      <div class="col-12 pt-5">
        <h2>A votre service !</h2>
      </div>
      <div class="col-sm-6 col-lg-4">
	  <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores amet fugit enim soluta ea consectetur, minus nulla ipsum? Maxime consequuntur vitae perspiciatis natus adipisci consectetur tempore officia libero, similique aperiam?</P>
      </div>
      <div class="col-sm-6 col-lg-4">
	  <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores amet fugit enim soluta ea consectetur, minus nulla ipsum? Maxime consequuntur vitae perspiciatis natus adipisci consectetur tempore officia libero, similique aperiam?</P>
      </div>
      <div class="col-sm-6 col-lg-4">
	  <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui facere dolor obcaecati, aperiam fugit tempora quia id quod aut eos assumenda iste temporibus doloribus, harum vel porro voluptatibus impedit ipsa.</P>
      </div>
    </section>
	</main>
<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JS -->
    <script type="text/javascript" src="../Asset/JS/Home.js"></script>	
</body>
</html>