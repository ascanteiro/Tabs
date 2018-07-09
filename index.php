<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tabs</title> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet"> 

    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
    
    <div class="col-xs-12">          

        <!--container-->
        <div class="container"> 

            <div class="col-xs-12 box_tabs">

                <div class="col-xs-12 tabs">
                    <a href="javascript:" onclick="tab(1, $(this))" class="tab active">Car</a><!--active-->
                    <a href="javascript:" onclick="tab(2, $(this))" class="tab">Truck</a>
                    <a href="javascript:" onclick="tab(3, $(this))" class="tab">Air</a>
                    <a href="javascript:" onclick="tab(4, $(this))" class="tab">Motorcycle</a>
                </div>

                <a href="javascript:" class="tabs_mobile active" onclick="tab(1, $(this))"><!--active --> 
                    Car
                    <img src="images/img_arrow_up.png" class="img_arrow img_up"> 
                    <img src="images/img_arrow_down.png" class="img_arrow img_down"> 
                </a>
                <div class="col-xs-12 item_tab active" id="item_1">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div><!--active-->

                

                <a href="javascript:" class="tabs_mobile" onclick="tab(2, $(this))"><!--active --> 
                    Trucks
                    <img src="images/img_arrow_up.png" class="img_arrow img_up"> 
                    <img src="images/img_arrow_down.png" class="img_arrow img_down"> 
                </a>
                <div class="col-xs-12 item_tab" id="item_2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>


                <a href="javascript:" class="tabs_mobile" onclick="tab(3, $(this))"><!--active --> 
                    Air
                    <img src="images/img_arrow_up.png" class="img_arrow img_up"> 
                    <img src="images/img_arrow_down.png" class="img_arrow img_down"> 
                </a>
                <div class="col-xs-12 item_tab" id="item_3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>



                <a href="javascript:" class="tabs_mobile" onclick="tab(4, $(this))"><!--active --> 
                    Motorcycle
                    <img src="images/img_arrow_up.png" class="img_arrow img_up"> 
                    <img src="images/img_arrow_down.png" class="img_arrow img_down"> 
                </a>
                <div class="col-xs-12 item_tab" id="item_4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>

            </div>

        </div>
        <!--container-->
        

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!--JS files-->
    <script src="js/main.js"></script>

</body>
</html>