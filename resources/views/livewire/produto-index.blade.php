<div class="container my-4">
    <div class="card shadow-sm border-0 rounded-4 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold text-primary m-0">Lista de Produtos</h4>
            <a href="{{ route('produtos.create') }}" class="btn btn-primary btn-sm fw-semibold">Novo Produto</a>
        </div>

        @if (session()->has('mensagem'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('mensagem') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Preço Venda</th>
                        <th>Quantidade</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td class="fw-semibold">{{ $produto->nome }}</td>
                            <td>{{ $produto->categoria }}</td>
                            <td class="text-success fw-bold">R$ {{ number_format($produto->precoVenda, 2, ',', '.') }}</td>
                            <td>{{ $produto->quantidadeEstoque ?? $produto->quantidade }}</td>
                            <td class="text-center">
                                <!-- Botão Editar -->
                                <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-warning fw-semibold text-white px-2 me-1">
                                    Editar
                                </a>
                                <!-- Botão Excluir -->
                                <button wire:click="excluir({{ $produto->id }})" wire:confirm="Tens a certeza que pretendes excluir este produto?" class="btn btn-sm btn-danger fw-semibold px-2">
                                    Excluir
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">Nenhum produto cadastrado ainda.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>