<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- link css bosstrap laravel -->
    <link href="{{ asset('bootstrap 5/css/bootstrap.min.css') }} " rel="stylesheet integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- link js bosstrap laravel -->
    <script src="{{asset('bootstrap 5/js/bootstrap.bundle.min.js')}}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        .Blog{
            border-bottom: 1px solid lightgray;
        }
        small{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>
            BLOG KELUARGA
            <a class="btn btn-success" href="{{ url('posts/create') }}"> + Buat Postingan Baru</a>
        </h1>
        
        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }} </h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text"><small class="text-body-secondary">Diresmikan Pada {{ date("d M Y H:i", strtotime($post->created_at)) }}</small></p>
                    <a href='{{ url("posts/$post->id")}}' class="btn btn-primary">Selengkapnya</a>
                    <a href='{{ url("posts/$post->id/edit")}}' class="btn btn-warning">Edit</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>