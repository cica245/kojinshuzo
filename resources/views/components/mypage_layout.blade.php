@php
use Illuminate\Support\Facades\Auth;

$user = Auth::user(); // ログインしているユーザー情報を取得
if (!$user) {
    return redirect('/'); // ログインしていない場合はトップページへリダイレクト
}
@endphp
<!DOCTYPE html>
<html lang="ja">
<x-header></x-header>

<body>

    <x-loginmenu></x-loginmenu>

    {{ $slot }}

    <x-footer></x-footer>

</body>

</html>
