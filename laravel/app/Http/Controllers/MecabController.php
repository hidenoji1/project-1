<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Youaoi\MeCab\MeCab;
use Config;

class MecabController extends Controller
{
    //
    public function index () {

        return view('mecab');
    }

    //
    public function post (Request $request) {

        $params = $request->validate([
            'text' => 'required|max:2000',
        ]);

        $words = array();
        $text  = $params['text'];

        if ($text != '') {

            MeCab::setDefaults([
                'dictionaryDir' => Config::get('mecab.dictionaryDir'),
            ]);

            $words = MeCab::parse($text);

            foreach ($words as $index => $word) {

                $words[$index] = array(
                    'id'            => $index+1,                        // id
                    'text'          => self::to($word->text),           // 表層形
                    'speech'        => self::to($word->speech),         // 品詞
                    'speechInfo1'   => self::to($word->speechInfo[0]),  // 品詞(細分類1)
                    'speechInfo2'   => self::to($word->speechInfo[1]),  // 品詞(細分類2)
                    'speechInfo3'   => self::to($word->speechInfo[2]),  // 品詞(細分類3)
                    'conjugate'     => self::to($word->conjugate),      // 活用型
                    'conjugateType' => self::to($word->conjugateType),  // 活用形
                    'original'      => self::to($word->original),       // 原形
                    'reading'       => self::to($word->reading),        // 読み
                    'pronunciation' => self::to($word->pronunciation),  // 発音
                );
            }
        }

        return redirect()->route('mecab.index')
                         ->withInput()
                         ->with('words', $words);
    }

    protected static function to($text, $def='*') {
        return isset($text) ? $text : $def;
    }
}
