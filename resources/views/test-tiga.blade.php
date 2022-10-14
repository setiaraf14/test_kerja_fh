@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TEST TIGA') }}</div>

                <div class="card-body">
                    <form action="{{ url('/store-nominal') }}" method="POST">
                        @csrf
                        <input type="number" class="form-control" name="nominal">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
