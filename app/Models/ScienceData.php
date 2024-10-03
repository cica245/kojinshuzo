<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ScienceData extends Model
{
    use HasFactory;

    /**
 * 絞り込み・キーワード検索
 * @param \Illuminate\Database\Eloquent\Builder
 * @param array
 * @return \Illuminate\Database\Eloquent\Builder
 */
public function scopeSerach(Builder $query, array $params): Builder
{
    // 分類群絞り込み
    if (!empty($params['bunruigun'])) $query->where('bunruigun', $params['bunruigun']);

    // 和名絞り込み
    if (!empty($params['wamei'])) $query->where('wamei', 'like', '%' . $params['wamei'] . '%');

    // 学名絞り込み
    if (!empty($params['gakumei'])) $query->where('gakumei', 'like', '%' . $params['gakumei'] . '%');

    // 採集地絞り込み
    if (!empty($params['saishuchi'])) $query->where('saishuchi', 'like', '%' . $params['saishuchi'] . '%');

    // 採集年絞り込み
    if (!empty($params['saishunen'])) $query->where('saishunen', $params['saishunen']);

    // 採集月絞り込み
    if (!empty($params['saishutsuki'])) $query->where('saishutsuki', $params['saishutsuki']);

    // 採集日絞り込み
    if (!empty($params['saishubi'])) $query->where('saishubi', $params['saishubi']);

    // 採集者絞り込み
    if (!empty($params['saishusha'])) $query->where('saishusha', $params['saishusha']);

    // 所蔵者絞り込み
    if (!empty($params['shozousha'])) $query->where('shozousha', $params['shozousha']);

    // タイプ標本絞り込み
    if (!empty($params['type'])) $query->where('type', $params['type']);

    // コメント絞り込み
    if (!empty($params['comment'])) $query->where('comment', 'like', '%' . $params['comment'] . '%');

    return $query;
}
}

