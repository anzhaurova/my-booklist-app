<div>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Create a booklist</h2>
    </header>

    <form method="POST" action="/booklists">
        @csrf
        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2">Booklist name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" />
            @error('title')
                <p class="text-red-500.text-xs.mt-1 ">{{$message}}</p>
            @enderror
        </div>
        
        <br>

        <div  class="mb-6">
            <label for="description"></label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" id="description" cols="30" rows="10">
                Booklist description
            </textarea>
            @error('description')
                <p class="text-red-500.text-xs.mt-1 ">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-black text-white rounded py-2 px-4 hover:bg-black">
              Create Booklist
            </button>
    

            <a href="/" class="text-black ml-4"> Back </a>
          </div>

    </form>
</div>