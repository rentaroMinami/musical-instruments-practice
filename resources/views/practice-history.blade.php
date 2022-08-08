<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('練習記録を確認') }}
      </h2>
  </x-slot>

  <div class="mt-3">
    @foreach($practice_histories as $practice_history)
      <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="m-4">
              {{ $practice_history['instrument']['name'] }} | 
              {{ $practice_history['practice_menu']['name'] }} | 
              {{ $practice_history['practice_seconds'] / 60 }}分 | 
              メモ：{{ $practice_history['memo'] }}
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

</x-app-layout>