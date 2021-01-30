<?php
//globの引数に対象ディレクトリ名を指定
foreach (glob('') as $file) {
    $size = filesize($file);
    //glob配下にある20KB以下の画像ファイルを削除
    if (($size / 1024) < 20 &&
        preg_match('/\.png$|\.jpg$|\.jpeg$/i', $file) === 1
    ) {
        unlink($file);
    }
}
