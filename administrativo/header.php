


<!-- Navbar -->
<?php if($nivelTela==0){ ?>
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="resources/images/Logotipo.png" width="65px"  style="margin-top: -12px; margin-left: -10px" alt="Painel Administrativo">RightWay</a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					
					<span><?php echo $_SESSION["username"]; ?></span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="logout.php"><i class="icon-exit"></i> Sair</a></li>
				</ul>
			</li>
		</ul>
	</div>
<?php } ?>





<!-- Navbar -->
<?php if($nivelTela==1){ ?>
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
		<a class="navbar-brand" href="#"><img src="../resources/images/Logotipo.png" width="65px"  style="margin-top: -12px; margin-left: -10px" alt="Painel Administrativo">RightWay</a>
          
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					
					<span><?php echo $_SESSION["username"];?></span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="../logout.php"><i class="icon-exit"></i> Sair</a></li>
				</ul>
			</li>
		</ul>
	</div>
<?php } ?>


<!-- Navbar -->
<?php if($nivelTela==2){ ?>
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="../../imagens/LogoCipa1.png" width="199px"  style="margin-top: -12px; margin-left: -10px" alt="Painel Administrativo"></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">199
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					
					<span><?php echo $_SESSION["username"]?></span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="../../logout.php"><i class="icon-exit"></i> Sair</a></li>
				</ul>
			</li>
		</ul>
	</div>
<?php } ?>




	<!-- /navbar -->