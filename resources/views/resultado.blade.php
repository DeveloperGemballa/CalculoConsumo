<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
</head>
<body>
    <div class="painel">
        <h2>Resultado do Cálculo de consumo</h2>
        <div class="conteudo-painel">
            <div class="sucesso">
                <h3>O valor total do gasto será de:</h3>
                <ul>
                    <li><b>Gasolina:</b> R$ {{$valor}}</li>
                </ul>
            </div>
            <a href="{{url('/')}}" class="botao" title="voltar">Voltar</a>
        </div>
    </div>
</body>
</html>