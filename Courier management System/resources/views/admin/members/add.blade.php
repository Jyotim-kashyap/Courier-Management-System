@extends('admin.layouts.master')
@section('title','Add New Member')
@push('css')
    
@endpush

@section('content')
    
@livewire('admin.members.add', ['branches' => $branches])


@endsection

@push('js')
    
@endpush