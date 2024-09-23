<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ScienceData;

class ScienceDataController extends Controller
{
    public function index()
    {
        // 全件取得
        $science_datas = ScienceData::orderBy('created_at', 'desc')->get();
        return view('index')->with(['science_datas' => $science_datas]);
    }
    public function show()
    {
        // 全件取得 + ページネーション
        $science_datas = ScienceData::orderBy('created_at', 'desc')->paginate(10);
        return view('sciencedatas.list')->with(['science_datas' => $science_datas]);
    }
    public function hyouhon($id)
    {
        // iD取得
        $science_data = ScienceData::findOrFail($id);
        return view('hyouhon')->with(['science_data' => $science_data]);
    }
    public function old_hyouhon()
    {
        $redirectUrl = "hyouhon";
        $queryString = $_SERVER['QUERY_STRING'];

        $queryId = str_replace("id=","",$queryString);
        e($queryId);
        if (!empty($queryString)) $redirectUrl .= "/" . $queryId;
        header("Location: $redirectUrl");
        exit;
    }
    public function detail($id)
    {
        // iD取得
        $science_data = ScienceData::findOrFail($id);
        return view('sciencedatas.detail')->with(['science_data' => $science_data]);
    }

}
