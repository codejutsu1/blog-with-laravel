<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <!-- Your articles will display here once you create one. -->
                   @foreach($posts as $post)
                    <h1 class="text-center font-bold text-4xl tracking-wide">{{ $post->title }}</h1>
                    <div class="text-center space-x-3 my-7">
                        <span class="font-semibold">Author: {{ $post->user->name }} </span>
                        <span class="font-semibold">Category: 
                        @if($post->category) 
                            @foreach ($post->category as $value)
                                {{ $value }}  
                            @endforeach
                        @else
                            {{ 'None' }}
                        @endif    
                    </span>
                        <span class="font-semibold">Tags: {{ $post->tag->tag ?? 'None' }} </span>
                    </div>
                    <div>
                        <p>
                            {{ $post->description }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<!-- 
    1. Need to work on the article_id in the tag and category table
    2.
 -->
