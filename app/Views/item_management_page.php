<!-- CONTENT -->

<section>

    <div class="border border-gray rounded ps-4 pe-3 pt-2 pb-2 mb-2">

        <div class="mb-1">

            <div class="d-inline-block">
                <label class="small" for="">出品状態</label>
                <select class="form-select form-select-sm w-75px me-2">
                    <option selected></option>
                    <option value="listing_rakuten">出品済み</option>
                    <option value="not_listing">未出品</option>
                </select>
            </div>

            <div class="d-inline-block">
                <label class="small" for="">NG商品</label>
                <select class="form-select form-select-sm w-120px me-2">
                    <option selected></option>
                    <option value="ok">OK商品のみ</option>
                    <option value="ng">NG商品すべて</option>
                    <option value="fba">FBA在庫切れ</option>
                    <option value="reserve_item">予約商品</option>
                    <option value="ng_word">NGワード含む</option>
                    <option value="ng_size">サイズNG</option>
                    <option value="missing_infomation">商品説明不足</option>
                </select>
            </div>

            <div class="d-inline-block">
                <label class="small" for="">ブラックリスト</label>
                <select class="form-select form-select-sm w-100px me-2">
                    <option></option>
                    <option value="false" selected>いいえ</option>
                    <option value="true">はい</option>
                </select>
            </div>

            <div class="d-inline-block">
                <label for="" class="small">商品サイズ</label>
                <select class="form-select form-select-sm w-120px me-2">
                    <option selected="selected" value=""></option>
                    <option value="nonSize">サイズ情報なし</option>
                    <option value="ss">SSサイズ</option>
                    <option value="60">60サイズ</option>
                    <option value="80">80サイズ</option>
                    <option value="100">100サイズ</option>
                    <option value="120">120サイズ</option>
                    <option value="140">140サイズ</option>
                    <option value="over">オーバーサイズ</option>
                </select>
            </div>

            <div class="d-inline-block me-3">
                <label class="small" for="">ランキング</label>
                <div>
                    <input type="number" class="form-control form-control-sm w-75px me-2 d-inline-block"><small>位 ~</small> 
                    <input type="number" class="form-control form-control-sm w-75px ms-2 me-2 d-inline-block"><small>位</small>
                </div>
            </div>

            <div class="d-inline-block me-3">
                <label class="small" for="">利益額</label>
                <div>
                    <input type="number" class="form-control form-control-sm w-75px me-2 d-inline-block"><small>個以上</small>
                </div>
            </div>

            <div class="d-inline-block form-check me-2">
                <input class="form-check-input me-2" type="checkbox" value="" id="">
                <label class="form-check-label small" for="">
                    出品済みFBA在庫なし
                </label>
            </div>
            
            <div class="d-inline-block form-check me-2">
                <input class="form-check-input small me-2" type="checkbox" value="" id="">
                <label class="form-check-label" for="">
                    有在庫のみ
                </label>
            </div>

        </div>

        <div class="mb-1">

            <div class="d-inline-block me-3">
                <label class="small" for="">販売価格</label>
                <div>
                    <input type="number" class="form-control form-control-sm w-75px me-2 d-inline-block"><small>円以上 ~</small> 
                    <input type="number" class="form-control form-control-sm w-75px ms-2 me-2 d-inline-block"><small>円以下</small>
                </div>
            </div>

            <div class="d-inline-block me-3">
                <label class="small" for="">販売個数</label>
                <div>
                    <input type="number" class="form-control form-control-sm w-50px me-2 d-inline-block"><small>個以上 ~</small> 
                    <input type="number" class="form-control form-control-sm w-50px ms-2 me-2 d-inline-block"><small>個以下</small>
                </div>
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">インポートID</label>
                <input class="form-control form-control-sm w-75px">
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">ASIN</label>
                <input class="form-control form-control-sm w-80px">
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">商品管理番号(商品URL)</label>
                <input class="form-control form-control-sm w-120px">
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">商品名、特徴、説明(部分一致)</label>
                <input class="form-control form-control-sm w-150px">
            </div>

            <div class="d-inline-block">
                <input type="submit" name="" style="margin-bottom: 2px" value=" 検  索 " id="" class="btn btn-success btn-sm">
            </div>

        </div>

    </div>

    <div>
        <button class="btn btn-primary btn-sm mb-1">表示中商品のASIN出力</button>
        <button class="btn btn-secondary btn-sm mb-1">表示中商品を楽天から一括出品削除</button>
        <button class="btn btn-dark btn-sm mb-1">表示中商品を一括ブラックリスト</button>
        <button class="btn btn-secondary btn-sm mb-1">表示中商品を一括ブラックリスト解除</button>
        <button class="btn btn-secondary btn-sm mb-1">表示中商品を一括削除(未出品商品かつ販売個数0個の商品のみ)</button>
        <button class="btn btn-primary btn-sm mb-1">表示中商品の商品管理番号出力</button>
        <button class="btn btn-secondary btn-sm mb-1">出品済みでブラックリスト登録されている商品</button>
        <button class="btn btn-secondary btn-sm mb-1">出品済みでNGキーワードが含まれている商品</button>
    </div>

    <div class="mt-2 mb-2">
        <span class="small">件数: 10414件</span>
    </div>

    <table class="mt-2 mb-2 product-table">
        <tbody>
            <tr>
                <td class="custom-border w-120px align-top pt-2 ps-2 pe-2">
                    <div class="mb-2">
                        <span>ASIN: </span>
                        <span id="">B0BG8PWK8T</span>
                    </div>
                    <div class="mb-2">
                        <span>JAN: </span>
                        <span id="">なし</span>
                    </div>
                    <div class="mb-2">
                        <span>ランキング: </span>
                        <span>34,191位</span>
                    </div>
                    <div class="mb-4">
                        <span>楽天商品URL: </span>
                        <span></span>
                    </div>
                    <a id="" class="btn btn-warning btn-sm mb-1 w-100 d-block" target="_blank" href="#">Amazon</a>
                    <a id="" class="btn btn-warning btn-sm mb-1 w-100 d-block" target="_blank" href="#">Amazon出品者一覧</a>
                    <a id="" class="btn btn-danger btn-sm mb-1 w-100 d-block" target="_blank" href="#">楽天商品名検索結果</a>
                    <span><a id="" class="btn btn-danger btn-sm mb-1 w-100 d-block" target="_blank" href="#">楽天JAN検索結果</a></span>
                    <span><a onclick="return confirm('ブラックリストに登録しますか?');" id="" class="btn btn-dark btn-sm mb-1 w-100 d-block" href="#">ブラックリスト登録</a></span>
                    <span><a onclick="return confirm('この商品を楽天へ出品しますか?');" id="" class="btn btn-danger btn-sm mb-1 w-100 d-block" href="#">出  品</a></span>
                    <a id="" target="_blank" class="btn btn-success btn-sm mb-1 w-100 d-block" href="#">編  集</a>
                    <a onclick="return confirm('出品している場合、出品も削除されますがよろしいですか？');" id="" class="btn btn-outline-secondary btn-sm mb-1 w-100 d-block" href="#">削  除</a>
                </td>
                <td class="custom-border w-131px align-top">
                    <table>
                        <tbody>
                            <tr>
                                <td class="border-0">
                                    <img id="MainContent_ListView1_ctrl0_img_Image_0" src="https://images-na.ssl-images-amazon.com/images/I/412ToUuJMZL.jpg" style="width:120px;margin-bottom:5px;"><br>
                                    <img id="MainContent_ListView1_ctrl0_Image2_0" src="https://images-na.ssl-images-amazon.com/images/I/51JpRJ0lL-L.jpg" style="width:60px;margin-bottom:5px;">
                                    <img id="MainContent_ListView1_ctrl0_Image3_0" src="https://images-na.ssl-images-amazon.com/images/I/41wUrIXb3BL.jpg" style="width:60px;margin-bottom:5px;"><br>
                                    <img id="MainContent_ListView1_ctrl0_Image4_0" src="https://images-na.ssl-images-amazon.com/images/I/51wJ13uviKL.jpg" style="width:60px;">
                                    <img id="MainContent_ListView1_ctrl0_Image5_0" src="https://images-na.ssl-images-amazon.com/images/I/41GOB4BFg3L.jpg" style="width:60px;"><br>
                                    <img id="MainContent_ListView1_ctrl0_Image6_0" src="https://images-na.ssl-images-amazon.com/images/I/41z0tTO+vkL.jpg" style="width:60px;">
                                    <img id="MainContent_ListView1_ctrl0_Image7_0" src="https://images-na.ssl-images-amazon.com/images/I/51VpzgYw2yL.jpg" style="width:60px;"><br>
                                    <img id="MainContent_ListView1_ctrl0_Image8_0" style="width:60px;">
                                    <img id="MainContent_ListView1_ctrl0_Image9_0" style="width:60px;"><br>
                                    <img id="MainContent_ListView1_ctrl0_Image10_0" style="width:60px;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="custom-border align-top">
                    <table class="w-200px">
                        <tbody>
                            <tr>
                                <td class="custom-border">
                                    <span style="font-weight: bold;">出品状態: </span><span id="MainContent_ListView1_ctrl0_lbl_IsListing_0" style="color:Black;">未出品</span><br>
                                    <span style="font-weight: bold;">発売日: </span><span id="MainContent_ListView1_ctrl0_lbl_ReleaseDate_0" style="background-color:Transparent;"></span><br>
                                    <span style="font-weight: bold;">予約商品: </span><span id="MainContent_ListView1_ctrl0_lbl_IsReserve_0" style="background-color:Transparent;">いいえ</span><br>
                                    <span style="font-weight: bold;">ブラックリスト: </span><span id="MainContent_ListView1_ctrl0_lbl_IsBlackList_0">いいえ</span><br>
                                    <span style="font-weight: bold;">NG商品: </span><span id="MainContent_ListView1_ctrl0_lbl_IsNgItem_0" style="color:Black;"></span>
                                </td>
                                <td class="custom-border">
                                    <span style="font-weight: bold;">インポートID: </span><span id="MainContent_ListView1_ctrl0_lbl_ImportId_0">25719</span><br>
                                    <span style="font-weight: bold;">インポート名: </span><span id="MainContent_ListView1_ctrl0_lbl_ImportName_0">China3_32</span><br>
                                    <span style="font-weight: bold;">登録日時: </span><span id="MainContent_ListView1_ctrl0_lbl_CreateDate_0">2023/05/30 18:36:49</span><br>
                                    <span style="font-weight: bold;">更新日時: </span><span id="MainContent_ListView1_ctrl0_lbl_UpdateDate_0">2023/05/30 18:36:49</span><br>
                                    <span style="font-weight: bold;">販売個数: </span><a id="MainContent_ListView1_ctrl0_lbl_SoldAmount_0" target="_blank" href="https://rakupin-dropshipping.com/Rakuten/OrderManager.aspx?number=">0個</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="custom-border">
                                    <span style="font-weight: bold;">サイズ: </span><span id="MainContent_ListView1_ctrl0_lbl_SizeType_0">60サイズ</span><br>
                                    <span style="font-weight: bold;">縦: </span><span id="MainContent_ListView1_ctrl0_lbl_Length_0">21cm</span><br>
                                    <span style="font-weight: bold;">横: </span><span id="MainContent_ListView1_ctrl0_lbl_Width_0">15cm</span><br>
                                    <span style="font-weight: bold;">高さ: </span><span id="MainContent_ListView1_ctrl0_lbl_Height_0">5cm</span><br>
                                    <span style="font-weight: bold;">重さ: </span><span id="MainContent_ListView1_ctrl0_lbl_Weight_0">0.22999981219373922kg</span>
                                </td>
                                <td class="custom-border">
                                    <span style="font-weight: bold;">楽天販売価格: </span><span id="MainContent_ListView1_ctrl0_lbl_RakutenPrice_0" style="color:Blue;">2,301円</span><br>
                                    <span style="font-weight: bold;">楽天販売手数料: </span><span id="MainContent_ListView1_ctrl0_lbl_Fee_0" style="color:Red;">226円</span><br>
                                    <span style="font-weight: bold;">Amazon最安FBA: </span><span id="MainContent_ListView1_ctrl0_lblCartPrice_0" style="color:Red;">1,399円</span><br>
                                    <span style="font-weight: bold;">Amazonポイント: </span><span id="MainContent_ListView1_ctrl0_Label6_0" style="color:Blue;">14pt</span><br>
                                    <span style="display: none">
                                        <span style="font-weight: bold;">オープンロジ送料: </span><span id="MainContent_ListView1_ctrl0_lbl_Shipping_0" style="color:Red;">770円</span><br>
                                        <span style="font-weight: bold;">オープンロジ手数料: </span><span id="MainContent_ListView1_ctrl0_lbl_OpenLogiFee_0" style="color:Red;">21円</span><br>
                                    </span>
                                    <span style="display: normal">
                                        <span style="font-weight: bold;">自己配送送料: </span><span id="MainContent_ListView1_ctrl0_lbl_SelfShipping_0" style="color:Red;">0円</span><br>
                                    </span>
                                    <span style="font-weight: bold;">利益額: </span><span id="MainContent_ListView1_ctrl0_lbl_Profit_0" style="color:#009933;font-weight:bold;">690円</span><br>
                                    <span style="font-weight: bold;">利益率: </span><span id="MainContent_ListView1_ctrl0_lbl_ProfitRate_0" style="color:#009933;font-weight:bold;">19%</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <img class="w-400px" src="https://dyn.keepa.com/pricehistory.png?asin=B07KS36JL6&amp;domain=co.jp&amp;width=450&amp;height=150&amp;range=90&amp;salesrank=1">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="custom-border align-top">
                    <span style="font-weight: bold;">商品名: </span><span id="MainContent_ListView1_ctrl0_lbl_ItemName_0">LEEHUR ユニコーンおもちゃ ユニコーン ドーナツ ムーン ストレス解消おもちゃ 装飾品 お祭 子供景品 誕生日プレゼント 6歳以上 (夜光スクイーズ（20個入り）)</span><br>
                    <span style="font-weight: bold;">ブランド: </span><span id="MainContent_ListView1_ctrl0_lbl_Brand_0">LEEHUR</span><br>
                    <span style="font-weight: bold;">商品特徴: <br></span><span id="MainContent_ListView1_ctrl0_lbl_Features_0">【セット内容】20種類の動物スクイジーが含まれています。それぞれのかわいいおもちゃは、素敵な箱の中に個包装されています。対象年齢：6歳以上<br>【高品質＆安心】この商品は環境に優しいエコ材料PUフォームで作られ、人体に無毒で、耐久性もいいです<br>【幅広く使用可能】この商品は部屋と車などの装飾品、撮影道具、工芸品などにご利用いただけます。世界中に大人気ものとして活躍しています<br>「ストレス解消 グッズ」かわいい動物たちの形と弾力性あるふわふわ感触で握りしてるうちにリラックスやたまったストレスを解消します。<br>【親切な注意】何か質問がある場合は、私達に連絡してください、私たちは24時間以内にあなたに返信されます。<br></span><br>
                    <span style="font-weight: bold;">商品説明: <br></span><span id="MainContent_ListView1_ctrl0_lbl_Description_0"></span>
                </td>
            </tr>
        </tbody>
    </table>

</section>