<style>

/* drop down */
.dropbtn {
  /* background-color: #146bb5; */
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f26936;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #146bb5;color: #f26936;}
/* drop down */

.dropdown-submenu{
    position: absolute;
    display: inline-block;
    margin-left: 100px;
}

drob-btn{
    background-color: #146bb5;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

dropdown-contents{
    display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-contents a:hover {background-color: #f26936;}

.dropdown-submenu:hover .dropdown-contents {display: block;}

.dropdown-submenu:hover .drob-btn {background-color: #3e8e41;}
</style>
<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="assets/images/logo2.png" alt=""></a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown" id="dropdown">
                            <a class="nav-link dropbtn" href="#">Company</a>
                            <div class="dropdown-content">
                                <a href="about.php">About Us</a>
                                <!-- <a href="#" class="dropdown-submenu" id="dropdownShow"> -->
                                    <a href="" class="drob-btn">How We Work</a>
                                    <div style="display: none; margin-left:147px;margin-top:-20px;background:#f1f1f1;width:160px" id="sub-menu-ul">
                                        <ul>
                                            <li><a href="development.php">Development Process</a></li>
                                            <li><a href="quality-management.php">Quality Management System</a></li>
                                            <li><a href="delivery-model.php">Delivery Model</a></li>
                                            <li><a href="intellectual-property.php">Intelectual Property Protection</a></li>
                                        </ul>
                                    </div>
                                <!-- </a> -->
                                <a href="#" style="margin-top: -210%;">Help</a>
                                <a href="#">Blog</a>
                                <a href="contact.php">Contact Us</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Our Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link ropbtn" href="#">Products</a>
                            <div class="dropdown-content">
                                <a href="#">Norak ERP Software</a>
                                <a href="#">Accounting Software</a>
                                <a href="#">School Management Software</a>
                                <a href="#">PayRoll Software</a>
                                <a href="#">Inventory Management</a>
                                <a href="#">Law Management Software</a>
                                <a href="#">Church Management Software</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Training</a>
                        </li>
                        <!-- search button -->
                        <!-- <div class="search-right ml-lg-3">
                            <form action="#search" method="GET" class="search-box position-relative">
                                <div class="input-search">
                                    <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                        autofocus="" class="search-popup">
                                </div>
                                <button type="submit" class="btn search-btn"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div> -->
                        <!-- //search button -->
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->