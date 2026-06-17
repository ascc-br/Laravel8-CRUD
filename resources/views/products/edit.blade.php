<!DOCTYPE html>
<html>

<head>
    <title>CRUD - Update</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <script src="/js/script.js" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <fieldset class="border rounded p-3 m-3 d-inline-block">
        <legend class="float-none w-auto px-2 fs-6 fw-bold text-primary">Editar Produto</legend>

        <form action="/products/{{ $product->id }}" method="POST">
            @csrf
            @method('PUT')

            <label>Nome:</label>
            <input type="text" name="name" value="{{ $product->name }}">

            <br><br>

            <label>Preço:</label>
            <input type="number" step="0.01" name="price" value="{{ $product->price }}">

            <br><br>

            <div class="row">
                <div class="col-12 d-flex justify-content-between">

                    <a href="/products/" class="btn btn-sm border border-2 border-opacity-25">
                        Voltar <i class="bi bi-list"></i><i class="bi bi-arrow-90deg-left"></i>
                    </a>

                    <div>
                        <a href="#" class="btn btn-danger btn-sm" onclick="deleteProduct({{ $product->id }})">
                            REMOVER
                        </a>

                        <button type="submit" class="btn btn-sm border border-2 border-opacity-25">
                            Atualizar
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </fieldset>
</body>

</html>
