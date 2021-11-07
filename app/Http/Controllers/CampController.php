<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CampController extends Controller
{
    public function index()
    {
        return view('index');
    }


    //マイページ
        public function mypage()
    {
        return view('mypage');
    }
    //マイページ編集
        public function mypage_edit()
    {
        return view('mypage_edit');
    }
    //マイページ編集されました
        public function mypage_comp()
    {
        return view('mypage_comp');
    }

    //いいねしたリスト
    public function like()
    {
        return view('like');
    }
    //いいねもらったリスト
    public function user_like_list()
    {
        return view('user_like_list');
    }

    //取引履歴
    public function history()
    {
        return view('history');
    }



    //出品商品
    public function item()
    {
        return view('item');
    }


    //取引
    public function transaction()
    {
        return view('transaction');
    }
    //取引リスト、取引中
    public function transaction_list()
    {
        return view('transaction_list');
    }

//お問い合わせ
        public function contact()
    {
        return view('contact');
    }

    //お問い合わせ
        public function contact_send()
    {
        return view('contact_send');
    }

    //出品
    public function listing()
    {
        return view('listing');
    }
    //出品しました画面c
    public function listing_comp()
    {
        return view('listing_comp');
    }
    //出品した商品リスト
    public function listing_item_list()
    {
        return view('listing_item_list');
    }

    //ログイン
        public function login()
    {
        return view('login');
    }
    //会員登録
    public function new_register()
    {
        return view('new_register');
    }
    //会員登録完了
    public function register_comp()
    {
        return view('register_comp');
    }
}
