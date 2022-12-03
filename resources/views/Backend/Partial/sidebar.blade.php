<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <a class="nav-link" href="{{route('branches.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Branch
            </a>

            <a class="nav-link" href="{{route('categories.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Category
            </a>

            <a class="nav-link" href="{{route('product.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Product
            </a>
            

            <a class="nav-link" href="{{route('stocks.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Stock
            </a>
            
            <a class="nav-link" href="{{route('demand.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Demand
            </a>
            
            
            <a class="nav-link" href="{{route('distributions.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Distribution
            </a>
            
            <a class="nav-link" href="{{route('reports.list')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Report
            </a>

            
            

            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                </nav>
            </div>
        </div>
    </div>
    </nav>