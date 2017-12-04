<!DOCTYPE html>
<html>
    <head>
    	<title>PENSVENTORY : Home</title>

    	<!--bootstrap-->
        <link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

        <!--js-->
        <script src="<?php echo base_url('bootstrap/js/jquery-2.1.4.min.js'); ?>"></script>
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>

        <!--css ku-->
        <link href="<?php echo base_url('css/pensventory.css'); ?>" rel="stylesheet" type="text/css">

        <!--font awesome-->
        <link href="<?php echo base_url('bootstrap/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
        
        <!--icon-->
        <link href="<?php echo base_url('img/icon.ico'); ?>" rel="shortcut icon">
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    	<!--START NAVBAR FIXED TOP-->
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand page-scroll" href="home">
                            <i id="tblue" class="fa fa-inbox"></i> <span class="tblue">PENS</span><span class="twhite">VENTORY</span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="home" class="page-scroll"><i id="tblue" class="fa fa-home"></i>  HOME</a></li>
                            <li><a href="barang" class="page-scroll"><i id="tblue" class="fa fa-list"></i>  BARANG</a></li>
                            <li role="presentation" class="dropdown">
                            	<a id="navlog" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i id="tblue" class="fa fa-user"></i> <?php echo $username; ?></a>
                            	<ul id="menu" class="dropdown-menu">
                                    <li><a href="cloud" class="page-scroll padding2"><i id="tblue" class="fa fa-cloud"></i>  MY CLOUD</a></li>
                            		<li><a href="home/logout" class="page-scroll padding2"><i id="tblue" class="fa fa-sign-out"></i>  SIGN OUT</a></li>
                            	</ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <!-- END NAVBAR -->
        <form class="bungkus1">
        	<div class="container">
        		
        		<div class="row"><br /></div>
        		<div class="row">
        			<div class="col-md-9">
        				<div id="carousel-example-generic" class="carousel slide padding" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img class="box-pv" src="<?php echo base_url('img/bgpens2.jpg'); ?>">
						      <div class="carousel-caption">
						        ...
						      </div>
						    </div>
						    <div class="item">
						      <img class="box-pv" src="<?php echo base_url('img/bgpens3.jpg'); ?>">
						      <div class="carousel-caption">
						        ...
						      </div>
						    </div>
						    <div class="item">
						      <img class="box-pv" src="<?php echo base_url('img/bgpens4.jpg'); ?>">
						      <div class="carousel-caption">
						        ...
						      </div>
						    </div>
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
        			</div>
        			<!-- NEXT -->
        			<div id="newsticker" class="col-md-3">
        				<div class="row">
        					
        				</div>
        				<div class="row">
        					<ul id="header-news">
        						<li>
        							<span><i class="fa fa-newspaper-o"></i>  NEWS</span>
        						</li>
        					</ul>
        					<ul class="news box-pv padding">
	        					<li id="1" class="news-li">
									<img src="<?php echo base_url('img/news/n1.png'); ?>">
									<p>Ini adalah isi berita 1. Ini akan menghilang ketika di atas.</p>
								</li>
								<li id="2" class="news-li">
									<img src="<?php echo base_url('img/news/n1.png'); ?>">
									<p>Ini adalah isi berita 2.  Ini akan menghilang ketika di atas.</p>
								</li>
								<li id="3" class="news-li">
									<img src="<?php echo base_url('img/news/n1.png'); ?>">
									<p>Ini adalah isi berita 3.  Ini akan menghilang ketika di atas.</p>
								</li>
								<li class="news-li">
									<img src="<?php echo base_url('img/news/n1.png'); ?>">
									<p>Ini adalah isi berita 4. Ini akan menghilang ketika di atas.</p>
								</li>
								<li class="news-li">
									<img src="<?php echo base_url('img/news/n1.png'); ?>">
									<p>Ini adalah isi berita 5.  Ini akan menghilang ketika di atas.</p>
								</li>
								<li class="news-li">
									<img src="<?php echo base_url('img/news/n1.png'); ?>">
									<p>Ini adalah isi berita 6.  Ini akan menghilang ketika di atas.</p>
								</li>
                                <li class="news-li">
									<img src="<?php echo base_url('img/news/n1.png'); ?>">
									<p>Ini adalah isi berita 7.  Ini akan menghilang ketika di atas.</p>
								</li>
                                <li class="news-li">
									<img src="<?php echo base_url('img/news/n1.png'); ?>">
									<p>Ini adalah isi berita 8.  Ini akan menghilang ketika di atas.</p>
								</li>
                                <li class="news-li">
									<img src="<?php echo base_url('img/news/n1.png'); ?>">
									<p>Ini adalah isi berita 9.  Ini akan menghilang ketika di atas.</p>
								</li>
                                <li class="news-li">
									<img src="<?php echo base_url('img/news/n1.png'); ?>">
									<p>Ini adalah isi berita 10.  Ini akan menghilang ketika di atas.</p>
								</li>
                                <li class="news-li">
									<img src="<?php echo base_url('img/news/n1.png'); ?>">
									<p>Ini adalah isi berita 11.  Ini akan menghilang ketika di atas.</p>
								</li>
	        				</ul>
        				</div>
        			</div>
        		</div>
        	</div>
        </form>
    </body>
</html>