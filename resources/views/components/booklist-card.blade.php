@props(['booklist'])
<div class="bg-gray-50 border border-gray-400 rounded p-6">
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href="/booklists/{{$booklist->id}}">{{$booklist->name}}</a>
            </h3>
            <div class="text-xl  mb-4">{{$booklist->description}}</div>
        </div>
    </div>
</div>