@extends('layouts.appLayout')

@section('content')

    <div class="container">

        <div class="row shadow-banner">
            <a href="{{url('/')}}"><img src="/imagens/banner_full.jpg"></a>
        </div>
        
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12 padding-posts">
                    
                        <div id="destaque">
                            <h3><strong>Colabore com Nosso Projeto</strong></h3>
                            <br>
                            <p>Você pode colaborar doando qualquer quantia ou produtos que são usados pelas mães e recém nascidos. Entre em contato conosco pelo endereço</p>
                            <p>XXXXXXXXXXXXXXXX</p>
                            <p>Você também pode anunciar seu produto ou negócio entrando em contato com:</p>
                            <p><p>XXXXXXXXXXXXXXXX</p>

                            <p>Sua ajuda será muito bem vinda</p>
                        </div>
                        
                    
                </div>
            </div>
        </div>


    </div>

    <div style="text-align: center;padding:30px 0px 30px 0px"">
        <a style="color:#337ab7;" href="{{ url('/') }}">Voltar para a Página Inicial</a>
    </div>

    @section('footer')
        @foreach($footers as $footer)
            @if(!empty($footer -> footer_linha1))
                {{ $footer -> footer_linha1 }}<br>
            @endif
            @if(!empty($footer -> footer_linha2))
                {{ $footer -> footer_linha2 }}<br>
            @endif
            @if(!empty($footer -> footer_linha3))
                {{ $footer -> footer_linha3 }}<br>
            @endif
            @if(!empty($footer -> footer_linha4))
                {{ $footer -> footer_linha4 }}
            @endif
        @endforeach
    @stop


<script type="text/javascript">
     $(document).ready(function(){
        @if (!empty($errors -> all()) || Session::has('flashmsg'))
            $("#myModal").modal('show');
        @endif        
    });
</script>

@stop