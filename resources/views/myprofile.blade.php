<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('プロフィール') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          <h2 class=""></h2>
          <form method="POST" action="{{-- /myprofile/update --}}">
            <div>
              <input name="user_name" type="text" value="{{ $user_name }}" placeholder="名前" class="my-1 w-full rounded">
            </div>
            <div>
              メイン楽器
              <select name="instrument_id" class="my-1 w-full rounded">
                <option value="" disabled selected style="display:none;">楽器を選択</option>
                @foreach($instruments as $instrument)
                  <option value="{{ $instrument['id'] }}"
                    @if ($instrument['id'] === $main_instrument['id'])
                      selected
                    @endif
                    >{{ $instrument['name'] }}
                  </option>
                @endforeach
              </select>
            </div>
            
            <div>
              サブ楽器
              @foreach ($sub_instruments as $key => $sub_instrument)
                <div>
                  <select name="instrument_id" class="my-1 w-full rounded">
                    @foreach($instruments as $instrument)
                      <option value="{{ $instrument['id'] }}"
                        @if ($instrument['id'] === $sub_instrument['id'])
                          selected
                        @endif
                      >
                        {{ $instrument['name'] }}
                      </option>
                    @endforeach
                  </select>
                </div>
              @endforeach
              <select name="instrument_id" class="my-1 w-full rounded">
                <option value="" disabled selected style="display:none;">楽器を選択</option>
                @foreach($instruments as $instrument)
                  <option value="{{ $instrument['id'] }}">
                    {{ $instrument['name'] }}
                  </option>
                @endforeach
              </select>
            </div>

            <div>
              目標練習時間
              <select name="practice_seconds" class="my-1 w-11/12 rounded">
                <option value="" disabled selected style="display:none;">練習時間を選択</option>
                @foreach($minutes_list as $minutes)
                  <option value="{{ $minutes * 60 }}">{{ $minutes }}</option>
                @endforeach
              </select> 
              <span class="ml-1 w-1/12"> 分</span>

            </div>
            <button type="submit" onclick="location.href='/myprofile/update'" class="bg-gray-400 hover:bg-gray-400 text-white rounded px-4 py-2 mt-5 w-full" disabled>プロフィールを更新</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>