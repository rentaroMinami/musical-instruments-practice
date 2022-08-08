<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeHistory;
use App\Models\Instrument;
use App\Models\PracticeCategory;
use App\Models\PracticeSubcategory;
use App\Models\PracticeMenu;
use App\Models\UserSetting;




class PracticeHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showPracticeHistories() {
        $practice_histories = PracticeHistory::join('instruments', 'practice_histories.instrument_id', '=', 'instruments.id')
            ->get();
        return view("practice-history", ['practice_histories' => $practice_histories]);
    }

    public function createPracticeHistory(Request $request) {
        $validator = $request->validate([
            'instrument_id' => 'required|exists:instruments,id',
            'practice_menu_id' => 'required|exists:practice_menus,id',
            'practice_seconds' => 'required|regex:/^[1-9][0-9]*/|not_in:0',
        ]);
        $data4insert = $request->only('instrument_id', 'practice_menu_id', 'practice_seconds', 'memo');
        $data4insert['user_id'] = auth()->id();
        PracticeHistory::create($data4insert);

        return redirect('practice-history');

    }

    public function showInputForm() {
        $instruments = Instrument::all();
        $practice_categories = PracticeCategory::all();
        $practice_subcategories = PracticeSubcategory::all();
        $minutes_list = $this->getArithmeticalProgression(5, 720, 5);
        $practice_menu = PracticeMenu::all();
        $target_minutes_this_month = UserSetting::find(auth()->id())->target_practice_seconds / 60;
        return view('input-practice', [
            'instruments' => $instruments,
            'practice_categories' => $practice_categories,
            'practice_subcategories' => $practice_subcategories,
            'minutes_list' => $minutes_list,
            'practice_menus' => $practice_menu,
            'target_minutes_this_month' => $target_minutes_this_month
        ]);
    }
    
    private function getArithmeticalProgression (int $first, int $end, int $difference){
        $result = [];

        for($num = $first; $num <= $end; $num += $difference) {
            $result[] = $num;
        }
        return $result;
    }
}
