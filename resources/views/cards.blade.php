@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($categories as $category)
            @foreach($category->drinks as $drink) 
                <div class="drink">
                    <div class="title">
                        <span class="drink-name">{{$drink->name}}</span>
                        <span class="category">{{$category->name}}</span>
                        <span class="glass">{{$drink->glass}}</span>
                    </div>
                    <span class="build">{{$drink->method->method}}</span>
                    <ul class="ingredients">
                    @foreach ($drink->ingredients as $ing)
                    <span class="ingredient">
                        <li>{{$ing->amount}} {{ $ing->name}}</li>
                    </span>
                    @endforeach
                    </ul>
                    <span class="garnish">Garnish: {{$drink->garnish}}</span>
                </div>
            @endforeach
        </div>
        @endforeach
    </div><!-- end container-->
@endsection