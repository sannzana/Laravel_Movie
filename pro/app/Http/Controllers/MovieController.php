<?php
namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'duration' => 'required|integer',
            'short_description' => 'required',
            'description' => 'required',
            'starring' => 'required',
            'director' => 'required',
            'producer' => 'required',
            'image' => 'image|max:2048',
            'show_dates.*' => 'required|date',
            'show_times.*' => 'required|in:morning,afternoon,evening',
        ]);

        // Create a new Movie instance with validated data
        $movie = new Movie($validatedData);

        // Handle image upload if there is one
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $movie->image = $path;
        }

        // Save the movie instance to the database
        $movie->save();

        // Handle the showtimes
        foreach ($request->input('show_dates', []) as $index => $date) {
            $timeSlots = $request->input("show_times.{$index}", []);
            $timeString = '000';

            foreach ($timeSlots as $timeSlot) {
                if ($timeSlot == 'morning') $timeString[0] = '1';
                if ($timeSlot == 'afternoon') $timeString[1] = '1';
                if ($timeSlot == 'evening') $timeString[2] = '1';
            }


            $movie->showtimes()->create([
                'show_date' => $date,
                'show_time' => $timeString
            ]);
        }

        return redirect()->route('movies.create')->with('success', 'Movie added successfully with showtimes!');
    }





//    for table
//later added might delete

    public function index()
    {
        // Retrieve all movies with their associated showtimes
        $movies = Movie::with('showtimes')->get();

        // Pass the movies to the view
        return view('movies.movieinfo', compact('movies'));
    }


}
