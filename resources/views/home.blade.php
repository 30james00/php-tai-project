<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ 'Home' }}
    </h2>
  </x-slot>
  <div class="h-screen bg-gray-200">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <p class="text-4xl font-black">{{'Phpoto'}}</p>
      <p class="text-xl mt-5">{{__('photo.desc')}}</p>
      <p class="text-bg mt-5">{{__('photo.tech')}}</p>
    </div>
  </div>
</x-app-layout>