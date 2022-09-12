<?php

echo date('Y-m-d H:i:s');//默认显示当前的系统时间 和php.ini的时区相同
echo "\r";
echo date("Y-m-d H:i:s", time()+8*60*60);
