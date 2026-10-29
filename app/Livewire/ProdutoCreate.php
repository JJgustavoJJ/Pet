<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $categoria;
    public $preco_custo;
    public $preco_venda;
    public $quantidade;

    protected $rules = [
        'nome' => 'required|min:2',
        'descricao' => 'nullable',
        'categoria' => 'required',
        'preco_custo' => 'required|numeric',
        'preco_venda' => 'required|numeric',
        'quantidade' => 'required|integer|min:0',
    ];

   public function salvar()
    {
        $this->validate();

        // Mapeia todos os campos para os nomes exatos das colunas da tua base de dados
        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'categoria' => $this->categoria,
            'precoCusto' => $this->preco_custo,
            'precoVenda' => $this->preco_venda,
            'quantidadeEstoque' => $this->quantidade, // <--- Nome exato da coluna na BD
        ]);

        session()->flash('mensagem', 'Produto cadastrado com sucesso!');

        return redirect()->route('produtos.index');
    }



    } // <-- Esta chaveta fecha a função 'salvar' corretamente!

  
