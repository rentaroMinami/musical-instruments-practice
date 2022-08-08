<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserSetting;
use App\Models\UserInstrument;
use App\Models\Instrument;
use App\Models\PracticeHistory;
use App\Models\PracticeCategory;
use App\Models\PracticeSubcategory;
use App\Models\PracticeMenu;


class MyProfileController extends Controller
{
    public function index() {
        $user = User::find(auth()->id());
        $user_setting = UserSetting::find(auth()->id());
        $practice_history = PracticeHistory::selectRaw(
            'user_id, SUM(practice_seconds) as practice_seconds'
            )->groupBy('user_id')
            ->first();
        $archivement_seconds_this_month = $practice_history->practice_seconds ? $practice_history->practice_seconds : 0;

        return view('index', [
            'user_name' => $user->name,
            'target_minutes_this_month'=> $user_setting->target_practice_seconds / 60,
            'archivement_minutes_this_month' => $archivement_seconds_this_month / 60
        ]);
    }

    public function showMyProfile() {
        $instruments = Instrument::all();
        $practice_categories = PracticeCategory::all();
        $practice_subcategories = PracticeSubcategory::all();
        $minutes_list = $this->getArithmeticalProgression(60, 12000, 60);
        $practice_menu = PracticeMenu::all();
        $target_minutes_this_month = UserSetting::find(auth()->id())->target_practice_seconds / 60;

        $user = User::find(auth()->id());
        $user_setting = UserSetting::find(auth()->id());
        $user_instrument = UserInstrument::where('user_setting_id', auth()->id());
        $main_instrument = Instrument::find($user_instrument->where('is_main', true)->get('instrument_id'))->first();
        $sub_instrument = Instrument::find($user_instrument->where('is_main', false)->get('instrument_id'));
        return view('myprofile', [
            'instruments' => $instruments,
            'practice_categories' => $practice_categories,
            'practice_subcategories' => $practice_subcategories,
            'minutes_list' => $minutes_list,
            'practice_menus' => $practice_menu,
            'target_minutes_this_month' => $target_minutes_this_month,
            
            'user_name' => $user->name,
            'main_instrument' => $main_instrument,
            'sub_instruments' => $sub_instrument,
            'target_practice_minutes' => $user_setting->target_practice_seconds / 60
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

