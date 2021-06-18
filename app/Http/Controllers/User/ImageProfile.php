<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageProfile extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'avatar'     => "required|image"
        ]);

        $image = $request->file('avatar')->store('public');
        if (auth()->user()->avatar) {
            Storage::disk('public')->delete(auth()->user()->avatar);
        }


        auth()->user()->update([
            'avatar' => $image
        ]);

        session()->flash('success', 'image changed Successfully');

        return back();
    }
}
