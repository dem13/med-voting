@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create new voting</div>

                    <div class="card-body">
                        <voting-form csrf="{{ csrf_token() }}" action="{{ route('voting.store') }}"></voting-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
