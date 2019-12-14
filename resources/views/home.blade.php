@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($categories as $category)
        <div class="category">
            <h1>{{$category->name}}</h1>
            @foreach($category->drinks as $drink) 
                <div class="drink">
                    <span class="drink-name">{{$drink->name}}</span>
                    <span class="glass">{{$drink->glass}}</span>
                    <span class="build">{{$drink->method->method}}</span>
                    <ul class="ingredients">
                    @foreach ($drink->ingredients as $ing)
                    <span class="ingredient">
                        <li>{{$ing->amount}} {{ $ing->name}}</li>
                    </span>
                    @endforeach
                    </ul>
                    <span class="garish">Garnish: {{$drink->garnish}}</span>
                </div>
            @endforeach
        </div>
        @endforeach
    </div><!-- end container-->
@endsection