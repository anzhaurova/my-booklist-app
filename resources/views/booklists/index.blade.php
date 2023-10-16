<x-layout>
    @include('partials._list')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($booklists) == 0)

        @foreach ($booklists as $booklist)
        <x-booklist-card :booklist="$booklist"/>
        @endforeach

        @else 
        <p>No booklists found</p>
        @endunless
    </div>
</x-layout>