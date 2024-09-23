<!DOCTYPE html>
<html lang="ja">
<x-top_header></x-top_header>

<body onLoad="slide()">
    <header class="text-center p-5" id="slide"
        style="background-image: url(images/spider.jpg);background-position: left center;background-size: cover;">
        <h1 class="title">個人収蔵.com</h1>
        <p style="padding-bottom:200px;">標本をデータベースに。</p>
    </header>

    <x-menu></x-menu>

    {{ $slot }}

    <x-footer></x-footer>

</body>

</html>
