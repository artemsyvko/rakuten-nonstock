<!-- CONTENT -->

<section>

    <div class="border border-gray rounded ps-4 pe-3 pt-2 pb-2 mb-2">

        <div class="mb-1">

            <div class="d-inline-block">
                <label class="small" for="">状態</label>
                <select class="form-select form-select-sm w-150px me-2">
                    <option selected="selected" value=""></option>
                    <option value="注文確認待ち">注文確認待ち</option>
                    <option value="出荷待ち">出荷待ち</option>
                    <option value="出荷依頼済">出荷依頼済</option>
                    <option value="出荷済">出荷済</option>
                    <option value="出荷完了通知済">出荷完了通知済</option>
                    <option value="キャンセル済">キャンセル済</option>
                </select>
            </div>

            <div class="d-inline-block">
                <label class="small" for="">注文ステータス</label>
                <select class="form-select form-select-sm w-150px me-2">
                    <option selected="selected" value=""></option>
                    <option value="注文確認待ち">注文確認待ち</option>
                    <option value="楽天処理中">楽天処理中</option>
                    <option value="発送待ち">発送待ち</option>
                    <option value="変更確定待ち">変更確定待ち</option>
                    <option value="発送済">発送済</option>
                    <option value="支払手続き中">支払手続き中</option>
                    <option value="支払手続き済">支払手続き済</option>
                    <option value="キャンセル確定待ち">キャンセル確定待ち</option>
                    <option value="キャンセル確定">キャンセル確定</option>
                </select>
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">注文ID</label>
                <input class="form-control form-control-sm w-200px">
            </div>

            <div class="d-inline-block me-3">
                <label class="small" for="">注文日</label>
                <div>
                    <input type="date" class="form-control form-control-sm w-100px me-2 d-inline-block"> ~ 
                    <input type="date" class="form-control form-control-sm w-100px ms-2 me-2 d-inline-block">
                </div>
            </div>

        </div>

        <div class="mb-1">

            <div class="d-inline-block me-2">
                <label class="small" for="">商品管理番号(商品URL)</label>
                <input class="form-control form-control-sm w-200px">
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">入庫依頼ID</label>
                <input class="form-control form-control-sm w-150px">
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">出庫依頼ID</label>
                <input class="form-control form-control-sm w-150px">
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">氏名</label>
                <input class="form-control form-control-sm w-150px">
            </div>

            <div class="d-inline-block me-2">
                <label class="small" for="">電話番号</label>
                <input class="form-control form-control-sm w-150px">
            </div>

            <div class="d-inline-block">
                <input type="submit" name="" style="margin-bottom: 2px" value=" 検  索 " id="" class="btn btn-success btn-sm">
            </div>

        </div>

    </div>

    <div class="mt-2 mb-2">
        <span class="small">登録件: 781件</span>
    </div>

    <table class="mt-2 mb-2 product-table w-100">
        <thead>
            <tr>
                <th class="custom-border text-center">業務</th>
                <th class="custom-border text-center">状態</th>
                <th class="custom-border text-center">注文情報</th>
                <th class="custom-border text-center">配送先情報/出荷情報</th>
                <th class="custom-border text-center">利益情報</th>
                <th class="custom-border text-center">キャンセル/コメント/メモ</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td class="custom-border w-120px align-top pt-2 ps-2 pe-2">
                    <a id="" class="btn btn-success btn-sm mb-1 w-100 d-block" target="_blank" href="#">仕入れ・注文編集</a>
                    <a id="" class="btn btn-primary btn-sm mb-1 w-100 d-block" target="_blank" href="#">注文承諾メール</a>
                    <a id="" class="btn btn-primary btn-sm mb-1 w-100 d-block" target="_blank" href="#">発送完了メール</a>
                </td>

                <td class="custom-border w-160px align-top pt-2 ps-2 pe-2">
                    <div class="mb-2">
                        <b>状態: </b>
                        <span id="" class="bg-warning">出荷待ち</span>
                    </div>
                    <div class="mb-2">
                        <b>注文ステータス: </b>
                        <span id="">発送待ち</span>
                    </div>
                    <div class="mb-4">
                        <b>支払方法: </b>
                        <span id="">クレジットカード</span>
                    </div>
                    <div class="mb-2">
                        <b>＜メール配信状況＞</b>
                    </div>
                    <a id="" class="btn btn-primary btn-sm mb-1 w-100 d-block" target="_blank" href="#">自由入力メール</a>
                    <a id="" class="btn btn-primary btn-sm mb-4 w-100 d-block" target="_blank" href="#">メール履歴</a>
                    <div class="mb-3">
                        <b>注文承諾: </b>
                        <span id="" class="bg-warning">未</span>
                    </div>
                    <div class="mb-3">
                        <b>出荷通知: </b>
                        <span id="" class="bg-warning">未</span>
                    </div>
                    <div class="mb-3">
                        <b>評価依頼: </b>
                        <span id="" class="bg-warning">未</span>
                    </div>
                </td>

                <td class="custom-border align-top pt-2 ps-2 pe-2">
                    <a id="" class="btn btn-success btn-sm mb-2" target="_blank" href="#">注文詳細(RMSへ)</a>
                    <a id="" class="btn btn-success btn-sm mb-2" target="_blank" href="#">注文情報再取得</a>
                    <div class="mb-2">
                        <b>注文ID: </b>
                        <span>413971-20230609-0667329785</span>
                    </div>
                    <div class="mb-2">
                        <b>注文時刻: </b>
                        <span>2023/06/09 15:58:45</span>
                    </div>
                    <div class="mb-2">
                        <b>E-mail: </b>
                        <span>97bcd7e04ca53dd17f741355287aabf5s1@pc.fw.rakuten.ne.jp</span>
                    </div>
                    <div class="mb-2">
                        <b>キャリア: </b>
                        <span>PC</span>
                    </div>
                    <div class="mb-2">
                        <span class="bg-danger text-white">
                            こちらの注文は複数商品の購入があります
                        </span>
                    </div>
                    <div class="mb-4">
                        <b>商品名: </b>
                        <span class="word-wrap">EZ SPARES DYS V6 DC16, DC22, DC26, DC30, DC31, DC34, DC35, DC36, DC37, DC39, DC44, DC45, DC46, DC47, DC48, DC59, DC61, DC62, DC63, DC74, V6シリーズ クリーナー用別売ブラシ ユニバーサル丸ブラシ 掃除機アクセサリー 交換用×1個</span>
                    </div>

                    <div class="mb-2">
                        <b>小計: </b>
                        <span>2,795円</span>
                    </div>
                    <div class="mb-2">
                        <b>配送料: </b>
                        <span>0円</span>
                    </div>
                    <div class="mb-2">
                        <b>手数料: </b>
                        <span>0円</span>
                    </div>
                    <div class="mb-2">
                        <b>割引額: </b>
                        <span>0円</span>
                    </div>
                    <div class="mb-2">
                        <b>合計: </b>
                        <span>2,795円</span>
                    </div>
                </td>

                <td class="custom-border w-150px align-top pt-2 ps-2 pe-2">
                    
                    <div class="mb-2">
                        <b>＜配送先情報＞</b>
                    </div>
                    <div class="mb-2">
                        <b>氏名: </b>
                        <span>田中 慈祥 様</span>
                    </div>
                    <div class="mb-2">
                        <b>郵便番号: </b>
                        <span>421-0515</span>
                    </div>
                    <div class="mb-2">
                        <b>住所: </b>
                        <span>静岡県牧之原市西山寺50 西山寺</span>
                    </div>
                    <div class="mb-2">
                        <b>TEL: </b>
                        <span>090-4304-5329</span>
                    </div>
                    <div class="mb-2">
                        <b>配送希望日: </b>
                        <span></span>
                    </div>
                    <div class="mb-4">
                        <b>配送希望時間: </b>
                        <span></span>
                    </div>
                    
                    <div class="mb-2">
                        <b>＜出荷情報＞</b>
                    </div>
                    <div class="mb-2">
                        <b>配送会社: </b>
                        <span></span>
                    </div>
                    <div class="mb-2">
                        <b>伝票番号: </b>
                        <span></span>
                    </div>
                    <div class="mb-2">
                        <b>出荷時刻: </b>
                        <span></span>
                    </div>
                </td>

                <td class="custom-border w-150px align-top pt-2 ps-2 pe-2">
                    <span class="d-block bg-danger text-white">仕入れ価格が未登録です。</span>
                    <div class="mb-2">
                        <b>販売価格: </b>
                        <span class="text-primary">2,795円</span>
                    </div>
                    <div class="mb-2">
                        <b>楽天手数料: </b>
                        <span></span>
                    </div>
                    <div class="mb-2">
                        <b>仕入れ価格: </b>
                        <span></span>
                    </div>
                    <div class="mb-2">
                        <b>AmazonPt: </b>
                        <span></span>
                    </div>
                    <div class="mb-2">
                        <b>楽天送料: </b>
                        <span></span>
                    </div>
                    <div class="mb-2">
                        <b>自己配送送料: </b>
                        <span></span>
                    </div>
                    <div class="mb-2">
                        <b>利益額: </b>
                        <span></span>
                    </div>
                    <div class="mb-2">
                        <b>利益率: </b>
                        <span></span>
                    </div>
                </td>

                <td class="custom-border w-150px align-top pt-2 ps-2 pe-2">
                    <a id="" class="btn btn-primary btn-sm mb-1 d-block" target="_blank" href="#">店舗都合キャンセル</a>
                    <a id="" class="btn btn-primary btn-sm mb-4 d-block" target="_blank" href="#">顧客都合キャンセル</a>
                    
                    <div class="mb-4">
                        <b>キャンセル理由: </b>
                        <span></span>
                    </div>

                    <div class="mb-4">
                        <b>キャンセル理由詳細: </b>
                        <span></span>
                    </div>

                    <div class="mb-4">
                        <b>ユーザーコメント: </b>
                        <span></span>
                    </div>
                    
                    <div>
                        <b>管理用メモ: </b>
                        <span></span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</section>