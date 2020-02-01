@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <br>
    <a href="{{url('/create')}}" class="btn btn-primary" >Create Movie</a>
    <a href="{{url('/production/create')}}" class="btn btn-info" >Add Production House</a>
    <br>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Genre</th>
                <th>Production House</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $list)
            <tr>
                <td>{{ $list->movie }}</td>
                <td>{{ $list->genre }}</td>
                <td>{{ $list->prodHouse }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection