  @props(['title' => 'Dashboard'])
  
  <div class="flex justify-between items-center">
      <p class="text-xl font-bold">{{$title}}</p>
      <div class="flex gap-4 items-center ">
          <button id="togle-theme" class="flex items-center gap-2 ">
              mudar tema

          </button>
          <!-- <button id="togle-theme" class="flex items-center gap-2 ">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.93 6 11v5l-2 2v1h16v-1l-2-2z" stroke="currentColor" stroke-width="2" />
              </svg>

          </button> -->
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
              <p class="text-lg capitalize">{{ auth()->user()->name }}</p>
          </div>
      </div>
  </div>