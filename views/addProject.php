<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
        integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Add Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <h1>Add Project</h1>
        <form action="/project/add" method="post">
            <label for="">Title:</label>
            <input type="text" name="title"/><br/>
            <label for="">Description:</label>
            <input type="text" name="description"/><br/>
            <button type="submit">Save</button>
        </form>
</body>
</html>