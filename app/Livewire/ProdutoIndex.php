<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public function excluir($id)
    {
        $produto = Produto::find($id);
        
        if ($produto) {
            $produto->delete();
            session()->flash('mensagem', 'Produto excluído com sucesso!');
        }
    }

    public function render()
    {
        return view('livewire.produto-index', [
            'produtos' => Produto::all()
        ]);
    }
}