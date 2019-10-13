<?php
require_once dirname(__DIR__).'/../../public/js/validateform.php';
include dirname(__DIR__).'/../../app/views/layouts/default.php';
?>
<html>
<head>
    <title> edit.php</title>
    <h2>Teacher information | Update</h2>
</head>
<body>
<form action="/training/public/teacher/addUpdates" method="post" name="myForm" onsubmit="return validateFormForTeacher()">
    First Name: <input type="text" name="fName" value="<?php echo $this->view_data->get_fName() ?>"></input> <br>
    Last Name:<input type="text" name="lName" value="<?php echo $this->view_data->get_lName() ?>"></input><br>
    <input type="hidden" name="ID" value="<?php echo $this->view_data->get_TID() ?>"></input>
    <input type="submit" value="Save Teacher">
</form>
</body>
</html>
