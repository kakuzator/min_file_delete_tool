<?php
//globの引数に対象ディレクトリ名を指定
foreach (glob('') as $file) {
    $size = filesize($file);
    //glob配下にある20KB以下のファイルを削除
    if (($size / 1024) < 20) {
        unlink($file);
    }
}
