<x-layouts.app :title="__('262Live Kontrol Paneli')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">


      <a href="{{route('add')}}" class="block text-sm font-semibold text-slate-800 bg-blue-500 rounded-lg p-2 text-center">
        Ekle
      </a>


      <div class="relative flex flex-col w-full h-full overflow-scroll text-slate-300 bg-slate-800 shadow-md rounded-lg bg-clip-border">
        <table class="w-full text-left table-auto min-w-max">
          <thead>
              <tr class="text-center">
                  <th class="p-4 border-b border-slate-600 bg-slate-700">
                      <p class="text-sm font-normal leading-none text-slate-300">
                          Resim
                      </p>
                  </th>
                  <th class="p-4 border-b border-slate-600 bg-slate-700">
                      <p class="text-sm font-normal leading-none text-slate-300">
                          Adı
                      </p>
                  </th>
                  <th class="p-4 border-b border-slate-600 bg-slate-700">
                      <p class="text-sm font-normal leading-none text-slate-300">
                          Marka
                      </p>
                  </th>
                  <th class="p-4 border-b border-slate-600 bg-slate-700">
                      <p class="text-sm font-normal leading-none text-slate-300">
                          Türü
                      </p>
                  </th>
                  <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Fiyat / Stok
                    </p>
                </th>
                  <th class="p-4 border-b border-slate-600 bg-slate-700">
                      <p class="text-sm font-normal leading-none text-slate-300">
                          Aksiyonlar
                      </p>
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($drinks as $drink)

            <tr class="hover:bg-slate-700">
              <td class="p-4 border-b border-slate-700 bg-slate-900">
                  <p class="text-sm text-slate-100 text-center">
                    @if ( substr($drink->picture, 0, 4) == "http")
                      <img class="w-16 rounded mx-auto" src="{{ $drink->picture }}" alt="" srcset="">
                    @else
                      <img class="w-16 rounded mx-auto" src="assets/img/{{ $drink->picture }}" alt="" srcset="">
                    @endif
                      
                  </p>
              </td>
              <td class="p-4 border-b border-slate-700 bg-slate-800">
                  <p class="text-sm text-slate-300 text-center">
                    {{ $drink->name }}
                  </p>
              </td>
              <td class="p-4 border-b border-slate-700 bg-slate-900">
                  <p class="text-sm text-slate-300 text-center">
                    {{ $drink->brand }}
                  </p>
              </td>
              <td class="p-4 border-b border-slate-700 bg-slate-800">
                <p class="text-sm text-slate-300 text-center">
                  {{ $drink->type }}
                </p>
            </td>
            <td class="p-4 border-b border-slate-700 bg-slate-900">
              <p class="text-sm text-slate-300 text-center">
                {{ number_format($drink->price,2) }} ₺
                <br>
                {{ $drink->stock ? "Var" : "Tükendi" }}
              </p>
          </td>
          <td class="p-4 border-b border-slate-700 bg-slate-800">
            <p class="text-sm text-slate-300 text-center">
              <a href="#" class="block text-sm font-semibold text-slate-800 bg-yellow-500 rounded-lg p-1">
                Düzenle
              </a>
              <a href="#" class="block text-sm font-semibold text-slate-800 bg-red-500 rounded-lg p-1 mt-1">
                Sil
              </a>
            </p>
        </td>
          </tr>
                
            @endforeach
              
              
          </tbody>
        </table>
      </div> 



    </div>
</x-layouts.app>
