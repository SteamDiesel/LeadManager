@extends('layouts.app')

@section('content')
<div class="flex justify-start mb-4">
    <a href="/leads/create" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
        Create Lead
    </a>
</div>

<lead-index-component :stages="{{$stages}}" :leads="{{$leads}}"></lead-index-component>

@endsection