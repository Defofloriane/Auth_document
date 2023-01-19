<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle">
                <div class="container" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

            </i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->
        <link rel="stylesheet" href="css/home.css">

    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="{{route('welcome')}}" class="nav_logo active"> <i class='bx bx-layer nav_logo-icon'></i>
                        <span
                            class="nav_logo-name">Scanner Qrcode
                        </span>
                  </a>
                <div class="nav_list">
                         <a href="#" class="nav_link ">
                                <i class='bx bx-grid-alt nav_icon'></i> 
                                <span class="nav_name">Dashboard</span>
                            </a>
                    <a href="{{route('mapping')}}" class="nav_link">
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Releve1</span>
                       
                        </a> 
                        <a href="{{route('mapping1')}}" class="nav_link"> 
                            <i class='bx bx-message-square-detail nav_icon'></i>
                            <span class="nav_name">Releve2</span>
                        </a>
                        <a href="{{route('mapping3')}}" class="nav_link"> 
                            <i class='bx bx-bookmark nav_icon'></i>
                            <span class="nav_name">Releve3</span>
                            </a> <a href="#" class="nav_link"> 
                                <i class='bx bx-folder nav_icon'></i> 
                                {{-- <span class="nav_name">Files</span> --}}
                            </a> 
                            <a href="#" class="nav_link"> 
                                <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                                {{-- <span class="nav_name">Stats</span> --}}
                    </a>
                 </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    {{-- <div class="height-100 bg-light">
        <h4>Main Components</h4>
    </div> --}}
   <h4>mon code page 1</h4>
   @include ('Home.releve1');
    <!--Container Main end-->
    <script type="text/javascript" src="js/home.js"></script>
    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>
</body>
