<!DOCTYPE html>
<html lang="en" class="js">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Responsive HTML Template">
		<meta name="author" content="megapixels">
		
		<!-- Fav Icon  -->
		<link rel="shortcut icon" href="/public/img/favicon.png">
		<link href="/public/img/favicon.png" rel="shortcut icon" type="image/x-icon">
		<link href="/public/img/favicon.png" rel="icon" type="image/x-icon">
		
		<!-- Site Title  -->
		<title>Zodwind.am</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="/public/assets/css/bootstrap.css" >
		
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="/public/lib/Font-Awesome/css/font-awesome.min.css"/>
		
		<!-- megaicons CSS -->
		<link rel="stylesheet" href="/public/lib/megaicon/megaicon.css"/>
		
		<!-- BxSlider CSS -->
		<link rel="stylesheet" href="/public/lib/BxSlider/jquery.bxslider.css"/>
		
		<!-- slick CSS -->
		<link rel="stylesheet" href="/public/lib/slick/slick.css"/>
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="/public/lib/select2/dist/css/select2.min.css"/>
		
		<!-- Custom styles for this template -->
		<link href="/public/css/font.css" rel="stylesheet">
		<link href="/public/css/media.css" rel="stylesheet">
		<link href="/public/css/style.css?v=1.1" rel="stylesheet">
    
        <?php if($cnt->lang == "am"){?>
        <style>
        .nav > li > a {
            letter-spacing: 0;
            font-weight: 300;
            padding-left: 0;
            padding-right: 0;
        }
        </style>
        <?php }?>
		
	</head>
	<body>
	
		<div class="header-section">
		<nav class="navbar navbar-default">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><img src="/public/img/logo.png" alt="logo"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home" class="scroll"><?=$cnt->val['home']?></a></li>
						<li><a href="#about" class="scroll"><?=$cnt->val['about_us']?></a></li>
						<li><a href="#service" class="scroll"><?=$cnt->val['service']?></a></li>
						<li><a href="#our_project" class="scroll"><?=$cnt->val['our_project']?></a></li>
						<li><a href="#white_energy" class="scroll"><?=$cnt->val['about_energy']?></a></li>
						<li><a href="#inv_project" class="scroll"><?=$cnt->val['inv_project']?></a></li>
						<li><a href="#contact" class="scroll"><?=$cnt->val['contact']?></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php if($cnt->lang=="am"){?>
                                <img class="lang" src="/public/img/am.png"> <span class="caret"></span>
                                <?php }?>
                                <?php if($cnt->lang=="en"){?>
                                <img class="lang" src="/public/img/en.png"> <span class="caret"></span>
                                <?php }?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="?lang=am"><img class="lang" src="/public/img/am.png"></a></li>
                                <li><a href="?lang=en"><img class="lang" src="/public/img/en.png"></a></li>
                            </ul>
                        </li>
					</ul>
				</div><!-- /.navbar-collapse -->
		</nav><!-- /.navbar -->

			<div class="header-slider" id="home">
				<div class="single-header-slide sh-slide-1" style="background:url(/public/img/bg.jpg) center center no-repeat;background-size:cover;">
					<div class="overlay">
						<div class="container">
							<div class="row">
								<div class="col-md-8 padding_for_768">
									<h2>Zodwind</h2>
									<p class="lead">Natural Energy in Armenia</p>
									<ul class="buttons">
										<li><a href="#" class="button alt">details</a></li>
										<li><a href="#" class="button">details</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="wind">
					    z
					</div>
					<div class="wind-large">
					    
					</div>
				</div>
				<div class="single-header-slide sh-slide-2" style="background:url(/public/images/header-slide/slide-2.jpg) center center no-repeat;background-size:cover;">
					<div class="overlay">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<h2>POWER <br />FOR FACTORY</h2>
									<p class="lead">Checkout and enjoy the biggest limited free explan <br /> to you how all this mistaken idea</p>
									<ul class="buttons">
										<li><a href="#" class="button alt">details</a></li>
										<li><a href="#" class="button">details</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		        
		<div class="our-expertist" id="about" >
			<div class="container">
				<div class="section-head">
					<div class="row text-center">
						<div class="col-md-12">
							<h4><?=$cnt->val['about_us']?></h4>
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
				  <div class="col-md-12 text-center">
	                    <p>Text about our company text about our company text about our company text about our company text about our company<br>Text about our company text about our company text about our company text about our company text about our company text about our company.<br> Text about our company text about our company text about our company text about our company text about our company. Text about our company text about our company text about our company text about our company text about our company text about our company.</p>
	                </div>
				</div>
			</div>
		</div>

        
		<div class="our-expertist grey-bg" id="service">
			<div class="container">
				<div class="section-head">
					<div class="row text-center">
						<div class="col-md-12">
							<h4><?=$cnt->val['service']?></h4>
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
	                <div class="col-md-6">
	                   <img src="/public/img/enegy470.png">
	                </div>
	                <div class="col-md-6">
	                     <h4>Wind energy</h4>
	                     <p>Wind power is the use of air flow through wind turbines to mechanically power generators for electric power. Wind power, as an alternative to burning fossil fuels, is plentiful, renewable, widely distributed, clean, produces no greenhouse gas emissions during operation, consumes no water, and uses little land. The net effects on the environment are far less problematic than those of nonrenewable power sources.
                         <br>
                        Wind farms consist of many individual wind turbines which are connected to the electric power transmission network. Onshore wind is an inexpensive source of electric power, competitive with or in many places cheaper than coal or gas plants.
                        </p>
	                </div>
				</div>
				<!--<div class="row">
	                <div class="col-md-6">
	                     <h4>Solar energy</h4>
	                     <p>Solar energy is radiant light and heat from the Sun that is harnessed using a range of ever-evolving technologies such as solar heating, photovoltaics, solar thermal energy, solar architecture, molten salt power plants and artificial photosynthesis.
                         <br><br>
                        It is an important source of renewable energy and its technologies are broadly characterized as either passive solar or active solar depending on how they capture and distribute solar energy or convert it into solar power. Active solar techniques include the use of photovoltaic systems, concentrated solar power and solar water heating to harness the energy.<br><br>Passive solar techniques include orienting a building to the Sun, selecting materials with favorable thermal mass or light-dispersing properties, and designing spaces that naturally circulate air.
                        </p>
	                </div>
	                <div class="col-md-6">
	                   <img src="/public/img/Solar-Power-Plant-ON-Grid-Off-Grid.png">
	                </div>
				</div>-->
			</div>
		</div>
        
        
        
		<div class="our-expertist" id="our_project">
			<div class="container">
				<div class="section-head">
					<div class="row text-center">
						<div class="col-md-12">
							<h4><?=$cnt->val['our_project']?></h4>
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
	                <div class="col-md-6">
                        <h5>Project Title Name</h5>
	                     <p>
                         <br>
	                     About our projects text about our projects text. about our projects text about our projects text about our projects text about our projects text
	                     <br><br>
	                     About our projects text about our projects text about our projects text about our projects text about our projects text about our projects text about our projects text about our projects text about our projects text about our projects text about our projects text about our projects text
                         <br>
                         <br>
                          about our projects text about our projects text about our projects text about our projects text about our projects text about our projects text about our projects text about our projects text about our projects text about our projects text.
                         <br>
                         <br>
                         About our projects text about our projects text about our projects text about our projects text.
                        </p>
	                </div>
	                <div class="col-md-6">
	                   <img src="/public/img/project.jpg">
	                </div>
				</div>
			</div>
		</div>
		
		
		
		<div class="our-expertist grey-bg" id="white_energy">
			<div class="container">
				<div class="section-head">
					<div class="row text-center">
						<div class="col-md-12">
							<h4><?=$cnt->val['about_energy']?></h4>
							<p><?=$cnt->val['About renewable energy in Armenia']?></p>
						</div>
					</div>
				</div>
				<div class="row">
	                <div class="col-md-6">
	                   <img src="/public/img/home02.png">
	                </div>
	                <div class="col-md-6">
	                     <p>
	                     Renewable energy is energy that is collected from renewable resources, which are naturally replenished on a human timescale, such as sunlight, wind, rain, tides, waves, and geothermal heat.
                        <br>Renewable energy often provides energy in four important areas: electricity generation, air and water heating/cooling, transportation, and rural (off-grid) energy services.
                        <br><br>
                        Based on REN21's 2016 report, renewables contributed 19.2% to humans' global energy consumption and 23.7% to their generation of electricity in 2014 and 2015, respectively. This energy consumption is divided as 8.9% coming from traditional biomass, 4.2% as heat energy (modern biomass, geothermal and solar heat), 3.9% hydro electricity and 2.2% is electricity from wind, solar, geothermal, and biomass. Worldwide investments in renewable technologies amounted to more than US$286 billion in 2015, with countries like China and the United States heavily investing in wind, hydro, solar and biofuels.[4] Globally, there are an estimated 7.7 million jobs associated with the renewable energy industries, with solar photovoltaics being the largest renewable employer.
                        <br><br>
                        As of 2015 worldwide, more than half of all new electricity capacity installed was renewable.
                        </p>
	                </div>
				</div>
			</div>
		</div>
		
	
	
		<div class="our-expertist" id="inv_project">
			<div class="container">
				<div class="section-head">
					<div class="row text-center">
						<div class="col-md-12">
							<h4><?=$cnt->val['inv_project']?></h4>
							<p></p>
						</div>
					</div>
				</div><!-- /.section-head -->
				<div class="row">
                  <div class="col-md-6">
	                  <p class="investment for-480-center">
                      <h5>Project Title Name</h5>
                      <br>Text for investment projects text for investment projects  text for investment projects  text for investment projects text for investment projects  text for investment projects  text for investment projects  text for investment projects.
                           <br><br>
                           Text for investment projects  text for investment projects text for investment projects  text for investment projects  text for investment projects  text for investment projects text for investment projects. 
                      </p>
	                </div>
	                <div class="col-md-6 text-center">
	                     <img src="/public/img/investing.png">
	                </div>
				</div>
			</div>
		</div><!-- /.our-expertist -->
        
        <div class="our-expertist" id="map"></div>   
		
		<div class="our-expertist" id="contact">
			<div class="container">
			<div class="section-head">
					<div class="row text-center">
						<div class="col-md-12">
							<h4><?=$cnt->val['contact']?></h4>
							<p>We are always happy to help</p>
						</div>
					</div>
				</div>
				<div class="row">
                <form>
				    <div class="col-md-6">
				        <div class="form-group">
                            <label><?=$cnt->val['name']?></label><br><br>
                            <input type="email" name="#" class="form-control">
                      </div>
                      <div class="form-group">
                            <label><?=$cnt->val['email']?></label><br><br>
                            <input type="email" name="#" class="form-control">
                      </div>
                      <div class="form-group">
                            <label><?=$cnt->val['subject']?></label><br><br>
                            <input type="email" name="#" class="form-control">
                      </div>
				    </div>
				    <div class="col-md-6">
				        <div class="form-group">
                        <label><?=$cnt->val['message']?></label><br><br>
                        <textarea class="form-control" name="#" rows="3" style="min-height:190px"></textarea>
                      </div>
                      <button type="button" class="btn btn-success"><?=$cnt->val['send']?></button>
				    </div>
				    </form>
				</div>
			</div>
		</div><!-- /.our-expertist -->
		
		<div class="footer-section">
			<div class="overlay darkest">
				<div class="container">
					<div class="footer-top">
						<div class="row">
							<div class="col-md-4">
								<div class="about-widget footer-widget">
									<img src="/public/img/logo-dark.png" alt="logo" />
									<p style="max-width:420px;">
                                        Address: 4/6 Amiryan St, Yerevan, Armenia<br>
                                        Tel.: (+374 60) 60-12-34
                                    </p>
								</div>
							</div><!-- /.col -->
							<div class="col-md-5">
								<div class="row">
									<div class="col-sm-12">
										<div class="links-widget footer-widget">
											<h6>Site map</h6>
											<ul class="link-list clearfix">
                                                <li><a href="#about" class="scroll"><?=$cnt->val['about_us']?></a></li>
                                                <li><a href="#service" class="scroll"><?=$cnt->val['service']?></a></li>
                                                <li><a href="#our_project" class="scroll"><?=$cnt->val['our_project']?></a></li>
                                                <li><a href="#white_energy" class="scroll"><?=$cnt->val['about_energy']?></a></li>
                                                <li><a href="#inv_project" class="scroll"><?=$cnt->val['inv_project']?></a></li>
                                                <li><a href="#contact" class="scroll"><?=$cnt->val['contact']?></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.row -->
							</div><!-- /.col -->
							<div class="col-md-3">
								<div class="subscribe-widget footer-widget">
									<h6>Subscribe</h6>
									<p style="padding:0 0 15px;"></p>
									<form action="http://themebeer.com/html/mega/demos/energy/action.php">
										<input type="text" placeholder="Your email" />
										<input type="submit" value="submit" class="button alt"/>
									</form>
								</div>
							</div><!-- /.col -->
						</div>
					</div><!-- /.footer-top -->
					<div class="footer-bottom">
						<div class="row">
							<div class="col-sm-6 mobile-center">
								<ul class="footer-nav">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Linkedin</a></li>
									<li><a href="#">Google+</a></li>
								</ul>
							</div>
							<div class="col-sm-6 text-right mobile-center">
								<div class="footer-credit">
									<p>Copyright &copy; 2018 by <a href="https://smartcode.am/" target="_blank"><img src="https://smartcode.am/public/img/logo-orange-dark.png" height="16"></a></p>
								</div>
							</div>
						</div>
					</div><!-- /.footer-bottom -->
				</div>
			</div>
		</div><!-- /.footer-section -->

		
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		
		<script src="/public/js/jquery.js"></script>
		<script src="/public/assets/js/bootstrap.min.js"></script>
		
		<!-- Select2
		================================================== -->
		<script src="/public/lib/select2/dist/js/select2.min.js"></script>
		
		<!-- jQuery BxSlider
		================================================== -->
		<script src="/public/lib/BxSlider/jquery.bxslider.min.js"></script>
		
		<!-- jQuery slick
		================================================== -->
		<script src="/public/lib/slick/slick.min.js"></script>
		
		<!-- jQuery appear
		================================================== -->
		<script src="/public/lib/jquery.countTo/jquery.countTo.js"></script>
		<script src="/public/lib/jquery.appear/jquery.appear.js"></script>
		
		<!-- jQuery Custom
		================================================== -->
		<script src="/public/js/custom.js?v=1.1" type="text/javascript"></script>
        
        <script>
        $(function(){ 
            $(window).on("scroll load resize", function (e){
                if($(window).scrollTop() <= $(".navbar").height() + 50){
                   $(".navbar").css("position", "absolute");
                }else{
                   
                    $(".navbar").css("position", "fixed");
                }
            });
        });
        </script>
        
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyBAWLif2-bXLYJvY7HuNtVJs9UAWj11I1c"></script>
        <script src="/public/js/map.js?v=1" type="text/javascript"></script>
        <style>#map{height: 400px;position: relative;}</style> 
        
        <script type='text/javascript'>
        $(".scroll").on('click', function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top-85}, 1000);
        });
            

        $(function(){ 
            $(window).on("scroll load resize", function (e){
                $(".navbar-nav li").each(function(){
                    var box = $(this).find("a").attr("href");
                    if($(window).scrollTop() >= $(box).offset().top-85){
                        $(".navbar-nav li").removeClass("active");
                        $(this).addClass("active");
                    }
                });
            });
        });
        </script>
		
	</body>
</html>
