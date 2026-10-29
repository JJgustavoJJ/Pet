<?php

use App\Livewire\ProdutoIndex;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoEdit;
use Illuminate\Support\Facades\Route;

Route::get('/produtoIndex', ProdutoIndex::class)->name('produtos.index');
Route::get('/produtoCreate', ProdutoCreate::class)->name('produtos.create');
Route::get('/produtoEdit/{produto}', ProdutoEdit::class)->name('produtos.edit');