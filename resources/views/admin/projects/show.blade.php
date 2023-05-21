@extends('layouts/admin')

@section('content')

<div class="container py-5">

    <h1>{{$project->title}}</h1>
    <hr>

    <div id="info" class="d-flex flex-column">

        <span><strong>Execution Date: </strong>{{date("d/m/Y", strtotime($project->execution_date))}}</span>
        <span><strong>Languages: </strong>{{$project->language}}</span>
        <span><strong>Framework: </strong>{{$project->framework}}</span>

    </div>

    <hr>
    <h4>Description</h4>
    <p>{{$project->description}}</p>


    <div id="buttons" class="d-flex flex-column gap-3">

        
        <div id="project-edit">
            <a href="{{route('admin.projects.edit', $project->slug )}}" ><button class="btn btn-primary">Edit Project</button></a>
        </div>

        <div id="project-delete">

            
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete Project</button>
            
            
            <!-- Modal -->
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            
                            <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                                
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete Permanently</button>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
        
    </div>
    
</div>
@endsection