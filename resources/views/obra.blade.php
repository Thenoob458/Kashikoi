@extends('layouts.main')

@section('title', "{$information[0]->nome}")

@section('content')

<table>
    <tr>
        <td> <img src="/images/{{$name}}.jpg" class="placeHolderObras text" style="padding-left: 50px"></td>

        <td class="titulo"><h2>Nome:<br>{{$information[0]->nome}}</h2></td>

        <td class="titulo"><h2>Gênero:<br>{{$information[0]->genero}}</h2></td>

        <?php if($information[0]->tipo === 0) { $tipo = "mangá"; } else { $tipo = "anime"; } ?>

        <td class="titulo"><h2>Tipo de midia:<br>{{$tipo}}<br></h2></td>

        <td class="titulo"><h2>Artista:<br>{{$information[0]->artista}}</h2></td>

        <td class="titulo"><h2>Autor:<br>{{$information[0]->autor}}</h2></td>

        <?php
        $situacao = $information[0]->situacao_pais_origem;

        if($situacao === 1) { $situacao_pais_origem = "Em publicação"; }
        elseif($situacao === 2) { $situacao_pais_origem = "Completo"; }
        elseif($situacao === 3) { $situacao_pais_origem = "Hiatus"; }
        elseif($situacao === 4) { $situacao_pais_origem = "Cancelado"; } ?>

        <td class="titulo"><h2>Situação paid de origem:{{$situacao_pais_origem}}</h2></td>
    </tr>
</table>

<hr class="separacao">
<div>
    <p class="text" style="padding: 0px 50px">{{$information[0]->descricao}}</p>
</div>

@endsection
