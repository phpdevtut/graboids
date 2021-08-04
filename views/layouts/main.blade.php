<!doctype html>
<html>
    <head>
        <link href="/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <img id="logo" src="/assets/images/logo.png"/>
                <div id="menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/news.php">News</a></li>
                        <li><a href="/upload.php">Upload</a></li>
                        <li><a href="/about.php">About</a></li>
                        <li><a href="/contact.php">Contact</a></li>

                    </ul>
                </div>
            </div>
            <div class="alert"><p style="color:red">Graboid alert!!!</p></div>
            <div id="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>