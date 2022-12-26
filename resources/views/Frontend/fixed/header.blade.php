<header id="header" id="home">
							  	
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href=""><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active btn btn-primar"><a href="#home"></a></li>
				          <li><a href="#about"></a></li>
				          <li><a href="#branch" class="btn btn-primary">Branch</a></li>
				          <li><a href="{{route('ViewDemand')}}" class="btn btn-primary">Demand</a></li>

						  @auth
						  <a href="{{route('profile')}}" class=" mx-2 btn btn-primary">
{{--                                   <img src="" alt="image">--}}
                                   {{auth()->user()->name}}</a>
                                <a href="{{route('user.logout')}}" class="nav-item nav-link btn btn-danger" >Logout</a>
                            @else

						  <li><a href="" data-toggle="modal" data-target="#registration"  class="btn btn-primary">Registration</a></li>

						  <li><a href="" data-toggle="modal" data-target="#login" class="btn btn-primary">login</a></li>
						  @endauth
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header>