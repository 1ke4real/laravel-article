<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Index</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <title>{{$article->title}}</title>
</head>
<body>
    <ul class="p-10">
        <li><h1 class="text-xl">{!!$article->title!!}</h1></li> <br>
        <li><p class="text-left">{!! $article->content !!}</p></li>
        <button class="bg-blue-500 p-5 rounded text-white my-5"><a href="/all">Liste des articles</a></button>
        <button class="bg-blue-500 p-5 rounded text-white my-5"><a href="/edit/{{$article->id}}">Editer</a></button>
    </ul>
</body>
</html>
