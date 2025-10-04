   @props(['url'])

   <div class="bg-[var(--color-secondary)] p-4 rounded-md ">
       <div class="flex justify-between">
           <!-- Header: Link Encurtado -->
           <div>
               <div class="flex items-center justify-between mb-2">
                   <a href="{{ url('/r/' . $url['slug']) }}"
                       target="_blank"
                       class="text-blue-600 hover:underline font-semibold break-all text-sm sm:text-base">
                       {{ url('/r/' . $url['slug']) }}
                   </a>
               </div>
               <!-- URL Original -->
               <p class="text-xs text-gray-500 break-words">
                   {{ $url['url_original'] }}
               </p>
               <!-- Informações Adicionais -->
               <div class="flex flex-wrap items-center gap-4 mt-3 text-sm text-gray-700">
                   <!-- Status -->
                   <div class="flex items-center gap-1">
                       <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                           viewBox="0 0 24 24">
                           <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" />
                       </svg>
                       <span>{{ $url['status'] }}</span>
                   </div>
                   <!-- Data -->
                   <div class="flex items-center gap-1">
                       <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                           viewBox="0 0 24 24">
                           <path stroke-linecap="round" stroke-linejoin="round"
                               d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                       </svg>
                       <span>
                           {{ date('d', strtotime($url['created_at'])) }}/
                           {{ config('month.data')[ltrim(date('m', strtotime($url['created_at'])), '0')] }}
                       </span>
                   </div>
                   <!-- Cliques -->
                   <div class="flex items-center gap-1">
                       <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" stroke-width="2"
                           viewBox="0 0 24 24">
                           <path stroke-linecap="round" stroke-linejoin="round"
                               d="M13 16h-1v-4h-1m0-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
                       </svg>
                       <span>{{ $url['click_count'] }} cliques</span>
                   </div>
               </div>
           </div>
           @if(isset($slugForQr) && $slugForQr === $url['slug'])
           @include('client.components.modals.modal-QRcode', ['qr'=>$qrCode])
           @else
           <form action="" method="get">
               <button class="flex items-center gap-1 cursor-pointer text-sm">
                   <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" stroke-width="2"
                       viewBox="0 0 24 24">
                       <path stroke-linecap="round" stroke-linejoin="round"
                           d="M13 16h-1v-4h-1m0-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
                   </svg>
                   <input type="hidden" value="{{$url[
                                    'url_original']}}" name="url_original">
                   <input type="hidden" name="url_slug" value="{{ $url['slug'] }}">
                   <span>QRcode</span>
               </button>
           </form>
           @endif

       </div>

   </div>