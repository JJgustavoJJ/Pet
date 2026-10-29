<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $produtoId;
    public $nome;
    public $descricao;
    public $categoria;
    public $preco_custo;
    public $preco_venda;
    public $quantidade;

    public function mount(Produto $produto)
    {
        $this->produtoId = $produto->id;
        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->categoria = $produto->categoria;
        $this->preco_custo = $produto->precoCusto;
        $this->preco_venda = $produto->precoVenda;
        $this->quantidade = $produto->quantidadeEstoque ?? $produto->quantidade;
    }

    public function atualizar()
    {
        $this->validate([
            'nome' => 'required|min:2',
            'descricao' => 'nullable',
            'categoria' => 'required',
            'preco_custo' => 'required|numeric',
            'preco_venda' => 'required|numeric',
            'quantidade' => 'required|integer|min:0',
        ]);

        $produto = Produto::find($this->produtoId);
        $produto->update([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'categoria' => $this->categoria,
            'precoCusto' => $this->preco_custo,
            'precoVenda' => $this->preco_venda,
            'quantidadeEstoque' => $this->quantidade,
        ]);

        session()->flash('mensagem', 'Produto atualizado com sucesso!');
        return redirect()->route('produtos.index');
    }

    public function render()
    {
        return view('livewire.produto-edit');
    }
}