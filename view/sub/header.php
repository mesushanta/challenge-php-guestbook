<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css" integrity="sha512-yXagpXH0ulYCN8G/Wl7GK+XIpdnkh5fGHM5rOzG8Kb9Is5Ua8nZWRx5/RaKypcbSHc56mQe0GBG0HQIGTmd8bw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header class="w-full h-20 bg-gray-100 shadow-xl">
    <nav class="grid grid-cols-2 px-4 gaps-8 w-full max-w-screen-xl mx-auto h-12">
        <div class="col-span-1 text-left">
            <div class="h-12 my-4 px-4 text-4xl">Guest book</div>
        </div>
        <div class="col-span-1 text-right">

            <a href="./">
                <button class="h-12 my-4 px-4 bg-gray-700 hover:bg-gray-800 border-gray-900 text-gray-200">
                    All Posts
                </button>

            </a>

            <a href="#create">
                <button class="h-12 my-4 px-4 bg-gray-700 hover:bg-gray-800 border-gray-900 text-gray-200">
                    Create new Post
                </button>

            </a>
        </div>
    </nav>
</header>
