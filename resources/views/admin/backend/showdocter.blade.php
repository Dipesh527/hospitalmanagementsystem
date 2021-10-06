@extends('admin.home')
@section('content')
    <div class="container" style="text-align: center">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-borderd">
                    <thead>
                        <tr align="center">
                            <th>Name</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Docter Name</th>
                            <th>Approved</th>
                            <th>Canceled</th>
                            <th>Sendmail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apoints as $apoint)
                            
                        <tr>
                            <td>{{ $apoint->name }}</td>
                            <td>{{ $apoint->number }}</td>
                            <td>{{ $apoint->email }}</td>
                            <td>{{ $apoint->status }}</td>
                            <td>{{ $apoint->message }}</td>
                            <td>{{ $apoint->date }}</td>
                            <td>{{ $apoint->docter }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ url('approved',$apoint->id) }}"> Approved</a>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="{{ url('canceled',$apoint->id) }}"> Canceled</a>

                            </td>
                            <td>
                                <a class="btn btn-secondary btn-sm" href="{{ url('sendmail',$apoint->id) }}"> Sendmail</a>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection