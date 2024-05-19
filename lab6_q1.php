<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php 
        $name = "Muhammad Asyraf";
        $matricNo = "AI220143";
        $course = "BIT";
        $yearOfStudy = "2nd Year";
        $address = "No.6, Jalan Maluri, Selangor";
    ?>
    <table>
        <tr>
            <td>Name : </td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>Matric number : </td>
            <td><?php echo "$matricNo"; ?></td>
        </tr>
        <tr>
            <td>Course : </td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study : </td>
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td>Address : </td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
 
</body>
</html>