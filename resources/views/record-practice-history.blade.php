<html>
  <head>
    <title>Music Instruments Practice</title>
  </head>
  <body>
    <div class="">
      <h2 class="">練習を記録</h2>
      <form method="POST" action="/">
        @csrf
        <select name="instrument" class="">
          @foreach($instruments as $instrument)
            <option value="{{ $instrument['id'] }}">{{ $instrument['name'] }}</option>
          @endforeach
        </select>
        <select name="practice-category" class="">
          @foreach($practice_categories as $practice_category)
            <option value="{{ $practice_category['id'] }}">{{ $practice_category['name'] }}</option>
          @endforeach
        </select>
        <select name="practice-subcategory" class="">
          @foreach($practice_subcategories as $practice_subcategory)
            <option value="{{ $practice_subcategory['id'] }}">{{ $practice_subcategory['name'] }}</option>
          @endforeach
        </select>
        <select name="practice-menu" class="">
          @foreach($practice_menus as $practice_menu)
            <option value="{{ $practice_menu['id'] }}">{{ $practice_menu['name'] }}</option>
          @endforeach
        </select>
        <select name="practice_minutes" class="">
          @foreach($minute = 5; $minute <= 720; $minute +=5)
            <option value="{{ $minute }}">{{ $minute }}</option>
          @endforeach
        </select>
        <button type="submit">練習を記録</button>
      </form>
      <p class="">今月の目標 : {{ $target_this_month }}</p>
    </div>
    <div class="big-logo"></div>
  </body>
</html>