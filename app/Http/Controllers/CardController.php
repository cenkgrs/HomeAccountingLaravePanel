<?php

namespace App\Http\Controllers;

use App\Models\Cards;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(Request $request)
    {
        $data['cards'] = Cards::paginate(10);

        if ($request->isMethod('post')) {

            $input = $request->all();

            $message = '';

            if ($input['method'] == 'insert') {
                Cards::insert([
                    'name' => $input['name'],
                    'type' => $input['type'],
                    'limit' => $input['limit'],
                ]);

                $message = "Kart Eklendi";
            }

            if ($input['method'] == 'update') {
                Cards::where('id', $input['id'])->update([
                    'name' => $input['name'],
                    'type' => $input['type'],
                    'limit' => $input['limit'],
                ]);

                $message = "Kart Bilgileri Güncellendi";
            }

            if ($input['method'] == 'delete') {
                Cards::where('id', $input['id'])->delete();

                $message = "Kart Kaldırıldı";
            }

            return redirect()->route('cards')->with('success_message', $message);

        }

        return view('cards.index', $data);
    }
}
