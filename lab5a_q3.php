<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php 
    function multiplication ($multiplier){
        $listNo = [1,2,3,4,5,6,7,8,9,10,11,12];

        $listResults = [];
        foreach($listNo as $no){
            $result = $no * $multiplier;
            array_push($listResults, $result);
        }

        return $listResults;
    }
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php $answers = multiplication(2);
            for($i = 0; $i < count($answers); $i++){
            ?>

            <tr>
                <td><?php echo $i+1 ?></td>
                <td><?php echo 2 ?></td>
                <td><?php echo $answers[$i] ?></td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
</body>
</html>