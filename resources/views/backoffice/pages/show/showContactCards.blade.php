@extends('template.second')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="py-3 px-4">
            <div class="card text-center" style="width: 30rem;">
                <div class="card-body">
                <h3 class="card-title">Margin : {{$show->divColClass}}</h3>
                <h4 class="card-subtitle mb-2 ">Icon : {{$show->iClass}}</h4>
                <h3 class="card-title">Title : {{$show->title}}</h3>
                <h4 class="card-subtitle mb-2 ">Description : {{$show->description}}</h4>
                <a href="/backoffice" class="card-link">Go Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection