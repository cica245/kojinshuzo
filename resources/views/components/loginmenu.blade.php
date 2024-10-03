@php
use Illuminate\Support\Facades\Auth;

$user = Auth::user(); // ログインしているユーザー情報を取得
if (!$user) {
    return redirect('/'); // ログインしていない場合はトップページへリダイレクト
}
@endphp
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand fs-3 nav-title" href="{{ route('home') }}">個人収蔵.com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sciencedatas.create') }}">画面から登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sciencedatas.editform') }}">画面から変更</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sciencedatas.loginlist') }}">データベース検索</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="excelform.php">CSVから取込</a>
            </li>
        </ul>
          <ul class="navbar-nav" style="width:150px;">
            <li class="nav-item dropdown p-1">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user me-3"></i>{{ $user->name }}さん</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-sign-in-alt me-3"></i>Logout</a></li>
              </ul>
            </li>
          </ul>
      </div>
    </div>
  </nav>
