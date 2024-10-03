<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ScienceData;
use Illuminate\Support\Facades\Auth;

class ScienceDataController extends Controller
{
    public function search()
    {
        return view('search');
    }
    public function index(Request $request)
    {
        $params = $request->query();

        $science_datas = ScienceData::serach($params)->orderBy('created_at', 'asc')->paginate(10);
        return view('sciencedatas.list')->with(['science_datas' => $science_datas]);
    }
    public function loginlist()
    {
        $user = Auth::user(); // ログインしているユーザー情報を取得
        if (!$user) {
            return redirect('/'); // ログインしていない場合はトップページへリダイレクト
        }

        // 全件取得 + ページネーション
        $science_datas = ScienceData::orderBy('created_at', 'desc')->paginate(10);
        return view('sciencedatas.loginlist', ['user' => $user])->with(['science_datas' => $science_datas]);
    }
    public function show($id)
    {
        // iD取得
        $science_data = ScienceData::findOrFail($id);
        return view('sciencedatas.show')->with(['science_data' => $science_data]);
    }
    public function loginshow($id)
    {
        $user = Auth::user(); // ログインしているユーザー情報を取得
        if (!$user) {
            return redirect('/'); // ログインしていない場合はトップページへリダイレクト
        }

        // iD取得
        $science_data = ScienceData::findOrFail($id);
        return view('sciencedatas.loginshow', ['user' => $user])->with(['science_data' => $science_data]);
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
    public function create()
    {
        $user = Auth::user(); // ログインしているユーザー情報を取得
        if (!$user) {
            return redirect('/'); // ログインしていない場合はトップページへリダイレクト
        }

        return view('sciencedatas.create', ['user' => $user]);
    }
    public function store(Request $request)
    {
        $science_data = new ScienceData();
        $science_data->bunruigun = $request->bunruigun;
        $science_data->wamei = $request->wamei;
        $science_data->gakumei = $request->gakumei;
        $science_data->sex = $request->sex;
        $science_data->saishuchi = $request->saishuchi;
        $science_data->lat = $request->lat;
        $science_data->lng = $request->lng;
        $science_data->saishunen = $request->saishunen;
        $science_data->saishutsuki = $request->saishutsuki;
        $science_data->saishubi = $request->saishubi;
        $science_data->saishusha = $request->saishusha;
        $science_data->douteisha = $request->douteisha;
        $science_data->shozousha = $request->shozousha;
        $science_data->type = $request->type;
        $science_data->gazou = $request->gazou;
        $science_data->gazou2 = $request->gazou2;
        $science_data->gazou3 = $request->gazou3;
        $science_data->save = $request->save;
        $science_data->license = $request->license;
        $science_data->shuzokikan = $request->shuzokikan;
        $science_data->comment = $request->comment;

        $science_data->save();

        return redirect()->route('sciencedatas.loginlist');
    }
    public function preedit(Request $request)
    {
        $params = $request->query();

        $science_datas = ScienceData::serach($params)->orderBy('created_at', 'asc')->paginate(10);
        return view('sciencedatas.preedit')->with(['science_datas' => $science_datas]);
    }
}
