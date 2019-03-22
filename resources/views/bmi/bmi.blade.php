<!doctype html>
<html lang='en'>
<head>
    <title>{{ $title }}</title>
    <meta charset='utf-8'>
    <link href='/css/bmi.css' type='text/css' rel='stylesheet'>
</head>
<body>

    <header>
        <a href='/'><img src='/images/foobooks-logo@2x.png' id='logo' alt='Foobooks Logo'></a>
    </header>

    <section>
        <h2>{{ $title }}</h2>
        
        <p>
            Details about this book will go here...
        </p>
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

</body>
</html>
