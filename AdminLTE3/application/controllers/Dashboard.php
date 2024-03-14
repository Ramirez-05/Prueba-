<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Usuario');
    }

    public function login() 
    {
        $data["mensaje"] = "";
        if ($this->input->server("REQUEST_METHOD") == "POST") {
            $data["correo"] = $this->input->post("correo");
            $data["password"] = $this->input->post("password");
            $usuario = $this->Usuario->logueado($data["correo"], $data["password"]);

            if ($usuario !== null) {
                $sesion_data = array(
                    'id_usuario' => $usuario->id_usuario,
                    'correo' => $usuario->correo,
                    'rol' => $usuario->rol,
                );
                $this->session->set_userdata($sesion_data);
                redirect(site_url('Dashboard/listado'));
            } else {
                $data["mensaje"] = "Correo o contraseña incorrecto";
            }
        }
        $this->load->view('Dashboard/login', $data);
    }

    public function plantilla($usuario_id = null) 
    {
        // Verifica si el usuario está autenticado
        if ($this->session->userdata('id_usuario')) {
            // Verifica si el rol del usuario es 'Admin'
            if($this->session->userdata('rol') == 'Admin'){
                $vistaListado = false;
    
                // Variables para datos del usuario
                $vdata["nombre"] = $vdata["nombre"] = $vdata["correo"] = $vdata["password"] = "";
        
                // Verifica si se proporciona un ID de usuario
                if ($usuario_id) {
                    // Obtiene información del usuario si existe
                    $usuario = $this->Usuario->find($usuario_id);
        
                    if ($usuario) {
                        // Rellena las variables con los datos del usuario
                        $vdata["nombre"] = $usuario->nombre;
                        $vdata["correo"] = $usuario->correo;
                        $vdata["password"] = $usuario->password;
                        $vdata["rol"] = $usuario->rol;
                    }
                }
        
                // Verifica si se envía un formulario POST
                if ($this->input->server("REQUEST_METHOD") == "POST") {
                    $data["nombre"] = $this->input->post("nombre");
                    $data["password"] = $this->input->post("password");
                    $data["correo"] = $this->input->post("correo");
                    $data["rol"] = $this->input->post("rol");
        
                    $vdata["nombre"] = $this->input->post("nombre");
                    $vdata["password"] = $this->input->post("password");
                    $vdata["correo"] = $this->input->post("correo");
                    $vdata["rol"] = $this->input->post("rol");
        
                    // Si se proporciona un ID de usuario, actualiza los datos del usuario
                    if ($usuario_id) {
                        $this->Usuario->update($usuario_id, $data);
                        redirect(site_url('Dashboard/listado'));
                    } else {
                        // Si no se proporciona un ID de usuario, inserta un nuevo usuario
                        $this->Usuario->insert($data);
                    }
                }
        
                // Más lógica para obtener datos de usuarios
        
                $vdata["usuarios"] = $this->Usuario->findAll();
                $this->load->view('Dashboard/plantilla', $vdata);
            }else{
                // Si el usuario no es administrador, redirige a otra página
                redirect(site_url('Dashboard/listado'));
            }
        } else {
            // Si el usuario no está autenticado, redirige a la página de inicio de sesión
            redirect(site_url('Dashboard/login'));
        }
    }
    
    public function ver($usuario_id = null) 
    {
        if($this->session->userdata('rol') == 'Admin'){
            $usuario = $this->Usuario->find($usuario_id);
            if ($usuario) {
                $vdata["id_usuario"] = $usuario->id_usuario;
                $vdata["nombre"] = $usuario->nombre;
                $vdata["password"] = $usuario->password;
                $vdata["correo"] = $usuario->correo;
            } else {
                $vdata["usuario_id"] = $vdata["nombre"] = $vdata["password"] = $vdata["correo"] = "";
            }
            $this->load->view('Dashboard/verUser', $vdata);
        }else{
            redirect('Dashboard/listado');
        }
       
    }

    public function listado() 
    {
        if ($this->session->userdata('id_usuario')) {
            $vdata["usuarios"] = $this->Usuario->findAll();
            $this->load->view('Dashboard/listado', $vdata);
        } else {
            redirect(site_url('Dashboard/plantilla'));
        }
    }

    public function logout() 
    {
        $this->session->sess_destroy();
        redirect(site_url('Dashboard/login'), 'refresh');
    }

    public function borrar($usuario_id = null)
    {   
        if($this->session->userdata('rol') == 'Admin'){
            $this->Usuario->delete($usuario_id);

            redirect('Dashboard/listado');
        }else{
            redirect('Dashboard/listado');
        }
    }

    public function reset_password() 
    {
        $data["mensaje"] = "";
        
        if ($this->input->server("REQUEST_METHOD") == "POST") {
            $data["correo"] = $this->input->post("correo");
            $data["password"] = $this->input->post("password");
            $data["password_nueva"] = $this->input->post("password_nueva");
    
            // Verifica si el correo y la contraseña actual coinciden
            $usuario = $this->Usuario->logueado($data["correo"], $data["password"]);
    
            if ($usuario !== null) {
                // Actualiza la contraseña en la base de datos
                $this->Usuario->actualizarPasswordPorCorreo($data["correo"], $data["password_nueva"]);
                $data["mensaje"] = "Contraseña actualizada con éxito.";
                redirect(site_url('Dashboard/login'));
            } else {
                $data["mensaje"] = "Correo o contraseña actual incorrectos.";
                redirect(site_url('Dashboard/reset_password')); 
            }
        }

        $this->load->view('Dashboard/reset_password', $data);
    }
    

}
