<!-- CONTENT -->

<section>

    <div class="border border-gray rounded ps-4 pe-3 pt-2 pb-2">

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