<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ 'Home' }}
    </h2>
  </x-slot>
  <div class="h-full bg-gradient-to-r from-green-400 to-blue-500">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <p class="text-6xl md:text-8xl lg:text-9xl font-black text-white">{{'Phpoto'}}</p>
      <p class="text-xl font-bold mt-5">{{__('photo.desc')}}</p>
      <p class="text-bg mt-2">{{__('photo.tech')}}</p>
      @auth
      @else
      <div class="mt-5">
        <a href="{{ route('register') }}" class="text-sm animate-pulse rounded-lg bg-white font-bold p-2 text-black">{{ __('photo.register') }}</a>
        <a href="{{ route('login') }}" class="ml-2 text-sm text-gray-700">{{ __('photo.login') }}</a>
      </div>
      @endauth
    </div>
  </div>
</x-app-layout>