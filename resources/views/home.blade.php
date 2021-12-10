@extends('layouts.main')

@section('title', 'Kashikoi')

@section('content')

<!-- barre lateral Em alta INICIO -->
<nav class=" navbar alta fixed-end ">
    <ul>

        <h3 class="font">Em Alta</h3>

        <h class="separacaoBlack"> __________________________________________</h>

        <h2 style="color: #E8D413">1°</h2>
        <a href="obra.html"><img src="/images/kabocha.jpg"></a>
        <a href="obra.html" class="altaFont">The Kabocha Wine</a>

        <h2 style="color: #B1C0BB">2°</h2>
        <a href="obra.html"><img src="/images/shed.jpg"></a>
        <a href="obra.html" class="altaFont">Shed! Ryugasaki-san</a>

        <h2 style="color: #BC873E">3°</h2>
        <a href="obra.html"><img src="/images/linguistic.jpg"></a>
        <a href="obra.html" class="altaFont">Heterogeneous Linguistics</a>

        <h class="separacaoBlack"> __________________________________________</h>

        <h3>
            <a href="recomendacoes.html" class="altaFont" >Recomendações</a>
        </h3>

    </ul>
</nav>

<!-- barre lateral Em alta FIM -->

<!-- conteudo Atualizações INICIO -->

<div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 alta container float-start ">

    <h1 class="text-md-start font">Atualizações</h1>

    <hr class="separacaoBlack">

    <div class="box">
        <a href="obra.html">
            <img src="/images/shuuma.jpg" alt="imagem do produto 1">
            <label class="alinhando altaFont">Shoujo Shuumatsu Ryokou</label>
        </a>
    </div>

    <div class="box">
        <a href="obra.html">
            <img src="/images/ballroom.jpg" alt="imagem do produto 2">
            <label class="alinhando altaFont">Ballroom e Youkoso</label>
        </a>
    </div>

    <div class="box">
        <a href="obra.html">
            <img src="/images/silver.jpg" alt="imagem do produto 3">
            <label class="alinhando altaFont">Gin no Saji</label>
        </a>
    </div>

    <div class="box">
        <a href="obra.html">
            <img src="/images/shed.jpg" alt="imagem do produto 4">
            <label class="alinhando altaFont">Shed! Ryugasaki-san</label>
        </a>
    </div>

    <div class="box">
        <a href="obra.html">
            <img src="/images/doro.jpg" alt="imagem do produto 5">
            <label class="alinhando altaFont">Dorohedoro</label>
        </a>
    </div>

    <div class="box">
        <a href="obra.html">
            <img src="/images/spirit.jpg" alt="imagem do produto 6">
            <label class="alinhando altaFont">Spirit Circle</label>
        </a>
    </div>

    <div class="box">
        <a href="obra.html">
            <img src="/images/linguistic.jpg" alt="imagem do produto 6">
            <label class="alinhando altaFont">Heterogeneous Linguistics</label>
        </a>
    </div>

    <div class="box">
        <a href="obra.html">
            <img src="/images/kabocha.jpg" alt="imagem do produto 6">
            <label class="alinhando altaFont">The Kabocha Wine</label>
        </a>
    </div>

</div>

<!-- conteudo Atualizações FIM -->

@endsection
