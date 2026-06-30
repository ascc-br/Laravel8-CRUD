<x-layout>
    <x-slot name="title">
        CRUD - Update
    </x-slot>

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

            <label for="resizableTextarea" class="form-label">Descrição:</label>
            <textarea class="form-control" name="description" id="resizableTextarea" rows="1" placeholder="">{{ $product->description }}</textarea>

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

</x-layout>
