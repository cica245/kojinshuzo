<x-mypage_layout>
    <x-slot:title>
        マイページ | 個人収蔵.com
    </x-slot>

    <div class="container mt-3">
        <h1>マイページ</h1>
        <h2>ようこそ, {{ $user->name }}さん！</h2>

        <p>あなたのメールアドレス: {{ $user->email }}</p>
        <p>アカウント作成日: {{ $user->created_at->format('Y-m-d') }}</p>

        <p>ログインに成功しました。</p>
        <img class="mx-auto d-block mb-5" src="{{url('images/land.png')}}" alt="景色" />
        <h3>あなたが登録したデータ（最新10件）</h3>
        <div class="row">

            <div class="col-sm-6 mb-3">
                <div class="card-body" style="background-color:#bce2e8;">

                </div>
            </div>

        </div>

    </div><!-- /#contents -->
</x-mypage_layout>
