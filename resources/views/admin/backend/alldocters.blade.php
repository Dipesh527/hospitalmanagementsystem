@extends('admin.home')
 @section('content')
     <div class="container m-5 pr-5" >
         <div class="row">
             <div class="col">
                 <table class="table table-striped table-bordered"> 
                     <thead>
                         <tr>
                             <th>Id</th>
                             <th>Name</th>
                             <th>Number</th>
                             <th>Speciality</th>
                             <th>Room</th>
                             <th>IMage</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($docters as $docter)
                             <tr align="center">
                                 <td>{{ $docter->id }}</td>
                                 <td>{{ $docter->name }}</td>
                                 <td>{{ $docter->phone }}</td>
                                 <td>{{ $docter->speaciality }}</td>
                                 <td>{{ $docter->room }}</td>
                                 <td> <img height="150px" src="docter_image/{{ $docter->image }}" alt=""></td>
                                 <td> <a type="button" class="btn btn-danger btn-sm" href="{{ url('deletedocters',$docter->id) }}">
                                     delete</a></td>
                            <td> <a class="btn btn-primary btn-sm" href="{{ url('updatedocters',$docter->id) }}"> Update</a></td>
                                    
                                    
                        </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 @endsection