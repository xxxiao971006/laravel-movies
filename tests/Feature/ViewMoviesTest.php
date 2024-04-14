<?php

// namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
// use Tests\TestCase;
// use Illuminate\Support\Facades\Http;

// class ViewMoviesTest extends TestCase
// {
//     /**
//      * A basic feature test example.
//      *
//      * @return void
//      */
//     public function testTheMainPageShowsCorrectInfo()
//     {
//         Http::fake(
//             [
//                 'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
//                 'https://api.themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayingMovies(),
//                 'https://api.themoviedb.org/3/genre/movie/list' => $this->fakeGenres(),
//             ]
//         );
//         $response = $this->get(route('movies.index'));

//         $response->assertSuccessful();
//         $response->assertSee('Popular Movies');
//         $response->assertSee('Now Playing');
//         $response->assertSee('Genres');
//     }

//     private function fakePopularMovies()
//     {
//         return Http::response(
//             [
//                 'results' => [
//                     [
//                         "popularity" => 1000.0,
//                         "vote_count" => 1000,
//                         "video" => false,
//                         "poster_path" => "/poster.jpg",
//                         "id" => 1,
//                         "adult" => false,
//                         "backdrop_path" => "/backdrop.jpg",
//                         "original_language" => "en",
//                         "original_title" => "Fake Movie",
//                         "genre_ids" => [1, 2],
//                         "title" => "Fake Movie",
//                         "vote_average" => 9.9,
//                         "overview" => "This is a fake movie",
//                         "release_date" => "2020-12-12",
//                     ],
//                 ],
//             ],
//             200
//         );
//     }

//     private function fakeNowPlayingMovies()
//     {
//         return Http::response(
//             [
//                 'results' => [
//                     [
//                         "popularity" => 1000.0,
//                         "vote_count" => 1000,
//                         "video" => false,
//                         "poster_path" => "/poster.jpg",
//                         "id" => 1,
//                         "adult" => false,
//                         "backdrop_path" => "/backdrop.jpg",
//                         "original_language" => "en",
//                         "original_title" => "Fake Movie",
//                         "genre_ids" => [1, 2],
//                         "title" => "Fake Movie",
//                         "vote_average" => 9.9,
//                         "overview" => "This is a fake movie",
//                         "release_date" => "2020-12-12",
//                     ],
//                 ],
//             ],
//             200
//         );
//     }

//     private function fakeGenres()
//     {
//         return Http::response(
//             [
//                 'genres' => [
//                     [
//                         "id" => 1,
//                         "name" => "Action",
//                     ],
//                     [
//                         "id" => 2,
//                         "name" => "Adventure",
//                     ],
//                 ],
//             ],
//             200
//         );
//     }
// }

?>