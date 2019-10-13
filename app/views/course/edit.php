<?php
require_once dirname(__DIR__).'/../../public/js/validateform.php';
include dirname(__DIR__).'/../../app/views/layouts/default.php';
?>
<html>
<head>
    <title> edit.php</title>
    <h2>Course info | Update</h2>
</head>
<body>
<form action="/training/public/course/addUpdates" method="post" name="myForm" onsubmit="return validateFormForCourse()">
    Course Name: <input type="text" name="cName" value="<?php echo $this->view_data->get_cName() ?>"></input> <br>
    Course Code:<input type="number" name="cCode" value="<?php echo $this->view_data->get_cCode() ?>"></input><br>
    <input type="hidden" name="ID" value="<?php echo $this->view_data->get_CID() ?>"></input>
    <input type="submit" value="Save Course">
</form>
</body>
</html>
