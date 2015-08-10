<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    </head>
    <body>
        <header>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </header>
        <div class="container">
            <h1>Delivery options</h1>
            <div class="content">
                <div class="method">
                    <div class="title">
                        <p>Delivery Method 0</p>
                    </div>
                    <div class="value">
                        <input id="dm0" type="number" step="any"/>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
