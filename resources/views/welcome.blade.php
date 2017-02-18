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
</head>
<body>
    <div id="app">
        <example></example>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>