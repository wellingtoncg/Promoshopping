<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Your app title -->
    <title>ECOM - Mobile & App HTML Template</title>
    <!-- Path to Framework7 Library CSS, iOS Theme -->
    <link rel="stylesheet" href="css/framework7.ios.min.css">
    <!-- Path to Framework7 color related styles, iOS Theme -->
    <link rel="stylesheet" href="css/framework7.ios.colors.min.css">
	<link rel="stylesheet" href="css/kitchen-sink.css">	
    <!-- Path to your custom app styles-->
	<link rel="stylesheet" href="css/font-awesome.min.css">	
	<link rel="stylesheet" href="css/swipebox.css">	
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class="statusbar-overlay"></div>
    <!-- Left panel with reveal effect-->
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>	
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
		<div class="list-menu">
			<div class="list-group">
				<nav>
					<ul>
						<li class="divider">Menu</li>
						<!--
						<li>
							<a class="item-link close-panel item-content" href="dashbord.html">
								<div class="item-media">
									<i class="fa fa-home"></i>
								</div>
								<div class="item-inner">
									<div class="item-title">Dashboard</div>
									<div class="item-after">
									</div>
								</div>
							</a>
						</li>
						-->
						<li>
							<a class="item-link close-panel item-content close-popup open-login-screen" href="#">
								<div class="item-media">
									<i class="fa fa-sign-in"></i>
								</div>
								<div class="item-inner">
									<div class="item-title">Login</div>
									<div class="item-after">
									</div>
								</div>
							</a>
						</li>
						<li>
							<a data-popup=".popup-register" class="item-link close-panel item-content open-popup" href="#">
								<div class="item-media">
									<i class="fa fa-user-plus"></i>
								</div>
								<div class="item-inner">
									<div class="item-title">Cadastre-se</div>
									<div class="item-after">
									</div>
								</div>
							</a>
						</li>
						<li>
							<a data-popup=".popup-forgetpass" class="item-link close-panel item-content open-popup" href="#">
								<div class="item-media">
									<i class="fa fa-lock"></i>
								</div>
								<div class="item-inner">
									<div class="item-title">Recuperar Senha</div>
									<div class="item-after">
									</div>
								</div>
							</a>
						</li>
						<!--
						<li>
							<a class="item-link close-panel item-content" href="about.html">
								<div class="item-media">
									<i class="fa fa-user"></i>
								</div>
								<div class="item-inner">
									<div class="item-title">About Us</div>
									<div class="item-after">
									</div>
								</div>
							</a>
						</li>
						-->
						<li>
							<a class="item-link close-panel item-content" href="#">
								<div class="item-media">
									<i class="fa fa-shopping-cart"></i>
								</div>
								<div class="item-inner">
									<div class="item-title">Filtrar Por</div>
								</div>
							</a>
							<a class="js-toggle-menu" href="#">
								<span class="icon-chevron-down"></span>
							</a>
							<ul class="show-menu">
								<li>
									<a class="item-link close-panel item-content" href="shop.html">
										<div class="item-media">
											<i class="fa fa-th"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Shopping</div>
										</div>
									</a>
								</li>
								<li>
									<a class="item-link close-panel item-content" href="shop-list.html">
										<div class="item-media">
											<i class="fa fa-list"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Lojas</div>
										</div>
									</a>
								</li>
								<li>
									<a class="item-link close-panel item-content" href="single-product.html">
										<div class="item-media">
											<i class="fa fa-area-chart"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Categorias</div>
										</div>
									</a>
								</li>	
								<!--
								<li>
									<a class="item-link close-panel item-content" href="shopping-cart.html">
										<div class="item-media">
											<i class="fa fa-shopping-cart"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Shopping Cart</div>
										</div>
									</a>
								</li>	
								<li>
									<a class="item-link close-panel item-content" href="checkout.html">
										<div class="item-media">
											<i class="fa fa-credit-card"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Checkout</div>
										</div>
									</a>
								</li>
							</ul>							
						</li>
						-->
						<!--
						<li>
							<a class="item-link close-panel item-content" href="#">
								<div class="item-media">
									<i class="fa fa-cubes"></i>
								</div>
								<div class="item-inner">
									<div class="item-title">Blog</div>
								</div>
							</a>
							<a class="js-toggle-menu2" href="#">
								<span class="icon-chevron-down"></span>
							</a>
							<ul class="show-menu2">
								<li>
									<a class="item-link close-panel item-content" href="blog.html">
										<div class="item-media">
											<i class="fa fa-area-chart"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Blog</div>
										</div>
									</a>
								</li>
								<li>
									<a class="item-link close-panel item-content" href="blog-details.html">
										<div class="item-media">
											<i class="fa fa-file-text-o"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Blog Details</div>
										</div>
									</a>
								</li>
							</ul>							
						</li>
						<li>
							<a class="item-link close-panel item-content" href="portfolio.html">
								<div class="item-media">
									<i class="fa fa-file-text-o"></i>
								</div>
								<div class="item-inner">
									<div class="item-title">Portfolio</div>
								</div>
							</a>
						</li>
						<li>
							<a class="item-link close-panel item-content" href="portfolio-details.html">
								<div class="item-media">
									<i class="fa fa-file-image-o"></i>
								</div>
								<div class="item-inner">
									<div class="item-title">Portfolio Details</div>
								</div>
							</a>
						</li>
						<li>
							<a class="item-link close-panel item-content" href="contact.html">
								<div class="item-media">
									<i class="fa fa-tty"></i>
								</div>
								<div class="item-inner">
									<div class="item-title">Contact</div>
								</div>
							</a>
						</li>
						-->
					</ul>
				</nav>
			</div>
		</div>
      </div>
    </div>	
<!-- menu end -->
	<div class="login-screen">
    <div class="view">
      <div class="page">
        <div class="page-content login-screen-content registerbody">
			<div class="register-content">
				<a href="#" class="close-login-screen floatright"><i class="fa fa-times"></i></a>
				<h3><img src="img/logo2.png" alt=""></h3>
				<!--<form action="#">-->
				<form action="./">
					
					<div id="display_error2" style="color:#F00; width:100%; text-align:center; display:none;">&nbsp;</div>
					
					<div class="inputbox">
						<span>Email:</span><br>
						<input type="text" name="email" id="email" placeholder="Email cadastral">
					</div>
					<div class="inputbox">
						<span>Senha:</span><br>
						<input type="password" name="password" id="password" placeholder="***********">
					</div>
					<div class="inputbox">
						<a data-popup=".popup-forgetpass" class="open-popup"   href="#">Esqueceu a senha?</a>
					</div>
					<div class="inputbox">
						<button id="login" name="login" class="button button-big">Login</button>
					</div>						
				</form>	
				<p>Não possui uma conta?  <a data-popup=".popup-register" class="open-popup" href="#">Cadastre-se</a></p>
			</div>
        </div>
      </div>
    </div>
  </div>
	  <!-- forget password  start-->
 <div class="popup popup-forgetpass">
	<div class="registerbody">
		<a href="#" class="close-popup closebutton"><i class="fa fa-times"></i></a>
		<div class="register-content">
			<h3><img src="img/logo2.png" alt=""></h3>
			<form action="#">
				<div class="inputbox">
					<span>Email:</span><br>
					<input type="email" name="password" placeholder="email@gmail.com">
				</div>
				<div class="inputbox">
					<button class="button button-big">Enviar Nova Senha</button>
				</div>						
			</form>	
			<p>Não possui uma conta?<a data-popup=".popup-register" class="open-popup" href="#"> Cadastre-se</a></p>
		</div>
	 </div>
</div>
  <!-- forget password  end-->
  
  <!-- resister popup start-->
<div class="popup popup-register">
	<div class="registerbody">
			<a href="#" class="close-popup closebutton"><i class="fa fa-times"></i></a>
	     <div class="register-content">
			<h3><img src="img/logo2.png" alt=""></h3>
				<!--<form action="#">-->
				<form action="./">
				
				<div id="display_error1" style="color:#F00; width:100%; text-align:center; display:none;">&nbsp;</div>
					
				<div class="inputbox">
					<span>Nome Completo:</span><br>
					<input type="text" id="nome" name="nome" placeholder="">
				</div>
				<div class="inputbox">
					<span>Telefone:</span><br>
					<input type="text" name="telefone" id="telefone" placeholder="">
				</div>
				<div class="inputbox">
					<span>Email:</span><br>
					<input type="email" id="email" name="email" placeholder="">
				</div>
				<div class="inputbox">
					<span>Senha:</span><br>
					<input type="password" id="senha" name="senha" placeholder="">
				</div>
				<div class="inputbox">
					<span>Repita a Senha:</span><br>
					<input type="password" id="resenha" name="resenha" placeholder="">
				</div>
				<div class="inputbox">
					<button id="cadastrar" name="cadastrar" class="button button-big">Cadastrar-se</button>
				</div>					
			</form>
		</div>
	 </div>
</div>
  <!-- resister popup start-->
  
  
    <!-- Views -->
    <div class="views">
      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We need cool sliding animation on title element, so we have additional "sliding" class -->
			<div class="left">
              <!-- left link contains only icon - additional "icon-only" class-->
              <a href="#" class="link icon-only open-panel"><img src="img/menu.png" alt="" /></a>
            </div>
            <div class="center sliding"><img src="img/logo.png" alt=""></div>
            <div class="right">
              <!-- Right link contains only icon - additional "icon-only" class-->
              <a href="#" data-popover=".popover-links" class="link open-popover clickopen"><img src="img/menu2.png" alt="" /></a>
            </div>			
          </div>
        </div>
        <div class="popover popover-links">
		    <div class="popover-angle"></div>
		    <div class="popover-inner">
		      <div class="list-block">
		        <ul>
		          <li><a href="dashbord.html" class="list-button item-link clickopen">Dashboard</a></li>
		          <li><a href="shopping-cart.html" class="list-button item-link clickopen">My Cart</a></li>
		          <li><a href="my-profile.html" class="list-button item-link clickopen">My Profile</a></li>
		          <li><a href="#" class="list-button item-link clickopen">Log Out</a></li>
		        </ul>
		      </div>
		    </div>
	  	</div>
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
		
          <!-- Page, "data-page" contains page name -->
          <div data-page="index" class="page">
            <!-- Scrollable page content -->
            <div class="page-content">	
              <!-- Link to another page -->
			  <div class="list-block">
			  	
			  	<?php 
                
        	if (isset($_GET['ok']))
        		 echo'<div id="display_ok" style="color:#F62B2B; width:100%; text-align:center;"><br><b>Usuário cadastrado com sucesso</b></div>';
                
          ?>
			  	
			  	
			<?php
					include "conexao.php";
					$dir_separador = '//';
					//$cod = $_GET["cod"];
					
					
					$sql = "select codigo, date_format(data_postagem, '%d/%m/%Y') as data_postagem, codigo_usuario, codigo_loja, codigo_categoria, nome, preco_original, preco_atual, imagem from produtos WHERE status = " . 1 . " order by codigo desc";
					$res = mysql_query($sql, $conexao);
					$num = mysql_num_rows($res);
					
					//echo 'Num=' . $num;
			
			?>  	
			  	
			
			<div class="content-block">
			<div class="content-block-inner">
			<div class="shop-area">
			
			<?php
				
				for($i=0; $i < $num; $i++) {
						$dados = mysql_fetch_array($res);
						
						$imagem = $dados['imagem'];
						$nome = $dados['nome'];
						
						$preco_original = $dados['preco_original'];
						$preco_atual = $dados['preco_atual'];
						
						$array = explode('"thumbnail":"', $imagem);
						//echo 'nome=' . $array[1];
						//segunda vez ... já pegar o thumb
						$arrayTh = explode('/', $array[1]);
						$thumbTemp = $arrayTh[1];
						//echo 'temp=' . $thumbTemp . '<br>';
						$pos = strpos($thumbTemp, '"');
						//echo 'pos=' . $pos . '<br>';
						$thumb = substr($thumbTemp, 0, $pos);
						//echo 'thumb=' . $thumb;
						$thumb = 'site_admin' . $dir_separador . 'files_itens' . $dir_separador . $thumb;
						
						
						//pegar o caminho correto
						$array = explode('"thumbnail":"', $imagem);
				  	$arrayTh = explode('","usrName":', $array[0]);
				  	$thumbTemp = $arrayTh[0];
						$arrDefinitiva =  explode('/', $thumbTemp);
						$imagemDefinitiva = $arrDefinitiva[1];
						
						$div = ($i + 1) % 2;
						
						if ($div > 0){
			 				//é impar
			 				$strAux = 'floatleft';
						} else {
							$strAux = 'floatright';
						}
						
			?>
				
				<div class="single-shop <?= $strAux ?>">
					<div class="shop-inner">
						<div class="shop-img">
							<a href="#"><img src="<?= $thumb ?>" alt="" /></a>
						</div>
						<div class="shop-content">
							<h3><a href="#"><?= $nome ?></a></h3>
							<div class="price-box">
								<span class="new-price">R$ <?= $preco_atual ?></span>
								<span class="old-price">R$ <?= $preco_original ?></span>
							</div>
						</div>					
					</div>
				</div>
				
			<?php
					}
			?>
					
				
				<div class="single-shop floatright">
					<div class="shop-inner">
						<div class="shop-img">
							<a href="#"><img src="img/product/2.jpg" alt="" /></a>
						</div>
						<div class="shop-content">
							<h3><a href="#">Convallis quam sit</a></h3>
							<div class="price-box">
								<span class="new-price">£90.00</span>
								<span class="old-price">£120.00</span>
							</div>
						</div>					
					</div>
				</div>
				
				
				<div class="single-shop floatleft">
					<div class="shop-inner">
						<div class="shop-img">
							<a href="#"><img src="img/product/3.jpg" alt="" /></a>
						</div>
						<div class="shop-content">
							<h3><a href="#">Convallis quam sit</a></h3>
							<div class="price-box">
								<span class="new-price">£90.00</span>
								<span class="old-price">£120.00</span>
							</div>
						</div>					
					</div>
				</div>
				
				
				<div class="single-shop floatright">
					<div class="shop-inner">
						<div class="shop-img">
							<a href="#"><img src="img/product/4.jpg" alt="" /></a>
						</div>
						<div class="shop-content">
							<h3><a href="#">Convallis quam sit</a></h3>
							<div class="price-box">
								<span class="new-price">£90.00</span>
								<span class="old-price">£120.00</span>
							</div>
						</div>					
					</div>
				</div>
				
				
				<div class="single-shop floatleft">
					<div class="shop-inner">
						<div class="shop-img">
							<a href="#"><img src="img/product/5.jpg" alt="" /></a>
						</div>
						<div class="shop-content">
							<h3><a href="#">Convallis quam sit</a></h3>
							<div class="price-box">
								<span class="new-price">£90.00</span>
								<span class="old-price">£120.00</span>
							</div>
						</div>					
					</div>
				</div>
				
				
				<div class="single-shop floatright">
					<div class="shop-inner">
						<div class="shop-img">
							<a href="#"><img src="img/product/6.jpg" alt="" /></a>
						</div>
						<div class="shop-content">
							<h3><a href="#">Convallis quam sit</a></h3>
							<div class="price-box">
								<span class="new-price">£90.00</span>
								<span class="old-price">£120.00</span>
							</div>
						</div>					
					</div>
				</div>
				
				
				<div class="single-shop floatleft">
					<div class="shop-inner">
						<div class="shop-img">
							<a href="#"><img src="img/product/7.jpg" alt="" /></a>
						</div>
						<div class="shop-content">
							<h3><a href="#">Convallis quam sit</a></h3>
							<div class="price-box">
								<span class="new-price">£90.00</span>
								<span class="old-price">£120.00</span>
							</div>
						</div>					
					</div>
				</div>
				
				
				<div class="single-shop floatright">
					<div class="shop-inner">
						<div class="shop-img">
							<a href="#"><img src="img/product/8.jpg" alt="" /></a>
						</div>
						<div class="shop-content">
							<h3><a href="#">Convallis quam sit</a></h3>
							<div class="price-box">
								<span class="new-price">£90.00</span>
								<span class="old-price">£120.00</span>
							</div>
						</div>					
					</div>
				</div>
			</div>
			
			<div class="pagination">
				<ul>
					<li><a href="#">Anterior</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Próximo</a></li>
				</ul>
			</div>
			
        </div>
        
      </div>
			  	
			  	
			  	
			  	
			  	
			  	
			  	
			  	
			  	
					<!-- slider area start-->
					<!--
					<div class="slider-area">
						  <div class="ks-slider-custom">
							<div data-pagination=".swiper-pagination" data-space-between="0" data-next-button=".swiper-button-next" data-prev-button=".swiper-button-prev" data-pagination-clickable="true" class="swiper-container swiper-init">
							<div class="swiper-pagination"></div>
								<div class="swiper-wrapper">
									<div style="background-image:url(img/slider/1.png)" class="swiper-slide">
										<div class="slide-text">
											<p>New product 2015</p>
											<h2>BIG SALE</h2>
											<a href="#">shop now</a>
										</div>
									</div>
									<div style="background-image:url(img/slider/2.jpg)" class="swiper-slide">
										<div class="slide-text">
											<p>New product 2015</p>
											<h2>BIG SALE</h2>
											<a href="#">shop now</a>
										</div>
									</div>
									<div style="background-image:url(img/slider/3.jpg)" class="swiper-slide">
										<div class="slide-text">
											<p>New product 2015</p>
											<h2>BIG SALE</h2>
											<a href="#">shop now</a>
										</div>
									</div>
								</div>
							</div>
						  </div>
					  </div>
					  -->
					  <!-- slider area start-->
					  
					  
					  <!-- shop discover area start-->
					  <!--
					<div class="features-product">
						<div class="section-heading">
							<h3>SHOP AND DISCOVER</h3>
						</div>	
						<div class="clear"></div>
						<div class="row">
								<div class="shopbox">
								<a href="shop.html">
									<img src="img/discover/1.jpg" alt="" />
									<h3>WOMEN</h3>
								</a>	
								</div>
								<div class="shopbox">
									<a href="shop.html">
									<img src="img/discover/2.jpg" alt="" />
									<h3>MEN</h3>
									</a>
								</div>
								<div class="shopbox">
									<a href="shop.html">
									<img src="img/discover/3.jpg" alt="" />
									<h3>LIFESTYLE</h3>
									</a>
								</div>
								<div class="shopbox">
									<a href="shop.html">
									<img src="img/discover/4.jpg" alt="" />
									<h3>BEAUTY</h3>
									</a>
								</div>
						</div>
					</div>
					-->
					
					<!-- shop discover area start-->
					<!--
					<div class="features-product">
						<div class="section-heading">
							<h3>FEATURED PRODUCTS</h3>
						</div>	
						<div class="clear"></div>
						<div class="ks-slider-custom">
							<div data-space-between="0" data-next-button=".swiper-button-next" data-prev-button=".swiper-button-prev" class="swiper-container2 swiper-init">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
							        	<div class="single-project">
											<div class="product-img">
												<a href="#"><img src="img/product/1.jpg" alt="" /></a>
												<span>new</span>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Convallis quam sit</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>									
												<div class="price-box">
													<span class="new-price">£90.00</span>
													<span class="old-price">£120.00</span>
												</div>										
											</div>									
										</div>					        	
							        </div>
									<div class="swiper-slide">
							        	<div class="single-project">
											<div class="product-img">
												<a href="#"><img src="img/product/10.jpg" alt="" /></a>
												<span>new</span>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Convallis quam sit</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>									
												<div class="price-box">
													<span class="new-price">£90.00</span>
													<span class="old-price">£120.00</span>
												</div>										
											</div>									
										</div>					        	
							        </div> 
							        <div class="swiper-slide">
										<div class="single-project">
											<div class="product-img">
												<a href="#"><img src="img/product/2.jpg" alt="" /></a>
												<span>new</span>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Convallis quam sit</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>									
												<div class="price-box">
													<span class="new-price">£90.00</span>
													<span class="old-price">£120.00</span>
												</div>										
											</div>									
										</div>			        	
							        </div>
								</div>
							</div>
						</div>						
					</div>
					<div class="features-product">
						<div class="section-heading">
							<h3>New Products</h3>
						</div>	
						<div class="clear"></div>
						<div class="ks-slider-custom">
							<div data-space-between="0" data-next-button=".swiper-button-next" data-prev-button=".swiper-button-prev" class="swiper-container3 swiper-init">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
							        	<div class="single-project">
											<div class="product-img">
												<a href="#"><img src="img/product/4.jpg" alt="" /></a>
												<span>new</span>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Convallis quam sit</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>									
												<div class="price-box">
													<span class="new-price">£90.00</span>
													<span class="old-price">£120.00</span>
												</div>										
											</div>									
										</div>					        	
							        </div> 
							        <div class="swiper-slide">
							        	<div class="single-project">
											<div class="product-img">
												<a href="#"><img src="img/product/3.jpg" alt="" /></a>
												<span>new</span>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Convallis quam sit</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>									
												<div class="price-box">
													<span class="new-price">£90.00</span>
													<span class="old-price">£120.00</span>
												</div>										
											</div>									
										</div>				        	
							        </div>
							        <div class="swiper-slide">
							        	<div class="single-project">
											<div class="product-img">
												<a href="#"><img src="img/product/11.jpg" alt="" /></a>
												<span>new</span>
												<div class="actions">
													<div class="action-buttons">
														<div class="add-to-cart">
															<a href="#">Add to cart</a>
														</div>
														<div class="add-to-links">
															<div class="add-to-wishlist">
																<a href="#"><i class="fa fa-star"></i>
																</a>
															</div>
															<div class="compare-button">
																<a href="#"><i class="fa fa-exchange"></i></a>
															</div>									
														</div>
														<div class="quickviewbtn">
															<a href="#"><i class="fa fa-search-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h2 class="product-name"><a href="#">Convallis quam sit</a></h2>
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</div>									
												<div class="price-box">
													<span class="new-price">£90.00</span>
													<span class="old-price">£120.00</span>
												</div>										
											</div>									
										</div>				        	
							        </div>
								</div>
							</div>
						</div>		
					</div>
					-->
					
					<!--
					<div class="banner-area">
						<a href="#"><img src="img/banner/banner5.jpg" alt="" /></a>
					</div>
					-->
					<!--
					<div class="corporate-area">
						<div class="row">
							<div class="col-100 tablet-33">
								<div class="single-corporate">
									<div class="corporate-icon">
										<i class="fa fa-truck"></i>
									</div>
									<div class="corporate-text">
										<h4>FREE SHIPPING &amp; RETURN</h4>
										<p>Free shipping on all orders over $99.</p>
									</div>
								</div>
							</div>
							<div class="col-100 tablet-33">
								<div class="single-corporate">
									<div class="corporate-icon">
										<i class="fa fa-usd"></i>
									</div>
									<div class="corporate-text">
										<h4>MONEY BACK GUARANTEE</h4>
										<p>100% money back guarantee.</p>
									</div>
								</div>
							</div>
							<div class="col-100 tablet-33">
								<div class="single-corporate">
									<div class="corporate-icon">
										<i class="fa fa-life-bouy"></i>
									</div>
									<div class="corporate-text">
										<h4>ONLINE SUPPORT 24/7</h4>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
								</div>
							</div>
						</div>					
						-->
						<div class="footer-icon">
							<p>Copyright 2016. Todos os direitos reservados.</p>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<!--<a href="#"><i class="fa fa-linkedin"></i></a>-->
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
			  </div>
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="js/jquery.swipebox.js"></script>
    <script type="text/javascript" src="js/my-app.js"></script>
    <script src="js/cadastre-se.js"></script>
  </body>
</html> 