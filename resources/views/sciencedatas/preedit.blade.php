<x-mypage_layout>
    <x-slot:title>
        変更対象検索結果 | 個人収蔵.com
    </x-slot>

    <div class="container-fluid mt-3">
        <h2>検索結果</h2>
        <p>変更したい行の「編集」または「削除」ボタンをクリックしてください。</p>
        <table class="table table-bordered sticky_table">
            <thead>
                <tr>
                    <th class="col-xs-3 col-lg-1" style='background-color:#ffaa55;'>ID</th>
                    <th class="col-xs-3 col-lg-2" style='background-color:#ffaa55;'>和名</th>
                    <th class="col-xs-3 col-lg-2" style='background-color:#ffaa55;'>学名</th>
                    <th class="col-lg-2 d-none d-lg-table-cell" style='background-color:#ffaa55;'>採集地</th>
                    <th class="col-lg-1 d-none d-lg-table-cell" style='background-color:#ffaa55;'>採集日</th>
                    <th class="col-lg-1 d-none d-lg-table-cell" style='background-color:#ffaa55;'>所蔵者</th>
                    <th class="col-lg-1 d-none d-lg-table-cell" style='background-color:#ffaa55;'>タイプ標本</th>
                    <th class="col-xs-3 col-lg-1 d-none d-lg-table-cell" style='background-color:#ffaa55;'>サムネイル</th>
                    <th class="col-xs-3 col-lg-1 d-none d-lg-table-cell" style='background-color:#ffaa55;'>コメント</th>
                    <th class="col-xs-3 col-lg-1" style='background-color:#ffaa55;'></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($science_datas as $science_data) :?>
                <div class="post">
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
                        <td class="col-lg-1 d-none d-lg-table-cell"><a
                                href="{!! e($science_data->gazou) !!}"><?php if (!empty(e($science_data->gazou))) {
                                    echo '画像あり';
                                } ?></a></td>
                        <td class="col-lg-1 d-none d-lg-table-cell">{!! nl2br(e($science_data->comment)) !!}</td>
                        <td class="col-lg-1">
                            <form method="post" action="">
                                <input type="submit" name="submit" class="btn btn-primary mb-3" value="編集"
                                    class='submit'>
                            </form>
                            <form method="post" action="">
                                <input type="submit" name="submit" class="btn btn-secondary" value="削除"
                                    class='crear'>
                            </form>
                        </td>
                    </tr>
                </div>
                <?php endforeach; ?>
            </tbody>
        </table>
        {{-- <form id="hiddenform" method="POST" action="export.php?where=<?php echo $where; ?>" />
        <input type="hidden" name="where" value=<?php echo $where; ?> />
        </form> --}}
    </div><!-- /#contents -->
</x-mypage_layout>
