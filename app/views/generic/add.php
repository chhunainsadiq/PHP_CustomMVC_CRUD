<?php
require_once dirname(__DIR__).'/../../public/js/validateform.php';
require_once dirname(__DIR__).'/../../app/views/layouts/default.php';
//check if controller is student controller then show the fields for student to add
if($this->folder_name=="student") {
    ?>
    <html>
    <head>
        <title>add.php</title>
        <h2>Add a <?php  echo $this->folder_name ?></h2>
    </head>
    <body>
    <form action="/training/public/student/addNewRecord" method="post" name="myForm" onsubmit="return validateFormForStudent()">
        First Name: <input type="text" name="fName" ></input> <br>
        Last Name:<input type="text" name="lName" ></input><br>
        CGPA:<input type="number" step="0.01" name="CGPA" ></input><br>
        <input type="submit" value="Add Student">
    </form>
    </body>
    </html>
<?php }

//check if controller is teacher controller then show the fields for teacher to add
else if($this->folder_name=="teacher") {
    ?>
    <html>
    <head>
        <title>add.php</title>
        <h2>Add a <?php  echo $this->folder_name ?></h2>
    </head>
    <body>
    <form action='/training/public/teacher/addNewRecord' method='post' name='myForm' onsubmit='return validateFormForTeacher()'>
        First Name: <input type='text' name='fName' value=''></input> <br>
        Last Name:<input type='text' name='lName' value=''></input><br>
        <input type='submit' value='Add Teacher'>
    </form>
    </body>
    </html>
<?php }
//check if controller is course controller then show the fields for course to add
else if($this->folder_name=="course") {
    ?>
    <html>
    <head>
        <title>add.php</title>
        <h2>Add a <?php  echo $this->folder_name ?></h2>
    </head>
    <body>
    <form action='/training/public/course/addNewRecord' method='post' name='myForm' onsubmit='return validateFormForCourse()'>
        Course Name: <input type='text' name='cName' value=''></input> <br>
        Course Code:<input type='number' name='cCode' value=''></input><br>
        <input type='submit' value='Add Course'>
    </form>
    </body>
    </html>
<?php }
?>

