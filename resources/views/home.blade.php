@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">সম্পদের হিসাব বিবরণী</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    দাখিল করার জন্য <a href="{{ route('statement') }}">এখানে</a> ক্লিক করুন
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
