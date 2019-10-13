<?php
include dirname(__DIR__).'/../../app/views/layouts/default.php';
include dirname(__DIR__).'/../../app/views/layouts/defaultadd.php';
?>

<html>
<head>
    <title> list.php</title>
    <h2>list of all Students</h2>
</head>
<body>
<table border="1">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>CGPA </th>
        <th>Update </th>
        <th>Delete </th>
    </tr>
    <?php
    $myArray=$this->view_data;
    for($i=0; $i<sizeof($myArray); $i=$i+1)
    {
        $stdModel=$myArray[$i];?>
        <tr>
            <td><?php echo $stdModel->get_fName() ?></td>
            <td><?php echo $stdModel->get_lName() ?></td>
            <td><?php echo $stdModel->get_CGPA() ?></td>
            <td><a href="/training/public/student/edit/<?php echo  $stdModel->get_SID() ?> " >update </a></td>
            <td><a href="/training/public/student/delete/<?php echo $stdModel->get_SID() ?> ">Delete</a></td>
        </tr>
    <?php }
    ?>
</table>
</body>
</html>
