<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
class MovieSeeder extends Seeder
{
    public function run():void{

    $movies = [
        [
            'title' => 'Stranger Things',
            'duration' => '8hrs',
            'date' => '2016-07-15',
            'genre' => 'Science fiction, Horror, Mystery, Drama.',
            'description' => 'In 1980s Indiana, a group of young friends witness supernatural forces and secret government exploits. As they search for answers, the children unravel a series of extraordinary mysteries.',
            'image_url' => 'https://w0.peakpx.com/wallpaper/542/703/HD-wallpaper-stranger-things-11-1980-demogorgon-eleven-horror-mike-netflix-stranger-things-season-3.jpg',
        ],
        [
            'title' => 'John Wick',
            'duration' => '2hrs 10min',
            'date' => '2014-10-24',
            'genre' => 'Action, Thriller, Crime.',
            'description' => 'An ex-hitman comes out of retirement to track down the gangsters that killed his dog and took everything from him.',
            'image_url' => 'https://w0.peakpx.com/wallpaper/237/961/HD-wallpaper-john-wick-2-film-jw2-assassin-action-keanu-reeves-johnwick-jw2-thumbnail.jpg',
        ],
        [
            'title' => 'Dark',
            'duration' => '26hrs',
            'date' => '2017-12-01',
            'genre' => 'Science fiction, Thriller, Mystery, Drama.',
            'description' => 'A family saga with a supernatural twist, set in a German town where the disappearance of two children exposes the relationships among four families.',
            'image_url' => 'https://w0.peakpx.com/wallpaper/592/913/HD-wallpaper-jonas-dark-dark-netflix-dark-series-everything-is-connected-netflix-triquetra-thumbnail.jpg',
        ],
        [
            'title' => 'Money Heist',
            'duration' => '32hrs',
            'date' => '2017-05-02',
            'genre' => 'Crime, Thriller, Drama.',
            'description' => 'An enigmatic mastermind recruits a group of eight people to carry out an ambitious heist on the Royal Mint of Spain.',
            'image_url' => 'https://w0.peakpx.com/wallpaper/448/845/HD-wallpaper-money-heist-3-la-casa-de-papel-money-heist-nairobi-palermo-the-proffesor-tokyo-thumbnail.jpg',
        ],
        [
            'title' => 'Wednesday',
            'duration' => '6hrs 40min',
            'date' => '2022-11-23',
            'genre' => 'Comedy, Horror, Supernatural.',
            'description' => 'Wednesday Addams attempts to master her psychic ability, thwart a monstrous killing spree, and solve the supernatural mystery that embroiled her parents.',
            'image_url' => 'https://w0.peakpx.com/wallpaper/459/989/HD-wallpaper-jenna-ortega-as-wednesday-thumbnail.jpg',
        ],
        [
            'title' => 'Breaking Bad',
            'duration' => '62hrs',
            'date' => '2008-01-20',
            'genre' => 'Crime, Drama, Thriller.',
            'description' => 'A high school chemistry teacher turned methamphetamine producer teams up with a former student to secure his family\'s future.',
            'image_url' => 'https://w0.peakpx.com/wallpaper/41/726/HD-wallpaper-breaking-bad-basic-breaking-bad-film-logo-serie-series-simple-walter-white-thumbnail.jpg'
        ],
        [
            'title' => 'Elite',
            'duration' => '40hrs',
            'date' => '2018-10-05',
            'genre' => 'Drama, Thriller.',
            'description' => 'When three working-class teenagers enroll in an exclusive private school in Spain, the clash between them and the wealthy students leads to murder.',
            'image_url' => 'https://w0.peakpx.com/wallpaper/414/619/HD-wallpaper-elite-netflix-season-2-serie-tv-thumbnail.jpg'
        ],
        [
            'title' => 'The Witcher',
            'duration' => '16hrs',
            'date' => '2019-12-20',
            'genre' => 'Fantasy, Action, Adventure.',
            'description' => 'Geralt of Rivia, a solitary monster hunter, struggles to find his place in a world where people often prove more wicked than monsters.',
            'image_url' => 'https://w0.peakpx.com/wallpaper/775/951/HD-wallpaper-the-witcher-movie-series-show-the-tv-witcher-thumbnail.jpg'
        ],
    ];

    $categories=Category::all();

    foreach ($movies as $movie) {
        $category=$categories->random();
        Movie::create([ 
            'title' => $movie['title'],
            'duration' => $movie['duration'],
            'date' => $movie['date'],
            'genre' => $movie['genre'],
            'description' => $movie['description'],
            'image_url' => $movie['image_url'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'category_id'=>$category->id,
        ]);
    }
    }
}
