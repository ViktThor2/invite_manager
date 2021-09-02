<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costumer;
use App\Mail\Invite;

class CostumerInviteController extends Controller
{
    public function index()
    {
      return view('admin.costumer_invite.index');
    }

    public function send(Request $request)
    {
      $mail = new Invite($request);
      \Mail::to($request->email)->send($mail);

      return redirect()->route('invite');
    }

    public function create($id)
    {
      return view('admin.costumer_invite.create')
        ->with('id', $id);
    }

    public function store(Request $request, $id)
    {
      if (\Hash::check($request->email, $id))
      {
        $costumer = New Costumer();

        $being = $costumer->check($request->email)->get();
        if($being && isset($being[0])){
          session()->flash('error', 'Már regisztált email cím');
        }
        else {
          $costumer->setData($request);
          $costumer->save();
          session()->flash('message', 'Sikeres regisztráció');
        }

      } else {
        session()->flash('error', 'Kérem azt az email címet használlja, amire a meghívást kapta');
      }

      return view('admin.costumer_invite.create')
          ->with('id', $id);
    }
}
