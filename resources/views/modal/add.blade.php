@extends('layouts.app')
@section('content')
    <div class = "container">
        <div class = "card card-default">
            <div class = "card-body">
                <form action = {{route('popupstore')}} method="post">
                    @csrf
                    <div class="form-group">
                        <label for="comment"><b>Notice</b></label>
                        <textarea name = "content" class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="show"> Show
                        </label>
                    </div>
                    <button type = "submit" class = "btn btn-success">Add Task</button>
                </form>
            </div>
        </div>
    </div>
@endsection