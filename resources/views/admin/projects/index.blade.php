@extends('layouts/admin')


@section('content')


<div class="container">

    <h1>Lista Progetti</h1>

</div>

<div class="container d-flex flex-wrap gap-3">

    @foreach ($projects as $project)

    
    
    <div class="card" style="width: 18rem;">
        <div class="card-body d-flex flex-column justify-content-between">

            <a href="{{route('admin.projects.show', $project->slug )}}" class="text-black"><h5 class="card-title">{{$project->title}}</h5>
            </a>
            
                <div class="card-text">
                    <ul>
                        <li><strong>Languages: </strong> {{$project['language']}}</li>
                        <li><strong>Frameworks: </strong> {{$project['framework']}}</li>
                        <li><strong>Execution Date: </strong> {{$project['execution_date']}}</li>
                        <li><strong>Description: </strong> {{$project['description']}}</li>
                        
                    </ul>
                </div>
                <a href="{{$project->link}}" class="card-link">Link Github</a>
            </div>
        </div>


        
    @endforeach

</div>

@endsection