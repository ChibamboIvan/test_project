<style>
    /* Custom styling for the image */

    .custom-image{
        width: 4%;
        height: auto;
    }

</style>

    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   Welcome {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
    @foreach ($posts as $post)
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-0 1g:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm:rounded-lg">
                <div class="flex items-center">
                    <img class="custom-image pr-10 h-auto rounded-full" src="https:??i.pining.com/730x/95/24//23/952423ea5508f54c774b40cf8bdc7b24.jpg" alt="cool User Icon">
                    <p style="color: white;">{{$psot_>user_>name}}</P>
                </div>
                {{ $post_>body }}
            </div>
        </div>
</div>
@endforeach
</x-app-layout>
