@extends('layouts.admin')
@section('title', $category->exists ? 'Modifier un Categorie' : 'Ajouter un Categorie' )

@section('content')
    <h1>@yield('title')</h1>
    <form action="{{route($category->exists ? 'admin.categorie.update' : 'admin.categorie.store')}}" method="post">
        @csrf
        @method($category->exists ? 'put' : 'post')
        <div class="row">
            @include('shared.input',['class'=>'col','label'=> 'Name', 'name' => 'name',"value"=> $category->name] )
        </div>

        <button class="btn btn-success">
            @if ($category->exists )
                Modifier
            @else
                Ajouter
            @endif
        </button>
    </form>
@endsection
    
