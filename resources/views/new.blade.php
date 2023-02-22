<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <main class="p-10">
            <h1 class="text-xl"> New Article</h1>
            <form action="/new" method="POST" class="">
                @csrf
                <Textarea placeholder="Title" name="title"></Textarea><br>
                <Textarea placeholder="content" name="content"></Textarea><br>
                <input type="submit" value="envoyer" class="bg-blue-500 p-5 rounded text-white my-5">
            </form>
            
        </main>
    </body>
</html>
