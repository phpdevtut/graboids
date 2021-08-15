<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link href="/style.css?version=111" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="wrapper" class="container">
            <div id="header">
                <img id="logo" src="/assets/images/logo.png"/>
                <div id="menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/news.php">News</a></li>
                        <li><a href="/hunters.php">Hunters</a></li>
                        <li><a href="/upload.php">Upload</a></li>
                        <li><a href="/about.php">About</a></li>
                        <li><a href="/contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="alert"><p style="color:red">Graboid alert!!!</p></div>
            <div id="content">
            {{--            content.blade.php searches for this, and replaces it with divs inside file.--}}

            <!--
                 Here we had %content% as a pointer on where we want to embed a view
                 -->
                @yield('content')
            </div>
        </div>
    </body>
</html>