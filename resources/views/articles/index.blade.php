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
                   <div class="flex justify-between">
                       <div class="w-3/6">
                           <h1 class="text-center mt-6 mb-12 font-semibold text-lg tracking-wider">Newest Articles</h1>

                           @foreach($posts as $post)
                           <div class="flex mb-10 shadow-md w-11/12 mx-auto">
                                <div class="w-2/5 bg-gray-400">

                                </div>
                                <div class="border-2 border-gray-100 w-3/5 py-6 px-4 tracking-wider">
                                    <h1 class="font-semibold text-2xl">{{ $post->title }}</h1>
                                    <p class="text-sm font-semibold my-2">Author: James Arthur</p>
                                    <p class="text-xs font-semibold text-gray-400 italic">Categories: Politics | Education</p>
                                    <p class="tracking-wide mt-4">
                                        {{ $post->description }}
                                    </p>
                                </div>
                           </div>
                           @endforeach

                           <!-- <div class="flex mb-10 shadow-md w-11/12 mx-auto">
                                <div class="w-2/5 bg-gray-400">

                                </div>
                                <div class="w-3/5 py-6 px-4 tracking-wider border-2 border-gray-100">
                                    <h1 class="font-semibold text-2xl">Fourth Article</h1>
                                    <p class="text-sm font-semibold my-2">Author: James Arthur</p>
                                    <p class="text-xs font-semibold text-gray-400 italic">Categories: Politics | Education</p>
                                    <p class="tracking-wide mt-4">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aut, corporis exercitationem perspiciatis similique, voluptate molestias cupiditate dolor esse in recusandae dolores temporibus et id debitis. Praesentium iure dolores harum!
                                    </p>
                                </div>
                           </div>

                           <div class="flex mb-10 shadow-md w-11/12 mx-auto">
                                <div class="w-2/5 bg-gray-400">

                                </div>
                                <div class="w-3/5 py-6 px-4 tracking-wider border-2 border-gray-100">
                                    <h1 class="font-semibold text-2xl">Fourth Article</h1>
                                    <p class="text-sm font-semibold my-2">Author: James Arthur</p>
                                    <p class="text-xs font-semibold text-gray-400 italic">Categories: Politics | Education</p>
                                    <p class="tracking-wide mt-4">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aut, corporis exercitationem perspiciatis similique, voluptate molestias cupiditate dolor esse in recusandae dolores temporibus et id debitis. Praesentium iure dolores harum!
                                    </p>
                                </div>
                           </div> -->
                       </div>



                       <div class="w-2/6 py-6 px-4">


                            <div class="border-2 border-gray-100 shadow-md mb-16">
                                <div class="border-b border-gray-300 text-center py-2">
                                    <p>Search by keyword</p>
                                </div>
                                <div class="pl-2 py-3">
                                    <x-input type="text" name="search" required/><x-button>Search</x-button>
                                </div>
                            </div>


                            <div class="border-2 border-gray-100 shadow-md mb-16">
                                <div class="border-b border-gray-300 text-center py-2">
                                    <p>Categories</p>
                                </div>
                                <div class="pl-2 py-3">
                                    <ul class="space-y-3 list-disc list-inside">
                                        <li><a href="#">Politics</a></li>
                                        <li><a href="#">Religion</a></li>
                                        <li><a href="#">Education</a></li>
                                        <li><a href="#">Technology</a></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="border-2 border-gray-100 shadow-md mb-16">
                                <div class="border-b border-gray-300 text-center py-2">
                                    <p>Tags</p>
                                </div>
                                <div class="pl-2 py-3">
                                    <ul class="space-y-3 list-disc list-inside">
                                        <li><a href="#">Breaking</a></li>
                                        <li><a href="#">Videos</a></li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
