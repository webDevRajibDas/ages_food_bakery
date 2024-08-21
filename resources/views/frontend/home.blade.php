@extends('frontend.layouts.app')

@section('title')
    Chaity-Group Home- {{ app_name() }}
@endsection

@section('content')


@endsection

@push('after-scripts')
    <script>
        console.log('home page js');
    </script>
@endpush
