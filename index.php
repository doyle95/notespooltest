<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style/core.css">
    <link rel="stylesheet" href="style/main.css">

</head>
<body>
<!--Header-->
<div class="wrapper">
    <div class="ncss-row-padding">
        <div class="ncss-col ncss-container m6">
            <p id="logo"><a href="index.html">notes<span>pool</span></a></p>
        </div>
        <div class="ncss-col ncss-container m6 search-custom">
            <div class="ncss-col s6"><input type="text" class="ncss-input search-custom-input"
                                            placeholder="Search Input"></div>
            <div class="ncss-col s6" style="text-align: left">
                <button type="button" class="ncss-btn search-custom-button">Search</button>
            </div>


        </div>
    </div>
    <div class="ncss-row">
        <nav>
            <label for="drop" class="toggle menu-heading">&#9776; Menu</label>
            <input type="checkbox" id="drop"/>
            <ul class="menu">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">Resources</label>
                    <a href="#">Resources</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="IFB101.html">IFB101</a></li>
                        <li><a href="IFB101.html">IFB102</a></li>
                        <li><a href="IFB101.html">IFB103</a></li>
                        <li><a href="IFB101.html">IFB130/IAB130</a></li>
                    </ul>

                </li>
                <li><a href="guide.html">Guide</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="login.html">Login</a></li>

            </ul>
        </nav>
    </div>
    <!--End Header-->
    <!--Body-->
    <div class="ncss-row">

        <div class="ncss-col l6 m12 offset-l3">
            <div class="login-form">
                <div class="ncss-container">
                    <h5 class="text-center ncss-border-bottom ncss-text-primary">Login</h5>
                </div>
                <div class="ncss-container" action="/action_page.php">
                  <form action='logincheck.php' id='login' method='POST' name="login">
                    <div class="ncss-row-padding">
                        <div class="ncss-col l2 m2">
                            <label class="ncss-control-label" for="email">Email</label>
                        </div>
                        <div class="ncss-col l8 m8 ncss-margin-bottom">
                            <input class="ncss-input" name="email" id="email" type="text" placeholder="Email">
                        </div>
                    </div>
                    <div class="ncss-row-padding">
                        <div class="ncss-col l2 m2">
                            <label class="ncss-control-label" for="password">Password</label>
                        </div>
                        <div class="ncss-col l8 m8">
                            <input class="ncss-input ncss-margin-bottom" name="password" id="password" type="text" placeholder="Password">
                        </div>
                    </div>
                    <div class="ncss-row-padding">
                        <div class="ncss-col l8 m8 offset-l2 offset-m2">
                            <p class="ncss-pull-left">
                                <input class="ncss-check" type="checkbox" checked="checked">
                                <label>Remember Me</label>
                            </p>

                        </div>
                    </div>

                    <div class="ncss-row-padding">
                        <div class="ncss-col l8 offset-l2 offset-m2">
                            <input name="Submit" type="submit" class="ncss-btn ncss-blue ncss-btn-mobile ncss-pull-left" value="Signin">
                        </div>
                    </div>


                  </form>
                </div>
            </div>

        </div>


    </div>
    <!--End Body-->
    <!--Footer-->
    <div class="ncss-row ncss-margin-zero">
        <div class="ncss-col m12 footer">
            <img src="img/seperator.png">
        </div>
    </div>
    <div class="ncss-row ncss-margin-zero">
        <div class="ncss-col m12 ">
            <p class="text-center ncss-margin-zero">Email: TEAM48.com.au</p>
            <p class="text-center ncss-margin-zero">copyright &copy; 2017 TEAM48 <span> Terms & Policies</span></p>
        </div>
    </div>

    <div class="ncss-row">
        <div class="ncss-col m12 footer ncss-margin-zero">
            <img src="img/seperator.png">
        </div>
    </div>
    <!--End Footer-->


</div>
</body>
</html>
