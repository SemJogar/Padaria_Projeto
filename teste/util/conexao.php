<?php
    class conexao {
        public static function getConexao(){
            //ajustar as informações abaixo de acordo com o DB que estiver usando
            $hostname = 'localhost';
            $dbusername = 'root';
            $password = 'usbw';
            $database = 'padaria';
// ATENÇÃO!!!!! ----> TABELA = 'produtos' <---- ATENÇÃO!!!!!  
            $conn = new mysqli($hostname, $dbusername, $password, $database);
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }
            return $conn;
        }
    }