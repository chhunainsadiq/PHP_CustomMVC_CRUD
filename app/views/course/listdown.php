<?php
include dirname(__DIR__).'/../../app/views/layouts/default.php';
include dirname(__DIR__).'/../../app/views/layouts/defaultadd.php';
?>

<html>
<head>
    <title> list.php</title>
    <h1>list of all Courses</h1>
</head>
<body>
<table border="1">
    <tr>
        <th>Course Name</th>
        <th>Course Code</th>
        <th>Update </th>
        <th>Delete </th>
    </tr>
    <?php
    $myArray=$this->view_data;
    for($i=0; $i<sizeof($myArray); $i=$i+1)
    {
        $stdModel=$myArray[$i];?>
        <tr>
            <td><?php echo $stdModel->get_cName() ?></td>
            <td><?php echo $stdModel->get_cCode() ?></td>
            <td><a href="/training/public/course/edit/<?php echo $stdModel->get_CID() ?> " >update </a></td>
            <td><a href="/training/public/course/delete/<?php echo $stdModel->get_CID() ?> ">Delete</a></td>
        </tr>
    <?php }
    ?>
</table>
</body>
</html>
