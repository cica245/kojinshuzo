<x-layout>
    @section('title', 'ラベル作成支援ツール（OSM） | 個人収蔵.com')

    <body  onload='initialize()'>
    <div class="container mt-3">
        <h1>ラベル作成支援ツール（OSM）</h1>
        <h2>らべる作成くんweb</h2>
        <p><a href="https://www.openstreetmap.org/">世界測地系(WGS84)のOpenStreetMap
                API</a>で地図と住所を出しています。標高は、地理院地図　標高API（世界測地系）から取得しています。採集者と採集日に入力して、地図を動かすとラベルができます。</p>
        <p><a href="http://www.post.japanpost.jp/zipcode/download.html">日本郵便のデータ</a>を使って、郵便番号から住所のローマ字変換をします。</p>
        <p>ご利用の際は、本サービスの<a href="riyoukitei.php">利用規定</a>をご一読ください。</p>
        <hr>
        <p>◆採集者、採集日、メモ欄を埋めてください。（日本語・英語等の規制はありません。フリーフォーマットです。）</p>
        <p>　　採集者：<input type=text id="inSaishusha" placeholder="S.Matsumura"></p>
        <p>　　採集日：<input type=text id="inSaishubi" placeholder="June 1, 2016"></p>
        <p>　　メモ：
            <textarea id="inMemo" cols='40' rows='5'></textarea>
        </p>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <p>＜標本ラベル案＞</p>
                <table style="width:200px;">
                    <tr>
                        <td>
                            <span id="spanAddress"></span><br>
                            (<span id="spanLat"></span>°N <span id="spanLng"></span>°E)<br>
                            <span id="Saishubi"></span><br>
                            <span id="Saishusha"></span> leg.<br>
                        </td>
                    </tr>
                    <td><span id="Post"></span><br>標高:<span id="Hyoukou"></span>m <br><span
                            id="Memo"></span></td>
                    </tr>
                </table>
                <p>ボタンを押下すると、住所をローマ字変換します。</p><button type="button" id="p_button">ローマ字変換</button>
                </table>
                <table style="width:200px;">
                    <tr>
                        <td>
                            <span id="romeAddress">Rome was not built in a day.</span><br>
                            (<span id="spanLat2"></span>°N <span id="spanLng2"></span>°E)<br>
                            <span id="Saishubi2"></span><br>
                            <span id="Saishusha2"></span> leg.<br>
                        </td>
                    </tr>
                </table>

                country: <span id="country"></span><br>
                stateProvince: <span id="stateProvince"></span><br>
                county: <span id="county"></span><br>
                municipality: <span id="municipality"></span><br>
                <form id="hiddenform" method="POST" action="export_map.php" />
                <input type="hidden" id="php_saishubi" name="php_saishubi" value="" />
                <input type="hidden" id="php_address" name="php_address" value="" />
                <input type="hidden" id="php_lat" name="php_lat" value="35.64997652994234" />
                <input type="hidden" id="php_lng" name="php_lng" value="139.72116702175174" />
                <input type="hidden" id="php_hyoukou" name="php_hyoukou" value="" />
                <input type="hidden" id="php_memo" name="php_memo" value="" />
                <input type="hidden" id="php_saishusha" name="php_saishusha" value="" />
                <input type="hidden" id="php_country" name="php_country" value="" />
                <input type="hidden" id="php_stateProvince" name="php_stateProvince" value="" />
                <input type="hidden" id="php_county" name="php_county" value="" />
                <input type="hidden" id="php_municipality" name="php_municipality" value="" />
                <input type="submit" id="submit" value="エクスポート" />
                </form>
            </div>
            <div class="col-md-6">
                <div id="mymap" style="width:430px; height:430px;"></div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <!-- leaflet.css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <!-- leaflet.js -->
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
    <script type='text/javascript'>
        /* ページ読み込み時に地図を初期化 */
        function initialize() {
            /* 緯度・経度と倍率の指定 */
            var mymap = L.map("mymap").setView([$('#php_lat').val(), $('#php_lng').val()], 9);

            /* 地図タイルとクレジット表示 */
            L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: "&copy; <a href='http://osm.org/copyright'>OpenStreetMap</a> contributors"
            }).addTo(mymap);


            // 十字マークを地図中央に表示
            var crossIcon = L.icon({
                iconUrl: 'https://maps.gsi.go.jp/image/map/crosshairs.png',
                iconSize: [32, 32],
                iconAnchor: [16, 16]
            });

            var crossMarker = L.marker(mymap.getCenter(), {
                icon: crossIcon,
                zIndexOffset: 1000,
                interactive: false
            }).addTo(mymap);


            mymap.on('moveend', function(e) {
                crossMarker.setLatLng(mymap.getCenter());

                /* 地図オブジェクト生成 */
                $('#spanLat').html(mymap.getCenter().lat.toFixed(4));
                $('#spanLng').html(mymap.getCenter().lng.toFixed(4));
                $('#spanLat2').html(mymap.getCenter().lat.toFixed(4));
                $('#spanLng2').html(mymap.getCenter().lng.toFixed(4));
                $('#php_lat').val(mymap.getCenter().lat.toFixed(4));
                $('#php_lng').val(mymap.getCenter().lng.toFixed(4));
                getAddress(mymap.getCenter().lat, mymap.getCenter().lng);
                getElevation(mymap.getCenter().lat, mymap.getCenter().lng);
                saishu();
            });
        }

        function getElevation(lat, lng) {
            //地理院APIで、標高
            var url = 'https://cyberjapandata2.gsi.go.jp/general/dem/scripts/getelevation.php?lon=' + lng + '&lat=' + lat +
                '&outtype=JSON';
            $.getJSON(
                url,
                function(d) {
                    if (d) {
                        $('#Hyoukou').html(d.elevation);
                        $('#php_hyoukou').val(d.elevation);
                    } else {
                        $('#Hyoukou').html(' -&nbsp;');
                    }
                }
            );
        }

        function saishu() {
            var saishusha = $('#inSaishusha').val();
            $('#Saishusha').html(saishusha);
            $('#Saishusha2').html(saishusha);
            $('#php_saishusha').val(saishusha);
            var saishubi = $('#inSaishubi').val();
            $('#Saishubi').html(saishubi);
            $('#Saishubi2').html(saishubi);
            $('#php_saishubi').val(saishubi);
            var memo = $('#inMemo').val();
            $('#Memo').html(memo);
            $('#php_memo').val(memo);
        }

        function getAddress(lat, lng) {
            var request = new XMLHttpRequest();
            request.onload = function() {
                var data = this.response;
                var result = document.getElementById('spanAddress');

                var addr = "";
                if (data != null && data.address != null) {
                    if (data.address.postcode) {
                        addr = data.address.postcode
                    }
                    if (data.address.province) {
                        addr = addr + data.address.province;
                    }
                    if (data.address.state) {
                        addr = addr + data.address.state;
                    }
                    if (data.address.region) {
                        addr = addr + data.address.region;
                    }
                    if (data.address.county) {
                        addr = addr + data.address.county;
                    }
                    if (data.address.city) {
                        addr = addr + data.address.city;
                    }
                    if (data.address.district) {
                        addr = addr + data.address.district;
                    }
                    if (data.address.suburb) {
                        addr = addr + data.address.suburb;
                    }
                    if (data.address.town) {
                        addr = addr + data.address.town;
                    }
                    if (data.address.village) {
                        addr = addr + data.address.village;
                    }
                    if (data.address.neighbourhood) {
                        addr = addr + data.address.neighbourhood;
                    }
                    if (data.address.road) {
                        addr = addr + data.address.road;
                    }
                }
                result.innerText = addr;
                $('#Post').html(addr.substr(0, 8));

                $(function() {

                    // 初期化処理
                    $('#p_button').click(function() {
                        $('#romeAddress').html($('#Post').html().substr(0, 3) + $('#Post').html()
                            .substr(4, 4));
                        send2($('#Post').html().substr(0, 3) + $('#Post').html().substr(4, 4));
                        return false;
                    });

                });

                function send2(address) {
                    // 送信処理
                    $.ajax({
                        type: "POST",
                        url: "https://kojin-shuzo.com/yuubin.php",
                        dataType: "json",
                        data: { // 付加する情報
                            item: address
                        },
                        success: function(data) {
                            // サーバからのレスポンス処理
                            str = data[0].Country + ':' + data[0].Pref + ' ' + data[0].City + ', ' + data[0]
                                .AddressLine;
                            country = data[0].Country;
                            stateProvince = data[0].Pref;
                            county = data[0].City;
                            municipality = data[0].AddressLine;

                            $('#romeAddress').html(str);
                            $('#php_rome').val(str);
                            $('#country').html(country);
                            $('#php_country').val(country);
                            $('#stateProvince').html(stateProvince);
                            $('#php_stateProvince').val(stateProvince);
                            $('#county').html(county);
                            $('#php_county').val(county);
                            $('#municipality').html(municipality);
                            $('#php_municipality').val(municipality);
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            $('#romeAddress').html(errorThrown.message);
                        }
                    });
                }
            }
            var url = "https://nominatim.openstreetmap.org/reverse?" +
                "format=json" +
                "&lat=" + lat +
                "&lon=" + lng;
            request.open('GET', url, true);
            request.responseType = 'json';
            request.send();


        }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E7M8RBHX1Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-E7M8RBHX1Q');
    </script>
</x-layout>
