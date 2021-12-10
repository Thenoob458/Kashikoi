@extends('layouts.main')

@section('title', "$search")

@section('content')

<!-- filtro de conteudo -->
<div class="filtro">
    <table>
        <tr>
            <!--barra de busca-->
            <td>
                <form >
                    <input class="form-control form-control-lg" style="background-color: #46BF95; border-radius: 100px; color: black" placeholder="Filtrar">
                </form>
            </td>

            <!--dropdown-->
            <td style="padding-left: 50px">
                <select class="botao">
                    <option>Escolha</option>
                    <option>primeiro</option>
                    <option>segundo</option>
                    <option>terceiro</option>
                </select>
            </td>

            <!--botao de filtrar-->
            <td style="padding-left: 50px">
                <button class="botao fas fa-search "> Filtrar</button>
            </td>

        </tr>
    </table>
</div>


<!-- lista de conteudos-->
<table>
    <tr>
        <td>
            <a href="obra.html">
                <img src="/images/place_holder.jpg" style="height: 200px; padding-left: 50px"/>
            </a>
        </td>

        <td class="titulo" style="padding: 100px 50px">Nome da Obra 1</td>

    </tr>

    <tr>
        <td>
            <a href="obra.html">
                <img src="/images/place_holder.jpg" style="height: 200px; padding-left: 50px"/>
            </a>
        </td>

        <td class="titulo" style="padding: 100px 50px">Nome da Obra 2</td>

    </tr>

    <tr>
        <td>
            <a href="obra.html">
                <img src="/images/place_holder.jpg" style="height: 200px; padding-left: 50px"/>
            </a>
        </td>

        <td class="titulo" style="padding: 100px 50px">Nome da Obra 3</td>

    </tr>

</table>

@endsection
