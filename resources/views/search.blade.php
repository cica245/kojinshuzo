<x-layout>
    <div class="container mt-3 mb-4">
      <h2>データベース検索条件</h2>
      <p>検索条件を指定してください</p>
      <div class="form-size mx-auto">
        <form method="get" action="{{ route('sciencedatas.index') }}">
            @csrf
          <div class="row">
            <div class="col-4 table-blue d-flex align-items-center">分類群</div>
            <div class="col-8 table-gray">
          		<select name="bunruigun" class="form-select">
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
            <div class="col-4 table-skyblue d-flex align-items-center">和名（カタカナ）</div>
            <div class="col-8 table-white">
              <input type="text" name="wamei" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-4 table-blue d-flex align-items-center">学名（属名・種小名のみ可）</div>
            <div class="col-8 table-gray">
              <input type="text" name="gakumei" style="ime-mode:disabled" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-4 table-skyblue d-flex align-items-center">採集地</div>
            <div class="col-8 table-white">
              <input type="text" name="saishuchi" class="form-control">
              </div>
          </div>
          <div class="row">
            <div class="col-4 table-blue d-flex align-items-center">採集年</div>
            <div class="col-8 table-gray">
             <input type="text" name="saishunen" class="form-control">
             </div>
          </div>
          <div class="row">
            <div class="col-4 table-skyblue d-flex align-items-center">採集月</div>
            <div class="col-8 table-white">
              <select name="saishutsuki" class="form-select">
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
            <div class="col-4 table-blue d-flex align-items-center">採集日</div>
            <div class="col-8 table-gray">
              <select name="saishubi" class="form-select">
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
            <div class="col-4 table-skyblue d-flex align-items-center">採集者</div>
            <div class="col-8 table-white">
              <input type="text" name="saishusha" class="form-control">
              </div>
          </div>
          <div class="row">
            <div class="col-4 table-blue d-flex align-items-center">所蔵者</div>
            <div class="col-8 table-gray">
              <input type="text" name="shozousha"class="form-control"></td>
              </div>
          </div>
          <div class="row">
            <div class="col-4 table-skyblue d-flex align-items-center">タイプ標本</div>
            <div class="col-8 table-white">
              <select name="type" class="form-select">
                <option value="" checked>チェックなし</option>
                <option value="Holotype">Holotype（正基準標本）</option>
                <option value="Isotype">Isotype（副基準標本）</option>
                <option value="Syntype">Syntype（等価基準標本）</option>
                <option value="Lectotype">Lectotype（選定基準標本）</option>
                <option value="Paratype">Paratype（従基準標本）</option>
                <option value="Neotype">Neotype（新基準標本）</option>
                <option value="Topotype">Topotype（同地基準標本）</option>
              </select>
              </div>
          </div>
          <div class="row">
            <div class="col-4 table-blue d-flex align-items-center">コメント</div>
            <div class="col-8 table-gray">
              <input type="text" name="comment"class="form-control">
            </div>
          </div>
          <div class="form-group row mt-5 justify-content-center">
            <div class="col-sm-6">
              <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">検索</button>
            </div>
            <div class="col-sm-6">
              <button type="reset" class="btn btn-secondary btn-lg w-100" class="crear">条件クリア</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</x-layout>
