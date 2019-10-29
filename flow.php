<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>控制流程《control flow》</title>
</head>
<body>
<?php
/**
 *
 * User: wangk
 * Date: 2019/10/8
 */
function getLevel($score){
    if($score > 90){
        return '优秀<br>';
    }elseif ($score > 80 ){
        return '还行<br>';
    }else{
        return '8错<br>';
    }
}

function getLevelBySwitch($score){
    switch ($score/10){
        case 10 :
        case 9:
            return '优秀<br>';
        case 7:
            return '还行<br>';
        default:
            return '8错<br>';
    }
}
echo getLevel(89);
echo getLevelBySwitch(60);


?>
</body>
</html>
