@extends('layouts.gerenciadorLayout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Galeria de Fotos</h2>
                    <p>Use o Ctrl ou o Shift para inserir mais de uma imagem</p>
                </div>

                <div class="panel-body">

                    @if (!empty($errors -> all()))
                        <div class="alert alert-danger">{{ $errors -> first() }}</div>
                    @elseif (Session::has('flashmsg'))
                        <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
                    @endif

                    <div class="form-group marginsV col-md-12 oneline-input">
                        
                        <div class="form-group marginsV col-md-12">

                            @if(empty($principals))

                                {!! Form::open(['url' => 'galeria/salvar_galeria', 'method' => 'POST', 'files' => true, 'class' => 'form-inline']) !!} {{ csrf_field() }}
                            @else

                                {!! Form::model($galerias, ['url' => 'galeria/'.$galerias -> id , 'method' => 'PATCH', 'files' => true, 'class' => 'form-inline']) !!}
                            @endif

                                {!! Form::label('desc','Descrição da(s) Imagem(s):') !!}
                                {!! Form::input('text', 'galeria_descricao', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Descrição']) !!}

                                {!! Form::label('img','Imagem(s):') !!}
                                {{ Form::file('galeria_imagem[]', ['multiple' => 'multiple']) }}

                                <br>
                                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}    
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
