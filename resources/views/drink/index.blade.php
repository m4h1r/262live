<x-layouts.app :title="__('262Live Kontrol Paneli')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">

      @if (session('success'))
          <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
              <div class="flex">
                  <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                  <div>
                      <p class="font-bold">{{ session('success') }}</p>
                  </div>
              </div>
          </div>
          
      @endif
      

        <a href="{{ route('add') }}"
            class="block text-sm font-semibold text-slate-800 bg-green-500 rounded-lg p-2 text-center">
            Ekle
        </a>

        <div
            class="relative flex flex-col w-full h-full overflow-scroll text-slate-300 bg-slate-800 shadow-md rounded-lg bg-clip-border">
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
                                    @if (substr($drink->picture, 0, 4) == 'http')
                                        <img class="w-16 rounded mx-auto" src="{{ $drink->picture }}" alt=""
                                            srcset="">
                                    @else
                                        <img class="w-16 rounded mx-auto" src="assets/img/{{ $drink->picture }}"
                                            alt="" srcset="">
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
                                    {{ number_format($drink->price, 2) }} ₺
                                    <br>
                                    {{ $drink->stock ? 'Var' : 'Tükendi' }}
                                </p>
                            </td>

                            <td class="p-4 border-b border-slate-700 bg-slate-800">
                                <p class="text-sm text-slate-300 text-center">
                                    <a href="{{ route('drink.edit', $drink->id) }}"
                                        class="block bg-blue-700 p-2 m-2 w-full rounded shadow hover:shadow-md">
                                        Düzenle
                                    </a>

                                <form method="POST" action="{{ route('drink.destroy', $drink) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Silmek istediğine emin misin?')"
                                        class="block bg-red-500 p-2 m-2 w-full rounded shadow hover:shadow-md">Sil</button>
                                </form>
                                </p>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>



    </div>
</x-layouts.app>
