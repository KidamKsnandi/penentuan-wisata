<!doctype html>
<!-- Css -->
	<link rel="stylesheet" href="front/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="front/css/owl.carousel.css">
	<link rel="stylesheet" href="front/css/owl.theme.css">
	<link rel="stylesheet" href="front/css/bootstrap.min.css">
	<link rel="stylesheet" href="front/css/font-awesome.min.css">
	<link rel="stylesheet" href="front/css/style.css">
	<link rel="stylesheet" href="front/css/responsive.css">

	<!-- jS -->
	<script src="front/js/jquery.min.js" type="text/javascript"></script>
	<script src="front/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="front/js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="front/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="front/js/jquery.nicescroll.js"></script>
	<script src="front/js/jquery.scrollUp.min.js"></script>
	<script src="front/js/main.js" type="text/javascript"></script>

<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				</div>
				<div class="col-md-2">
					<div class="search-box">
						<div class="input-group">
					    	<input placeholder="Search Here" type="text" class="form-control">
					      	<span class="input-group-btn">
					        	<button class="btn btn-default" type="button"></button>
					      	</span>
					    </div><!-- /.input-group -->
					</div><!-- /.search-box -->
				</div>
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						<li>
							<div class="cart dropdown">
						  		<a data-toggle="dropdown" href="#"><i class="fa fa-shopping-cart"></i>Cart(1)</a>
					  			<div class="dropdown-menu dropup">
					  				<span class="caret"></span>
						  			<ul class="media-list">
								  		<li class="media">
										    <img class="pull-left" src="front/images/product-item.jpg" alt="">
										    <div class="media-body">
										      	<h6>Italian Sauce
								    				<span>$250</span>
								    			</h6>
								    		</div>
								  		</li>
									</ul>
									<button class="btn btn-primary btn-sm">Checkout</button>
							    </div>
							</div>
						</li>
						<li>
							<a data-toggle="modal" data-target="#myModal" href="#">
							<i class="fa fa-user"></i>
								Login
							</a>
						</li>
					</ul>
				</div>
			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->


	<!-- MODAL Start
    	================================================== -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Introduce Yourself</h4>
		      		</div>
			      	<div class="modal-body clearfix">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
			      		<div class="form-group mt-3">
			      			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      			<label class="form-control-placeholder" for="email">Email</label>
			      		</div>
		            <div class="form-group">
		              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
		            </div>
		          </form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      	</div>
		    	</div>
		  	</div>
		</div>
	</section>
