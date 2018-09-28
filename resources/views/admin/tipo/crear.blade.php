@extends('layouts.app')
@section('content')
    <h1 class="h2 pt-3 pb-2 mb-3 border-bottom">Datos. Nuevo tipo</h1>

    <form  id="crear" novalidate>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tipo">Tipo de auto</label>
                <input name="tipo" required maxlength="30" type="text" id="tipo" class="form-control">
                <div class="invalid-feedback">
                    Proporcione un valor para el tipo de hasta 30 caracteres.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="descripcion">Descripcion del tipo</label>
                <textarea name="descripcion" maxlength="150" id="descripcion" rows="3" class="form-control"></textarea>
                <div class="invalid-feedback">
                    La descripcion no puede sobrepasar los 150 caracteres.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-default"><i class="fas fa-arrow-left"></i> Cancelar</button>
            <div>
            <button name="guardar" type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
            <button name="nuevo" type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar y Nuevo</button>
            </div>
        </div>
    </form>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var form_crear = document.getElementById('crear');
                    form_crear.addEventListener('submit', function(event) {
                        if (form_crear.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form_crear.classList.add('was-validated');
                    }, false);
            }, false);
        })();
    </script>
@endsection