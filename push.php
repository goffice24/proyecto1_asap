<?php

// $path = 'git@github.com:goffice24/proyecto1_asap.git';

$key = __DIR__ . '/asap2';

if (!file_exists($key)) {
    echo "No existe el archivo de llave $key.\n";
}

system('eval $(ssh-agen -s)');
system("ssh-add $key");
system("git add .");
system("git commit -am 'Update'");
system("git push -u origin master");

