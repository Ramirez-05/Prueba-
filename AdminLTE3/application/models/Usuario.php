<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

    Public $table = 'usuarios';
    Public $table_id = 'id_usuario';

    Public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->database();
    }

    public function findAll(){
        $this->db->select();
        $this->db->from($this->table);

        $query = $this->db->get();
        return $query->result();
    }

    public function find($id){
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);

        $query = $this->db->get();
        return $query->row();
    }
    public function logueado($nombre, $password){
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where("correo", $nombre);
        $this->db->where("password", $password);
        $query = $this->db->get();
        return $query->row();
    }

    public function update($id, $data){
        $this->db->where($this->table_id, $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where($this->table_id, $id);
        $this->db->delete($this->table);
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function actualizarPasswordPorCorreo($correo, $nuevaPassword) {
        // Define los datos se va a actualizar
        $data = array(
            'password' => $nuevaPassword
        );
    
        // Actualiza la contraseña basada en el correo proporcionado
        $this->db->where('correo', $correo);
        $this->db->update($this->table, $data);
    }
    

}
