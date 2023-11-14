  <nav id="navbar"
      class="fixed flex top-0 w-screen z-40 backdrop-opacity-10 border-gray-200 px-2 sm:px-4 py-2.5 rounded-b md:bg-transparent bg-darkgreen md:h-[150px] duration-300">

      <div class="container flex flex-wrap flex-end justify-end items-center mx-auto">

          <button data-collapse-toggle="navbar-default" type="button"
              class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-medgrn focus:outline-none focus:ring-2 focus:ring-gray-200 text-gray-400 focus:ring-gray-600"
              aria-controls="navbar-default" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                      clip-rule="evenodd"></path>
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">

              <ul
                  class="flex flex-col p-4 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent bg-darkgreen md: bg-darkgreen border-gray-700">
                  <li class="nav-menu">
                      <a href="{{ url('/') }}#header"
                          class="bg-transparent block p-2 px-2 text-[1.5em] rounded text-textgreen md:hover:text-white hover:text-white">Beranda</a>
                  </li>
                  <li class="nav-menu">
                      <a href="{{ url('/') }}#about"
                          class="bg-transparent block p-2 px-2 text-[1.5em] rounded text-textgreen md:hover:text-white hover:text-white">Tentang</a>
                  </li>

                  <li class="nav-menu">
                      <a href="{{ url('/') }}#mitra"
                          class="bg-transparent block p-2 px-2 text-[1.5em] rounded text-textgreen md:hover:text-white hover:text-white">Media
                          & Partner</a>
                  </li>
                  <li class="nav-menu">
                      <a href="{{ url('/') }}#sponsor"
                          class="bg-transparent block p-2 px-2 text-[1.5em] rounded text-textgreen md:hover:text-white hover:text-white ">Sponsor</a>
                  </li>
                  <li class="nav-menu">
                      <a href="{{ route('home.finalis') }}"
                          class="bg-transparent block p-2 px-2 text-[1.5em] rounded text-textgreen md:hover:text-white hover:text-white {{ request()->is('finalis') ? 'active' : '' }}">Finalis</a>
                  </li>
                  <li>
                      @if (Auth::user())
                          <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                              data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer"
                              src="{{ asset('assets/images/avatar-default.svg') }}" alt="User dropdown">

                          <!-- Dropdown menu -->
                          <div id="userDropdown"
                              class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                              <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
                                  <div>Hi, {{ Auth::user()->name }}</div>
                                  <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                              </div>
                              <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                                  @if (Auth::user()->isAdmin == 1)
                                      <li>
                                          <a href="{{ route('admin') }}"
                                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard
                                              Admin</a>
                                      </li>
                                  @else
                                      <li>
                                          <a href="{{ route('dashboard') }}"
                                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                      </li>
                                  @endif
                              </ul>
                              <div class="py-1">
                                  <form action="{{ route('logout') }}" method="post">
                                      @csrf
                                      {{-- @method(DELETE) --}}
                                      <button type="submit"
                                          class="block w-full py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                          Logout
                                      </button>
                                  </form>
                              </div>
                          </div>
                      @else
                          <button type="button" data-modal-toggle="authentication-modal"
                              class="bg-btngreen block p-2 px-4 text-[1.5em] rounded hover:bg-gray-100 md:border-2 border-btngreen text-white md:  hover:text-white md: hover:bg-transparent md:hover:border-btngreen border-2">
                              Daftar
                          </button>
                      @endif
                  </li>
              </ul>
          </div>
      </div>
  </nav>
