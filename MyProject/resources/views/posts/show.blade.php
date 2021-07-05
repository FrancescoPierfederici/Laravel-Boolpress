<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li class="nav-item">

            <div class="row justify-content-center">
                <a href="{{ route('posts.index') }}" role="button">Torna alla home</a>
            </div>

        </li>
    </ul>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>{{$post->title}}</h3>
                <div>
                    <blockquote class="blockquote">
                        <p>{{$post->content}}</p>
                        {{-- <p>{{$post->user->name}}</p>
                        <footer class="blockquote-footer"><cite title="Source Topic" class="text-info">{{$post->topic->name}}</cite></footer> --}}
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    </li>
</body>
</html>
