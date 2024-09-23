<x-layout>
    @section('title', '検索結果一覧 | 個人収蔵.com')
    <div class="container-fluid mt-3 mb-4">
        <h1>検索結果一覧</h1>
        <p>検索した結果、 {{ $science_datas->total() }}件ヒットしました。</p>
        <div class="text-center">
            {{ $science_datas->links() }}
        </div>
        <table class="table table-bordered sticky_table">
            <thead>
                <tr>
                    <th class="col-xs-3 col-lg-1" style='background-color:#aad5ff;'>ID</th>
                    <th class="col-xs-3 col-lg-2" style='background-color:#aad5ff;'>和名</th>
                    <th class="col-xs-3 col-lg-2" style='background-color:#aad5ff;'>学名</th>
                    <th class="col-lg-2 d-none d-lg-table-cell" style='background-color:#aad5ff;'>採集地</th>
                    <th class="col-lg-1 d-none d-lg-table-cell" style='background-color:#aad5ff;'>採集日</th>
                    <th class="col-lg-1 d-none d-lg-table-cell" style='background-color:#aad5ff;'>所蔵者</th>
                    <th class="col-lg-1 d-none d-lg-table-cell" style='background-color:#aad5ff;'>タイプ標本</th>
                    <th class="col-xs-3 col-lg-1 d-none d-lg-table-cell" style='background-color:#aad5ff;'>サムネイル</th>
                    <th class="col-xs-3 col-lg-1" style='background-color:#aad5ff;'></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($science_datas as $science_data)
                    <tr>
                    <tr>
                        <td class="col-lg-1"><?php echo htmlspecialchars($science_data['id']); ?></td>
                        <td class="col-lg-2"><?php echo htmlspecialchars($science_data['wamei']); ?></td>
                        <td class="col-lg-2"><?php echo htmlspecialchars($science_data['gakumei']); ?></td>
                        <td class="col-lg-2 d-none d-lg-table-cell"><?php echo htmlspecialchars($science_data['saishuchi']); ?></td>
                        <td class="col-lg-1 d-none d-lg-table-cell">
                            <?php echo htmlspecialchars($science_data['saishunen']); ?>/<?php echo htmlspecialchars($science_data['saishutsuki']); ?>/<?php echo htmlspecialchars($science_data['saishubi']); ?></td>
                        <td class="col-lg-1 d-none d-lg-table-cell"><a
                                href="<?php echo 'https://plus.google.com/u/0/' . htmlspecialchars($science_data['shozousha']); ?>"><?php echo htmlspecialchars($science_data['shozousha']); ?></a></td>
                        <td class="col-lg-1 d-none d-lg-table-cell"><?php echo htmlspecialchars($science_data['type']); ?></td>
                        <td class="col-lg-1 d-none d-lg-table-cell"> <?php if (htmlspecialchars($science_data['gazou'], ENT_QUOTES, 'UTF-8') != '') {
                            echo '<a href=' . htmlspecialchars($science_data['gazou'], ENT_QUOTES, 'UTF-8') . " data-lightbox='group'><div class='thumbnails'><img src=" . htmlspecialchars($science_data['gazou'], ENT_QUOTES, 'UTF-8') . ' /></div></a>';
                        } ?></td>
                        <td class="col-lg-1"><a href="sciencedatas/detail/{{ $science_data['id'] }}"><button
                                    type="submit" class="btn btn-primary">詳細</button></a></td>
                    </tr>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">
            {{ $science_datas->links() }}
        </div>
        <hr>

        <p>■エクスポートしたテキストファイル（全件）はセミコロン区切りです。そのままExcelにコピペして、「データ」→「区切り位置」で調整してください。</p>

    </div><!-- /#contents -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/jquery.MyThumbnail.js"></script>
    <script type='text/javascript'>
        $(function() {
            $('#submit').click(function() {
                send();
            });

            function send(where) {
                dispLoading("処理中...");
                // 送信処理
                $.ajax({
                    type: "POST",
                    url: "https://kojin-shuzo.com/export.php",
                    data: { // 付加する情報
                        item: where
                    },
                    success: function(data) {
                        // サーバからのレスポンス処理
                        if (data) {
                            $("#hiddenform").submit();
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {

                    },
                    complete: function(data) {
                        removeLoading();
                    }
                });
            }
            // Loadingイメージ表示関数
            function dispLoading(msg) {
                // 画面表示メッセージ
                var dispMsg = "";

                // 引数が空の場合は画像のみ
                if (msg != "") {
                    dispMsg = "<div class='loadingMsg'>" + msg + "</div>";
                }
                // ローディング画像が表示されていない場合のみ表示
                if ($("#loading").size() == 0) {
                    $("body").append("<div id='loading'>" + dispMsg + "</div>");
                }
            }

            // Loadingイメージ削除関数
            function removeLoading() {
                $("#loading").remove();
            }

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".thumbnails img").MyThumbnail({
                thumbWidth: 100,
                thumbHeight: 100,
                //      imageDivClass: :"myPic",    // 生成されるdivのclass
                //      bShowPointerCursor: false,  // trueの場合、カーソル形状cursor:pointerへ設定
            });
        });
    </script>
</x-layout>
