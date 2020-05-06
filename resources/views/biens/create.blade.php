@extends('layouts.app')

@section('title', 'Create Bien')

@section('content')


     <div class="row justify-content-center">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header">Cr&eacute;ation d&lsquo;une offre de bien</div>
                    
                    <form method="post" class="form" class="table" action="{{ route('biens.store') }}" enctype="multipart/form-data">
                         @csrf
                         <div class="container">
                              <div class="form-group">
                                   <label for="type">Type de bien </label>
                                   <input type="text" class="form-control" name="type" />
                              </div>
                              
                              <div class="form-group">
                                   <label for="content">Description du bien </label>
                                   <input type="text" class="form-control" name="content" />
                              </div>
                              <div class="form-group">
                                   <label for="numberroom">Nombre de pi&egrave;ce </label>
                                   <input type="text" class="form-control" name="numberroom" />
                              </div>
                              <div class="form-group">
                                   <label for="surfacearea">Superficie du bien </label>
                                   <input type="text" class="form-control" name="surfacearea" />
                              </div>
                              <div class="form-group">
                                   <label for="localisation">Localisation du bien</label>
                                   <input type="text" class="form-control" name="localisation" />
                              </div>
                              <div class="form-group">
                                   <label for="price">prix du bien :</label>
                                   <input type="text" class="form-control" name="price" />
                              </div>
                            
                              <div class="form-group{{ $errors->has('image') ? ' is-invalid' : '' }}">
                              <label for="image">image du bien </label>
                <div class="custom-file">
                    <input type="file" id="image" name="image"
                           class="{{ $errors->has('image') ? ' is-invalid ' : '' }}custom-file-input" required>
                    <label class="custom-file-label" for="image"></label>
                    @if ($errors->has('image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </div>
                <br>
            </div>
                              
                              
                    
                              <button type="submit" class="btn btn-primary">Submit</button>
                         </div>
                    </form>
               </div>
                </div>
          </div>
   
</div>
@endsection
