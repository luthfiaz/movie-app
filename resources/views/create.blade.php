@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{url('/add')}}">
        @csrf
        <div class="bd-example">
            <div class="form-group">
                <label>Movie Name</label>
                <input class="form-control" type="text" placeholder="The Killer Swan" name="name" required>
            </div>

            <div class="form-group">
                <label>Genre</label>
                <input class="form-control" type="text" placeholder="Horror, Thriller" name="genre" required>
            </div>

            <div class="form-group">
                <label>Production House</label>
                <select class="form-control" name="prod" id="prod">
                    <option selected disabled>Please select one</option>
                    @foreach($options as $opt)
                        <option value="{{$opt->id}}"> {{$opt->name}} </option>
                    @endforeach
                </select>
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