@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/png/duckMain.png" style="height:150px;background:lightBlue;" alt="duck image" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>    

            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> post</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">
                freeInstagramCode.org
            </div>

            <div>
                This is a clone of Instagram with de only proporse to learn who to programme a website.
            </div>

            <div>
                <a href="#">www.instagramClone.org</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src=https://img.freepik.com/foto-gratis/gato-canasta_1339-805.jpg?size=626&ext=jpg alt="gato" class="w-100">
            
        </div>
        <div class="col-4">
            <img src=https://img.freepik.com/foto-gratis/vista-frontal-gato-shorthair-britanico-gris-que-mira-fijamente_23-2148045713.jpg?size=626&ext=jpg alt="gato" class="w-100">
            
        </div>
        <div class="col-4">
            <img src=https://img.freepik.com/foto-gratis/atigrado-piso-cemento-azul-mirando-izquierda_1150-19545.jpg?size=626&ext=jpg alt="gato" class="w-100">
            
        </div>
    </div>
</div>
@endsection
