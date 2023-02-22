<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Index</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <main class="p-10">
            <h1>Hello | All Article</h1><br>
            @foreach ($data as $article)
                <ul>
                    <li class="my-10 flex"><a href="article/{{$article->id}}" class="underline mr-10">{!! $article->title !!}</a>|<a href="edit/{{$article->id}}" class="ml-10 text-blue-500 hover:underline"> Modifier </a></li><hr> 
                    
                </ul>
            @endforeach
            <button class="bg-blue-500 p-5 rounded text-white my-5"><a href="/new">Ajouter un article</a></button>
        </main>
    </body>
</html>
