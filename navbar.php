<!DOCTYPE html>
<html>
    <head>
    	<title></title>
        <link rel="stylesheet" type="text/css" href="http://localhost/diagno/bootstrap/dist/css/bootstrap.css">
    	<style type="text/css">
           body {
                margin: 0%;
            }
            .navbar {
                background-color: black;
                margin: 0%;
                box-sizing: border-box;
                /*padding: 0 22px;*/
                top:0;
                position: sticky
            }
            .navbaritem {
                display: flex;
                flex-wrap: wrap;
                list-style-type: none;
                margin: 0px;
                padding: 0%;
                justify-content: space-between;
            }
            .navbartabs>a {
                color: white;
                text-decoration: none;
                font-family: "SF Pro Text", "Myriad Set Pro", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
                font-weight: 400;
                font-size: 20px;
                filter: opacity(.8);
                transition: 400ms;
            }
            .navbartabs {
                padding: 10px 50px;
                line-height: 14px;
                letter-spacing: normal;
            }
            .navbarlogo {
                filter: brightness(0) invert(1);
            }
            #applelogo {
                font-size: 20px;
            }
            #searchlogo {
                font-size: 16px;
            }
           #shoppinglogo {
                font-size: 16px;
            }
            .navbartabs :hover {
                filter: opacity(100%);
                transition: 400ms;
            }
            .contenta {
                display: flex;
                background-color: #f5f5f7;
                padding: 10px 22px;
                text-align: center;
            }   		
    	</style>
    </head>
    <body>
        <title>DiagnoCare</title>       
        <header class="navbar">
                <ul class="navbaritem">                
                    <li class="navbartabs"><a href="">Home <?php  if ($this->uri->segment(2)=="logincheck" || $this->uri->segment(2)!="") {
                        echo $id;
                    }  ?></a></li>
                    <li class="navbartabs"><a href="">Book for Service</a></li>
                    <li class="navbartabs"><a href="">About</a></li>
                    <li class="navbartabs"><a href="">Support</a></li>
                </ul>
                <ul style="float:right">
                	<li class="navbartabs"><a href="">SignIn</a></li>
                </ul>
        </header>
        <br>       
    </body>
</html>