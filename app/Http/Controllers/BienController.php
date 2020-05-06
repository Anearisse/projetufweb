<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bien;

class BienController extends Controller
{
   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $biens = Bien::all();
       return view('biens.index', compact('biens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'content'=>'required',
        'numberroom'=>'required',
        'type'=>'required',
        'surfacearea'=>'required',
        'localisation'=>'required',
        'price'=>'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
      $bien = new Bien([
         'content' => $request->get('content'),
          'numberroom' => $request->get('numberroom'),
            'type' => $request->get('type'),
              'surfacearea' => $request->get('surfacearea'),
                'localisation' => $request->get('localisation'),
                  'image' => $request->get('image'),
                    'price' => $request->get('price')
                  
      ]);
      
      $bien->save();
      
      return redirect('/biens');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bien = Bien::find($id);
        
        return view('biens.show',  ['bien'=> $bien]);
    
    }

    public function showuser($id)
    {
          $user = User::find($id());
          
          return view('auth.showuser', ['user'=> $user]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bien = bien::find($id);
        
        return view('biens.edit', compact('bien'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
       'content'=>'required',
        'numberroom'=>'required',
        'type'=>'required',
        'surfacearea'=>'required',
        'localisation'=>'required',
        'price'=>'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
     
        ]);
        
        $bien = Bien::find($id);
        $bien->content = $request->get('content');
        $bien->numberroom = $request->get('numberroom');
        $bien->type = $request->get('type');
        $bien->surfacearea = $request->get('surfacearea');
        $bien->localisation = $request->get('localisation');
        $bien->price = $request->get('price');
        $bien->image = $request->get('image');
      
        $bien->save();
        
        return redirect('/biens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bien = Bien::find($id);
        $bien->delete();
        
        return redirect('/biens');
    }
}
