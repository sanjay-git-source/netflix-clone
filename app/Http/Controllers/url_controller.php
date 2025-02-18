<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Movie;

class url_controller extends Controller
{
    public function index(){
        $title="Netflix - (Home)";
        return view('index',compact('title'));
    }


    public function explore(Request $request){

        $title="Netflix - (Explore)";

      // Get all datas from db

      // $movies=Movie::all();
      
     // Get all datas from private function

      //$this->getMovies();
      
    // Get 4 datas from db for pagination

      //$movies=Movie::paginate(4);

      // for search movies 

      $query=Movie::query();

       if($request->has('search') && !empty($request->search)){
        $query->where('title','like','%'.$request->search.'%')
        ->orWhere('description','like','%'.$request->search.'%');   

      } 

    $movies = $query->paginate(4);


        return view('explore',compact('title','movies'));
    }     
    /* 
    private function getMovies(){

        return json_decode(json_encode([
            [
                'id' => 1,
                'title' => 'Stranger Things',
                'image_url' => 'https://w0.peakpx.com/wallpaper/542/703/HD-wallpaper-stranger-things-11-1980-demogorgon-eleven-horror-mike-netflix-stranger-things-season-3.jpg',
                'duration' => '8hrs',
                'date' => '15 July 2016',
                'genre' => 'Science fiction, Horror, Mystery, Drama.',
                'desc' => 'In 1980s Indiana, a group of young friends witness supernatural forces and secret government exploits. As they search for answers, the children unravel a series of extraordinary mysteries.'
            ],
            [
                'id' => 2,
                'title' => 'John Wick',
                'image_url' => 'https://w0.peakpx.com/wallpaper/237/961/HD-wallpaper-john-wick-2-film-jw2-assassin-action-keanu-reeves-johnwick-jw2-thumbnail.jpg',
                'duration' => '2hrs 10min',
                'date' => '24 October 2014',
                'genre' => 'Action, Thriller, Crime.',
                'desc' => 'An ex-hitman comes out of retirement to track down the gangsters that killed his dog and took everything from him.'
            ],
            [
                'id' => 3,
                'title' => 'Dark',
                'image_url' => 'https://w0.peakpx.com/wallpaper/592/913/HD-wallpaper-jonas-dark-dark-netflix-dark-series-everything-is-connected-netflix-triquetra-thumbnail.jpg',
                'duration' => '26hrs',
                'date' => '1 December 2017',
                'genre' => 'Science fiction, Thriller, Mystery, Drama.',
                'desc' => 'A family saga with a supernatural twist, set in a German town where the disappearance of two children exposes the relationships among four families.'
            ],
            [
                'id' => 4,
                'title' => 'Money Heist',
                'image_url' => 'https://w0.peakpx.com/wallpaper/448/845/HD-wallpaper-money-heist-3-la-casa-de-papel-money-heist-nairobi-palermo-the-proffesor-tokyo-thumbnail.jpg',
                'duration' => '32hrs',
                'date' => '2 May 2017',
                'genre' => 'Crime, Thriller, Drama.',
                'desc' => 'An enigmatic mastermind recruits a group of eight people to carry out an ambitious heist on the Royal Mint of Spain.'
            ],
            [
                'id' => 5,
                'title' => 'Wednesday',
                'image_url' => 'https://w0.peakpx.com/wallpaper/459/989/HD-wallpaper-jenna-ortega-as-wednesday-thumbnail.jpg',
                'duration' => '6hrs 40min',
                'date' => '23 November 2022',
                'genre' => 'Comedy, Horror, Supernatural.',
                'desc' => 'Wednesday Addams attempts to master her psychic ability, thwart a monstrous killing spree, and solve the supernatural mystery that embroiled her parents.'
            ],
            [
                'id' => 6,
                'title' => 'Breaking Bad',
                'image_url' => 'https://w0.peakpx.com/wallpaper/41/726/HD-wallpaper-breaking-bad-basic-breaking-bad-film-logo-serie-series-simple-walter-white-thumbnail.jpg',
                'duration' => '62hrs',
                'date' => '20 January 2008',
                'genre' => 'Crime, Drama, Thriller.',
                'desc' => 'A high school chemistry teacher turned methamphetamine producer teams up with a former student to secure his family\'s future.'
            ],
            [
                'id' => 7,
                'title' => 'Elite',
                'image_url' => 'https://w0.peakpx.com/wallpaper/414/619/HD-wallpaper-elite-netflix-season-2-serie-tv-thumbnail.jpg',
                'duration' => '40hrs',
                'date' => '5 October 2018',
                'genre' => 'Drama, Thriller.',
                'desc' => 'When three working-class teenagers enroll in an exclusive private school in Spain, the clash between them and the wealthy students leads to murder.'
            ],
            [
                'id' => 8,
                'title' => 'The Witcher',
                'image_url' => 'https://w0.peakpx.com/wallpaper/775/951/HD-wallpaper-the-witcher-movie-series-show-the-tv-witcher-thumbnail.jpg',
                'duration' => '16hrs',
                'date' => '20 December 2019',
                'genre' => 'Fantasy, Action, Adventure.',
                'desc' => 'Geralt of Rivia, a solitary monster hunter, struggles to find his place in a world where people often prove more wicked than monsters.'
            ]
        ])); 
    }
    
 */

 // this one is find by id
    /* public function movieDetail($id){

        $title="Netflix - (Movie Detail)";

         $movies=$this->getMovies();

        $movie=collect($movies)->firstWhere('id',$id);

        $movie=Movie::find($id);

    return view('movieDetail',compact('movie','title'));

        try {
            $title="Netflix -(Movie Detail)";
            $movie=Movie::findOrFail($id);
            return view('movieDetail',compact('title','movie'));

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {

            return response()->view('errors.404',[],404);
}

    }*/


    public function movieDetail($slug){
        
        try {

    $title="Netflix -(Movie Detail)";

      $movie=Movie::where('slug',$slug)->first();

      if(!$movie){

       throw new \Illuminate\Database\Eloquent\ModelNotFoundException ;
      }

      $category=$movie->category;

      $related_movies=Movie::where('category_id',$category->id)
      ->where('id','!=',$movie->id)
      ->take(5)
      ->get();
      return view('movieDetail',compact('movie','title','related_movies'));
      
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return response()->view('errors.404',[],404);
        }
    }

    
}
 