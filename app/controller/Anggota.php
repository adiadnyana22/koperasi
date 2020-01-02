<?php
    require_once 'app/models/models.php';
    class Anggota extends models{
        public function __construtct(){
            parent::__construct();
        }
        public function add($table,$values){
            $add = $this->pdo->prepare("INSERT INTO $table VALUES(NULL,:nama_anggota,:alamat,:tgl_lahir,:tmpt_lahir,:no_telp)");
            $dataAnggota = array(
                ':nama_anggota' => $values[0],
                ':alamat' => $values[1],
                ':tgl_lahir' => $values[2],
                ':tmpt_lahir' => $values[3],
                ':no_telp' => $values[4]
            );
            return $add->execute($dataAnggota);
        }
        public function fetchAll(){
            $models = new models;
            $data = $models->selectAll('tb_anggota');
            $data->fetch();
            return $data;
        }
        public function edit($table,$values){
            $edit = $this->pdo->prepare("UPDATE $table SET
             nama_anggota = :nama_anggota, alamat = :alamat, tgl_lahir = :tgl_lahir,
             tmpt_lahir = :tmpt_lahir, no_telp = :no_telp)");
            $dataAnggota = array(
                ':nama_anggota' => $values[0],
                ':alamat' => $values[1],
                ':tgl_lahir' => $values[2],
                ':tmpt_lahir' => $values[3],
                ':no_telp' => $values[4]
            );
            return $edit->execute($dataAnggota);
        }
        
    }