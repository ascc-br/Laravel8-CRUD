<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <script src="/js/script.js" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <h1 class="px-3 mt-3 mb-1">CRUD Básico</h1>

    <fieldset class="border rounded p-3 m-3 col-8">
        <legend class="float-none w-auto px-2 fs-6 fw-bold text-primary">Lista de Produtos</legend>

        <a href="/products/create" class="btn btn-primary mb-3">
            Novo Produto
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th class="text-end">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td> R$ {{ $product->price }} </td>
                        <td>
                            @if (is_null($product->description))
                                --x--
                            @else
                                {{ $product->description }}
                            @endif
                        </td>
                        <td class="text-end"><a href="/products/{{ $product->id }}/edit"
                                class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm"
                                onclick="deleteProduct({{ $product->id }})">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>

</body>

</html>
