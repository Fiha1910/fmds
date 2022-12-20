<header id="header" id="home">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
				  				<ul>
				  					<li>
				  						Mon-Fri: 8am to 2pm
				  					</li>
				  					<li>
				  						Sat-Sun: 11am to 4pm
				  					</li>
				  					<li>
				  						<a href="tel:(012) 6985 236 7512">(012) 6985 236 7512</a>
				  					</li>				  					
				  				</ul>
				  			</div>
				  		</div>			  					
		  			</div>
				</div>			  	
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href=""><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active btn btn-primar"><a href="#home"></a></li>
				          <li><a href="#about" class="btn btn-primary">About</a></li>
				          <li><a href="#branch" class="btn btn-primary">Branch</a></li>
				          <li><a href="{{route('ViewDemand')}}" class="btn btn-primary">Demand</a></li>

						  @auth
						  <a class="nav-item nav-link">
{{--                                   <img src="" alt="image">--}}
                                   {{auth()->user()->name}}</a>
                                <a href="{{route('user.logout')}}" class="nav-item nav-link btn btn-danger" >Logout</a>
                            @else

						  <li><a href="" data-toggle="modal" data-target="#registration"  class="btn btn-primary">Registration</a></li>

						  <li><a href="" data-toggle="modal" data-target="#login" class="btn btn-primary">login</a></li>
						  @endauth
						 
				          <li class="menu-has-children"><a href="{{route('category.list')}}" class="btn btn-primary" >Category</a>

						  <div class="dropdown">
  

  
</div>
						  
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header>