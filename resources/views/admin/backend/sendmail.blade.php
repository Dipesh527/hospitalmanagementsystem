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
            <form action="{{ url('mailsend',$data->id) }}" method="POST">
                @csrf
                <div>
                    <label for="greeting">Greeting</label>
                    <input type="text" name="greeting" id="greeting" placeholder="Greeting" required>
                </div>
                <div>
                    <label for="body">Body</label>
                    <input type="text" name="body" id="body" placeholder="Body" required>
                </div>
                <div>
                    <label for="actiontext">Text</label>
                    <input type="text" name="actiontext" id="actiontext" placeholder="Text" required>
                </div>
                <div>
                    <label for="actionurl">ActionUrl</label>
                    <input type="text" name="actionurl" id="actionurl" placeholder="actionurl" required>
                </div>
                <div>
                    <label for="endpart">End part</label>
                    <input type="text" name="endpart" id="endpart" placeholder="endpart" required>
                </div>
                <button type="submit" class="btn btn-primary btn-sm"> Submit</button>
            </form>
         </div>
     </div>
 </div>
@endsection