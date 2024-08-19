<?php

namespace App\Controllers;

use App\Models\Orcamento_model;

class Home extends BaseController
{
    public function index()
    {
        $orcamentoModel = new Orcamento_model();

        $data['ultimos_orcamentos'] = $orcamentoModel->get_ultimos_orcamentos(5); 
        $data['orcamentos_por_status'] = $orcamentoModel->get_orcamentos_por_status();
        // ... outros dados para os relatórios

        return view('home', $data);
    }
} 
