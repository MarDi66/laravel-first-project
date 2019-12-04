@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus necessitatibus a quis illo quo dolorum. Nam, eos officiis illum, illo voluptate voluptates unde quas, at aut eius aperiam hic quam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi inventore cumque dignissimos pariatur reprehenderit aliquid amet totam repellendus aperiam, nam iure rem tenetur cum natus aspernatur illum deserunt accusamus excepturi.
    </p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection