<x-layout>
    <x-slot name="title">
        CRUD
    </x-slot>

    <style>
        .table-fixed {
            table-layout: fixed;
            width: 100%;
        }
        .coluna-desc {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

    <h1 class="px-3 mt-3 mb-1">CRUD Básico</h1>

    <fieldset class="border rounded p-3 m-3 col-12 col-md-8">
        <legend class="float-none w-auto px-2 fs-6 fw-bold text-primary">Lista de Produtos</legend>

        <a href="/products/create" class="btn btn-primary mb-3">
            Novo Produto
        </a>

        <div class="table-responsive">
            <table class="table table-striped table-fixed">
                <thead>
                    {{-- <tr>
                        <th style="width: 25%;">Nome</th>
                        <th style="width: 15%;">Preço</th>
                        <th style="width: 40%;">Descrição</th>
                        <th style="width: 20%;" class="text-end">Ações</th>
                    </tr> --}}
                    <tr>
                        <th class="col-3">Nome</th>
                        <th class="col-2">Preço</th>
                        <th class="col-5">Descrição</th>
                        <th class="col-2 text-end">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td> R$ {{ $product->price }} </td>
                            <td class="coluna-desc">
                                @if (is_null($product->description))
                                    <span class="badge bg-secondary text-white opacity-75">Nenhum</span>
                                @else
                                    {{ Str::limit($product->description, 60, '...') }}
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="/products/{{ $product->id }}/edit" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm" onclick="deleteProduct({{ $product->id }})">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- PAGINATION: Clean Bootstrap links alignment structure -->
        <div class="d-flex justify-content-center mt-3">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </fieldset>
</x-layout>
