<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q2</title>
</head>
<body>

<?php $students = [
    ["name" => "Alice",
    "program" => "BIP",
    "age" => 21],

    [
        "name" => "Bob",
        "program" => 'BIS',
        'age' => 20,
    ],

    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22,
    ],
]; ?>

<table border="1" style="font-family: 'Times New Roman', Times, serif; margin: auto; margin-top: 5%;">
    <tr>
        <thead>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </thead>

    </tr>
    <tbody>
        <?php foreach($students as $student) { ?>
        <tr>
            <td>
                <?php echo $student['name'] ?>
            </td>
            <td>
                <?php echo $student['program'] ?>
            </td>
            <td>
                <?php echo $student['age'] ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
    
</body>
</html>