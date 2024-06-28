<x-guest-layout>
    <div class="header">
        <div class="dropdown">
            <button class="link">Select Category</button>
            <div class="dropdown-menu">
                <a class="block hover:bg-sky-200 px-2" href="{{route('home')}}">All Categories</a>
                @foreach ($catlist as $cat)
                    <a class="block hover:bg-sky-200 hover:text-sky-900 px-2" href="{{route('home',$cat->slug)}}">{{$cat->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
<div class="container">
@if ($selected)
        <h1 class="text-3xl bold text-center text-sky-900">{{$selected}}</h1>
    @endif

    @if(count($drinks) > 0)
        @foreach($drinks as $drink)
            <div class="drink flex flex-wrap justify-between border-2 border-sky-800 rounded-md m-3 text-lg">
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
        @endforeach
        {!! $drinks->links() !!}
    @else
        <p class="mt-4 text-center">No Drinks Found</p>
    @endif
    </div>
</x-guest-layout>