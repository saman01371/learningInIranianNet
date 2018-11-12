@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body" >
               <div style="color: rebeccapurple">   {{$user->name}}     </div>
                        @foreach($user->tasks as $t)
                            <li>  {{$t->task_name}}</li>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
