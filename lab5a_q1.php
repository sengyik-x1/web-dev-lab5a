<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php $name = "CHEE SENG YIK"; 
          $matricNo = "AI220271";
          $course = "BACHELOR OF COMPUTER SCIENCE (HONS) IN SOFTWARE ENGINEERING";
          $yearOfStudy = 3;
          $address = "No.29A KG Baru Sikamat, 70400 Seremban, Negeri Sembilan";
    ?>
    
    <table border="1" style="border-collapse: collapse; margin: auto;">
        <tr>
            <th style="padding: 10px;">Name</th>
            <td style="padding: 10px;"> <?php echo $name; ?> </td>
        </tr>
        <tr>
            <th style="padding: 10px;">Matric Number</th>
            <td style="padding: 10px;"><?php echo $matricNo; ?></td>
        </tr>
        <tr>
            <th style="padding: 10px;">Course</th>
            <td style="padding: 10px;"><?php echo $course ?></td>
        </tr>
        <tr>
            <th style="padding: 10px;">Year of study</th>
            <td style="padding: 10px;"><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <th style="padding: 10px;">Address</th>
            <td style="padding: 10px;"><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>