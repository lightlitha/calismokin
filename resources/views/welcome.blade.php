<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calismokinbodies</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- import CSS -->
        <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <el-menu 
            :default-active="activeIndex2"
            class="nav justify-content-center fixed-top"
            mode="horizontal"
            @select="handleSelect"
            background-color="#000000"
            text-color="#fff"
            active-text-color="#ffd04b">
                <el-menu-item index="0">Calismokinbodies</el-menu-item>
                <el-menu-item index="9" class="nav-item" disabled>Info</el-menu-item>
                <el-menu-item index="1" class="nav-item">About</el-menu-item>
                <el-menu-item index="2" class="nav-item">Virtual Space</el-menu-item>
                <el-menu-item index="3" class="nav-item">Classes</el-menu-item>
                <el-menu-item index="4" class="nav-item">Blog & News</el-menu-item>
                <el-menu-item index="5" class="nav-item">Rates</el-menu-item>
                <el-menu-item index="6" class="nav-item">Join Us</el-menu-item>
                <el-menu-item index="7" class="nav-item">Contact</el-menu-item>
            </el-menu>

            <div class="flex-center position-ref full-height bg-dark">
                <div class="content">
                    <div class="jumbotron bg-transparent">
                        <h1 class="display-4">Calismokinbodies Welcomes You !</h1>
                        <p class="lead">This is a nice and tasty slogan.</p>
                        <hr class="my-4">
                        <p>Something extra and unecessary.</p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="flex-center position-ref full-height">
                <div class="content">
                    <h1>About</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="jumbotron jumbotron-fluid bg-transparent">
                                <div class="container">
                                  <h1 class="display-4">Fluid jumbotron</h1>
                                  <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="jumbotron jumbotron-fluid bg-transparent">
                                <div class="container">
                                  <h1 class="display-4">Fluid jumbotron</h1>
                                  <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-center position-ref full-height bg-dark">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="jumbotron jumbotron-fluid bg-transparent">
                                <div class="container">
                                  <h1 class="display-4">Virtual Space 1</h1>
                                  <p class="lead">Information some small text, a picture or even a video.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="jumbotron jumbotron-fluid bg-white">
                                <div class="container">
                                  <h1 class="display-4">Virtual Space 2</h1>
                                  <p class="lead">Information some small text, a picture or even a video.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                    
                <div class="content">
                    <div class="title m-b-md">
                        Calismokinbodies
                    </div>
    
                    <div class="links">
                        <a href="https://laravel.com/docs">Docs</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://blog.laravel.com">Blog</a>
                        <a href="https://nova.laravel.com">Nova</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://vapor.laravel.com">Vapor</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    <!-- import Vue before Element -->
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <!-- import JavaScript -->
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: function() {
                return {
                    visible: false,
                    activeIndex: '1'
                }
            },
            methods: {
                handleSelect(key, keyPath) {
                    console.log(key, keyPath);
                }
            }
        })
    </script>
    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
        .el-carousel__item h3 {
          color: #475669;
          font-size: 18px;
          opacity: 0.75;
          line-height: 300px;
          margin: 0;
        }
      
        .el-carousel__item:nth-child(2n) {
          background-color: #99a9bf;
        }
      
        .el-carousel__item:nth-child(2n+1) {
          background-color: #d3dce6;
        }

        .parallax-image {
            background: url('https://drive.google.com/thumbnail?id=1V3GDHOBaMwPeYz77s72HtZxY6A2Jy7p4') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
</html>
