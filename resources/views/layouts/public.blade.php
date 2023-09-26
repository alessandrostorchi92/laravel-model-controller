
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Oggi facciamo la nostra prima vera interazione con il database utilizzando l'ORM di Laravel.">

    <title> Laravel-Model-Controller</title>

    {{-- Questa riga di codice serve per caricare il scss e js --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body>

    <main>

        @yield("content")

    </main>

</body>

</html>
