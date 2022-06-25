<x-guest-layout>
    <div class="header">
        <div class="dropdown">
            <button class="link">Select Category</button>
            <div class="dropdown-menu">
                <a class="block hover:bg-zinc-200 px-2" href="{{route('home')}}">All Categories</a>
                @foreach ($catlist as $cat)
                    <a class="block hover:bg-zinc-200 px-2" href="{{route('home',$cat->slug)}}">{{$cat->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
<div class="container">
    @foreach($categories as $category)
        @foreach($category->drinks as $drink)
            <div class="drink flex flex-wrap justify-between border-2 border-slate-500 rounded-md m-3 text-lg">
                <div class="title flex justify-between p-2 basis-full">
                    <span class="drink-name text-2xl font-bold p-2 basis-1/3">{{$drink->name}}</span>
                    <span class="category font-bold p-2">{{$category->name}}</span>
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
        @endforeach
    @endforeach
    </div>
</x-guest-layout>