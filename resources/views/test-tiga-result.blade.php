@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TEST TIGA RESULT') }}</div>
                <div><a href="{{ url('/test-tiga') }}" class="btn btn-danger">Back</a></div>

                <div class="card-body">
                    <table class="table" style="border:1px solid black">
                        <tbody>
                            @for($i = 1; $i <= $nominal; $i++)
                            <tr>
                                @if($i % 3 == 0 && $i % 5 == 0)
                                    <td>{{$i}}</td>
                                    <td>{{ $word[0] . " " . $word[1] }}</td>
                                @elseif($i % 3 == 0 && $i % 5 != 0)
                                    <td>{{ $i}}</td>
                                    <td>{{ $word[0] }}</td>
                                @elseif($i % 5 == 0 && $i % 3 != 0)
                                    <td>{{$i}}</td>
                                    <td>{{$word[1]}}</td>
                                @else
                                    <td>{{$i}}</td>
                                    <td>-</td>
                                @endif
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
