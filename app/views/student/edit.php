<?php
require_once dirname(__DIR__).'/../../public/js/validateform.php';
include dirname(__DIR__).'/../../app/views/layouts/default.php';
?>
<html>
<head>
    <title> edit.php</title>
    <h2>Student information | Update</h2>
</head>
<body>
<form action="/training/public/student/addUpdates" method="post" name="myForm" onsubmit="return validateFormForStudent()">
    First Name: <input type="text" name="fName" value="<?php echo $this->view_data->get_fName() ?>"></input> <br>
    Last Name:<input type="text" name="lName" value="<?php echo $this->view_data->get_lName() ?>"></input><br>
    CGPA:<input type="number" step="0.01" name="CGPA" value="<?php echo $this->view_data->get_CGPA() ?>"></input><br>
    <input type="hidden" name="ID" value="<?php echo $this->view_data->get_SID() ?>"></input>
    <input type="submit" value="Save Student">
</form>
</body>
</html>
