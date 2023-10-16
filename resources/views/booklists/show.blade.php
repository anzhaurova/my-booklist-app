<x-layout>
    <a href="index.html" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i>Back
    </a>
    <div class="mx-4">
        <x-card class="p-100">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">{{$booklist->name ?? ""}}</h3>
                <div class="flex">
                    <img class=""   src="{{asset('images/full-logo.png')}}" alt="">
                </div>
            </div>
            {{-- <ul>
                <li>{{$booklist->author ?? ""}}</li>
                <li>{{$booklist->title ?? ""}}</li>
            </div> --}}
        </x-card>
    </div>
</x-layout>