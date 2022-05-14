<?php

namespace App\Controllers;

use App\Models\ModelLibro;


class Libros extends BaseController {
        
    function __construct() {
        
        $this->ModelLibro = new ModelLibro();
        helper(['url']);
    }

    public function index() {
        $modelo = $this->ModelLibro;
        $query = $modelo->getLibros();
        $data['libros'] = $query->getResultArray();
        return view('Libros/LibrosView', $data);
    }

    public function crear() {
        return view('Libros/Crear');
    }

    public function add() {
        $db = \Config\Database::connect();
        $datos = [
            "Name" => $this->request->getVar("Name"),
            "Autor" => $this->request->getVar("Autor")
        ];
        $db->table('Libros')->insert($datos);
        return $this->response->redirect(site_url('libros'));
    }
    
    public function delete($pk=null){
        $db = \Config\Database::connect();
        $db->table('Libros')->delete(['pk' => $pk]);
        return $this->response->redirect(site_url('libros'));
    }
    
    public function actualizar($pk){
        $db = \Config\Database::connect();
        $builder = $db->table('libros');
        $builder->select('*');
        $builder->where('pk', $pk);
        $query = $builder->get()->getResultArray();
        
        $data['libro'] = $query[0];
        return view('Libros/Editar', $data);
    }
    
    public function update($pk){
        
        print_r($pk);
        $db = \Config\Database::connect();        
        $datos = [
            "Name" => $this->request->getVar("Name"),
            "Autor" => $this->request->getVar("Autor")
        ];
        
        $builder = $db->table('libros');
        $builder->where('pk', $pk);
        $builder->update($datos);
        return $this->response->redirect(site_url('libros/actualizar/'.$pk));
    }

}
