@extends('admin.home')

@section('content')
 <div class="container" style="text-align: center">
    @if (session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

       {{ session()->get('message') }}
    </div>
  @endif
     <div class="row">
         <div class="col-md">
             <form action="{{ url('updateDocter',$docter->id) }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 
                 <div>
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" value="{{ $docter->name }}" required>
                 </div>
                
                <div>
                        
                 <label for="phone">Phone</label>
                 <input id="phone" name="phone" type="text" value=" {{$docter->phone }}" required> 
                </div>
                <div>
                 <label for="speaciality">Speciality</label>
                 <input id="speaciality" type="text" name="speaciality" value="{{ $docter->speaciality }}">

                </div>
               <div>
                <label for="speciality">Speciality</label>
                <select name="speciality" id="speciality">
                    <option value="skin">skin</option>
                    <option value="skeleton">skeleton</option>
                    <option value="eye">eye</option>
                    <option value="nose">nose</option>
                </select>
               </div>
                 <div>
                    <label for="room">Room</label>
                    <input id="room" name="room" type="text" value="{{ $docter->room }}" required>
                 </div>
                 
               <div>
                    
                 <label for="image">Doctors Previous Image</label>
                 <img height="100px" src="docter_image/{{ $docter->image }}" alt="">
               </div>
               <div>
                   <label for="image">Upload image</label>
                   <input type="file" name="image" placeholder="image" required>
               </div>
 

                 <button type="submit" class="btn btn-primary btn-sm"> update</button>
             </form>
         </div>
     </div>
 </div>
@endsection