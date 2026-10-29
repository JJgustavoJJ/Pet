<div class="container my-5 d-flex justify-content-center">
    <div class="card shadow-lg border-0 rounded-4 p-4" style="max-width: 550px; width: 100%;">
        
        <form wire:submit.prevent="salvar">
            <legend class="fw-bold text-primary mb-4 text-center">CADASTRO DE PRODUTO</legend>

            <!-- Nome -->
            <div class="mb-3">
                <label class="form-label fw-medium">Nome do Produto</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" wire:model.live="nome" placeholder="Ex: Teclado Mecânico">
                @error('nome') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Descrição -->
            <div class="mb-3">
                <label class="form-label fw-medium">Descrição</label>
                <textarea class="form-control" wire:model.live="descricao" placeholder="Escreva os detalhes..." rows="3"></textarea>
            </div>

            <!-- Categoria -->
            <div class="mb-3">
                <label class="form-label fw-medium">Categoria</label>
                <input type="text" class="form-control @error('categoria') is-invalid @enderror" wire:model.live="categoria" placeholder="Ex: Eletrónicos">
                @error('categoria') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Preços -->
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-medium">Preço de Custo</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="number" step="0.01" class="form-control @error('preco_custo') is-invalid @enderror" wire:model.live="preco_custo" placeholder="0,00">
                    </div>
                    @error('preco_custo') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-medium">Preço de Venda</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="number" step="0.01" class="form-control @error('preco_venda') is-invalid @enderror" wire:model.live="preco_venda" placeholder="0,00">
                    </div>
                    @error('preco_venda') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>
            </div>

            <!-- Quantidade -->
            <div class="mb-4">
                <label class="form-label fw-medium">Quantidade Disponível</label>
                <input type="number" class="form-control @error('quantidade') is-invalid @enderror" wire:model.live="quantidade" placeholder="0">
                @error('quantidade') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Botão de Guardar -->
            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold rounded-3 shadow-sm">
                Salvar Produto
            </button>
        </form>
    </div>
</div>