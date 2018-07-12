<?php

    require_once "home.php";

    function calculadora_ip ($ipesao, $the_mask){

        $enderecos = pow (2, (32-$the_mask) );

        $subredes = 256 / $enderecos;

        $hosts = $subredes - 2;

        $ip = explode ("." , "$ipesao");

        $x = $ip[3] / $enderecos;

        $primeiro_host = floor($x) * $enderecos + 1;

        $ultimo_host = $primeiro_host + ($enderecos - 3);

        $broadcast = $ultimo_host + 1;

        $mascara_rede = 256 - $enderecos;

        switch ($ipesao){

            case $ipesao >= 0 AND $ipesao <= 127:
                $classe =  "Classe A";
                break;

            case $ipesao >= 128 AND $ipesao <= 191:
                $classe = "Classe B";
                break;

            case $ipesao >=192 AND $ipesao <= 223:
                $classe = "Classe C";
                break;

            case $ipesao >= 240 AND $ipesao <= 255:
                $classe = "Classe D";
                break;
        }

        //VSF SWITCH CASE IF EH VIDA. SOH QUERIA PODER TACAR UM IF AQUI

        switch ($ipesao){

            case $ipesao >= 10 AND $ipesao <= 10.255:
                $classeIp =  "Privado";
                break;

            case $ipesao >= 172.16 AND $ipesao <= 172.31:
                $classeIp = "Privado";
                break;

            case $ipesao >=192.168 AND $ipesao <= 172.169:
                $classeIp = "Privado";
                break;

            default:
                $classeIp = "Publico";
                break;
        }

        $arraia = [
            'Enderecos' => $enderecos,
            'Subredes' => $subredes,
            'Hosts' => $hosts,
            'Primeiro host' => "$ip[0].$ip[1].$ip[2].$primeiro_host",
            'Ultimo host' => "$ip[0].$ip[1].$ip[2].$ultimo_host",
            'Broadcast' => "$ip[0].$ip[1].$ip[2].$broadcast",
            'Mascara de rede' => "255.255.255.$mascara_rede",
            'Classe do ip' => "$classe, $classeIp"
        ];

        print_r($arraia);


    }


    $ip = $_GET['ip '];
    $mask = $_GET['mask'];
    //$ip = '172.16.5.10';
    //$mask = '30';
    $calculo = calculadora_ip($ip, $mask);
