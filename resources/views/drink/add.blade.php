<x-layouts.app :title="__('262Live Kontrol Paneli')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">



        <form class="bg-gray-800 m-2 p-2 rounded-lg text-white" action="{{ route('insert') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold">Ürün Ekle</h2>
                    <p class="mt-1 text-sm/6 ">Yeni ürün eklemek için gerekli bilgileri giriniz.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="col-span-full">
                            <label for="name" class="block text-sm/6 font-medium ">Ürün Adı</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-slate-900 pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input type="text" name="name" id="name"
                                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base focus:outline-none sm:text-sm/6">
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="brand" class="block text-sm/6 font-medium ">Marka</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-slate-900 pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input type="text" name="brand" id="brand"
                                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base focus:outline-none sm:text-sm/6">
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="type" class="block text-sm/6 font-medium ">Tür</label>
                            <div class="mt-2 grid grid-cols-1">
                                <select id="type" name="type"
                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-slate-900 py-1.5 pr-8 pl-3 text-base  outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    <option selected value="Bira">Bira</option>
                                    <option value="Kokteyl">Kokteyl</option>
                                    <option value="Shot">Shot</option>
                                    <option value="Aperitif">Aperitif</option>
                                </select>
                                <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                    viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="price" class="block text-sm/6 font-medium ">Fiyat</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-slate-900 pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input type="number" name="price" id="price"
                                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base focus:outline-none sm:text-sm/6">
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full">
                          <label for="stock" class="block text-sm/6 font-medium text-center">Stok Var/Yok</label>
                          <div class="m-2">
                              <div class="flex items-center rounded-md">
                                  <input type="checkbox" name="stock" id="stock" class="block min-w-0 grow py-1.5 pr-3 pl-1 focus:outline-none sm:text-sm/6" value="1" checked>
                              </div>
                          </div>
                      </div>

                        <div class="col-span-full">
                            <label for="description" class="block text-sm/6 font-medium ">Açıklama</label>
                            <div class="mt-2">
                                <textarea name="description" id="description" rows="3" maxlength="255"
                                    class="block w-full rounded-md bg-slate-900 px-3 py-1.5 text-base  outline-1 -outline-offset-1 outline-gray-300 placeholder: focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="cover-photo" class="block text-sm/6 font-medium ">Ürün Resmi</label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm/6 text-gray-600">
                                        <label for="picture"
                                            class="relative cursor-pointer rounded-md bg-slate-900 font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                            <span class="m-1 p-1">Dosya Seç</span>
                                            <input id="picture" name="picture" type="file" class="sr-only">
                                        </label>
                                    </div>
                                    {{-- <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{route('drinks')}}" type="button" class="bg-yellow-600 m-2 p-2 rounded">İptal Et</a>
                <button type="submit" class="bg-blue-600 m-2 p-2 rounded">Kaydet</button>
            </div>
        </form>




    </div>
</x-layouts.app>
