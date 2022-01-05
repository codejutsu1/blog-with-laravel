   <x-app-layout>    
       <x-slot name="header">    
           <h2 class="font-semibold text-xl text-gray-800 leading-tight">    
             {{  __('Create') }}
           </h2>    
       </x-slot>    

       <div class="py-12">    
           <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">    
               <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">    
                   <div class="p-6 bg-white border-b border-gray-200">    
                      <div class="mx-auto container w-4/5">    

                           <x-auth-validation-errors class="mb-4" :errors="$errors" />    
                               
                           <h1 class="text-center font-semibold mb-5 text-2xl">Add New Article</h1>    

                           <form method="POST" action="{{ route('articles.store') }}" class="space-y-3">
                               @csrf    
                               <div>    
                                   <x-label for="name" :value="__('Article Title*')" class="font-normal text-lg"/>    

                                   <x-input id="articleName" class="block mt-1 w-full" type="text" name="title" :value="old('name')" required />    
                               </div>    

                               <div>    
                                   <x-label for="text" :value="__('Article Text*')" class="font-normal text-lg"/>    
                                   <textarea name="description" id="articleText" cols="30" rows="10" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>    
                               </div>    

                               <div>    
                                   <x-label for="categories" :value="__('Categories*')" class="font-normal text-lg"/>    
                                       
                                   <x-input id="politics" class="mt-1" type="checkbox" name="category[]" :value="old('name')"  />    
                                   <x-label for="politics" :value="__('Politics')" class="font-normal inline-block "/><br>    

                                   <x-input id="religion" class="mt-1" type="checkbox" name="category[]"  :value="old('name')"  />    
                                   <x-label for="religion" :value="__('Religion')" class="font-normal inline-block "/><br>    

                                   <x-input id="education" class="mt-1" type="checkbox" name="category[]" :value="old('name')"  />    
                                   <x-label for="education" :value="__('Education')" class="font-normal inline-block"/><br>    

                                   <x-input id="technology" class="mt-1" type="checkbox" name="category[]" :value="old('name')" />    
                                   <x-label for="technology" :value="__('Technology')" class="font-normal inline-block"/>    
                                       
                               </div>    

                               <div>    
                                   <x-label for="tags" :value="__('Tags*')" class="font-normal text-lg"/>    
                                   <x-input id="tag" class="block mt-1 w-full" type="text" name="tag" :value="old('name')" required />    
                               </div>    

                               <div>    
                                   <x-label for="image" :value="__('Main image*')" class="font-normal text-lg"/>    
                                   <x-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('name')"  />    
                               </div>    
                                   
                               <div>    
                                   <x-button id="submit" class="block mt-1" type="submit" name="submit">    
                                        {{ __ ('Submit')  }}
                                   </x-button>    
                               </div>    

                           </form>    

                      </div>    
                   </div>    
               </div>    
           </div>    
       </div>    
   </x-app-layout>
