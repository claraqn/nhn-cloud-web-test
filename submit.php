<?php

# 변경 필요
$conn = mysqli_connect("","userid","password","스키마명","포트번호");
$sql = "insert into member (name,age) value ('{$_POST['name']}','{$_POST['age']}')";

mysqli_query($conn,$sql);
if ($result === false){
        echo "저장과정에서 문제발생";
        error_log(mysqli_erro($conn));
}

?>
