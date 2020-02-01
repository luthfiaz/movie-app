@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{url('/production/add')}}">
        @csrf
        <div class="bd-example">
            <div class="form-group">
                <label>Production House Name</label>
                <input class="form-control" type="text" placeholder="House of Productivity" name="name" required>
            </div>

            <button class="btn btn-primary" type="submit" id="save">Save</button>
            <a href="{{url('/')}}" class="btn btn-default">Cancel & Go Back</a>
        </div>
    </form>
</div>
@endsection

@section('script')
<script>
// $(document).on('click', '#save', function() {
//     let prod = $('#prod').val();
//     alert('xxx');
//     if ( $('#prod').val() === undefined )
//     {
//         alert('yyy')
//         return;
//     }
// })
</script>
@endsection