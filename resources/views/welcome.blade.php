@extends('layouts.guest-app')
@section('content')

<div class="jumbotron p-3 mb-4 bg-light rounded-3">
    <div class="container py-5">

        <h1 class="display-5 fw-bold">
            Welcome 
        </h1>
    </div>
</div>

<div class="content">
    <div class="container d-flex flex-wrap gap-3">

        @foreach ($projects as $project)

        <div class="card" style="width: 18rem;">
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="card-title">{{$project->title}}</h5>
              <div class="card-text">
                <ul>
                    <li><strong>Languages: </strong> {{$project->language}}</li>
                    <li><strong>Frameworks: </strong> {{$project->framework}}</li>
                    <li><strong>Execution Date: </strong> {{$project->execution_date}}</li>
                    <li><strong>Description: </strong> {{$project->description}}</li>

                </ul>
              </div>
              <a href="{{$project->link}}" class="card-link">Link Github</a>
            </div>
          </div>
            
        @endforeach

    </div>
</div>
@endsection