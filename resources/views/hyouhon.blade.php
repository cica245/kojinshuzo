<x-layout>
    <x-slot:title>
        お問い合わせリンク | 個人収蔵.com
    </x-slot>

    <div class="container mt-3 mb-4">
        <h1>お問い合わせリンク</h1>
        <p>登録内容の詳細です。</p>
        <form method="post" action="">
            <div class="post form-size mx-auto">
                <div class="row">
                    <div class="col-4 table-blue d-flex align-items-center">ID</div>
                    <div class="col-8 table-gray">
                        {!! e($science_data->id) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-skyblue d-flex align-items-center">和名</div>
                    <div class="col-8 table-white">
                        {!! e($science_data->wamei) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-blue d-flex align-items-center">学名</div>
                    <div class="col-8 table-gray">
                        {!! e($science_data->gakumei) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-skyblue d-flex align-items-center">性別</div>
                    <div class="col-8 table-white">
                        {!! e($science_data->sex) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-blue d-flex align-items-center">採集地</div>
                    <div class="col-8 table-gray">
                        {!! e($science_data->saishuchi) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-skyblue d-flex align-items-center">採集地＜緯度＞</div>
                    <div class="col-8 table-white">
                        {!! e($science_data->lat) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-blue d-flex align-items-center">採集地＜経度＞</div>
                    <div class="col-8 table-gray">
                        {!! e($science_data->lng) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-skyblue d-flex align-items-center">採集年月日</div>
                    <div class="col-8 table-white">
                        {!! e($science_data->saishunen) !!}/{!! e($science_data->saishutsuki) !!}/{!! e($science_data->saishubi) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-blue d-flex align-items-center">採集者</div>
                    <div class="col-8 table-gray">
                        {!! e($science_data->saishusha) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-skyblue d-flex align-items-center">同定者</div>
                    <div class="col-8 table-white">
                        {!! e($science_data->douteisha) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-blue d-flex align-items-center">所蔵者</div>
                    <div class="col-8 table-gray">
                        <a href="<?php echo 'https://plus.google.com/u/0/' . e($science_data->shozousha) ?>">{!! e($science_data->shozousha) !!}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-skyblue d-flex align-items-center">所蔵者Twitter</div>
                    <div class="col-8 table-white">
                        <a href="<?php echo 'https://twitter.com/' . e($science_data->twitterID) ?>">{!! e($science_data->twitterID) !!}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-blue d-flex align-items-center">現収蔵機関・標本番号</div>
                    <div class="col-8 table-gray">
                        {!! e($science_data->shuzokikan) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-skyblue d-flex align-items-center">タイプ標本</div>
                    <div class="col-8 table-white">
                        {!! e($science_data->type) !!}
                    </div>
                </div>
                              <div class="row">
                        <div class="col-4 table-blue d-flex align-items-center">画像URL 1</div>
                        <div class="col-8 table-gray">
                            <?php if($science_data->gazou){ ?>
                                <!-- Button trigger modal -->
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{!! e($science_data->id) !!}-1">
                                    <img src="{!! e($science_data->gazou) !!}" width="100px" height="100px"/>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal-{!! e($science_data->id) !!}-1" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                    {!! e($science_data->wamei) !!} {!! e($science_data->gakumei) !!}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{!! e($science_data->gazou) !!}" />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 table-skyblue d-flex align-items-center">画像URL 2</div>
                        <div class="col-8 table-white">
                            <?php if(e($science_data->gazou2)){ ?>
                                <!-- Button trigger modal -->
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{!! e($science_data->id) !!}-2">
                                    <img src="{!! e($science_data->gazou2) !!}" width="100px" height="100px"/>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal-{!! e($science_data->id) !!}-2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                    {!! e($science_data->wamei) !!} {!! e($science_data->gakumei) !!}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{!! e($science_data->gazou2) !!}" />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 table-blue d-flex align-items-center">画像URL 3</div>
                        <div class="col-8 table-gray">
                            <?php if($science_data->gazou3){ ?>
                                <!-- Button trigger modal -->
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-{!! e($science_data->id) !!}-3">
                                    <img src="{!! e($science_data->gazou3) !!}" width="100px" height="100px"/>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal-{!! e($science_data->id) !!}-3" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                    {!! e($science_data->wamei) !!} {!! e($science_data->gakumei) !!}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{!! e($science_data->gazou3) !!}" />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-4 table-skyblue d-flex align-items-center">保存法</div>
                    <div class="col-8 table-white">
                        {!! e($science_data->save) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-blue d-flex align-items-center">ライセンス</div>
                    <div class="col-8 table-gray">
                        <?php if ($science_data->license== '0') {
                            echo "<a href='https://creativecommons.org/publicdomain/zero/1.0/deed.ja'><img src=" . url('images/CC0_button.png') . " alt='CC0（パブリックドメイン）' /></a>";
                        } elseif ($science_data->license== '1') {
                            echo "<a href='http://creativecommons.org/licenses/by/4.0/deed.ja'><img src=" . url('images/Cc-by-icon.png') . " alt='CCBY（表示）' /></a>";
                        } elseif ($science_data->license== '2') {
                            echo "<a href='http://creativecommons.org/licenses/by-nc/4.0/deed.ja'><img src=" . url('images/CC-BY-NC-icon-88x31.png') . " alt='CCBY-NC（商用不可）' /></a>";
                        } elseif ($science_data->license== '3') {
                            echo "<a href=''><img src='images/icon_112460_32.png' alt='非表示' /></a>";
                        } ?>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-4 table-skyblue d-flex align-items-center">コメント</div>
                    <div class="col-8 table-white">
                        {!! e($science_data->comment) !!}
                    </div>
                </div>
                </table>
        </form>
        <div class="mx-auto">
            お問い合わせ用リンク<input type="text" name="id" class='form-control' value="<?php echo 'https://kojin-shuzo.com/hyouhon/' . $science_data->id; ?>"></div>
        <div class="mt-3"><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                data-text="個人収蔵.comに登録しました！" data-url="<?php echo 'https://kojin-shuzo.com/hyouhon/' . $science_data->id; ?>" data-show-count="false">Tweet</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div><br><br>
        <table style="width:400px;">
            <tr>
                <td>
                    <span>{!! e($science_data->saishuchi) !!}</span><br>
                    (<span id="spanLat">{!! e($science_data->lat) !!}</span>°N <span
                        id="spanLng">{!! e($science_data->lng) !!}</span>°E)<br>
                    <span id="Saishubi">{!! e($science_data->saishunen) !!}/{!! e($science_data->saishutsuki) !!}/{!! e($science_data->saishubi) !!}</span><br>
                    <span id="Saishusha">{!! e($science_data->saishusha) !!}</span> leg.<br>
                <td><img src="<?php echo 'https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=https://kojin-shuzo.com/hyouhon/' . $science_data->id; ?>"></td>
                </td>
            </tr>
            </tr>
        </table>
        <br><br>
        </a>

        </p>
        <p>
        <div id="mymap" style="width:300px; height:300px;"></div>

        <input type="hidden" id="php_lat" name="php_lat" value={!! e($science_data->lat) !!} />
        <input type="hidden" id="php_lng" name="php_lng" value={!! e($science_data->lng) !!} />
        <input type="hidden" id="php_post" name="php_lng" value="" />
    </div>
    </div>
    <script type="text/javascript">
        /* 緯度・経度と倍率の指定 */
        var mymap = L.map("mymap").setView([$('#php_lat').val(), $('#php_lng').val()], 9);

        /* 地図タイルとクレジット表示 */
        L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "&copy; <a href='http://osm.org/copyright'>OpenStreetMap</a> contributors"
        }).addTo(mymap);

        L.marker([$('#php_lat').val(), $('#php_lng').val()]).addTo(mymap);

        /* GeoJSONの読込 */
        L.geoJSON(data, {
            onEachFeature: function(feature, layer) {
                layer.bindPopup("<div style='width:150px'>" + feature.properties.name + "</div>");
            }
        }).addTo(mymap);

        /* イベント処理 */
        var popup = L.popup();

        function onMapClick(e) {
            popup.setLatLng(e.latlng).setContent(
                "<p>緯度:" + e.latlng.lat + " 経度:" + e.latlng.lng + "</p>"
            ).openOn(mymap);
        }
        mymap.on("click", onMapClick)
    </script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject= r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-86024449-1', 'auto');
        ga('send', 'pageview');
    </script>
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
