<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rakuauto | 登録商品一覧</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <a href="https://codeigniter.com" target="_blank">
                    <svg role="img" aria-label="Visit CodeIgniter.com official website!" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2100 500" height="44"><path fill="#dd4814" d="M148.2 411c-20.53-9.07-34.48-28.61-36.31-50.99 1.2-23.02 13.36-44.06 32.67-56.61-3.17 7.73-2.4 16.53 2 23.6 5.01 7 13.63 10.36 22.07 8.61 12.02-3.38 19.06-15.86 15.68-27.89-1.2-4.21-3.6-8.03-6.88-10.91-13.6-11.06-20.43-28.44-18-45.81 2.33-9.2 7.42-17.52 14.61-23.8-5.4 14.4 9.83 28.61 20.05 35.6 18.14 10.88 35.6 22.84 52.32 35.81 18.27 14.4 28.23 36.94 26.67 60-4.11 24.54-21.47 44.8-45.13 52.4 47.33-10.53 96.13-48.13 97.06-101.46-.93-42.67-26.4-80.96-65.33-98.4h-1.73c.86 2.09 1.28 4.34 1.2 6.61.13-1.47.13-2.93 0-4.4.21 1.73.21 3.47 0 5.2-2.96 12.13-15.2 19.6-27.36 16.64-4.86-1.2-9.2-3.93-12.32-7.87-15.6-20 0-42.76 2.61-64.76 1.6-28.13-11.25-55.02-34.05-71.46 11.41 19.02-3.79 44-14.84 58.21-11.07 14.21-27.07 24.8-40.11 37.2-14.05 13.07-26.93 27.44-38.49 42.8-24.99 30.53-34.8 70.8-26.67 109.4 11.15 37.2 42.07 65.15 80.2 72.4h.21l-.13-.12Zm324.56-159.8q0-17.92 6.16-35.56 6.44-17.92 18.48-31.92t29.68-22.68q17.64-8.96 40.04-8.96 26.6 0 45.36 12.04 19.04 12.04 28 31.36l-15.4 9.52q-4.76-9.8-11.76-16.52-6.72-6.72-14.56-10.92-7.84-4.2-16.24-5.88-8.4-1.96-16.52-1.96-17.92 0-31.64 7.28-13.72 7.28-23.24 19.04-9.24 11.76-14 26.6-4.76 14.56-4.76 29.68 0 16.52 5.6 31.64 5.88 15.12 15.68 26.88 10.08 11.48 23.52 18.48 13.72 6.72 29.68 6.72 8.4 0 17.08-1.96 8.96-2.24 17.08-6.72 8.4-4.76 15.4-11.48 7-7 11.76-16.8l16.24 8.4q-4.76 11.2-13.44 19.88-8.68 8.4-19.32 14.28-10.64 5.88-22.68 8.96-11.76 3.08-23.24 3.08-20.44 0-37.52-8.96-17.08-8.96-29.4-23.24-12.32-14.56-19.32-32.76-6.72-18.48-6.72-37.52Zm263.48 103.6q-15.96 0-29.12-5.88-13.16-6.16-22.96-16.52-9.52-10.36-14.84-24.08Q664 294.6 664 279.48q0-15.4 5.32-29.12 5.6-13.72 15.12-24.08 9.8-10.36 22.96-16.52t28.84-6.16q15.68 0 28.84 6.16 13.44 6.16 22.96 16.52 9.8 10.36 15.12 24.08 5.6 13.72 5.6 29.12 0 15.12-5.32 28.84t-15.12 24.08q-9.52 10.36-22.96 16.52-13.16 5.88-29.12 5.88Zm-52.92-75.04q0 12.32 4.2 22.96 4.2 10.36 11.2 18.48 7.28 7.84 16.8 12.32 9.8 4.48 20.72 4.48 10.92 0 20.44-4.48 9.8-4.76 17.08-12.6 7.28-8.12 11.48-18.76 4.2-10.64 4.2-22.96 0-12.04-4.2-22.68-4.2-10.92-11.48-18.76-7.28-8.12-17.08-12.6-9.52-4.76-20.44-4.76-10.92 0-20.44 4.76-9.52 4.48-16.8 12.6-7.28 8.12-11.48 19.04-4.2 10.64-4.2 22.96ZM900.6 354.8q-15.12 0-28-6.16-12.88-6.44-22.12-16.8t-14.56-23.8q-5.04-13.72-5.04-28.56 0-15.4 5.04-29.12 5.04-14 13.72-24.36 8.96-10.36 21-16.24 12.32-6.16 26.88-6.16 18.48 0 32.76 9.8 14.28 9.52 22.4 23.24V147.6h19.04v179.76q0 7.84 6.72 7.84V352q-4.2.84-6.72.84-6.72 0-11.76-4.2-5.04-4.48-5.04-10.64v-14.28Q946.24 338 931.4 346.4t-30.8 8.4Zm4.2-16.8q7 0 14.84-2.8 8.12-2.8 15.12-7.56 7-5.04 11.76-11.48 5.04-6.72 6.16-14.28V256.8q-2.8-7.56-8.12-14-5.32-6.72-12.32-11.76-6.72-5.04-14.56-7.84-7.84-2.8-15.4-2.8-11.76 0-21.28 5.04-9.52 5.04-16.52 13.44-6.72 8.12-10.36 18.76-3.64 10.64-3.64 21.84 0 11.76 4.2 22.4 4.2 10.64 11.48 18.76 7.28 7.84 17.08 12.6Q893.32 338 904.8 338Zm173.04 16.8q-15.96 0-29.4-5.88-13.16-6.16-22.96-16.52-9.8-10.64-15.4-24.36-5.32-13.72-5.32-29.4 0-15.4 5.32-28.84 5.6-13.72 15.12-23.8 9.8-10.36 23.24-16.24 13.44-6.16 29.12-6.16 15.96 0 29.12 6.16 13.44 5.88 22.96 16.24 9.52 10.36 14.84 23.8 5.32 13.44 5.32 28.56v4.48q0 2.24-.28 3.08h-124.88q.84 11.76 5.32 21.84 4.76 9.8 12.04 17.08 7.28 7.28 16.52 11.48 9.52 3.92 20.16 3.92 7 0 14-1.96t12.88-5.32q5.88-3.36 10.64-8.12 4.76-5.04 7.28-10.92l16.52 4.48q-3.36 8.12-9.52 14.84-6.16 6.44-14.28 11.48-8.12 4.76-17.92 7.56-9.8 2.52-20.44 2.52Zm-53.48-83.44h107.24q-.84-11.76-5.6-21.28-4.48-9.8-11.76-16.8-7-7-16.52-10.92-9.24-3.92-19.88-3.92-10.64 0-20.16 3.92t-16.8 10.92q-7 7-11.48 16.8-4.2 9.8-5.04 21.28Zm193.2 80.64h-38.64V153.2h38.64V352Zm93.52.84q-14.84 0-26.88-5.88t-21-15.96q-8.68-10.36-13.44-23.8-4.76-13.44-4.76-28.56 0-15.96 5.04-29.68 5.04-13.72 14-24.08 8.96-10.36 21.56-16.24 12.6-5.88 27.72-5.88 17.08 0 29.96 7.84 12.88 7.56 21.28 20.44v-25.76h32.76V345q0 16.24-6.16 29.12-6.16 12.88-17.08 21.84-10.64 8.96-25.76 13.72-14.84 4.76-32.48 4.76-24.08 0-40.6-7.84-16.24-8.12-28-22.68l20.44-19.88q8.4 10.36 21 16.24 12.88 5.88 27.16 5.88 8.68 0 16.52-2.24 8.12-2.52 14.28-7.56 6.16-5.04 9.52-12.88 3.64-7.84 3.64-18.48v-18.48q-7.28 12.6-20.44 19.6-13.16 6.72-28.28 6.72Zm12.6-29.96q6.16 0 11.76-1.96t10.36-5.32q4.76-3.36 8.4-7.84 3.64-4.48 5.6-9.52v-35q-5.04-12.88-15.96-20.72-10.64-7.84-22.4-7.84-8.68 0-15.68 3.92-7 3.64-12.04 10.08-5.04 6.16-7.84 14.28-2.52 8.12-2.52 16.8 0 8.96 3.08 16.8t8.4 13.72q5.6 5.88 12.88 9.24 7.28 3.36 15.96 3.36Zm243.88-62.44V352h-37.52v-82.32q0-17.64-6.16-25.76-6.16-8.12-17.08-8.12-5.6 0-11.48 2.24-5.88 2.24-11.2 6.44-5.04 3.92-9.24 9.52t-6.16 12.32V352h-37.52V205.28h33.88v27.16q8.12-14 23.52-21.84t34.72-7.84q13.72 0 22.4 5.04 8.68 5.04 13.44 13.16 4.76 8.12 6.44 18.48 1.96 10.36 1.96 21Zm70.28 91.56h-37.52V205.28h37.52V352Zm0-167.16h-37.52V147.6h37.52v37.24Zm114.24 129.92 7.56 29.68q-7.56 3.36-18.48 6.72-10.92 3.36-22.96 3.36-7.84 0-14.84-1.96-6.72-1.96-12.04-6.16-5.04-4.48-8.12-11.2-3.08-7-3.08-16.8v-84.28h-19.32v-28.84h19.32v-47.6h37.52v47.6h30.8v28.84h-30.8v71.68q0 7.84 3.92 11.2 4.2 3.08 10.08 3.08t11.48-1.96q5.6-1.96 8.96-3.36Zm91.56 40.04q-17.64 0-31.92-5.88-14.28-6.16-24.36-16.52t-15.68-24.08q-5.32-13.72-5.32-28.84 0-15.68 5.32-29.4 5.32-14 15.4-24.36 10.08-10.64 24.36-16.8 14.56-6.16 32.48-6.16 17.92 0 31.92 6.16 14.28 6.16 24.08 16.52 10.08 10.36 15.12 24.08 5.32 13.72 5.32 28.56 0 3.64-.28 7 0 3.36-.56 5.6h-113.4q.84 8.68 4.2 15.4 3.36 6.72 8.68 11.48 5.32 4.76 12.04 7.28 6.72 2.52 14 2.52 11.2 0 21-5.32 10.08-5.6 13.72-14.56l32.2 8.96q-8.12 16.8-26.04 27.72-17.64 10.64-42.28 10.64Zm-38.08-88.48h76.16q-1.4-16.52-12.32-26.32-10.64-10.08-26.04-10.08-7.56 0-14.28 2.8-6.44 2.52-11.48 7.28t-8.4 11.48q-3.08 6.72-3.64 14.84Zm225.12-62.72v34.16q-17.08.28-30.52 6.72-13.44 6.16-19.32 18.76V352h-37.52V205.28h34.44v31.36q3.92-7.56 9.24-13.44 5.32-6.16 11.48-10.64t12.32-6.72q6.44-2.52 12.32-2.52h4.48q1.68 0 3.08.28Z"/></svg>
                </a>
            </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>            
            <li class="menu-item hidden"><a href="/home">商品管理</a></li>
            <li class="menu-item hidden"><a href="#">注文管理</a></li>
            <li class="menu-item hidden"><a href="#">売上分析</a></li>
            <li class="menu-item hidden"><a href="/item-import">商品一括インポート</a></li>
            <li class="menu-item hidden"><a href="#">商品一括出品</a></li>
            <li class="menu-item hidden"><a href="#">RMS商品削除</a></li>
            <li class="menu-item hidden"><a href="#">ブラックリスト</a></li>
            <li class="menu-item hidden"><a href="#">禁止キーワード</a></li>
            <li class="menu-item hidden"><a href="#">デフォルト追跡価格設定</a></li>
            <li class="menu-item hidden"><a href="#">メールテンプレート</a></li>
            <li class="menu-item hidden"><a href="#">ユーザー情報編集</a></li>
            <li class="menu-item hidden"><a href="/logout">ログアウト</a></li>
        </ul>
    </div>

    <div class="heroe-1">

        <h1>登録商品一覧</h1>

    </div>

</header>

<!-- CONTENT -->

<section>

    <div class="border border-gray rounded ps-4 pe-3 pt-2 pb-2">

        <div class="mb-1">

            <div class="d-inline-block">
                <label class="small" for="">出品状態</label>
                <select class="form-select form-select-sm w-150px me-2">
                    <option selected></option>
                    <option value="listing_rakuten">出品済み</option>
                    <option value="not_listing">未出品</option>
                </select>
            </div>

            <div class="d-inline-block">
                <label class="small" for="">NG商品</label>
                <select class="form-select form-select-sm w-150px me-2">
                    <option selected></option>
                    <option value="ok">OK商品のみ</option>
                    <option value="ng">NG商品すべて</option>
                    <option value="fba">FBA在庫切れ</option>
                    <option value="reserve_item">予約商品</option>
                    <option value="ng_word">NGワード含む</option>
                </select>
            </div>

            <div class="d-inline-block">
                <label class="small" for="">ブラックリスト</label>
                <select class="form-select form-select-sm w-150px me-2">
                    <option></option>
                    <option value="false" selected>いいえ</option>
                    <option value="true">はい</option>
                </select>
            </div>

            <div class="d-inline-block">
                <label class="small" for="">ランキング </label>
                <div>
                    <input type="number" class="form-control form-control-sm w-75px me-2 d-inline-block"><small>位 ~</small> 
                    <input type="number" class="form-control form-control-sm w-75px ms-2 me-2 d-inline-block"><small>位</small>
                </div>
            </div>

        </div>

        <div class="mb-1">

            <div class="d-inline-block me-2">
                <label class="small" for="">Aamzon価格</label>
                <div>
                    <input type="number" class="form-control form-control-sm w-100px me-2 d-inline-block"><small>円以上 ~</small> 
                    <input type="number" class="form-control form-control-sm w-100px ms-2 me-2 d-inline-block"><small>円以下</small>
                </div>
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">インポートID</label>
                <input class="form-control form-control-sm w-150px">
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">ASIN</label>
                <input class="form-control form-control-sm w-200px">
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">商品名、特徴、説明(部分一致)</label>
                <input class="form-control form-control-sm w-250px">
            </div>

        </div>

        <div class="mb-1">

            <div class="d-inline-block me-2">
                <label class="small" for="">販売個数</label>
                <div>
                    <input type="number" class="form-control form-control-sm w-100px me-2 d-inline-block"><small>個以上</small>
                </div>
            </div>
            
            <div class="d-inline-block form-check me-2">
                <input class="form-check-input me-2" type="checkbox" value="" id="">
                <label class="form-check-label small" for="">
                    1個も売れていない商品
                </label>
            </div>
            
            <div class="d-inline-block form-check me-2">
                <input class="form-check-input small me-2" type="checkbox" value="" id="">
                <label class="form-check-label" for="">
                    出品済みFBA在庫なし
                </label>
            </div>

            <div class="d-inline-block form-check me-2">
                <input type="submit" name="" value="検  索" id="" class="btn btn-success btn-sm">
            </div>

        </div>

    </div>

    <table class="mt-4 mb-2">
        <tbody>
            <tr>
                <td class="pe-3">
                    <span class="small">件数: 10414件</span>
                </td>
                <td class="pe-3">
                    <input type="submit" name="" value="表示中商品のASIN出力" id="" class="btn btn-success btn-sm">
                </td>
                <td class="pe-3">
                    <label class="small d-inline-block" for="">表示中商品の</label>
                    <select class="form-select form-select-sm d-inline-block w-150px me-2">
                        <option selected></option>
                        <option value="AllBlackList">一括ブラックリスト</option>
                        <option value="AllBlackListKaijo">一括ブラックリスト解除</option>
                        <option value="AllDelete">一括削除</option>
                        <option value="AllRakutenDelete">出品取り下げ</option>
                    </select>
                </td>
                <td class="pe-3">
                    <input type="submit" name="" value="実  行" id="" class="btn btn-success btn-sm">
                </td>
            </tr>
        </tbody>
    </table>

    <table class="mt-2 mb-2 custom-bordered-table">
        <tbody>
            <tr>
                <td id="">
                    <span>ASIN: </span><span id="">B0BG8PWK8T</span><br>
                    <span>JAN: </span><span id="">なし</span><br>
                    <a id="" class="btn btn-warning btn-sm mb-1" target="_blank" href="#">Amazon</a><br>
                    <a id="" class="btn btn-warning btn-sm mb-1" target="_blank" href="#">Amazon出品者一覧</a><br>
                    <a id="" class="btn btn-info btn-sm mb-1" target="_blank" href="#">楽天商品名検索結果</a><br>
                    <span><a id="" class="btn btn-info btn-sm mb-1" target="_blank" href="#">楽天ASIN検索結果</a><br></span>
                    <span><a onclick="return confirm('この商品を楽天へ出品しますか?');" id="" class="btn btn-info btn-sm mb-1" href="#">楽天出品</a><br></span>
                    <span><a onclick="return confirm('楽天から出品を取り下げますか?');" id="" class="btn btn-info btn-sm mb-1" href="#">楽天出品取り下げ</a><br></span>
                    <span><a onclick="return confirm('ブラックリストに登録しますか?');" id="" class="btn btn-dark btn-sm mb-1" href="#">ブラックリスト登録</a><br></span>
                    <!-- <span><a onclick="return confirm('ブラックリストから外しますか?');" id="" class="btn btn-dark btn-sm mb-1" href="#">ブラックリスト解除</a><br></span> -->
                    <a id="" target="_blank" class="btn btn-success btn-sm mb-1" href="#">編  集</a><br>
                    <a onclick="return confirm('出品している場合、出品も削除されますがよろしいですか？');" id="" class="btn btn-outline-secondary btn-sm mb-1" href="#">削  除</a>
                </td>
                <td id="" style="">
                    <table style="">
                        <tbody>
                            <tr>
                                <td colspan="3" id="" style="">
                                    <table style="">
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center; border-style: none;">
                                                    <img id="MainContent_ListView1_ctrl0_img_Image_0" src="https://images-na.ssl-images-amazon.com/images/I/41wP2ButTnL.jpg" style="width:80px;">
                                                </td>
                                                <td style="border-style: none; line-height: 20px;">
                                                    <span style="font-weight: bold;">商品名: </span><span id="MainContent_ListView1_ctrl0_lbl_ItemName_0">LED デスクライト アームライト 電気スタンド 2600LUX - 超高輝度 - 長くする光源設計 広範囲照明可能 目に優しい 省エネ クランプライト 3段階調色 10段階明るさ調整 ACアダプター付属 合金製クランプ付き 折り畳み 角度自在 テレワーク 読書/勉強/仕事 【13W・PSE認証済】</span><br>
                                                    <span style="font-weight: bold;">ブランド: </span><span id="MainContent_ListView1_ctrl0_lbl_Brand_0">Tledtech</span><br>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                            
                            <td id="MainContent_ListView1_ctrl0_td7_0" style="">
                                ＜出品状態＞<br>
                                
                                <a id="MainContent_ListView1_ctrl0_lnk_IsListingQoo10_0" target="_blank" href="https://www.qoo10.jp/gmkt.inc/Goods/Goods.aspx?goodscode=1038085216" style="font-weight:bold;">出品済み</a><br>
                                ＜販売個数＞<br>
                                <a id="MainContent_ListView1_ctrl0_lbl_SoldAmountQoo10_0" target="_blank" href="Qoo10/Qoo10OrderManager.aspx?number=1038085216">0個</a>
                                <br><br>
                                <span style="font-weight: bold;">Amazon最安FBA: </span><span id="MainContent_ListView1_ctrl0_lblCartPrice_0" style="color:Red;">0円</span><br>
                                <span style="font-weight: bold;">Amazonポイント: </span><span id="MainContent_ListView1_ctrl0_Label6_0" style="color:Blue;">0pt</span><br>
                                <span style="font-weight: bold;">Qoo10販売価格: </span><span id="MainContent_ListView1_ctrl0_lbl_Qoo10Price_0" style="color:Blue;">4,949円</span>
                            </td>
                            <td style="border-style: none; border-right-style: solid; border-bottom-style: solid;">
                                <span style="font-weight: bold;">ランキング: </span><span id="MainContent_ListView1_ctrl0_lblRanking_0">21,993位</span><br>
                                <span style="font-weight: bold;">発売日: </span><span id="MainContent_ListView1_ctrl0_lbl_ReleaseDate_0" style="background-color:Transparent;"></span><br>
                                <span style="font-weight: bold;">予約商品: </span><span id="MainContent_ListView1_ctrl0_lbl_IsReserve_0" style="background-color:Transparent;">いいえ</span><br>
                                <span style="font-weight: bold;">ブラックリスト: </span><span id="MainContent_ListView1_ctrl0_lbl_IsBlackList_0">いいえ</span><br>
                                <span style="font-weight: bold;">NG商品: </span><span id="MainContent_ListView1_ctrl0_lbl_IsNgItem_0" style="color:Black;"></span>
                            </td>
                            <td style="border-style: none; border-bottom-style: solid;">
                                <span style="font-weight: bold;">インポートID: </span><span id="MainContent_ListView1_ctrl0_lbl_ImportId_0">350</span><br>
                                <span style="font-weight: bold;">インポート名: </span><span id="MainContent_ListView1_ctrl0_lbl_ImportName_0">kp23</span><br>
                                <span style="font-weight: bold;">登録日時: </span><span id="MainContent_ListView1_ctrl0_lbl_CreateDate_0">2023/03/24 11:57:17</span><br>
                                <span style="font-weight: bold;">更新日時: </span><span id="MainContent_ListView1_ctrl0_lbl_UpdateDate_0">2023/07/03 8:12:58</span>
                            </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="border-style: none; text-align: center; padding-top: 15px;">
                                    <img id="MainContent_ListView1_ctrl0_imgKeepaUrl_0" src="https://dyn.keepa.com/pricehistory.png?asin=B0BG8PWK8T&amp;domain=co.jp&amp;width=400&amp;height=150&amp;range=90&amp;salesrank=1" data-xblocker="passed" style="visibility: visible;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td id="MainContent_ListView1_ctrl0_td5_0" colspan="7" style="min-width:400px; text-align:left;" bgcolor="#FFFFFF">
                    <span style="font-weight: bold;">商品特徴: <br></span><span id="MainContent_ListView1_ctrl0_lbl_Features_0">【高輝度・広範囲照明可能なLEDデスクライト】高品質LEDチップを採用することにより最大照度は約2600luxに達成し、従来品よりずっと明るいです。平面発光技術が採用されたLEDライトからの光はワイドに広がり、デスクトップ全体を照らし、明暗差を減らすことができます。フリッカー/グレアなど目に悪いことを防ぎ、読書、寝室、ベッド、子供勉強用などに最適です。学習机やデスクワークにもオススメです！<br>【専用ACアダプター付き・長寿命・省エネ】PSE認証済みの専用アダプターを付属し、より安定した電源供給が可能なデスクランプです。よりLED光源に適したライトであり、より長い寿命を備えて安心してご利用いただけます。僅か13Wの消費電力で約蛍光灯消費電力の1/4でありながら、寿命は蛍光灯の約8倍となります。LEDだから、電気代も節約出来ます。光を調節すれば、最小3Wとかなり経済的なLED照明です。使い続ける程に省エネを実感します。<br>【10段階調光&amp;3段階調色】シンプルながらもモダンな雰囲気を演出できるアームライト。調光・調色やメモリー機能も搭載した、使いやすさにも拘ったデスクライトです。明るさ調整ボタンを押して10段階の明るさ切替できます。気分によって3段階の調色（昼白色→電球色→昼光色）が自由に切り替えられます。<br>【アーム構造・省スペース】LEDライトは頑丈な高品質アルミ合金製クランプを採用し、最大厚さ5cmのデスクに挟むことができます。アーム上部の長さは約380mmであり、光の方向を任意に調整できるため、全方向の照明を実現し、デスクトップスペースを最大限に活用し、省スペースです。使わない時はフル折りたたんでデスクスペースを有効活用できるため、狭い場所でも快適に使えます。<br>【虫が寄りにくい・記憶機能搭載】LEDデスクライトから虫が集まりやすい紫外線領域波長を殆ど出さないため、虫が寄り付きにくくなって、きれいな空間にお掃除もラクラクです！また再点灯時に前回点灯時の明るさと光色を自動的に点灯してくれる便利な記憶機能を備えており、新年ギフト、誕生日ギフト、クリスマスプレゼントなど、友達への贈り物としても非常に適しています。<br></span>
                    <span style="font-weight: bold;">商品説明: <br></span><span id="MainContent_ListView1_ctrl0_lbl_Description_0"></span>
                </td>
            </tr>
        </tbody>
    </table>

</section>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <div class="environment" style="display:<?= ENVIRONMENT == 'development' ? 'block' : 'none' ?>">

        <p>Page rendered in {elapsed_time} seconds</p>

    </div>

    <div class="copyrights">

        <p>&copy; <?= date('Y') == 2023 ? '2023' : '2023-' . date('Y') ?> Rakuauto</p>

    </div>

</footer>

<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>
</html>
