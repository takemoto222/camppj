<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampController;


Route::get('/index', [CampController::class, 'index']);
//マイページ
Route::get('/mypage', [CampController::class, 'mypage']);
//マイページ編集
Route::get('/mypage_edit', [CampController::class, 'mypage_edit']);
//マイページ編集されました
Route::get('/mypage_comp', [CampController::class, 'mypage_comp']);

//いいねしたリスト
Route::get('/like', [CampController::class, 'like']);
//もらったいいねリスト
Route::get('/user_like_list', [CampController::class, 'user_like_list']);

//商品
Route::get('/item', [CampController::class, 'item']);

//取引
Route::get('/transaction', [CampController::class, 'transaction']);
//取引リスト、取引中
Route::get('/transaction_list', [CampController::class, 'transaction_list']);
//取引リスト
Route::get('/history', [CampController::class, 'history']);

//お問い合わせ
Route::get('/contact', [CampController::class, 'contact']);
Route::get('/contact_send', [CampController::class, 'contact_send']);
//出品
Route::get('/listing', [CampController::class, 'listing']);
//出品しました画面
Route::get('/listing_comp', [CampController::class, 'listing_comp']);
//出品した商品リスト
Route::get('/listing_item_list' , [CampController::class, 'listing_item_list']);
//ログイン
Route::get('/login', [CampController::class, 'login']);

//会員登録
Route::get('/new_register', [CampController::class, 'new_register']);
//登録完了画面
Route::get('/register_comp', [CampController::class, 'register_comp']);