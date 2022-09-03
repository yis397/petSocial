
        <form enctype="multipart/form-data"  {{$attributes->merge(['class' => 'bg-white shadow p-4 w-full rounded-2xl h-100 grid md:grid-cols-3 grid-rows-2'])}} >

            @csrf
            <div class=" row-span-1 md:col-span-2 flex justify-center items-center  flex-col " >

                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                  </svg>
                  <label class="block">
                    <span class="sr-only">Choose profile photo</span>
                    <input type="file" name="file" class="block w-full text-sm text-slate-500
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-full file:border-0
                      file:text-sm file:font-semibold
                      file:bg-violet-50 file:text-violet-700
                      hover:file:bg-violet-100
                    "/>
                  </label>

            </div>
            <div class="row-span-1 md:col-span-1">
                <input name="img" type="hidden" >
                {{$slot}}


                    @error('img')
                    <p class="mt-2  peer-invalid:visible text-pink-600 text-sm">
                        {{$message}}
                    </p>
                    @enderror
                    <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-full w-1/2 text-white">
                      Confirmar
                    </button>
                 </div>
          </form>
