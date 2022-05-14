<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ModelLibro extends Model {

    protected $table = "Libros";
    protected $primarykey = "pk";
    protected $allowedFields = ["Name", "Autor"];

    public function getLibros() {
        $data = $this->db->query("SELECT * FROM Libros");
        return $data;
    }
    
    public function add($postData){
        if($postData){
            $query = 'INSERT INTO '.$table.' ("Name","Autor") VALUES ('.$postData["Name"].','.$postData["Autor"].')';
            $libroAdd = $this->db->query($query);        
        }
        return true;
    }
    
    
}

?>