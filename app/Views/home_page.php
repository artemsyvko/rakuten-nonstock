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
                <a href="<?= base_url().'home' ?>">
                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 139 30" width="139" height="30">
                        <title>Rakuauto</title>
                        <defs>
                            <image  width="139" height="30" id="img1" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIsAAAAeCAYAAAAcsu0PAAAAAXNSR0IB2cksfwAACqVJREFUeJztmglQk0kWgCnLa7dcdR0isjLqBIYjAQUFFRAE5YiIHIYEBQTkCGCGYCDhiIwGBCei4BlU1mMdxSPjqDsWiFOyorvL6q6FrrNM7erkRDmCsoKiUOPQ+//hCqT/5A8kI7PSVa8o8t7f/8vrL6/7dbdJW+FaIKaYahVpmBWQbiQDReJKIItcdFeWEiCSxtEtTYzcWlKwfZKlrL9s7PePt2ENDyxQCVzQJY2N4RnTt3FYxlgbMSwqMQfiBE68sXwbh2WMtdHBgkiYu1K++zrBGL6NwzLG2qhhoVgAaRrf3xi+jcNi/Nbw3RUrRmkkjRBPpE1AxHYbjca5VE6GGmuFJYgExEwhueP3CXEK+vw3mHaMdD6s744LIQRlUUSqLMJaqGC4AUlQr70kyAIoEjyAlG4vlHOj2XJOPjQz4YGl8zSNLA005SOfDZVgN5VPANywlg/XqQtT6IXavTm/gYZpQ3Xki4tuDPFx6wFKPRJcoE2msmlPKgGY0v8MANWf+GcvewOztTp8qB61Ye1dLoL2lxoAUP3GAmed74WJw+krInX/BccjKeEC339g2dvlx/X4nSgpdK+QTNcLFtSuNdetHju7+GvA0nmJHaOIMFeK1+BZLJOVigJByEhgebl7qQiml0T6PeiDJVCu7d1MIb8PFmg/KqE6AgSWIb+2MP5CnYM2J5sKBApAGmuwJGUT4+ekfNql65mJiTZgMiemSm9Y2nZRtMDiMgSW59wlbFmwuX7TWbA1kO0sSdMXliYmGaI3A1JmksBYsICua46ruE7PdQV7UqoHIJy6M/jcGIBFfJMZOztFv2fnFxfcUmVIQ8PSdZni3xA1r0svUPqzQZhLZ3MtMMMLy481if7SAEg/6xcCWcE3NKPB8lhAW5q1RHegExaC9HvfHR5LsITlOv5T32d/zfIGi8/dJhkIFs8BWNoKVpyXYMEQ7pP3NG5eiSxYy+BF59DwwvKy2Bs+BUX41Q8OkOFhqSxzoi34zApXoFd/XSMa9OX9wvLk5kayfToZqiceKeM/qeOSSWk2EL0VWHftzyJcsCABn6zkLHmCaRe+WRVw0HnJtCXd6RHczhYgWWPqT3VZpBaOSw8mBFuT8vHA8jSX8X1TAlEJhSUutsSYsJw8FphDSBweUEtgxlqsEejZew9WDfpiEFgskf/J/eKRhgFIdnSVuh0Ci8WZYiL54y1w+9A7baofacjOZVD9r3YV64AlkAjEoc7sJq5bmYxqgTHAyPqAk0tXBePhNnILdylGf26gb/CsW/P8MSsraUb6wC9RKyyZNCALNoP4bAukmQL/wQEyPCwFR9eKJg0PaKIj8BeEaATZqSSvx5CwDG9r0jFg2Z4mGm57rzYvVRPyXkmqAypY6F94QvVzC3fVjnqfRRLmrkQCrior31VFkJtSYQtOVLxxwSJmJOCCBS2/oZ9Hr61vuPjDQJlrDFjidjpoDOhEphvIPpb0bvjn03iRYNCX9wvLo4f79n2EMU3pgsXziBCMHJYAcyDd4Pbg6Ymv3Pqd6b7oS25MttIOS1MZSZnrhTkNiSNouGDBzEwpSSXqATIGLMl7/JuHB3MWxw98URpdoRFoJgUglYTFWIDl4X3B0Zk/NyzScEcgS9ggVPC4FurOILBYIrCgC2GIeNd31wqnt+3xzpZTtZTV4aGjgGUOkO+vGbKbbAxYIgVeGsE05yW/rfpj+JeagbYBqY+6aWMBlrq/5oqmvZfMopoKbNuflpYHwL7E8KZMW+7fyHJukKybo6Nf71HBoij/9xJjw7KCA6mEeOz6pupIPizQ00qvfwCw9C9w092uStfNgU8dQc7tYt5xC82vYWLy6kKGbUu6u1CxyeEd/gEfDSwIwPSYIafghoYFdF3zt2ZoBtPuSGk9kJTwZ0ACHV1Z/a//f1jUSuemFCJG6UxAFqVstrpTr4t8Ccoszwp5uOVP+mes0cEipocOCZKhYXlRm8zXqIQQoV6pqAedV5bZJmvqlp78Q/0HA4sqSPmrcJ0Nva3krG9MIrdj2cq5G+WNGR5aMs0oM0uUb4d0z7dWxoKlsswJOtV4nLm2A9W7QQbvN7kZCmSRO/2DgQXPdj+agZ7zXSswBzImuLb9/vU1WktnnLDIIhzguoBPgDSzcGAX2NCw7BcG1cCCOa2sWvXOoDwXDd3srDDAe9xNGodFHRbFITslDztrSD8XUXTus+CE5Wl2OJAFYUAZH7vPWLCwSlZDt9sDqltUwY7f66ehm8TyBIQzd8njsKjB0nM7idy81RHDxhHfphxOWBqLuD3PYm2gi25JbIjRzob8s4j6n80kLgaM2/dTEFh+681xePa+YDHuppyesODalDMQLPL0qG9btsAX3ZL19m39JbROWGIEuGEBr7/2XJ3l/EpvWOItAeXqbdX3ck+Dw/YLgKXnZ4TF06CwoKfOHWXUW3D9xwMltE5YKCzcsHT/nUUjcxbpCUqvzNxVpDpQ9NiqHRZmkTMcFlbgqGG58Q0j0AxS9qvDEla4At5fTi6+U2e8sGg/G1qAnjqbgZfnbFu3r/7RELB0HnagYfbTV0KjcCow1ja9EqHy/dVhT52wXDxoR5vHtBwRLMsO7lEdKAbkwGH5aO9uFSzUbCIUFvUzppHCcrWUSJ7PhNuvutGggsWHZwfVmx06aVhYtJ86o2sJ3xPNbPc9Cvo8LYOHHxYEvKXyQIx3ISV0fz8N4dj9SOhO3yN/aY0J8xt0wVJ+Lv4k1tkKcTenBPlL8+ItqoXpTbdvVg12RolPHUw/lbWqfWa6R7wrz6UbprfZze0xgTR9YHlRx7FwybBvh9mbFyRWBWx34s+CZZ5EMqBW3uUbFhb0PgvHGeM+C17BDwtqA79WaaoqoeWnHnqhNs0se+yDSzzSB0vOQW/RRCgsdmDb4940nn90LdwmxQdcfAtI9yqiuKbJ+C5O9cvERBJwPXv5zGhhQVvuPh9o6a9NCFnUrti/iS0Nfq3yv4LlJVKMX3vvIM4FskiMPZIRwPKcY12LmTVSclQldEcZ/RbW7b1+kW/S4lMfLHQefIqYEO+KghCGvut0+eaz06E2NoBR97q3vC50q5mqx2BZ7EhSDLllPwpYAHobjkVswA0LYxGYe/BQ7w69oWEBDUJkKnJ/LIHcjUUvSkmoK79qzXbAXh/oCUvnlyEXMGHpK6GRhTfhWbztD3A7ApCEfvrg1eno27pgSS4OgO6RqC8+z5+NKTZNgAd+3pm7A5uF1B2OZYTPyBr3X9RlEoMEJqeuu7W/EXjBBn4ksKBtP59IXp7t+J+pGBeh+mUGe0XXzPzMwaOcF/mUc0hARFAJIokQWCz6YCnBtKO40NSdeVu13bQ1fyVfHm5bLw0xU0Eij1oBpNE+fDHFd0prjgMbuy/vAeeaU7BsTEUILBzU5vVp+iJZINxGEko6hiyqp/UCwyIoP/c7J99s3y4JNEcynBmQRjl1SCMjhKhPHQdcsX2iOooQWCyQshLNLJrCpQ8MDDIQrr9LhtggElt1J2vgR9VYPTn3+CabsHxvkWuud/ssZt/dV4YNmMvxBrOz/Wp9ReVbkuokU0y0tDVs+Lsm7NjK1vbcX/6UN0twalPmzBRylSXHBfRnuhnMJWBxYVSPx4HMi+ybNcvVn/kfpsIvR8u2+eIAAAAASUVORK5CYII="/>
                        </defs>
                        <style>
                        </style>
                        <use id="Layer 1" href="#img1" x="0" y="0"/>
                    </svg>
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
                <td id="" class="w-120px">
                    <span>ASIN: </span><span id="">B0BG8PWK8T</span><br>
                    <span>JAN: </span><span id="">なし</span><br>
                    <a id="" class="btn btn-warning btn-sm mb-1 w-100" target="_blank" href="#">Amazon</a><br>
                    <a id="" class="btn btn-warning btn-sm mb-1 w-100" target="_blank" href="#">Amazon出品者一覧</a><br>
                    <a id="" class="btn btn-info btn-sm mb-1 w-100" target="_blank" href="#">楽天商品名検索結果</a><br>
                    <span><a id="" class="btn btn-info btn-sm mb-1 w-100" target="_blank" href="#">楽天ASIN検索結果</a><br></span>
                    <span><a onclick="return confirm('この商品を楽天へ出品しますか?');" id="" class="btn btn-info btn-sm mb-1 w-100" href="#">楽天出品</a><br></span>
                    <span><a onclick="return confirm('楽天から出品を取り下げますか?');" id="" class="btn btn-info btn-sm mb-1 w-100" href="#">楽天出品取り下げ</a><br></span>
                    <span><a onclick="return confirm('ブラックリストに登録しますか?');" id="" class="btn btn-dark btn-sm mb-1 w-100" href="#">ブラックリスト登録</a><br></span>
                    <!-- <span><a onclick="return confirm('ブラックリストから外しますか?');" id="" class="btn btn-dark btn-sm mb-1 w-100" href="#">ブラックリスト解除</a><br></span> -->
                    <a id="" target="_blank" class="btn btn-success btn-sm mb-1 w-100" href="#">編  集</a><br>
                    <a onclick="return confirm('出品している場合、出品も削除されますがよろしいですか？');" id="" class="btn btn-outline-secondary btn-sm mb-1 w-100" href="#">削  除</a>
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
