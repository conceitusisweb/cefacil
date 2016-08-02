<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start(); //precisamos começar a sessão, a fim de acessá-lo através CI

class User_authrntication extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        //Carrega biblioteca de formulários helper
        $this->load->helper('form');
        //Carrega biblioteca form-validation
        $this->load->library('form_validation');
        //Carrega biblioteca session
        $this->load->library('session');
    }
    
    //Mostra página de login
    public function index(){
        $this->load->view('login_form');
    }
    
    //Mostrar página de registo
    public function User_registration_show(){
        $this->load->view('registration_form');
    }
    
    //Validar e Registro de armazenamento de dados em banco de dados
    public function new_user_registration(){
        //Verifique validação para a entrada do usuário em forma Sign Up
        
    }
}