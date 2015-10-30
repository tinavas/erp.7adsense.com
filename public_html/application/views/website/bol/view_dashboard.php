<?

$ci = &get_instance ();
$ci->load->model ( "model_permissions" );
?>
<!-- MAIN CONTENT -->
<div id="content" style="margin-top: -10px">

	<!-- row -->
	<div class="row">
		<br />
		<br />
		<br />
	</div>
	<!-- end row -->

	<div class="row">
		<div class="col-sm-12">
			<div class="well well-sm">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-4"
						style="margin-top: 6rem;">
						<div class="well well-light well-sm no-margin no-padding">
							<div class="row">
								<div class="col-sm-12">
									<div id="myCarousel" class="carousel fade profile-carousel">
										<div class="air air-top-left padding-10">
											<h4 class="txt-color-white font-md"></h4>
										</div>
										<div class="carousel-inner">
											<!-- Slide 1 -->
											<div class="item active">
												<img src="/template/img/demo/m4.jpg" alt="demo user">
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-12">

									<div class="row">
										<div class="col-sm-3"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-8">
						<!--Inica la secciion de la perfil y red-->
						<div class="well"
							style="box-shadow: 0px 0px 0px !important; border-color: transparent;">
							<fieldset>
								<legend>
									<b>Sistema Integral de Operaciones Soporte Logistico</b>
								</legend>
								
								<div class="col-sm-4 link">
									<a href="/bo/logistico2/alta">
										<div class="minh well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>;">
											<i class="fa fa-edit fa-3x"></i>
											<h4>
												<br /> Alta
											</h4>
										</div>
									</a>
								</div>
								
								<div class="col-sm-4 link">
									<a href="/bo/inventario/index">
										<div class="minh well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>;">
											<i class="fa fa-cubes fa-3x"></i>
											<h4>
												<br />
												Inventario
											</h4>
										</div>
									</a>
								</div>
								
								<div class="col-sm-4 link">
									<a href="/bo/logistico2/pedidos">
										<div
											class="minh well well-sm txt-color-white text-center link_dashboard"
											style="background: <?=$style[0]->btn_1_color?>;">
											<i class="fa fa-edit fa-3x"></i>
											<h4>Pedidos / Embarque</h4>
										</div>
									</a>
								</div>
								
								<div class="col-sm-4 link">
									<a href="/bo/premios/index">
										<div class="minh well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>;">
											<i class="fa fa-trophy fa-3x"></i>
											<h4>
												Premios / <br />Entrega
											</h4>
										</div>
									</a>
								</div>

								<div class="col-sm-4 link">
									<a href="#">
										<div class="minh well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>;">
											<i class="fa fa-book fa-3x"></i>
											<h4>
												<br />
												Reportes
											</h4>
										</div>
									</a>
								</div>
								
								<div class="col-sm-4 link">
									<a href="#">
										<div class="minh well well-sm txt-color-white text-center link_dashboard" style="background:<?=$style[0]->btn_2_color?>;">
											<i class="fa fa-folder fa-5x"></i>
											<h4>
												Archivero
											</h4>
										</div>
									</a>
								</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end row -->
		<div></div>
	</div>
	<div class="row">
		<!-- a blank row to get started -->
		<div class="col-sm-12">
			<br /> <br />
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
<style>
.minh {
	padding: 50px;
}

.link a:hover {
	text-decoration: none !important;
}
</style>
