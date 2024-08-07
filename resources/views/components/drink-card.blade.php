@props(['drink'])

<div class="drink flex flex-wrap justify-between border-2 border-teal-800 rounded-md m-3 text-lg">
    <div class="title flex justify-between p-2 basis-full">
        <span class="drink-name text-2xl font-bold p-2 basis-1/3">{{$drink->name}}</span>
        <span class="category font-bold p-2">{{$drink->category->name}}</span>
        <span class="glass p-2 basis-1/4 text-right">{{$drink->glass}}</span>
    </div>
    <span class="build p-2">{{$drink->method->method}}</span>
    <ul class="ingredients p-2">
        @foreach ($drink->ingredients as $ing)
        <span class="ingredient">
            <li>{{$ing->amount}} {{ $ing->name}}</li>
        </span>
        @endforeach
    </ul>
    <span class="garnish p-2 basis-1/4 text-center self-end">Garnish: {{$drink->garnish}}</span>
</div>