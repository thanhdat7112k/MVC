<?php
    class db{
        private $username = 'root';
        private $password = '';
        private $localhost = 'localhost';
        private $dbName = 'mvctest';
        
        function connect(){
            $config = new PDO("mysql:host=$this->localhost;dbname=$this->dbName",$this->username,$this->password);
            $config-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $config;
        }
    }