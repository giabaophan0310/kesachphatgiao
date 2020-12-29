<html>

<head>
    <title>Demo</title>

    <?= (! @(file_get_contents('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css')))
            ? '<link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">'
            : '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
                    rel="stylesheet" 
                    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
                    crossorigin="anonymous">';
    ?>

</head>

<body>

    <?php $this->renderSection('sidebar'); ?>

    <br>

    <?php $this->renderSection('content'); ?>

    <br>


</body>

</html>