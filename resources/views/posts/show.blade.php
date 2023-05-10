<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Judul : {{ $post->title }} </title>
    <!-- link css bosstrap laravel -->
    <link href="{{ asset('bootstrap 5/css/bootstrap.min.css') }} " rel="stylesheet integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="{{ asset('css/blog.css') }} " rel="stylesheet crossorigin="anonymous">
    <!-- link js bosstrap laravel -->
    <script src="{{asset('bootstrap 5/js/bootstrap.bundle.min.js')}}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ date("d M Y H:i", strtotime($post->created_at)) }}</p>

            <p>{{ $post->content }}</p>

            <a href='{{ url("posts") }}'>< Kembali</a>
        </article>
    </div>
</body>
</html>