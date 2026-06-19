<!DOCTYPE html>
<html>

<head>
    <title>CRUD - Create</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>

    <fieldset class="border rounded p-3 m-3 d-inline-block">
        <legend class="float-none w-auto px-2 fs-6 fw-bold text-primary">Cadastrar Produto</legend>

        <form action="/products" method="POST">
            @csrf

            <label>Nome:</label>
            <input type="text" name="name">

            <br><br>

            <label>Preço:</label>
            <input type="number" step="0.01" name="price">

            <br><br>

            <label for="resizableTextarea" class="form-label">Descrição:</label>
            <textarea class="form-control" name="description" id="resizableTextarea" rows="1" placeholder=""></textarea>

            <br>

            @if ($errors->any())

                <div style="color:red">

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>

            @endif

            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <a href="/products/" class="btn btn-sm border border-2 border-opacity-25">
                        Voltar <i class="bi bi-list"></i><i class="bi bi-arrow-90deg-left"></i>
                    </a>

                    <button type="submit" class="btn btn-sm border border-2 border-opacity-25">
                        Salvar
                    </button>
                </div>
            </div>

        </form>
    </fieldset>

</body>

</html>
