@extends('template.container')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Send Email</h1>
        <form action="/send-mail" style="width:33%; display:block; margin:auto;">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email Target</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email Body</label>
                <textarea type="text" name="body" rows="5" class="form-control"></textarea>
            </div>
            <button class="btn btn-primary">Send E-mail</button>
        </form>
    </div>
@endsection