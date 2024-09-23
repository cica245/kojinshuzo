<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand fs-3 nav-title" href="{{ route('index') }}">個人収蔵.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('riyoukitei') }}"><i class="fas fa-list me-3"></i>利用規定</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('help') }}"><i class="fas fa-question-circle me-3"></i>ヘルプ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('sciencedatas') }}"><i class="fas fa-database me-3"></i>データベース検索</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('map') }}"><i class="fas fa-map-marker-alt me-3"></i>ラベル作成支援ツール</a>
                </li>
            </ul>

            <form class="d-flex form-group">
                <a href="{{ url('login/google') }}" style="color:#FFF;"><button class="btn btn-primary"><i
                            class="fas fa-sign-in-alt me-3"></i>Login with Google</a>
            </form>
        </div>
    </div>
</nav>
