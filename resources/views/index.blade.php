<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('ダッシュボード') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  <h2 class="font-bold mb-2">{{ $user_name }} さん</h2>
                  <p class="font-thin">今月の練習 : {{ $archivement_minutes_this_month }} min</p>
                  <p class="font-thin">今月の目標 : {{ $target_minutes_this_month }} min</p>
              </div>
              <div class="big-logo"></div>
          </div>
      </div>
  </div>
</x-app-layout>