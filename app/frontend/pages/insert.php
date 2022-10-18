<?php

?>
<div class="container">
    <form action="" method="POST">
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nome: </label>
            <div class="col-sm-6">
                <input type="text" name="name" class="form-control" placeholder="Peixe" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Url imagem: </label>
            <div class="col-sm-6">
                <input type="text" name="image_src" class="form-control" placeholder="url" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição: </label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Inteligencia: </label>
                    <div class="col-sm-2">
                        <input type="number" min="0" max="100" name="intelligence" class="form-control">
                    </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Poder: </label>
                    <div class="col-sm-2">
                        <input type="number" min="0" max="100" name="power" class="form-control">
                    </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Defesa: </label>
                    <div class="col-sm-2">
                        <input type="number" min="0" max="100" name="defense" class="form-control">
                    </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Mobilidade: </label>
                    <div class="col-sm-2">
                        <input type="number" min="0" max="100" name="mobility" class="form-control">
                    </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Vida: </label>
                    <div class="col-sm-2">
                        <input type="number" min="0" max="100" name="hp" class="form-control">
                    </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Furtividade: </label>
                    <div class="col-sm-2">
                        <input type="number" min="0" max="100" name="stealth" class="form-control">
                    </div>
                </div>
            </li>
        </ul>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
