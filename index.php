<!DOCTYPE html>
<html>

<header>
	
	<?php
	
	/*
	include 'azul.php';
	include 'avianca.php';*/
	?>

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap-tab.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</header>

<body>

	<div class="" style="width:75%; margin:10% 0% 0% 12%">

		<ul id="myTab" class="nav nav-tabs">
			
			<li class=""><a id="id_gol" href="#gol" data-toggle="tab"><strong>GOL</strong></a></li>
			<li class=""><a id="id_azul" href="#azul" data-toggle="tab"><strong>AZUL</strong></a></li>
			<li class=""><a id="id_avianca" href="#avianca" data-toggle="tab"><strong>AVIANCA</strong></a></li> 
		</ul>

		<div id="myTabContent" class="tab-content">

			<img id="img_load" src="img/load.gif" style="width: 10%;margin: 5% 0% 0% 45%; display:none;" />

			
			<div class="tab-pane fade" id="gol"></div>

			
			<div class="tab-pane fade active in" id="azul">

				<table id="table_azul" class="table table-striped table-hover table-responsive"></table>				
			
			</div>

			
			<div class="tab-pane fade active in" id="avianca">
				
				<table id="table_avianca">

				</table>
				<?php /*for($j = 0; $j < count($avianca); $j++){

						if(!empty($avianca[$j]))
							echo $avianca[$j];
						else
							echo "AVIANCA - posição array vazia";

					}*/
				?>

			</div>
		</div>
	</div>

</body>

<footer>
	<script> 

		$(document).ready(function(){			

			//Ativa transição de links
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
			    });
			

			//requisição GOL
				$('#id_gol').on('click', function(){

					$.ajax({
						type:"GET",
						url: 'gol.php',
						cache:false,
						
						beforeSend: function(){
							$('#img_load').fadeIn();
						},
						
						success: function(table_){

							if(table_){

								$('#img_load').fadeOut();

								$('#gol').html(table_);

								$('a.btn.btn-default.pull-right').hide();

							}else{
								$('#img_load').fadeOut();
								$('#gol').html('Não houve êxito em obter resultados!');
							}

						},

					});
					

				});


			//requisicao AZUL
				$('#id_azul').on('click', function(){

					$.ajax({
						type:"GET",
						url: 'azul.php',
						cache:false,
						
						beforeSend: function(){
							$('#img_load').fadeIn();
						},
						
						success: function(table_){

							if(table_){
								$('#img_load').fadeOut();
								$('#table_azul').html(table_);


							}else{
								$('#img_load').fadeOut();
								$('#table_azul').html('Não houve êxito em obter resultados!');
								
							}

						},

					});
					

				});


			//requisicao AVIANCA
				$('#id_avianca').on('click', function(){

					$.ajax({
						type:"GET",
						url: 'avianca.php',
						cache:false,
						
						beforeSend: function(){
							$('#img_load').fadeIn();
						},
						
						success: function(table_){

							if(table_){
								$('#img_load').fadeOut();
								$('#table_avianca').html(table_);


							}else{
								$('#img_load').fadeOut();
								$('#table_avianca').html('Não houve êxito em obter resultados!');
							}

						},

					});
					

				});

		});


	</script>
</footer>

</html>
