@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">task</div>
                <div class="card-body">
                    <form action="/savetask" method="post">
                        @csrf 
                        <div class="form-group">
                            <label for="">Nama Task</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi Task</label>
                            <input type="text" name="description" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" >Create</button>
                            <a href="/task" class="btn btn-danger">Back</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
