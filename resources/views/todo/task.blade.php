@extends('base')
@section('main')
    <div class="main text-center ">
        <a  href="{{route('new')}}" class="btn btn-primary m-3">Ajouter<a>
        <div class="main text-center">
            <h4 class="text-center m-3">Mes tâches</h4>
            @foreach ($tasks as $task)
                <div class="task col-lg-10">
                    <div class="task_info">
                        <h5> {{$task->titre}} </h5>
                        <p> {{$task->description}} </p>
                    </div>
                    <div class="datetime">
                        <h5>Debut : {{$task->debut}} </h5>
                        <h5>Fin : {{$task->fin}} </h5>
                        <h5>Date : {{$task->jour}} </h5>
                    </div>
                    <div class="du">
                        <a href="{{route('edittask', $task->id)}}" class="btn btn-primary">Modifier</a>
                        <form action="{{route('endtask', $task->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success">Terminé</button>
                        </form>
                        <form action="{{route('deletetask', $task->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                    
                </div>
            @endforeach
        </div>
    </div>
@endsection