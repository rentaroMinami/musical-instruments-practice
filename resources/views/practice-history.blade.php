<html>
  <head>
    <title>Music Instruments Practice</title>
  </head>
  <body>
    <div class="">
      <h2 class="">練習を確認</h2>
      @foreach($practice_histories as $practice_history)          
        {{ $practice_history['instrument_name'] }}
        {{ $practice_history['practice_category'] }}
        {{ $practice_history['practice_subcategory'] }}
        {{ $practice_history['practice_menu'] }}
        {{ $practice_history['practice_minutes'] }} min.
      @endforeach
    </div>
    <div class="big-logo"></div>
  </body>
</html>