<?php

    // file_get_contents принимает post от xhr, обращается по этому адресу, echo возвратает ответом на клиент html-код
    
    $content = file_get_contents($_POST['address']);
    echo $content;

?>