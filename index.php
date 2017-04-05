<!DOCTYPE html>
<html>

<header>
	
	<?php
	require 'simple_html_dom/simple_html_dom.php';
	include 'gol.php';
	include 'azul.php';
	include 'avianca.php';
	?>

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap-tab.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>
    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });
    
</script>

</header>

<body>

	<div class="" style="width:75%; margin:10% 0% 0% 12%">

		<ul id="myTab" class="nav nav-tabs">
			
			<li class=""><a href="#gol" data-toggle="tab"><strong>GOL</strong></a></li>
			<li class="active"><a href="#azul" data-toggle="tab"><strong>AZUL</strong></a></li>
			<li class=""><a href="#avianca" data-toggle="tab"><strong>AVIANCA</strong></a></li> 
		</ul>

		<div id="myTabContent" class="tab-content">

			<div class="tab-pane fade" id="gol">

				<?php for($l = 0; $l < count($gol); $l++)
						if( !empty(strip_tags($gol[$l]))  && (strip_tags($gol[$l]) != 'Compre aqui ' || strip_tags($gol[$l]) != 'Compre aqui') ){
							echo $gol[$l];
						}
				?>

			</div>
			
			<div class="tab-pane fade active in" id="azul">


				<?php 

					for($i = 0; $i < count($ofer[1]); $i++)
						if(!empty($ofer[1][$i])) echo $ofer[1][$i].'<br />';
					/*for($i = 0; $i < count($azul_textos); $i++){

						if(!empty($azul_textos[$i]))
							echo $azul_textos[$i];
						else
							echo "AZUL Textos- posição array vazia";

						}

						for($m = 0; $m < count($azul_precos); $m++){

							if(!empty($azul_precos[$m]))
								echo $azul_precos[$m];
							else
								echo "AZUL Preços- posição array vazia";

						}*/
				?>
			
			</div>
			
			<div class="tab-pane fade active in" id="avianca">
				
				<?php for($j = 0; $j < count($avianca); $j++){

						if(!empty($avianca[$j]))
							echo $avianca[$j];
						else
							echo "AVIANCA - posição array vazia";

					}
				?>

			</div>
		</div>
	</div>

</body>

<footer>
	<script> $('a.btn.btn-default.pull-right').hide(); </script>
</footer>

</html>
