{{-- Erros padrões do Validador --}}
@if (count($errors))
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger alert-white rounded">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <div class="icon"><i class="fa fa-times-circle"></i></div>
                <strong>Erro!</strong> <br>{!! implode('<br>', $errors->all()) !!}
            </div>
        </div>
    </div>
@endif