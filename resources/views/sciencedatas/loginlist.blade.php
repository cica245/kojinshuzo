<x-mypage_layout>
    <x-slot:title>
        検索結果一覧 | 個人収蔵.com
    </x-slot>

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
                    <th class="col-xs-3 col-lg-1 d-none d-lg-table-cell" style='background-color:#aad5ff;'>サムネイル
                    </th>
                    <th class="col-xs-3 col-lg-1" style='background-color:#aad5ff;'></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($science_datas as $science_data)
                    <tr>
                    <tr>
                        <td class="col-lg-1">{!! e($science_data->id) !!}</td>
                        <td class="col-lg-2">{!! e($science_data->wamei) !!}</td>
                        <td class="col-lg-2">{!! e($science_data->gakumei) !!}</td>
                        <td class="col-lg-2 d-none d-lg-table-cell">{!! e($science_data->saishuchi) !!}</td>
                        <td class="col-lg-1 d-none d-lg-table-cell">
                            {!! e($science_data->saishunen) !!}/{!! e($science_data->saishutsuki) !!}/{!! e($science_data->saishubi) !!}</td>
                        <td class="col-lg-1 d-none d-lg-table-cell"><a
                                href="<?php echo 'https://plus.google.com/u/0/' . e($science_data->shozousha) ?>">{!! e($science_data->shozousha) !!}</a></td>
                        <td class="col-lg-1 d-none d-lg-table-cell">{!! e($science_data->type) !!}</td>
                        <td class="col-lg-1 d-none d-lg-table-cell">
                            <?php if($science_data->gazou){ ?>
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$science_data->id}}">
                                <img src="{{ e($science_data->gazou) }}" width="100px" height="100px"/>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal-{{$science_data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                {{ $science_data->wamei}} {{ $science_data->gakumei}}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ $science_data->gazou}}" />
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </td>
                        <td class="col-lg-1"><a href="loginshow/{{ $science_data->id}}"><button type="submit"
                                    class="btn btn-primary">詳細</button></a></td>
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

    <script type='text/javascript'>
        // $(function() {
        //     $('#submit').click(function() {
        //         send();
        //     });

        //     function send(where) {
        //         dispLoading("処理中...");
        //         // 送信処理
        //         $.ajax({
        //             type: "POST",
        //             url: "https://kojin-shuzo.com/export.php",
        //             data: { // 付加する情報
        //                 item: where
        //             },
        //             success: function(data) {
        //                 // サーバからのレスポンス処理
        //                 if (data) {
        //                     $("#hiddenform").submit();
        //                 }
        //             },
        //             error: function(xhr, textStatus, errorThrown) {

        //             },
        //             complete: function(data) {
        //                 removeLoading();
        //             }
        //         });
        //     }
        //     // Loadingイメージ表示関数
        //     function dispLoading(msg) {
        //         // 画面表示メッセージ
        //         var dispMsg = "";

        //         // 引数が空の場合は画像のみ
        //         if (msg != "") {
        //             dispMsg = "<div class='loadingMsg'>" + msg + "</div>";
        //         }
        //         // ローディング画像が表示されていない場合のみ表示
        //         if ($("#loading").size() == 0) {
        //             $("body").append("<div id='loading'>" + dispMsg + "</div>");
        //         }
        //     }

        //     // Loadingイメージ削除関数
        //     function removeLoading() {
        //         $("#loading").remove();
        //     }

        // });
    </script>
</x-mypage_layout>
