@extends('layouts.app')
@section('content')
    <div class = "container">
        <div class = "card card-default">
            <div class = "card-body">
                <form action = "{{route('popupupdate',$popups->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="comment"><b>Notice</b></label>
                        <textarea name = "content" class="form-control" rows="5" id="comment">{{$popups->content}}</textarea>
                    </div
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="show"> Show
                        </label>
                    </div>
                    <div class = "form-group">
                        <button type = "submit" class = "btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection