<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About CatatanGue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite('resources/css/app.css')
</head>
<body class="bg-[url('image/banner.jpg')] bg-center md:bg-cover">
    <nav class="py-4 px-10 backdrop-blur-md bg-black/90 flex flex-row items-center justify-between text-gray-300 font-bold text-xl lg:px-32">
        <span>CatatanGue</span>
        <a href="/login">
            <button class="flex flex-row items-center font-normal hover:opacity-70">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-gray-300 mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3"/></svg>
                Login
            </button>
        </a>
    </nav> 
    <section class="px-5 py-28 flex flex-col lg:px-24">
        <div class="p-5 backdrop-blur-sm bg-white/30 rounded-lg w-fit lg:px-8">
            <h1 class="text-4xl title lg:text-7xl">CatatanGue</h1>
            <h4 class="text-sm font-bold">By: <a href="https://alimus.my.id" target="_blank" class="hover:text-gray-500">Muhammad Ali Mustaqim</a></h4>
            <ul class="flex flex-wrap space-x-4 mt-3 font-bold">
                <li class="px-3 border-2 border-black rounded-md cursor-pointer hover:text-white hover:bg-black">Mata Kuliah</li>
                <li class="px-3 border-2 border-black rounded-md cursor-pointer hover:text-white hover:bg-black">Artikel</li>
            </ul>
            <p class="text-md text-gray-900 mt-9 max-w-sm">
                Disini isinya cuma catetan gua. Kalo ada yang salah tolong koreksi melalui email. Kalo ada yang mau kontribusi artikel disini juga boleh email aja, nanti dibuatin user sendiri.
            </p>
        </div>
    </section>
    <footer class="fixed bottom-0 left-0 right-0 pb-7">
        <p class="text-lg text-white text-center">&copy; Muhammad Ali Mustaqim 2022</p>
    </footer>
    <div class="fixed bottom-0 left-0 right-0 h-52 bg-gradient-to-t from-black z-50">
    </div>
</body>
</html>