<html>
<title>FastBoard</title>
<body>

<?php

function random_bg() {
    return strtoupper(dechex(rand(0,10000000)));
}

?>

<body style="background-color: #<?php echo random_bg();?>">

<center> <h1>FastBoard</h1>
<?php
echo date("Y");
?>
<p> </p>
<?php

$messages = array(

    'MrCodeInc for president of the internet!',
    'Follow me on github.',
    'Gotta go fast......board.',
    'Gangsta PHP skillz.',
    'Built on heroku!',
    'Swag.'
);

echo $messages[rand(0, count($messages) - 1)];
?>
<p> </p>
<center> <a href="https://google.com/">Google</a>
<p> </p>
<center> <a href="https://github.com/">Github</a>
<p> </p>
<center> <a href="https://youtube.com/">YouTube</a>
<p> </p>
<center> <a href="https://twitter.com/">Twitter</a>
<p> </p>
<center> <a href="https://facebook.com/">Facebook</a>
<p> </p>
Created by <a href="https://github.com/MrCodeInc/">MrCodeInc.</a>
You can view the source code <a href="https://github.com/MrCodeInc/FastBoard/">here.</a>
</body>
