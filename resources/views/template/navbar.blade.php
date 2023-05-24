<nav class="shadow-md py-2 px-5 fixed top-0 left-0 right-0 z-10 bg-white">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex gap-10 items-center">
            <div><a href="/" class="block py-3 font-bold text-2xl text-cyan-500">Barbatos Shop</a></div>
            <ul class="flex gap-5">
                <li class="relative group">
                    <div class="text-base flex items-center gap-2 cursor-pointer py-3"><span>Category</span><span class="text-xs"><i class='bx bxs-down-arrow'></i></span></div>
                    <div class="shadow-md absolute top-full left-0 rounded-lg hidden group-hover:block transition bg-white">
                        <ul class="divide-y">
                            @foreach($dropdown as $c)
                                <li><a href="/category/{{ $c->id }}" class="block py-2.5 px-7 transition rounded hover:bg-cyan-600 hover:text-white">{{ $c->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == "admin")
                <li><a href="/manage" class="block text-base py-3">Manage Product</a></li>
                @endif
            </ul>
        </div>
        <div>
            @if(\Illuminate\Support\Facades\Auth::check())
                {{-- User --}}
                <ul class="flex gap-5 py-1 items-center">
                    <li class="relative group">
                        <div class="text-base flex items-center gap-2 cursor-pointer py-3"><span>{{ \Illuminate\Support\Facades\Auth::user()->name }}</span><span class="text-xs"><i class='bx bxs-down-arrow'></i></span></div>
                        <div class="shadow-md absolute top-full left-0 rounded-lg hidden group-hover:block transition bg-white">
                            <ul class="divide-y">
                                <li><a href="/profile" class="block py-2.5 px-7 transition rounded hover:bg-cyan-600 hover:text-white">Profile</a></li>
                                @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == "user")
                                <li><a href="/history" class="block py-2.5 px-7 transition rounded hover:bg-cyan-600 hover:text-white">History</a></li>
                                @endif
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="block py-2.5 px-7 transition rounded hover:bg-cyan-600 hover:text-white">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == "user")
                    <li><a href="/cart" class="block text-xl py-2 px-6 text-white rounded-xl border border-cyan-500 bg-cyan-500 flex items-center gap-2 transition hover:bg-transparent hover:text-cyan-500"><i class='bx bxs-cart-alt' ></i><span class="text-base">Chart</span></a></li>
                    @endif
                </ul>
            @else
                {{-- Guest --}}
                <ul class="flex gap-5 py-1 items-center">
                    <li><a href="/login" class="block text-base py-2">Login</a></li>
                    <li><a href="/register" class="block text-base py-2">Register</a></li>
                </ul>
            @endif
        </div>
    </div>
</nav>
