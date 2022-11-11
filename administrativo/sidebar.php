		<!-- Sidebar -->
		<div class="sidebar">
		    <div class="sidebar-content">

		        <!-- User dropdown -->
		        <?php if($nivelTela==0){ ?>
		        <div class="user-menu dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                <img src="imagens/business_man.png" width="64px" style="margin-top: 5px;">
		                <div class="user-info">
		                    <span><?php echo substr($_SESSION["username"], 0, 20)?></span>
		                    <span>ADM RightWay</span>
		                </div>
		            </a>

		        </div>
		        <?php } ?>

		        <?php if($nivelTela==1){ ?>
		        <div class="user-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                <img src="../imagens/business_man.png" width="64px" style="margin-top: 5px;">
		                <div class="user-info">
		                    <span><?php echo substr($_SESSION["username"], 0, 20)?></span>
		                    <span>ADM RightWay</span>
		                </div>
		            </a>

		        </div>
		        <?php } ?>

		        <?php if($nivelTela==2){ ?>
		        <div class="user-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                <img src="../../imagens/business_man.png" width="64px" style="margin-top: 5px;">
		                <div class="user-info">
		                    <span><?php echo substr($_SESSION["username"], 0, 20)?></span>
		                    <span>ADM RightWay</span>
		                </div>
		            </a>

		        </div>
		        <?php } ?>


		        <!-- /user dropdown -->

		        <!-- Main navigation -->
		        <ul class="navigation">

		            <?php if($nivelTela==0){ ?>
		            <li <?php echo $paginaAtiva == 'home' ? 'class="active"' : '';?>><a href="."><span>Página Inicial</span> <i class="icon-screen2"></i></a></li>
		            <?php if($_SESSION['acesso']=='TOTAL'){ ?>

		            <li <?php echo $paginaAtiva == 'localização' ? 'class="active"' : '';?>><a href="#"><span>Localização</span> <i class="icon-users"></i></a>

		                <ul>
		                    <li><a href="pais/">País <i class="icon-plus-circle2"></i></a></li>
		                    <li><a href="estado/">Estado <i class="icon-forward"></i></a></li>
		                    <li><a href="#">Cidade <i class="icon-forward"></i></a></li>

		                </ul>
		            </li>

		            <?php } ?>
		            <li <?php echo $paginaAtiva == 'locais' ? 'class="active"' : '';?>><a href="#">
		                    <span>Locais</span> <i class="icon-user4"></i></a>
		                <ul>
		                    <li><a href="#">Pontos Turisticos <i class="icon-plus-circle2"></i></a></li>
		                    <li><a href="#">Hoteis <i class="icon-forward"></i></a></li>
		                    <li><a href="#">Restaurantes <i class="icon-forward"></i></a></li>
		                </ul>
		            </li>







		            <li <?php echo $paginaAtiva == 'videos' ? 'class="active"' : '';?>><a href="video/"><span>Videos</span> <i class="icon-play"></i></a></li>


		            <li <?php echo $paginaAtiva == 'eventos' ? 'class="active"' : '';?>>
		                <a href="eventos/"><span>Eventos</span> <i class="icon-briefcase"></i></a></li>



		            <li <?php echo $paginaAtiva == 'roteiro' ? 'class="active"' : '';?>><a href="roteiro/"><span>Roteiro</span> <i class="icon-balloon"></i></a></li>

		            <?php } ?>







		            <?php if($nivelTela==1){ ?>
		            <li <?php echo $paginaAtiva == 'home' ? 'class="active"' : '';?>><a href="../index.php"><span>Página Inicial</span> <i class="icon-screen2"></i></a></li>

		            <?php if($_SESSION['acesso']=='TOTAL'){ ?>

		            <li <?php echo $paginaAtiva == 'localização' ? 'class="active"' : '';?>><a href="#"><span>Localização</span> <i class="icon-users"></i></a>

		                <ul>
		                    <li><a href="../pais/">País <i class="icon-plus-circle2"></i></a></li>
		                    <li><a href="../estado/">Estado <i class="icon-forward"></i></a></li>
		                    <li><a href="#">Cidade <i class="icon-forward"></i></a></li>

		                </ul>
		            </li>

		            <?php } ?>

		            <li <?php echo $paginaAtiva == 'locais' ? 'class="active"' : '';?>><a href="#">
		                    <span>Locais</span> <i class="icon-user4"></i></a>
		                <ul>
		                    <li><a href="#">Pontos Turisticos <i class="icon-plus-circle2"></i></a></li>
		                    <li><a href="#">Hoteis <i class="icon-forward"></i></a></li>
		                    <li><a href="#">Restaurantes <i class="icon-forward"></i></a></li>
		                </ul>
		            </li>




		            <li <?php echo $paginaAtiva == 'videos' ? 'class="active"' : '';?>><a href="../video/"><span>Videos</span> <i class="icon-play"></i></a></li>

		            <li <?php echo $paginaAtiva == 'eventos' ? 'class="active"' : '';?>>
		                <a href="../eventos/"><span>Eventos</span> <i class="icon-briefcase"></i></a></li>



		            <li <?php echo $paginaAtiva == 'roteiro' ? 'class="active"' : '';?>><a href="../roteiro/"><span>Roteiro</span> <i class="icon-balloon"></i></a></li>

		            <?php } ?>










		        </ul>
		        <!-- /main navigation -->

		    </div>
		</div>
		<!-- /sidebar -->