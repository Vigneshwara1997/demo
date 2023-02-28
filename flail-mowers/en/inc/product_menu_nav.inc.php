<style>
a.one:link {background-color:#00467f !important;
               color: #FFF !important;}

a.one:visited {background-color:#00467f !important;
               color: #FFF !important;}
a.one:hover {background-color:#FFF !important;
               color: #00467f !important;}
			   
@media (min-width:320px)and (max-width:767px){
a.one:link {background-color:#FFF !important;
               color: #00467f !important;}
a.one:visited {background-color:#FFF !important;
               color: #00467f !important;}
a.one:hover {background-color:#00467f !important;
               color: #FFF !important;}
}
@media (min-width:768px)and (max-width:991px) {
	.nav-logo {
    color: #FFF;
    font-size: 17px;
    font-family: Arial Black;
    padding-left: 0px;
    padding-right: 0px;
}
	
.nav>li>a {
    font-size: 14px;
    padding-left: 6px;
    padding-right: 6px;
}
	}
@media (min-width:992px)and (max-width:1200px) {
	.nav-logo {
    color: #FFF;
    font-size: 20px;
    font-family: Arial Black;
    padding-left: 0px;
    padding-right: 0px;
}
	
.nav>li>a {
    font-size: 16px;
padding-left: 8px;
padding-right: 8px;
}
	}
@media (min-width:1201px)and (max-width:1550px) 
{
	.nav-logo {
    color: #FFF;
    font-size: 30px;
    font-family: Arial Black;
    padding-left: 0px;
    padding-right: 0px;
}
	
.nav>li>a {
   font-size: 16px;
padding-left: 15px;
padding-right: 15px;
}
	}
@media (min-width:1551px) 
{
.nav>li>a {
   font-size: 16px;
padding-left: 15px;
padding-right: 15px;
}
}	
	</style>
	<nav class="navbar navbar-default navbar-product" role="navigation" style="z-index: 1000" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#product-nav-collapse" id="product-mobile-menu-button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
      			<a class="navbar-brand" href="<?php echo $root;?>flail-mowers/<?php echo $lang;?>"><span class="productLogoHeader hidden-xs nav-logo"><b>FLAIL MOWERS</b></span><span class="productLogoHeaderMobile visible-xs nav-logo"><b>FLAIL MOWERS</b></span></a>
			</div>
			<div class="collapse navbar-collapse" id="product-nav-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TRACTOR<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" style="padding-left: 4px; padding-right: 4px;">
							<li><a class="one" href="fmp260.php">FMP260</a></li>
						</ul>
					
					
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SKIDSTEER<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu" style="padding-left: 4px; padding-right: 4px;">
							<li><a class="one" href="fmm148.php">FMM148</a></li>					
						</ul>
					</li> 
					<li class="dropdown"><a href="../../brush-mulchers/en/mx230.php">EXCAVATOR</a>
					
					</li>
                   <li><a href="<?php echo $root; ?>teeth-options/en/">Teeth</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo $root;?>">Home</a></li>
				<?php $altLink = altLangLink($lang, 'fr'); if ($altLink != '') { ?>
				 <li><a href="<?php echo $altLink;?>">Fran&ccedil;ais</a></li>
				<?php } ?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

