@extends('user.templates.apointment')
@section('main')
<div class="container" style="text-align: center; margin:30px ; padding:30px;" >
    <div class="row">
        <div class="col-md-8">
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Docter Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($apoints as $apoint)
                        <tr align="center">
                            <td>{{ $apoint->name }}</td>
                            <td>{{ $apoint->date }}</td>
                            <td>{{ $apoint->status }}</td>
                            <td>{{ $apoint->message }}</td>
                            <td> <a class="btn btn-danger btn-sm " onclick=" return confirm('Are u sure u wnat to Cancel?')" 
                                href="{{ url('cancel_apoint',$apoint->id) }}">Cancel</a></td>
                        </tr>
                    @endforeach
                </tbody>
           
            </table>
        </div>
    </div>
</div>
@endsection