<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

<div class="container-fluid mt-4 mb-4">
    <div class="div col-md-2 col-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar cliente" id="cliente-input">
            <div class="input-group-append ml-2">
                <button class="btn btn-outline-secondary ml-2" type="button" data-page="cliente" onclick="search(this)">Buscar</button>
            </div>
        </div>
    </div>
    <div class="div col-md-2 col-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar contrato" id="contrato-input">
            <div class="input-group-append ml-2">
                <button class="btn btn-outline-secondary ml-2" type="button" data-page="contrato" onclick="search(this)">Buscar</button>
            </div>
        </div>
    </div>
    <div class="div col-md-2 col-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar produto" id="produto-input">
            <div class="input-group-append ml-2">
                <button class="btn btn-outline-secondary ml-4" type="button" data-page="produto" onclick="search(this)">Buscar</button>
            </div>
        </div>
    </div>

    <div>
        <button class="btn btn-outline-secondary ml-2" type="button" data-page="produto" onclick="search(this)">Limpar</button>

    </div>
</div>

<script>
    function search(e) {
        const page = $(e).data('page')

        const value = $(`#${page}-input`).val()

        const url = `${page}.php?id=${value}`

        console.log("🚀 ~ file: index.php:47 ~ search ~ url", url)
        window.location = `${page}.php?id=${value}`
    }
</script>