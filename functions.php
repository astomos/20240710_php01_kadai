<?php

    // 各ファイルでhtmlspecialcharsを短く使い回すための
    // 共通関数

function h($string){
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>