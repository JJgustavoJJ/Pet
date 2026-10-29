<div> <!-- <--- TAG RAIZ OBRIGATÓRIA -->
    <div class="container my-5 d-flex justify-content-center">
        <div class="card shadow-lg border-0 rounded-4 p-4" style="max-width: 550px; width: 100%;">
            
            <form wire:submit.prevent="atualizar">
                <legend class="fw-bold text-primary mb-4 text-center">EDITAR PRODUTO</legend>

                <div class="mb-3">
                    <label class="form-label fw-medium">Nome do Produto</label>
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" wire:model.live="nome">
                    @error('nome') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-medium">Descrição</label>
                    <textarea class="form-control" wire:model.live="descricao" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-medium">Categoria</label>
                    <input type="text" class="form-control @error('categoria') is-invalid @enderror" wire:model.live="categoria">
                    @error('categoria') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-medium">Preço de Custo</label>
                        <input type="number" step="0.01" class="form-control @error('preco_custo') is-invalid @enderror" wire:model.live="preco_custo">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-medium">Preço de Venda</label>
                        <input type="number" step="0.01" class="form-control @error('preco_venda') is-invalid @enderror" wire:model.live="preco_venda">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-medium">Quantidade Disponível</label>
                    <input type="number" class="form-control @error('quantidade') is-invalid @enderror" wire:model.live="quantidade">
                </div>

                <button type="submit" class="btn btn-success w-100 py-2 fw-semibold rounded-3 shadow-sm mb-2">
                    Atualizar Produto
                </button>
                <a href="{{ route('produtos.index') }}" class="btn btn-secondary w-100 py-2 fw-semibold rounded-3">
                    Cancelar
                </a>
            </form>
        </div>
    </div>
</div> 