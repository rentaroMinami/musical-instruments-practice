<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('練習を記録') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="m-10">
          @if ($errors->any())
            @foreach ($errors as $error)
              <p class="validation">{{$error}}</p>
            @endforeach
          @endif
          <form method="POST" action="/create-practice-history">
            @csrf

            <div>
              <select name="instrument_id" class="my-1 w-full rounded">
                <option value="" disabled selected style="display:none;">楽器を選択</option>
                @foreach($instruments as $instrument)
                  <option value="{{ $instrument['id'] }}">{{ $instrument['name'] }}</option>
                @endforeach
              </select>
            </div>

            {{-- <div>
              <select name="practice_category_id" class="my-1 w-full rounded">
                <option value="" disabled selected style="display:none;">練習カテゴリを選択</option>
                @foreach($practice_categories as $practice_category)
                  <option value="{{ $practice_category['id'] }}">{{ $practice_category['name'] }}</option>
                @endforeach
              </select>
            </div>
            <div>

            </div>
            <div>
              <select name="practice_subcategory_id" class="my-1 w-full rounded">
                <option value="" disabled selected style="display:none;">練習サブカテゴリを選択</option>
                @foreach($practice_subcategories as $practice_subcategory)
                  <option value="{{ $practice_subcategory['id'] }}">{{ $practice_subcategory['name'] }}</option>
                @endforeach
              </select>
            </div> --}}
            
              <div>
                <select name="practice_menu_id" class="my-1 w-full rounded">
                  <option value="" disabled selected style="display:none;">練習メニューを選択</option>
                  @foreach($practice_menus as $practice_menu)
                    <option value="{{ $practice_menu['id'] }}">{{ $practice_menu['name'] }}</option>
                  @endforeach
                </select>
              </div> 
            
            <div class="w-full">
              <select name="practice_seconds" class="my-1 w-11/12 rounded">
                <option value="" disabled selected style="display:none;">練習時間を選択</option>
                @foreach($minutes_list as $minutes)
                  <option value="{{ $minutes * 60 }}">{{ $minutes }}</option> 
                @endforeach
              </select>

              <span class="ml-1 w-1/12"> 分</span>
            </div>
            <div>
              <input type="text" name="memo" class="my-1 w-full rounded" placeholder="メモ">
            </div>
            <button type="submit" class="bg-gray-500 hover:bg-gray-400 text-white rounded px-4 py-2 my-1 w-full">練習を記録</button>
          </form>
          <p class="mt-3">今月の目標 : {{ $target_minutes_this_month }} 分</p>
        </div>
      <div class="big-logo"></div>
    </div>
  </div>

</x-app-layout>