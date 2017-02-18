<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Screencast</title>
    <script>
        window.Laravel = <?php echo json_encode([
             'csrfToken' => csrf_token(),
         ]); ?>
    </script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app" class="container">
        <h1>Melhoremos um pouco essa porcaria!</h1>
        <example></example>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>