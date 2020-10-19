<?php

if(file("a.txt")[0]!=""){
echo str_replace(PHP_EOL,"",file("a.txt")[0]);

usleep(100);

exec("sed -i '1d' a.txt");

}
?>