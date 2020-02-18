<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Web Software
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{$routeVar['name'] == "search" ? "active" : ""}}  ">
                <a class="nav-link" href="/">
                    <i class="material-icons">dashboard</i>
                    <p>Search</p>
                </a>
            </li>
            <li class="nav-item  {{$routeVar['name'] == "dvla" ? "active" : ""}} ">
                <a class="nav-link" href="/dvla">
                    <i class="material-icons">person</i>
                    <p>DVLA DB</p>
                </a>
            </li>
            <li class="nav-item  {{$routeVar['name'] == "nhia" ? "active" : ""}}">
                <a class="nav-link" href="/nhia">
                    <i class="material-icons">content_paste</i>
                    <p>NHIA DB</p>
                </a>
            </li>
            <li class="nav-item  {{$routeVar['name'] == "gis" ? "active" : ""}}">
                <a class="nav-link" href="/gis">
                    <i class="material-icons">library_books</i>
                    <p>GIS DB</p>
                </a>
            </li>
            <li class="nav-item  {{$routeVar['name'] == "ec" ? "active" : ""}}">
                <a class="nav-link" href="/ec">
                    <i class="material-icons">bubble_chart</i>
                    <p>EC DB</p>
                </a>
            </li>
        </ul>
    </div>
</div>
   