<?php

define('METHOD','AES-256-CBC');
define('SECRET_KEY','MI KEY SECRETA');
define('SECRET_IV','MI IV SECRETO');

class ENC_DES{
    public static function encriptar($string){
            $output= false;
            //Genera un valor cifrado con base a un string
            $key=hash('sha256', SECRET_KEY);
            $iv = substr(hash('sha256',SECRET_IV),0,16);
            $output = openssl_encrypt($string,METHOD,$key,0,$iv);
            /*
            Codifica data en base64.
            Este tipo de codificación está diseñado para que datos 
            binarios sobrepasen capas de transporte que no son de 8-bits 100%, 
            como por ejemplo el cuerpo de un E-Mail.*/
            $output = base64_encode($output);
            return $output;
        }
    public static function desencriptar($string){
            $key = hash('sha256',SECRET_KEY);
            $iv = substr(hash('sha256',SECRET_IV),0,16);
            $output = openssl_decrypt(base64_decode($string),METHOD,$key,0,$iv);
            return $output;
        }
    }





?>