<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function store(Request $request)
    {

        $user = Auth::user(); // ログインしているユーザー情報を取得
        if (!$user) {
            return redirect('/'); // ログインしていない場合はトップページへリダイレクト
        }

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('image');
        $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $path = Storage::disk('public')->putFileAs('images', $file, $filename);
        return response()->json(['message' => 'Image uploaded successfully', 'url' => url('storage/' . $path)]);
    }
}
