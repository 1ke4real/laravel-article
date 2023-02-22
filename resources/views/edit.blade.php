<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New</title>
        @include('components.head.tinymce-config')
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <main class="p-10">
            <h1 class="text-xl"> Edit article</h1>
            <span>{{$article->title}}</span>
            <form action="{{$article->id}}" method="POST" class="">
                @csrf
                <Textarea placeholder="Title" name="title" class="default">{{$article->title}}</Textarea><br>
                <Textarea placeholder="content" name="content" class="default">{{$article->content}}</Textarea><br>
                
                 
                <input type="submit" value="envoyer" class="bg-blue-500 p-5 rounded text-white my-5">
            </form>
            <button class="bg-red-500 p-5 rounded text-white my-5"><a href="/sup/{{$article->id}}">Supprimer</a></button>
            <button class="bg-green-500 p-5 rounded text-white my-5"><a href="/all">Revenir à tous les articles</a></button>
        </main>
    </body>
</html>
