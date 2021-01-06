 
<div id="top-bar" class="clearfix ">
<div class="container clearfix">

<div class="col_half">
<i class="color icon-phone"></i> <?=get_option( 'phone' )?>
&nbsp;&nbsp;&nbsp;<i class="color icon-map-marker"></i> <?=get_option( 'address' )?>


</div>

<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
						    
						    <li>
    					        <a href="https://vk.com/company" class="si-vk" title="Вконтакте" style="width: 40px;">
        					        <span class="ts-icon"><i class="icon-vk"></i></span>
        					        <span class="ts-text">Вконтакте</span>
    					        </a>
					        </li>
						    
						    <li>
    					        <a href="https://instagram.com/company" class="si-instagram" title="Instagram" style="width: 40px;">
        					        <span class="ts-icon"><i class="icon-instagram"></i></span>
        					        <span class="ts-text">Instagram</span>
    					        </a>
					        </li>
						    
						    <li>
    					        <a href="https://facebook.com/company" class="si-facebook" title="Facebook" style="width: 40px;">
        					        <span class="ts-icon"><i class="icon-facebook"></i></span>
        					        <span class="ts-text">Facebook</span>
    					        </a>
					        </li>
						    
						    <li>
    					        <a href="https://youtube.com/user/company" class="si-youtube" title="YouTube" style="width: 40px;">
        					        <span class="ts-icon"><i class="icon-youtube"></i></span>
        					        <span class="ts-text">YouTube</span>
    					        </a>
					        </li>
						    
						    <li>
    					        <a href="https://twitter.com/company" class="si-twitter" title="Twitter" style="width: 40px;">
        					        <span class="ts-icon"><i class="icon-twitter"></i></span>
        					        <span class="ts-text">Twitter</span>
    					        </a>
					        </li>
						    
						    
							
							<li><a href="mailto:<?=get_option( 'prdvg_email' )?>" class="si-email3" title="<?=get_option( 'prdvg_email' )?>" style="width: 40px;"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text"><?=get_option( 'prdvg_email' )?></span></a></li>
						    
						</ul>
					</div><!-- #top-social end -->

				</div>


</div>
</div>	

		<header id="header" class="[class]  no-sticky " style="[style]">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
        			<div id="logo">
        			    
        			    <div class='logo_desc'>
        			    <div class="toppadding-xs" id="site_name"><a href="<?=home_url('/');?>"><?php bloginfo('name'); ?></a></div>
        		        <div class="" id="site_description"><?php bloginfo('description'); ?></div>
        			    </div>
        			    
        			</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="extra_menu_container style-6 with-arrows">
                        <?php include(get_template_directory().'/blocks/menu_main.php')?>
                        
                         
						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="/" method="get">
								<input type="text" name="s" class="form-control" value="" placeholder="Введите запрос и нажмите Enter..">
							</form>
						</div><!-- #top-search end -->
						 

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->