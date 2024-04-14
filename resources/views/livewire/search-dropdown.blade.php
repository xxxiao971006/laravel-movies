<div class="relative mt-3 md:mt-0">
    <input wire:model.live.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline border border-gray-800 hover:border-white" placeholder="Search">    
    <div wire:loading class="spinner top-0 right-0 mr-4 mt-4"></div>
    @if (strlen($search) > 2)
        <div class="absolute text-sm bg-gray-800 rounded w-64 mt-4">     
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $movie)
                        <li class="border-b border-gray-700">
                            <a href="{{ route('movies.show', ['movie' => $movie['id']]) }}" class="flex hover:bg-gray-700 px-3 py-3 items-center">
                                @if ($movie['poster_path'])
                                    <img src="{{ 'https://image.tmdb.org/t/p/w92/'.$movie['poster_path'] }}" alt="poster" class="w-8">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                                @endif
                                    <span class="ml-4">{{ $movie['title'] }}</span>
                            </a>
                        </li>
                    @endforeach  
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{$search}}"</div>
            @endif
        </div>
    @endif
</div>

