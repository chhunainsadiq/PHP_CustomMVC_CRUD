<?php
include dirname(__DIR__).'/../../app/views/layouts/default.php';
?>
<html>
<head>
    <title> delete.php</title>
    <h2>Course information | Delete</h2>
</head>
<body>
<form action="/training/public/course/deleteRecord/<?php echo $this->view_data->get_CID() ?>" method="post">
    First Name: <input readonly  name="cName" value="<?php echo $this->view_data->get_cName() ?>"></input> <br>
    Last Name:<input readonly  name="cCode" value="<?php echo $this->view_data->get_cCode() ?>"></input><br>
    <input type="submit" value="Delete Course">
</form>
</body>
</html>
