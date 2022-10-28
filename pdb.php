<?php
    // P;32;0;4.16;12.2;36.0;86;29.3;33.9;238;1.9;57.6;25.2;12.3;14.7;
    $file = "knn1.csv";

    $csv  =   new SplFileObject($file);
    $csv ->  setFlags(SplFileObject::READ_CSV);
    $csv ->  setCsvControl(';');  //separator change if you need

    // echo $csv;
    // foreach($csv as $i){
        // print_r($i[]);  //$ligne is an array
    //     foreach($i as $j){
    //         print($j.' ; ');
    //     }
    //     print('<br>');
    // }

    $arrTest = array($_POST['getName'],$_POST['getAge'],$_POST['getSex']);
    for($i = 0;$i < count($arrTest);$i++){
        echo $arrTest[$i].'  ';
    }
    echo '<br>';

    // echo($_POST['getName'].'<br>');

    $sex = $_POST['getSex'];
    
    if(isset($set)){
        $sex = 1;
    }

    echo($sex);
?>