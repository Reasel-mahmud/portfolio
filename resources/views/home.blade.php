@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    hello :{{auth()->user()->name}}<br>
                    Your Id :{{auth()->user()->id}}<br>
                    created_at :{{auth()->user()->created_at->diffForHumans()}}

                </div>
            </div>
            <table class="table table-bordered mt-3">
                <thead>
                  <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">name</th>
                    <th scope="col">Id</th>
                    <th scope="col">Email</th>
                    <th>Crated At</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach ($users as $user )
                    <tr>
                        <td>{{$i++}}</td>
                        <th scope="row">{{$user->name}}</th>
                        <td>{{$user->id}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                      </tr>
                    @endforeach


                </tbody>
              </table>
        </div>

    </div>
</div>


@endsection
