<x-top_layout>
    <div class="container item">
        <h1></h1>
        <div class="container-fluid mt-5 border border-danger border-4">
            <section class="container">
                <h2 class="align1 mt-3 mb-5">お知らせ</h2>
                <p>■2024/9/23  Laravel11への移行作業中です。
                </p>
            </section>
        </div>
        <h2 class="align1 mt-3 mb-5">Concept</h2>
        <section class="row">
            <section class="col-md-5 mb-5">
                <h3 class="c-small_headline c-center">「個人収蔵.com」は、個人で収蔵している標本情報をデータベースで共有し、調査研究に役立てることを目的としております。</h3>
                <div class="c-body c-center">
                    当サービスでは生物標本コレクションのラベル情報と所蔵者をデータベースで管理できます。<br>
                    データベースで管理している情報は、常に検索することができ、所蔵者に対してGmailでコンタクトを取ることで、調査研究に用いるための交渉をすることができます。<br>
                    個人収蔵コレクションのお披露目・自慢にも活用できます。是非ご登録ください。
                </div>
            </section>
            <section class="col-md-7 mb-5">
                <div class="chart-container mx-auto" style="position: relative; width:80%; height:50vh">
                    <canvas id="myPieChart"></canvas>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
                <script>
                    var ctx = document.getElementById("myPieChart");
                    var label = ["植物", "昆虫"];
                    var count = [100, 200];
                    var arr_str = count;

                    for (var i = 0; i < arr_str.length; i++) {
                        arr_str[i] = parseInt(arr_str[i]);
                    }


                    var myPieChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: label,
                            datasets: [{
                                backgroundColor: [
                                    "#a0c238",
                                    "#65ace4",
                                    "#de9610",
                                    "#cc528b",
                                    "#9460a0",
                                    "#d06d8c",
                                    "#0074bf",
                                ],
                                data: arr_str
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                text: '分類群別　登録数'
                            },
                            maintainAspectRatio: false,
                        }
                    });
                </script>
            </section>
        </section>
    </div>
    <div class="container-fluid mt-5 highlight">
        <section class="container">
            <h2 class="align1 mt-3 mb-5">使い方</h2>
            <section class="row">
                <section class="col-md-6 mb-5">
                    <h3 class="text-light">データベース検索はログイン不要</h3>
                    <a href="searchform.php" style="color:#000;">
                        <h4 class="m-0">データベース検索</h4>
                    </a>
                    <br>
                    <p>ログイン不要で、どなたでも閲覧できます。データベースに登録されている、標本の和名・学名・採集地・採集日・採集者・所蔵者等が分類群（昆虫・クモ・魚・軟体・甲殻・鳥・植物）ごとに見られます。</p>
                    <div style="text-align:center;"><i class="fas fa-database fa-5x me-3" style="color:skyblue;"></i><i
                            class="fas fa-database fa-5x me-3" style="color:skyblue;"></i><i
                            class="fas fa-database fa-5x" style="color:skyblue;"></i></div>
                </section>
                <section class="col-md-6 mb-5">
                    <h3 class="text-light">Google(Gmail)のIDとパスワードでログイン</h3>
                    <h4 class="m-0">画面から登録</h4>
                    <p>
                        GoogleのIDとパスワードでログインし、web画面から標本情報をデータベースに登録できます。（※本サービスのアプリ連携では、投稿を見たりパスワードを盗んだりはできませんのでご安心ください）登録内容の詳細は、ヘルプをお読みください。
                    </p>
                    <h4 class="m-0">画面から変更</h4>
                    <p>登録されたデータベースの内容は、登録者に限り変更することができます。</p>
                    <h4 class="m-0">CSVから取込</h4>
                    <br>
                    <p>複数の標本情報を一度にデータベースに登録するため、CSVでの取込も用意しております。セルに値を埋めるだけで、ボタン一つでCSVを作ることができるExcelがダウンロードできますので、ご利用ください。
                    </p>
                </section>
            </section>
        </section>
    </div>
    <div class="container mt-5 item">
        <h2 class="align1 mt-3 mb-5">その他コンテンツ</h2>
        <section class="row">
            <div class="col-md-4 mb-3">
                <a href="map"><button type="submit" class="btn btn-primary w-100 mb-3 fs-3"><i
                            class="fas fa-map-marker-alt me-3"></i>MapTool</button></a>
                <p>ラベル作成支援ツール(OpenStreetMap版)：地図を動かして、緯度経度情報から地名や標高を補完して標本ラベル案を作ります</p>
            </div>
            <section class="col-md-4 mb-3">
                <a href="catalogue"><button type="submit" class="btn btn-primary w-100 mb-3 fs-3"><i
                            class="fas fa-link me-3"></i>Link</button></a>
                <p>生物目録リンク集：公開中の目録のリンク集です。</p>
            </section>
            <section class="col-md-4 mb-3">
                <a href="type"><button type="submit" class="btn btn-primary w-100 mb-3 fs-3"><i
                            class="fas fa-link me-3"></i>Link</button></a>
                <p>タイプ標本の検索システムリンク集です。</p>
            </section>
        </section>
        <section class="row">
            <section class="col-md-4 mb-3">
                <a href="naturalhistory"><button type="submit" class="btn btn-primary w-100 mb-3 fs-3"><i
                            class="fas fa-link me-3"></i>Link</button></a>
                <p>オンライン自然誌リンク集：オンラインで公開されている自然誌のリンク集です。</p>
            </section>
            <section class="col-md-4 mb-3">
                <a href="kanagawa_pl"><button type="submit" class="btn btn-primary w-100 mb-3 fs-3"><i
                            class="fas fa-database me-3"></i>Contents</button></a>
                <p>神奈川県植物誌 総目次</p>
            </section>
            <section class="col-md-4 mb-3">
                <a href="searchform_kanagawamoth.php"><button type="submit" class="btn btn-primary w-100 mb-3 fs-3"><i
                            class="fas fa-database me-3"></i>Contents</button></a>
                <p>神奈川県昆虫誌2018　蛾類データベース</p>
            </section>
        </section>
    </div>
    <div class="container-fluid mt-5 highlight">
        <section class="container">
            <h2 class="align1 mt-3 mb-5">サイト作成・管理</h2>
            <p>宮川翼が作成・管理しています。公式Twitterは<a href="https://twitter.com/mushinobushijp"><i
                        class="fab fa-twitter me-1"></i>こちら</a></p>
            <p>お問い合わせは、E-mail <a href="mailto:info@kojin-shuzo.com"><i
                        class="fas fa-envelope me-1"></i>info@kojin-shuzo.com</a>までよろしくお願いします。</p>
            <p>当サービスで使用している絵は、<a href="https://twitter.com/nay_minalela"><i
                        class="fab fa-twitter me-1"></i>琳譜さん</a>の作品です。こちらはクリエイティブ・コモンズによるライセンスの対象外ですので、無断複写・転載を固く禁じます。
            </p>
        </section>
    </div>
</x-top_layout>
