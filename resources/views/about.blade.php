@extends('layouts.app')

@section('content')

    <link href="{{ asset('css/about.css') }}" rel="stylesheet">

    <header class="bg-primary text-white">
        <div class="container text-center">
        <h1>About CaliSmokin Bodies</h1>
        <p class="lead">-- Be The Heat --</p>
        </div>
    </header>

    <section id="about">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
            <h2>About</h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. features:</p>
            <ul>
                <li>Donec ullamcorper nulla non metus auctor fringilla.</li>
                <li>Donec ullamcorper nulla non metus auctor fringilla.</li>
                <li>Donec ullamcorper nulla non metus auctor fringilla.</li>
                <li>Donec ullamcorper nulla non metus auctor fringilla.</li>
            </ul>
            </div>
        </div>
        </div>
    </section>

    <section id="services" class="bg-light">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
            <h2>Services we offer</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
            </div>
        </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
            <h2>Contact us</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
            </div>
        </div>
        </div>
    </section>

@endsection