<html>
<title>FastBoard</title>
<body>
<center> <h1>FastBoard</h1>
<?php
echo date("Y");
echo ;
$messages = array(
    'The best of best PHP skillz.',
    'Follow me on github.',
    'Chillin like a villains.'
);

echo $messages[rand(0, count($messages) - 1)];
?>
<p> </p>
<center> <a href="https://github.com/">Github</a>
<p> </p>
<center> <a href="https://google.com/">Google</a>
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
