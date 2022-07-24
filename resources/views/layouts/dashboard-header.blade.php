<header class="py-3 px-7 bg-black flex flex-row items-center justify-between text-gray-300 font-bold text-xl space-y-2 lg:px-32 ">
    <label for="nav" class="flex flex-row items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" class="stroke-white mr-4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        <span class="text-md">{{ auth()->user()->name }}</span>
    </label>
    <div class="relative w-44" id="sidenavSecEx2">
        <a class="flex items-center justify-between text-base px-4 h-12 overflow-hidden text-gray-300 text-ellipsis whitespace-nowrap rounded-t bg-gradient-to-r from-stone-700 via-slate-700 to-gray-700 hover:bg-gradient-to-l hover:opacity-70 transition duration-300 ease-in-out cursor-pointer" data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse" data-bs-target="#collapseSidenavSecEx2" aria-expanded="false" aria-controls="collapseSidenavSecEx2">
          <span class="mr-3">{{ $title }}</span>
          <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
          </svg>
        </a>
        <ul class="absolute accordion-collapse collapse shadow-lg border border-gray-400 rounded-b-md" id="collapseSidenavSecEx2" aria-labelledby="sidenavSecEx2" data-bs-parent="#sidenavSecExample">
            <li class="relative border-b">
                <a href="/dashboard/profile" class="flex items-center text-base py-4 pl-7 pr-6 h-6 overflow-hidden text-gray-300 bg-gray-600 text-ellipsis whitespace-nowrap hover:text-gray-600 hover:bg-gray-300 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Profile</a>
            </li>
            <li class="relative border-b">
                <a href="/dashboard" class="flex items-center text-base py-4 pl-7 pr-6 h-6 overflow-hidden text-gray-300 bg-gray-600 text-ellipsis whitespace-nowrap hover:text-gray-600 hover:bg-gray-300 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Dashboard</a>
            </li>
            <li class="relative border-b">
                <a href="/add/article" class="flex items-center text-base py-4 pl-7 pr-6 h-6 overflow-hidden text-gray-300 bg-gray-600 text-ellipsis whitespace-nowrap hover:text-gray-600 hover:bg-gray-300 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Buat Artikel</a>
            </li>
            <li class="relative">
                <a href="/draft" class="flex items-center text-base py-4 pl-7 pr-6 h-6 overflow-hidden text-gray-300 bg-gray-600 text-ellipsis whitespace-nowrap hover:text-gray-600 hover:bg-gray-300 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Draft</a>
            </li>
            <li class="relative">
                <a href="/logout" class="flex items-center text-base py-4 pl-7 pr-6 h-6 overflow-hidden text-red-500 bg-red-50 text-ellipsis whitespace-nowrap rounded-b hover:text-gray-600 hover:bg-gray-300 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Logout</a>
            </li>
        </ul>
    </div>
</header>
<main class="px-7 py-5 lg:px-32">
    <h1 class="font-bold text-3xl text-gray-900 border-b-2">{{ $title }}</h1>