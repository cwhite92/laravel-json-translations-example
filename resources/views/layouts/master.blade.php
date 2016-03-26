<html>
    <head>
        <title>JSON translations example</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <style>
            .locale-selection {
                list-style-type: none;
                padding: 0;
                text-align: right;
            }

            .locale-selection li {
                display: inline;
                margin: 0px 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <ul class="locale-selection">
                <li><a href="{{ route('locale.update', 'en') }}">English</a></li>
                <li><a href="{{ route('locale.update', 'fr') }}">French</a></li>
                <li><a href="{{ route('locale.update', 'de') }}">German</a></li>
            </ul>

            @yield('content')
        </div>
    </body>
</html>