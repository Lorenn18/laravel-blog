@props(['url_img', 'title', 'description'])


<div class="text-black py-8 ">
    <div class=" bg-white leading-7 p-5">
        <div class="space-y-5 text-center py-5">
            <h3 class="uppercase text-2xl">{{ $title }}</h3>
            <h4>Title description, <span class="text-gray-500">May 2, 2016</span></h4>
        </div>
        <div class="pb-7 px-2">
            <img class="w-full" src="img/{{ $url_img }}" alt="">
        </div>
        <p><span class="font-semibold">More Hats!</span>{{ $description }}</p>
        <div class="flex justify-between py-8">
            <button class="btn bg-white text-black"><i class="fa fa-thumbs-up px-1"></i>
                Liked</button>
            <button class="btn bg-black text-white px-3">Replies
                <span class="bg-white text-gray-900 px-2 ml-2">1</span>
            </button>
        </div>
        <hr class="py-3">
        <div class="">
            {{ $slot }}
        </div>
    </div>
</div>
