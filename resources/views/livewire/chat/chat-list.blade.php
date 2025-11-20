<div 
x-data="{ type: 'all' }"
class="flex flex-col transition-all h-full overflow-hidden">
    <header class="px-3 z-10 bg-white sticky top-0 w-full py-2">
        <div class="border-b justify-between flex items-center pb-2">
            <div class="flex items-center gap-2">
                <h5 class="font-extrabold text-2xl">Chats</h5>
            </div>
            <button>
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>
        </div>

        <!-- filters -->
        <div class="flex gap-3 items-center overflow-x-scroll p-2 bg-white">
            <button 
                @click="type = 'all'"
                :class="{ 'bg-blue-100 border-0 text-black': type === 'all' }"
                class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1 lg:py-2.5 border">
                All
            </button>
            <button 
                @click="type = 'deleted'"
                :class="{ 'bg-blue-100 border-0 text-black': type === 'deleted' }"
                class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1 lg:py-2.5 border">
                Deleted
            </button>
        </div>
    </header>

    <main class="overflow-y-auto grow h-full relative">
        <!-- list -->
         <ul class="p-2 grid w-full space-y-2">
            <li class="py-3 hover:bg-gray-50 rounded-2xl transition-colors duration-150 flex gap-4 relative w-full cursor-pointer px-2">
                <a href="" class="shrink-0">
                 <x-avatar/>
                </a>
                <aside class="grid grid-cols-12 w-full">
                    <a href="#" class="col-span-11 border-b pb-2 border-gray-200 relative overflow-hidden w-full flex flex-col p-1">
                            <!-- name i date -->
                             <div class="flex justify-between w-full items-center">
                                <h6 class="truncate font-medium tracking-wider text-gray-500">
                                    John Doe
                                </h6>
                                <small class="text-gray-700">5d</small>
                             </div>
                             <div class="flex gap-x-2 items-center">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
  <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z"/>
</svg></span>
                                <!-- <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
</svg></span> -->
                            <p class="grow truncate text-sm font-[100]">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit
                            </p>
                            <span class="font-bold p-px px-2 text-xs shrink-0 rounded-full bg-blue-500 text-white">5</span>
                             </div>
                    </a>
                    <!-- Dropdown -->
                     <div class="col-span-1 flex flex-col text-center my-auto">
                    <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
  <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
</svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="">
                            <button class="items-center gap-3 flex w-full px-4 py-2 text-sm leading-5 text-gray-500 hover:bg-gray-100 transition-all duration-150 ease-in-out focus:outline-none focus:bg-gray-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
                                </span>
                                View profile
                            </button>

                            <button class="items-center gap-3 flex w-full px-4 py-2 text-sm leading-5 text-gray-500 hover:bg-gray-100 transition-all duration-150 ease-in-out focus:outline-none focus:bg-gray-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                    </svg>
                                </span>
                                Delete
                            </button>
                        </div> 
                    </x-slot>
                </x-dropdown>
                     </div>
                </aside>
            </li>
         </ul>
    </main>
</div>