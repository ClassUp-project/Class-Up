<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Class'Up</title>
    <style>
        h1 {
            color: blue;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 5%
        }

        span {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 25px;
            font-style: italic;
            color: brown
        }

        .font-weight-bold{

            color: black;
        font-size: 25px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .pt-2{
            font-family: 'fantasy', sans-serif;
            font-size:  25px;

        }

    </style>
</head>
@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center mt-5   pl-4 d-flex">
        <div class="col-3 p-5">
            <img src="/image-profile/face.png" style="max-height:200px;" alt="face" class="rounded-circle"></<img>
            <a href="#" class=" btn btn-outline-danger  mt-5 ml-4 rounded-pill align-baseline"  role="button" aria-pressed="true">Rajoute un nouveau Poste</a>
        </div>

        <div class="col-9 p-5 pt-5 border-3 mr-20 card text-center  ">

            <div>
                <h1>Profile</h1>

            </div>
            <div class=".d-inline-flex">
                <div><strong>Prenom:</strong><span class="ml-2">{{$user->surname}}</div></span>
                <div><strong>Nom: </strong><span class='ml-2'>{{$user->name}}</div></span>
                <div><strong>Email: </strong><span class='ml-2'>{{$user->email}}</div></span>
            </div>
            <div class="pt-5 font-weight-bold">Actu</div>
            <div>
            <p class="text-center pt-2">{{$user->profile->description}}</p>
            </div>
        <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>

    <div class="row pt-5 pl-6">
        <div class="col-4">
            <img src="/avatar/plante.jpg" alt="" class="w-100">
        </div><div class="col-4">
            <img src="/avatar/migion.jpg" alt="" class="w-100">
        </div><div class="col-4">
            <img src="/avatar/ville.jpg" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection

</body>

</html>