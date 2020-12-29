<html>

<head>
    <title>Demo</title>
</head>

<body>

    <?php $this->renderSection('sidebar'); ?>

    <br>

    <?php $this->renderSection('content'); ?>

    <br>
    <?php

$url = 'https://www.google.com/';
$not_url = 'stp://google.com';

if (@file_get_contents($url)): echo "Found '$url'!";
else: echo "Can't find '$url'.";
endif;
if (@file_get_contents($not_url)): echo "Found '$not_url!";
else: echo "Can't find '$not_url'.";
endif;
?>
</body>

</html>