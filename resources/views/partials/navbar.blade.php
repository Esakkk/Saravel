<nav class="py-5 px-6" x-data="{NavOpen : false}">
  <div class="container mx-auto">
    <div class="flex items-center justify-between">
      <img src="image/logo.jpg" style="width: 35px;" alt="" class="order-1 sm:order-2">
      <img @click="NavOpen = !NavOpen" src="image/menubutton.png" style="width: 35px;" alt="" class=" lg:hidden order-1">
      <div class="order-2 ml-40 hidden lg:block">
        <ul class="flex gap-16">
          <li><a href="/" class="font-bold text-md {{ ($page === "Home") ? 'menyala' : 'redup opacity-50'}}">Home</a></li>
          <li><a href="/menu" class="font-bold text-md {{ ($page === "Menu") ? 'menyala' : 'redup opacity-50'}}">Menu</a></li>
          <li><a href="/blog" class="font-bold text-md {{ ($page === "Blog") ? 'menyala' : 'redup opacity-50'}}">Blog</a></li>
          <li><a href="/shop" class="font-bold text-md {{ ($page === "Shop") ? 'menyala' : 'redup opacity-50'}}">Delivery</a></li>
        </ul>
      </div>
      <div class="order-3 hidden sm:block lg:mr-3">
        <button class="grow bg-white text-black px-6 py-3 font-bold rounded-full text-sm">Login</button>
        <button class="grow bg-ungu text-white px-5 py-3 font-bold rounded-full text-sm">Signup</button>
      </div>
    </div>
  </div>
  <div x-show="NavOpen"
     x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
   x-data="{open : false }" class="lg:hidden fixed bottom-0 right-0 left-0 py-4 px-4">
    <ul class="flex justify-between">
      <li><a href="/">
        <button class="flex justify-center flex-col items-center gap-1 text-xs sm:text-lg">
          <i class="fi fi-rr-home text {{ ($page === "Home") ? 'menyala' : 'redup opacity-50'}}"></i>
          <span class="font-bold {{ ($page === "Home") ? 'menyala' : 'redup opacity-50'}}">Home</span>
        </button></a>
      </li>
      <li><a href="/menu">
        <button class="flex justify-center flex-col items-center gap-1 text-xs sm:text-lg">
          <i class="fi fi-rr-shop {{ ($page === "Menu") ? 'menyala' : 'redup opacity-50'}}"></i>
          <span class="font-bold {{ ($page === "Menu") ? 'menyala' : 'redup opacity-50'}}">Menu</span>
        </button></a>
      </li>
      <li><a href="/blog">
        <button class="flex justify-center flex-col items-center gap-1 text-xs sm:text-lg">
          <i class="fi fi-rr-blog-text {{ ($page === "Blog") ? 'menyala' : 'redup opacity-50'}}"></i>
          <span class="font-bold {{ ($page === "Blog") ? 'menyala' : 'redup opacity-50'}}">Blog</span>
        </button></a>
      </li>
      <li><a href="/shop">
        <button class="flex justify-center flex-col items-center gap-1 text-xs sm:text-lg">
          <i class="fi fi-rr-dolly-flatbed {{ ($page === "Shop") ? 'menyala' : 'redup opacity-50'}}"></i>
          <span class="font-bold {{ ($page === "Shop") ? 'menyala' : 'redup opacity-50'}}">Shop</span>
        </button></a>
      </li>
      <li>
        <button @click="open = !open" class="flex justify-center flex-col items-center gap-1 text-xs sm:text-lg">
          <i class="fi fi-rr-circle-user {{ ($page === "User") ? 'menyala' : 'redup opacity-50'}}"></i>
          <span class="font-bold {{ ($page === "User") ? 'menyala' : 'redup opacity-50'}}">User</span>
        </button>
      </li>
    </ul>
    <div x-show="open" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90" 
        class=" lg:hidden absolute bottom-16 sm:bottom-20 left-1/2 -translate-x-1/2 flex gap-4 w-3/4 sm:w-1/3">
      <button class="grow bg-white text-black px-6 py-3 font-bold rounded-full text-sm">Login</button>
      <button class="grow bg-ungu text-white px-5 py-3 font-bold rounded-full text-sm">Signup</button>
    </div>
  </div>
</nav>