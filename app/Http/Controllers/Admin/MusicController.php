<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Musics;
use App\Http\Requests\CreateMusicsRequest;
use App\Http\Requests\UpdateMusicsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\User;


class MusicController extends Controller {

	/**
	 * Display a listing of musics
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $musics = Musics::with("user")->get();

		return view('admin.musics.index', compact('musics'));
	}

	/**
	 * Show the form for creating a new musics
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
        $all=User::all();
        $user=[0=>'Please select'];
            foreach($all as $one){
                $user[$one->id]=$one->name;
            }
	    

	    
	    return view('admin.musics.create', compact("user"));
	}

	/**
	 * Store a newly created musics in storage.
	 *
     * @param CreateMusicsRequest|Request $request
	 */
	public function store(CreateMusicsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Musics::create($request->all());

		return redirect()->route(config('quickadmin.route').'.music.index');
	}

	/**
	 * Show the form for editing the specified musics.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$musics = Musics::find($id);
         $user=[0=>'Please select'];
            foreach($musics as $one){
                $user[$one->id]=$one->name;
            }
	   

	    
		return view('admin.musics.edit', compact('musics', "user"));
	}

	/**
	 * Update the specified musics in storage.
     * @param UpdateMusicsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateMusicsRequest $request)
	{
		$musics = Musics::findOrFail($id);

        $request = $this->saveFiles($request);

		$musics->update($request->all());

		return redirect()->route(config('quickadmin.route').'.music.index');
	}

	/**
	 * Remove the specified musics from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Musics::destroy($id);

		return redirect()->route(config('quickadmin.route').'.music.index');
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
            Musics::destroy($toDelete);
        } else {
            Musics::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.music.index');
    }

}
