<html>
<head>
    <title> generic/index.php</title>
</head>
<body>
<?php
include  dirname(__DIR__).'/../../app/views/layouts/default.php';
echo "<br><br>";
echo $this->folder_name .' Module' ?>:<br>
<a href="http://localhost/training/public/<?php echo $this->folder_name ?>/add">Add a <?php echo $this->folder_name ?></a><br>
<a href="http://localhost/training/public/<?php echo $this->folder_name ?>/listdown">View <?php echo $this->folder_name.'s' ?></a><br><br>
</body>
</html>
