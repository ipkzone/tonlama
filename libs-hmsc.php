<?php
error_reporting(0);
//color
$Yellow = "\e[33m";
$Green = "\e[92m";
$White = "\e[0m";
$blue = "\e[33m";
$Red = "\e[31m";

//choose tools
menu:
echo "\n{$Green}
    ██╗  ██╗███╗   ███╗███████╗ ██████╗
    ██║  ██║████╗ ████║██╔════╝██╔════╝
    ███████║██╔████╔██║███████╗██║     
    ██╔══██║██║╚██╔╝██║╚════██║██║     
    ██║  ██║██║ ╚═╝ ██║███████║╚██████╗
    ╚═╝  ╚═╝╚═╝     ╚═╝╚══════╝ ╚═════╝
    {$White}
    Installer PHP Libs HMSC Termux linux
    Author: {$Green}Iddant ID{$White} | WhatsApp: {$Green}0895375136311{$White}
\n";
echo "
    ╔═[{$Yellow}Menu{$White}]════════════════════════════
    ║  {$Yellow}◉{$White} 01. {$Yellow}Libs aarch64 php8.2 NTS{$White}
    ║  {$Yellow}◉{$White} 02. {$Yellow}Libs arm php8.2 NTS{$White}
    ║  {$Yellow}◉{$White} 03. {$Yellow}Libs x86_64 php8.2 NTS{$White} ( {$Red}Emulator{$White} )
    ║  {$Yellow}◉{$White} 04. {$Yellow}Downgrade php8.3 to 8.2 aarch64{$White}
    ║  {$Yellow}◉{$White} 05. {$Yellow}Install Termux Style Oh-my-zsh{$White}
    ║  {$Yellow}◉{$White} 06. {$Yellow}Checking Version PHP{$White}
    ║  {$Yellow}◉{$White} 07. {$Yellow}Checking Karnel Termux{$White}
    ║  {$Yellow}◉{$White} 08. {$Yellow}Installing Moduls Termux{$White}
    ╚═══════════════════════════════════
       \n";

echo " {$Green}➤{$White} Choose: ";
$ipkzone = trim(fgets(STDIN));
if ($ipkzone == "1") {
    $a = shell_exec('wget https://inyeteam.my.id/hmscfiles/aarch64.zip');
    $b = shell_exec('unzip aarch64.zip');
    $c = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php');
    $d = shell_exec('wget https://inyeteam.my.id/hmscfiles/php.zip');
    $e = shell_exec('unzip php.zip');
    $f = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib');
    echo " {$Green}➤{$White} Installed aarch64 php8.2 NTS\n";

    echo " {$Green}➤{$White} Back to menu [y/n] Exit: ";
    $crott = trim(fgets(STDIN));
    echo "\n";
    if ($crott == 'y') {
        goto menu;
    } else {
        exit;
    }
} else if ($ipkzone == "2") {
    $a = shell_exec('wget https://inyeteam.my.id/hmscfiles/arm.zip');
    $b = shell_exec('unzip arm.zip');
    $c = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php');
    $d = shell_exec('wget https://inyeteam.my.id/hmscfiles/php.zip');
    $f = shell_exec('unzip php.zip');
    $g = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib');
    echo " {$Green}➤{$White} Installed arm php8.2 NTS\n";

    echo " {$Green}➤{$White} Back to menu [y/n] Exit: ";
    $crott = trim(fgets(STDIN));
    echo "\n";
    if ($crott == 'y') {
        goto menu;
    } else {
        exit;
    }
} else if ($ipkzone == "3") {
    $a = shell_exec('wget https://inyeteam.my.id/hmscfiles/x86_64.zip');
    $b = shell_exec('unzip x86_64.zip');
    $c = shell_exec('cp hmsc.so /data/data/com.termux/files/usr/lib/php');
    $d = shell_exec('wget https://inyeteam.my.id/hmscfiles/php.zip');
    $e = shell_exec('unzip php.zip');
    $f = shell_exec('cp php.ini /data/data/com.termux/files/usr/lib');
    echo " {$Green}➤{$White} Installed x86_64 php8.2 NTS\n";

    echo " {$Green}➤{$White} Back to menu [y/n] Exit: ";
    $crott = trim(fgets(STDIN));
    echo "\n";
    if ($crott == 'y') {
        goto menu;
    } else {
        exit;
    }
} else if ($ipkzone == "4") {
    echo " {$Green}➤{$White} Checking karnel and downgrade php\n";
    $b = shell_exec('dpkg --print-architecture');
    echo " {$Green}➤{$White} {$Green}$b{$White}\n";
    $c = shell_exec('wget https://inyeteam.my.id/termux/aarch64-php82.zip');
    $d = shell_exec('unzip aarch64-php82.zip');
    $f = shell_exec('dpkg -i php-apache-ldap_8.2.8-2_aarch64.deb');
    $g = shell_exec('dpkg -i php-apache-opcache_8.2.8-2_aarch64.deb');
    $h = shell_exec('dpkg -i php-apache-pgsql_8.2.8-2_aarch64.deb');
    $i = shell_exec('dpkg -i php-apache-sodium_8.2.8-2_aarch64.deb');
    $j = shell_exec('dpkg -i php-apache_8.2.8-2_aarch64.deb');
    $k = shell_exec('dpkg -i php-apcu_5.1.23-2_aarch64.deb');
    $l = shell_exec('dpkg -i php-fpm_8.2.8-2_aarch64.deb');
    $m = shell_exec('dpkg -i php-imagick_3.7.0-4_aarch64.deb');
    $n = shell_exec('dpkg -i php-ldap_8.2.8-2_aarch64.deb');
    $o = shell_exec('dpkg -i php-pgsql_8.2.8-2_aarch64.deb');
    $p = shell_exec('dpkg -i php-psr_1.2.0-3_aarch64.deb');
    $q = shell_exec('dpkg -i php-redis_6.0.2-2_aarch64.deb');
    $r = shell_exec('dpkg -i php-sodium_8.2.8-2_aarch64.deb');
    $s = shell_exec('dpkg -i php_8.2.8-2_aarch64.deb');
    echo " {$Green}➤{$White} {$Green}$s{$White}\n";
    $a = shell_exec('php -v');
    echo " {$Green}➤{$White} {$Green}$a{$White}\n";

    echo " {$Green}➤{$White} Back to menu [y/n] Exit: ";
    $crott = trim(fgets(STDIN));
    echo "\n";
    if ($crott == 'y') {
        goto menu;
    } else {
        exit;
    }
} else if ($ipkzone == "5") {
    echo " {$Green}➤{$White} Installing termux style\n";
    $a = shell_exec('sh -c "$(curl -fsSL https://raw.githubusercontent.com/Cabbagec/termux-ohmyzsh/master/install.sh)"');
    echo " {$Green}➤{$White} {$Green}$a{$White}\n";

    echo " {$Green}➤{$White} Back to menu [y/n] Exit: ";
    $crott = trim(fgets(STDIN));
    echo "\n";
    if ($crott == 'y') {
        goto menu;
    } else {
        exit;
    }
} else if ($ipkzone == "6") {
    echo " {$Green}➤{$White} Checking version PHP\n";
    $a = shell_exec('php -v');
    echo " {$Green}➤{$White} {$Green}$a{$White}\n";

    echo " {$Green}➤{$White} Back to menu [y/n] Exit: ";
    $crott = trim(fgets(STDIN));
    echo "\n";
    if ($crott == 'y') {
        goto menu;
    } else {
        exit;
    }
} else if ($ipkzone == "7") {
    echo " {$Green}➤{$White} Checking karnel termux\n";
    $a = shell_exec('uname -a');
    $b = shell_exec('dpkg --print-architecture');
    echo " {$Green}➤{$White} {$Green}$a{$White}\n";
    echo " {$Green}➤{$White} Your karnel: {$Green}$b{$White}\n";

    echo " {$Green}➤{$White} Back to menu [y/n] Exit: ";
    $crott = trim(fgets(STDIN));
    echo "\n";
    if ($crott == 'y') {
        goto menu;
    } else {
        exit;
    }
} else if ($ipkzone == "8") {
    echo " {$Green}➤{$White} Installing moduls libs\n";
    $a = shell_exec('pkg install wget');
    $b = shell_exec('pkg install unzip');
    $c = shell_exec('pkg install php-curl');
    $d = shell_exec('pkg install bash');
    echo " {$Green}➤{$White} {$Green}$a{$White}\n";
    echo " {$Green}➤{$White} {$Green}$b{$White}\n";

    echo " {$Green}➤{$White} Back to menu [y/n] Exit: ";
    $crott = trim(fgets(STDIN));
    echo "\n";
    if ($crott == 'y') {
        goto menu;
    } else {
        exit;
    }
}