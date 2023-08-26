@extends('base')
@section('main')
<div class="main mt-4">
    <div class=" container col-10">
        <h5 class="mb-3 text-center">Modifier la tâche</h5>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
            
        @endif
        <form action="{{route('updatetask', $task->id)}}" method="POST" class="mb-3">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nom de la tâche : </label>
                <input type="text" class="form-control" name="titre" id="titre" value="{{$task->titre}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description de la tâche :</label>
                <textarea name="description" id="description" class="form-textarea" cols="80" rows="3" value="{{$task->description}}"></textarea>
            </div>
            <div class="mb-3">
                <label for="debut" class="form-label">Debut :</label>
                <input type="time" name="debut" id="debut" class="form-control" value="{{$task->debut}}">
            </div>
            <div class="mb-3">
                <label for="fin" class="form-label">Fin :</label>
                <input type="time" name="fin" id="fin" class="form-control" value="{{$task->fin}}">
            </div>
            <div class="mb-3">
                <label for="jour" class="form-label">Le jour : </label>
                <input type="date" name="jour" id="jour" class="form-control" value="{{$task->jour}}">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
    
</div>
@endsection