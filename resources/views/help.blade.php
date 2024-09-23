<x-layout>
    @section('title', 'ヘルプ | 個人収蔵.com')
    <div class="container mt-3">
        <h1>ヘルプ</h1>
        <h2>ガイドライン</h2>
        <h3>より良いデータベースにするために</h3>
        <p>タイプ標本や、貴重な標本など、所持していることを知らせたい情報を優先的に登録しましょう。</p>
        <p>採集場所を登録する際は、希少種の生息地が分かると問題が起きる場合があることを考慮しましょう。</p>
        <h2>使い方</h2>
        <h3>登録内容</h3>
        <div>
            <span class="mb-5">
                <div>
                    <img class="border border-info rounded mb-5 img-fluid" src="images/tsukaikata.png" alt="使い方">
                </div>
            </span>
            <h3>DarwinCore対応表</h3>
            <p>最新のDarwinCoreは<a href="https://gbif.jp/datause/dataformat/#dwc_latest">こちら</a></p>
            <table class="table table-bordered sticky_table">
                <thead>
                    <tr>
                        <th style='background-color:#aad5ff;'>項目名</th>
                        <th style='background-color:#aad5ff;'>説明</th>
                        <th style='background-color:#aad5ff;'>Darwin Core<br>対応項目</th>
                        <th style='background-color:#aad5ff;'>Darwin Core<br>説明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>登録ID。登録時に自動で採番される。</td>
                        <td>occurrenceID</td>
                        <td>標本・観察データレコードに割り振られるユニークID</td>
                    </tr>
                    <tr>
                        <td>和名</td>
                        <td>和名。全角カタカナ推奨。</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>学名</td>
                        <td>学名。必須項目。不明な場合、sp.spp.も可。</td>
                        <td>scientificName</td>
                        <td>著者や日付の情報付き学名 </td>
                    </tr>
                    <tr>
                        <td>性別</td>
                        <td>性別。Male、female、不明のいずれか</td>
                        <td>sex</td>
                        <td>標本・観察データの個体の性</td>
                    </tr>
                    <tr>
                        <td rowspan=4>採集地</td>
                        <td rowspan=4>採集地（フリーテキスト）。希少種は詳細を書かないこと。</td>
                        <td>stateProvince</td>
                        <td>標本採取地・観測地の州、県</td>
                    </tr>
                    <tr>
                        <td>county</td>
                        <td>標本採取地・観測地の群、区</td>
                    </tr>
                    <tr>
                        <td>municipality</td>
                        <td>市名など群よりさらに小さい管理地域名</td>
                    </tr>
                    <tr>
                        <td>verbatimLocality</td>
                        <td>標本採集地・観測地（フリーテキスト）</td>
                    </tr>
                    <tr>
                        <td>採集地＜緯度＞</td>
                        <td>採集地の緯度。小数点第6位までを推奨。</td>
                        <td>decimalLatitude</td>
                        <td>標本収集地、観測地の緯度。-90～90の数値 </td>
                    </tr>
                    <tr>
                        <td>採集地＜経度＞</td>
                        <td>採集地の経度。小数点第6位までを推奨。</td>
                        <td>decimalLongitude</td>
                        <td>標本収集地、観測地の経度。-180～180の数値 </td>
                    </tr>
                    <tr>
                        <td rowspan=4>採集年月日</td>
                        <td rowspan=4>採集日。yyyy/mm/ddで記載。希少種は詳細を書かないこと。</td>
                        <td>year</td>
                        <td>イベント発生年</td>
                    </tr>
                    <tr>
                        <td>month</td>
                        <td>イベント発生月 </td>
                    </tr>
                    <tr>
                        <td>day</td>
                        <td>イベント発生日</td>
                    </tr>
                    <tr>
                        <td>verbatimEventDate</td>
                        <td>イベント発生日時（フリーテキスト） </td>
                    </tr>
                    <tr>
                        <td>採集者</td>
                        <td>採集者。フルネームを公開する場合は注意する。</td>
                        <td>recordedBy</td>
                        <td>標本・観察データの担当者（のリスト）、グループ、機関 </td>
                    </tr>
                    <tr>
                        <td>所蔵者</td>
                        <td>所蔵者。登録時にfacebookIDが自動でつく。</td>
                        <td>ownerInstitutionCode</td>
                        <td>データ所有者名または略称 </td>
                    </tr>
                    <tr>
                        <td>タイプ標本</td>
                        <td>プルダウンからパラタイプ、ホロタイプなどを選択。</td>
                        <td>typeStatus</td>
                        <td>命名タイプ（type status, typified name, publication） </td>
                    </tr>
                    <tr>
                        <td>画像URL1</td>
                        <td rowspan=3>
                            画像アップロード可能。アップロード完了時、自動でURLが登録される。検索結果画面では、アップロードした画像がサムネイル表示され、画像をクリックするとアップロード時のサイズに変わる。写真を同時に示すことで、簡易的ではあるが同定確認や同定依頼などが可能。
                        </td>
                        <td rowspan=3>associatedMedia</td>
                        <td rowspan=3>標本・観察データに関連する画像ファイルなどのURI（のリスト）</td>
                    </tr>
                    <tr>
                        <td>画像URL2</td>
                    </tr>
                    <tr>
                        <td>画像URL3</td>
                    </tr>
                    <tr>
                        <td>保存法</td>
                        <td>乾燥、液浸いずれかを選択。</td>
                        <td>preparations</td>
                        <td>標本の準備または保存方法（のリスト） </td>
                    </tr>
                    <tr>
                        <td>ライセンス</td>
                        <td>CC0(権利放棄)、CC-BY（使用時表示）、CC-BYNC(商用不可、使用時表示)、非公開（登録者本人のみ閲覧可）のいずれかを登録する。</td>
                        <td>rights</td>
                        <td>リソースのライセンス</td>
                    </tr>
                    <tr>
                        <td>コメント</td>
                        <td>フリーフォーマット</td>
                        <td>occurrenceRemarks</td>
                        <td>標本・観察データに関する補足説明 </td>
                    </tr>
                    <tr>
                        <td style=" white-space: nowrap; ">お問い合わせ用リンク</td>
                        <td>お問い合わせリンクをメールや SNS で公開すると，「検索結果＜詳細＞」の情報を他の人に教えることができる．</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>QRコード</td>
                        <td>お問い合わせリンク横の画像は QR コードで、スマートフォン等のアプリでかざすと該当ページを閲覧することができる。QRコードを画像として保存し、ラベルとして印刷することも可能。
                        </td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>地図表示</td>
                        <td>緯度経度を登録した場合、ページ下部に地図が表示される。市町村合併等で住所が変わる場合にも、緯度経度に対応した最新の住所が表示されるため、本データベース上では採集地名を更新する必要はない。
                        </td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
