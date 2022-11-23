@extends('layout.layout')
@section('title', 'Accueil')

@section('content')
    <x-header />
    @include('partials.homepage._hero')
    <div class="bg-gray-200">
        <div class="flex px-16 space-x-8">
            <div class="w-2/3">
                <x-cards.card title="Title Heading" url_img="girl_hat.jpeg"
                    description=" I am crazy about hats these days. Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.

                                                                                                                                            Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. ">
                    <div class="flex space-x-7">
                        <img class="w-24" src="img/avatar_smoke.jpeg" alt="">
                        <div class="space-y-2">
                            <p class="text-lg font-medium">
                                George <span class="text-gray-500 text-base"> May 3, 2015, 6:32 PM</span></p>
                            <p>Great blog post! Following</p>
                        </div>
                    </div>
                </x-cards.card>
            </div>
            <div class="w-1/3 space-y-5">
                @include('partials.homepage._card-myname')
                <x-cards.card-right />
            </div>
        </div>
        <x-cards.card title="Title Heading" url_img="man_hat.jpeg"
            description=" I am crazy about hats these days. Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.                                  " />

        <x-cards.card title="Title Heading" url_img="runway.jpeg"
            description=" I am crazy about hats these days. Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla." />
    </div>
@endsection
