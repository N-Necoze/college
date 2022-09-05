<?php 
    // file名が出力される
    $file_name = $argv[0];
    echo $file_name;
    
    // 値が入力される
    $num = $argv[1];
    if ($num%2 == 1){
        echo "奇数";
    }
    else{
        echo "偶数";
    }
?>