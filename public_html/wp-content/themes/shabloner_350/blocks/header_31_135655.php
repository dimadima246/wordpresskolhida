<header id="header" class="cv-head-1  no-sticky " style="[style]">

    <div class="container clearfix bottompadding-xs toppadding-xs">

		<!-- Logo
		============================================= -->
			<div id="logo">
			    
			    <div class='logo_desc'>
			    <div class="toppadding-xs" id="site_name"><a href="<?=home_url('/');?>"><?php bloginfo('name'); ?></a></div>
		        <div class="" id="site_description"><?php bloginfo('description'); ?></div>
			    </div>
			    
			</div><!-- #logo end -->
		
			 
		<div class="btn-holder pull-right media-desktop leftmargin-minier">
		<button type="button"  data-url="<?=get_template_directory_uri()?>//forms/basic.php" class="dialog_open pull-right button button-rounded button-large  button-3d button-3d" >Обратный звонок</button>
		</div>
			

		<ul class="header-extras">
			<li>
				<i class="i-plain icon-map-marker nomargin color"></i>
				<div class="he-text">
					Адрес
					<span class="text-muted"><?=get_option( 'address' )?></span>
				</div>
			</li>
			
			<li>
				<i class="i-plain icon-call nomargin color"></i>
				<div class="he-text">
					Телефон
					<span class="text-muted"><?=get_option( 'phone' )?></span>
				</div>
			</li>
			
			 
			
			
		</ul>
		
		
	</div>
	<div id="" class="">

	
		<!-- Primary Navigation
		============================================= -->
<div id="page-menu" class="no-sticky ">

	<div id="page-menu-wrap">

		<div class="container clearfix">

			<nav class="with-arrows">
				<?php include(get_template_directory().'/blocks/menu_main.php')?>
			</nav>

			<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

		</div>

	</div>

</div>
	</div>

</header>