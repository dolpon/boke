<?php

echo '你加载了 aa.php 的文件'.PHP_EOL;

function getA(){
    echo '你调用了函数' . __function__.PHP_EOL;
}
