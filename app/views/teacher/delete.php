<?php
include dirname(__DIR__).'/../../app/views/layouts/default.php';
?>
<html>
<head>
    <title> delete.php</title>
    <h2>Teacher information | Delete</h2>
</head>
<body>
<form action="/training/public/teacher/deleteRecord/<?php echo $this->view_data->get_TID() ?>" method="post">
    First Name: <input readonly  name="fName" value="<?php echo $this->view_data->get_fName() ?>"></input> <br>
    Last Name:<input readonly  name="lName" value="<?php echo $this->view_data->get_lName() ?>"></input><br>
    <input type="submit" value="Delete Teacher">
</form>
</body>
</html>
