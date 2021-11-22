<?php

$build_container = shell_exec("sudo docker build -t 'clang-doc' .");
$run_container = shell_exec("sudo docker run -i --memory='6m' --oom-kill-disable --cpus='1.0' 'clang-doc' < input.txt");

echo $run_container;

