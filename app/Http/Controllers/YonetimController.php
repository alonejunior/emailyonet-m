<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Musteriler;

class YonetimController extends Controller
{
    public function index()
    {
        return view("include.home");
    }

    public function musteriEkle()
    {
      return view("include.musteri-ekle");
    }

        public function MusteriEklePost(Request $request)
        {
            $request->validate([
              'adsoyad'=>'required',
                'mail'=>'required|email:rfc,dns'
            ]);
                Musteriler::create([
                  'adsoyad'=>$request->adsoyad,
                  'mail'=>$request->telefon,
                  'telefon'=>$request->telefon,
                ]);
                  return redirect()->route('musteri-ekle')->with('success','musteri bilgisi başarıyla eklendi.');
        }

            public function musteriListe(){
              $musteriler=Musteriler::all();
              return view("include.musteri-liste",compact('musteriler'));
            }

    }
