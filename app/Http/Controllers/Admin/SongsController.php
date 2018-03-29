<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Songs;
use App\Http\Requests\CreateSongsRequest;
use App\Http\Requests\UpdateSongsRequest;
use Illuminate\Http\Request;



class SongsController extends Controller {

	/**
	 * Display a listing of songs
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $songs = Songs::all();

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
	    
		Songs::create($request->all());

		return redirect()->route(config('quickadmin.route').'.songs.index');
	}

	/**
	 * Show the form for editing the specified songs.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$songs = Songs::find($id);
	    
	    
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
		$songs = Songs::findOrFail($id);

        

		$songs->update($request->all());

		return redirect()->route(config('quickadmin.route').'.songs.index');
	}

	/**
	 * Remove the specified songs from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Songs::destroy($id);

		return redirect()->route(config('quickadmin.route').'.songs.index');
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
            Songs::destroy($toDelete);
        } else {
            Songs::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.songs.index');
    }

}
