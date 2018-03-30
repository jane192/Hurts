<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Song;
use App\Http\Requests\CreateSongsRequest;
use App\Http\Requests\UpdateSongsRequest;
use Illuminate\Http\Request;



class SongController extends Controller {

	/**
	 * Display a listing of songs
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        	   
        $songs = Song::all();

		return view('admin.songs.index', compact('songs'));
	}

	/**
	 * Show the form for creating a new songs
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{

	    
	    return view('admin.songs.create');
	}

	/**
	 * Store a newly created songs in storage.
	 *
     * @param CreateSongsRequest|Request $request
	 */
	public function store(CreateSongsRequest $request)
	{
	    
		Song::create($request->all());

		return redirect('admin/song');
	}

	/**
	 * Show the form for editing the specified songs.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$songs = Song::find($id);
	    
	    
		return view('admin.songs.edit', compact('songs'));
	}

	/**
	 * Update the specified songs in storage.
     * @param UpdateSongsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSongsRequest $request)
	{
		$songs = Song::findOrFail($id);

        

		$songs->update($request->all());

		return redirect('admin/song');
	}

	/**
	 * Remove the specified songs from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Song::destroy($id);

		return redirect('admin/song');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Song::destroy($toDelete);
        } else {
            Song::whereNotNull('id')->delete();
        }

        return redirect('admin/song');
    }

}
