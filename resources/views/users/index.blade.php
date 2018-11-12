@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        @foreach($aaa as $a)
                            <li><a href="/user/{{$a->id}}">   {{$a->name}}</a></li>



                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
