<nav class="bg-white p-2 flex justify-between items-center shadow-md pl-8 pr-8">
    <div>
        <a href="/">
            <img src="{{ asset('/img/logo.png')}}" alt="Logo" class="h-14 w-14">
        </a>
    </div>
    <div>
        
    <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="text-red hover:underline">Cerrar Sesión</button>
    </form>

    </div>
</nav>