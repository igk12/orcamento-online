<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orcamento_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Método para buscar os últimos orçamentos
    public function get_ultimos_orcamentos($limite = 5) {
        $this->db->order_by('created_at', 'DESC'); // Ordenar por data de criação decrescente
        $this->db->limit($limite); // Limitar o número de resultados
        $query = $this->db->get('orcamentos');
        return $query->result_array();
    }

    // Método para buscar orçamentos por status
    public function get_orcamentos_por_status() {
        $this->db->select('status, COUNT(*) as total');
        $this->db->group_by('status');
        $query = $this->db->get('orcamentos');
        return $query->result_array();
    }

    // ... outros métodos para gerar os dados dos relatórios
}