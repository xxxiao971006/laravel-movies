@extends('layouts.main')
@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container border-b border-gray-800 mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="parasite" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{$movie['title'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-3">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M12 2a10 10 0 0 1 10 10c0 6.08-5.2 11.08-10 16-4.82-4.92-10-9.92-10-16a10 10 0 0 1 10-10zm0 18a8 8 0 0 0 8-8 8 8 0 0 0-8-8 8 8 0 0 0-8 8 8 8 0 0 0 8 8z" data-name="heart"/><path d="M12 17.54l-1.55-1.41a3.5 3.5 0 0 0-4.9-5.1 3.5 3.5 0 0 0 0 5.1l1.55 1.41a1 1 0 0 0 1.4 0l1.55-1.41a3.5 3.5 0 0 0 0-5.1 3.5 3.5 0 0 0-4.9 5.1z" data-name="arrow-ios-back"/></g></svg>
                    <span class="ml-1">{{$movie['vote_average'] * 10 . '%'}}</span>
                    <span class="mx-2">|</span>
                    <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                            {{ $genre['name'] }}@if (!$loop->last), @endif
                        @endforeach
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{$movie['overview']}}
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                                <div class="mr-8">
                                    <div>{{$crew['name']}}</div>
                                    <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                                </div>
                            @endif
                        @endforeach
                        
                </div>

                @if (count($movie['videos']['results']) > 0)
                <div class="mt-12">
                    <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-500">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 3h18v2H3V3zm0 5h12v2H3V8zm0 4h12v2H3v-2zm0 4h12v2H3v-2zm18-7l-5 5 5 5V9z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </a>
                </div>
                @endif
            </div>
        </div>

        
    </div> <!-- end movie-info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($movie['credits']['cast'] as $cast)
                @if ($loop->index < 5)
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$cast['profile_path'] }}" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">{{$cast['name']}}</a>
                            <div class="text-gray-400 text-sm">{{$cast['character']}}</div>
                        </div>
                    </div>
                @endif    
            @endforeach
        </div>
    </div>

    <div class="movie-images">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($movie['images']['backdrops'] as $image)
                @if ($loop->index < 9)
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="movie1" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
            