<x-mypage_layout>
    <x-slot:title>
        画面から登録 | 個人収蔵.com
    </x-slot>

    <div class="container mt-3">
        <h1>画面から登録</h1>
        <p>項目を埋めて、「確認」ボタンをクリックしてください。</p>
        <div class="form-size mx-auto">
            <form method='post' action="{{ route('sciencedatas.store') }}" class="needs-validation">
                @csrf
                <div class="row">
                    <div class='col-4 table-green d-flex align-items-center'>分類群</div>
                    <div class="col-8 table-gray">
                        <select name='bunruigun' class="dropdown form-select">
                            <option value='昆虫'>昆虫</option>
                            <option value='クモ類'>クモ類</option>
                            <option value='魚類'>魚類</option>
                            <option value='軟体動物'>軟体動物</option>
                            <option value='腕足動物'>腕足動物</option>
                            <option value='甲殻類'>甲殻類</option>
                            <option value='鳥類'>鳥類</option>
                            <option value='顕花植物'>顕花植物</option>
                            <option value='シダ植物'>シダ植物</option>
                            <option value='コケ植物'>コケ植物</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-lightgreen d-flex align-items-center">和名（カタカナ）</div>
                    <div class="col-8 table-white">
                        <input type="text" name="wamei" id="wamei" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class='col-4 table-green d-flex align-items-center'>学名<span
                            class="text-danger me-3">*必須項目</span>
                    </div>
                    <div class="col-8 table-gray has-validation">
                        <input name='gakumei' type='text' id='gakumei' style='font-style:italic;'
                            class='form-control' required />
                        <div class="invalid-feedback">
                            必須項目です
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-lightgreen d-flex align-items-center">性別</div>
                    <div class="col-8 table-white">
                        <select name='sex' class='dropdown form-select'>
                            <option value='male'>male</option>
                            <option value='female'>female</option>
                            <option value='not_known'>not_known</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class='col-4 table-green d-flex align-items-center'>採集地</div>
                    <div class="col-8 table-gray">
                        <input type='text' name='saishuchi' class='form-control' />
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-lightgreen d-flex align-items-center">採集地＜緯度＞</div>
                    <div class="col-8 table-white">
                        <input type='text' name='lat' class='form-control' />
                    </div>
                </div>
                <div class="row">
                    <div class='col-4 table-green d-flex align-items-center'>採集地＜経度＞</div>
                    <div class="col-8 table-gray">
                        <input type='text' name='lng' class='form-control' />
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-lightgreen d-flex align-items-center">採集年（西暦:yyyy）</div>
                    <div class="col-8 table-white">
                        <input type='text' name='saishunen' class='form-control' />
                    </div>
                </div>
                <div class="row">
                    <div class='col-4 table-green d-flex align-items-center'>採集月</div>
                    <div class="col-8 table-gray">
                        <select name='saishutsuki' class='dropdown form-select'>
                            <option value='0'></option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                            <option value='11'>11</option>
                            <option value='12'>12</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-lightgreen d-flex align-items-center">採集日</div>
                    <div class="col-8 table-white">
                        <select name='saishubi' class='dropdown form-select'>
                            <option value='0'></option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                            <option value='11'>11</option>
                            <option value='12'>12</option>
                            <option value='13'>13</option>
                            <option value='14'>14</option>
                            <option value='15'>15</option>
                            <option value='16'>16</option>
                            <option value='17'>17</option>
                            <option value='18'>18</option>
                            <option value='19'>19</option>
                            <option value='20'>20</option>
                            <option value='21'>21</option>
                            <option value='22'>22</option>
                            <option value='23'>23</option>
                            <option value='24'>24</option>
                            <option value='25'>25</option>
                            <option value='26'>26</option>
                            <option value='27'>27</option>
                            <option value='28'>28</option>
                            <option value='29'>29</option>
                            <option value='30'>30</option>
                            <option value='31'>31</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class='col-4 table-green d-flex align-items-center'>採集者</div>
                    <div class="col-8 table-gray">
                        <input type='text' name='saishusha' class='form-control' />
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-lightgreen d-flex align-items-center">同定者</div>
                    <div class="col-8 table-white">
                        <input type='text' name='douteisha' class='form-control' />
                    </div>
                </div>
                <div class="row">
                    <div class='col-4 table-green d-flex align-items-center'>所蔵者<br />（GoogleID）</div>
                    <div class="col-8 table-gray">
                        <input type='hidden' name='shozousha' class='text'
                            value="{{ $user->google_id }}">{{ $user->google_id }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-lightgreen d-flex align-items-center">所蔵者<br />（TwitterID）</div>
                    <div class="col-8 table-white">
                        <input type='text' name='twitterID' class='form-control' />
                    </div>
                </div>
                <div class="row">
                    <div class='col-4 table-green d-flex align-items-center'>タイプ標本</div>
                    <div class="col-8 table-gray">
                        <div class="form-check">
                            <input type="radio" name="type" class="form-check-input" value=""
                                checked><label class="form-check-label">チェックなし</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="type" class="form-check-input" value="Isotype"><label
                                class="form-check-label">Isotype（副基準標本）</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="type" class="form-check-input" value="Syntype"><label
                                class="form-check-label">Syntype（等価基準標本）</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="type" class="form-check-input" value="Lectotype"><label
                                class="form-check-label">Lectotype（選定基準標本）</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="type" class="form-check-input" value="Paratype"><label
                                class="form-check-label">Paratype（従基準標本）</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="type" class="form-check-input" value="Neotype"><label
                                class="form-check-label">Neotype（新基準標本）</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="type" class="form-check-input" value="Topotype"><label
                                class="form-check-label">Topotype（同地基準標本）</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-lightgreen d-flex align-items-center">画像URL 1</div>
                    <div class="col-8 table-white">
                        <input type='text' id='gazou' name='gazou' class='form-control' value="" />
                        <div id="drop-area">
                            <p>アップロードするファイルをドラッグするか、クリックして選択してください</p>
                            <input type="file" name="image" onchange="handleFiles(this.files)">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-4 table-green d-flex align-items-center'>画像URL 2</div>
                    <div class="col-8 table-gray">
                        <input type='text' id='gazou2' name='gazou2' class='form-control' />
                        <div id="drop-area2">
                            <p>アップロードするファイルをドラッグするか、クリックして選択してください</p>
                            <input type="file" name="image" onchange="handleFiles2(this.files)">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-lightgreen d-flex align-items-center">画像URL 3</div>
                    <div class="col-8 table-white">
                        <input type='text' id='gazou3' name='gazou3' class='form-control' />
                        <div id="drop-area3">
                            <p>アップロードするファイルをドラッグするか、クリックして選択してください</p>
                            <input type="file" name="image" onchange="handleFiles3(this.files)">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-4 table-green d-flex align-items-center'>保存法</div>
                    <div class="col-8 table-gray">
                        <div class="form-check">
                            <input type="radio" name="save" class="form-check-input" value="乾燥"
                                checked>乾燥標本
                        </div>
                        <div class="form-check">
                            <input type="radio" name="save" class="form-check-input" value="液浸">液浸標本
                        </div>
                        <div class="form-check">
                            <input type="radio" name="save" class="form-check-input" value="その他">その他
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-lightgreen d-flex align-items-center">ライセンス</div>
                    <div class="col-8 table-white">
                        <div class="form-check">
                            <input type="radio" name="license" class="form-check-input" value="0"
                                checked>CC0（権利放棄）
                        </div>
                        <div class="form-check">
                            <input type="radio" name="license" class="form-check-input" value="1">CC
                            BY（登録者名　表示要）
                        </div>
                        <div class="form-check">
                            <input type="radio" name="license" class="form-check-input" value="2">CC
                            BY-NC（商用利用不可、登録者名　表示要）
                        </div>
                        <div class="form-check">
                            <input type="radio" name="license" class="form-check-input"
                                value="3">非公開（利用不可。検索結果に出ません）
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-4 table-green d-flex align-items-center'>現収蔵機関・標本番号</div>
                    <div class="col-8 table-gray">
                        <input type='text' name='shuzokikan' class='form-control'>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 table-lightgreen d-flex align-items-center">コメント</div>
                    <div class="col-8 table-white">
                        <input type="text" name="comment" class='form-control'>
                    </div>
                </div>

                <p class="mt-3 me-3"><input type="checkbox" name="agreement" id="check"><a
                        href="{{ route('riyoukitei') }}" target="_blank">　利用規定</a>に同意します。<br></p>

                <div class="form-group row mt-5 justify-content-center">
                    <div class="col-sm-6">
                        <button type="submit" id='submit' class="btn btn-primary btn-lg w-100 mb-3 submit"
                            disabled='disabled'>確認</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="reset" class="btn btn-secondary btn-lg w-100" class="crear">条件クリア</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        let dropArea = document.getElementById('drop-area');
        let gazouArea = document.getElementById('gazou');

        let dropArea2 = document.getElementById('drop-area2');
        let gazouArea2 = document.getElementById('gazou2');

        let dropArea3 = document.getElementById('drop-area3');
        let gazouArea3 = document.getElementById('gazou3');

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false);
            dropArea2.addEventListener(eventName, preventDefaults, false);
            dropArea3.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, highlight, false);
            dropArea2.addEventListener(eventName, highlight, false);
            dropArea3.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, unhighlight, false);
            dropArea2.addEventListener(eventName, unhighlight, false);
            dropArea3.addEventListener(eventName, unhighlight, false);
        });

        function highlight(e) {
            dropArea.classList.add('highlight');
            dropArea2.classList.add('highlight');
            dropArea3.classList.add('highlight');
        }

        function unhighlight(e) {
            dropArea.classList.remove('highlight');
            dropArea2.classList.remove('highlight');
            dropArea3.classList.remove('highlight');
        }

        dropArea.addEventListener('drop', handleDrop, false);
        dropArea2.addEventListener('drop', handleDrop2, false);
        dropArea3.addEventListener('drop', handleDrop3, false);

        function handleDrop(e) {
            let dt = e.dataTransfer;
            let files = dt.files;

            handleFiles(files);
        }

        function handleDrop2(e) {
            let dt = e.dataTransfer;
            let files = dt.files;

            handleFiles2(files);
        }

        function handleDrop3(e) {
            let dt = e.dataTransfer;
            let files = dt.files;

            handleFiles3(files);
        }

        function handleFiles(files) {
            ([...files]).forEach(uploadFile);
        }

        function handleFiles2(files) {
            ([...files]).forEach(uploadFile2);
        }

        function handleFiles3(files) {
            ([...files]).forEach(uploadFile3);
        }

        async function uploadFile(file) {

            const url = '../upload';

            const formData = new FormData();
            formData.append('image', file);

            const response = await fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (response.ok) {
                gazouArea.value = data.url;
            } else {
                console.error(data.message);
            }
        }

        async function uploadFile2(file) {

            const url = '../upload';

            const formData = new FormData();
            formData.append('image', file);

            const response = await fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (response.ok) {
                gazouArea2.value = data.url;
            } else {
                console.error(data.message);
            }
        }

        async function uploadFile3(file) {

            const url = '../upload';

            const formData = new FormData();
            formData.append('image', file);

            const response = await fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (response.ok) {
                gazouArea3.value = data.url;
            } else {
                console.error(data.message);
            }
        }
    </script>

    <script type='text/javascript'>
        let submitArea = document.getElementById('submit');
        submitArea.disabled = true;

        let checkArea = document.getElementById('check');
        checkArea.addEventListener('click', checkClick);

        function checkClick() {
            if (checkArea.checked == false) {
                submitArea.disabled = true;
            } else {
                submitArea.disabled = false;
            }

        }
    </script>
</x-mypage_layout>
