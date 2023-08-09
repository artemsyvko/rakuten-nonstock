<!-- CONTENT -->

<section>

    <div class="mb-4">
        <span class="text-danger d-block">本システムでは、Amazonの商品情報を取得するためにアマゾンのSPAPIを使用しています。</span>
        <span class="text-danger d-block">以下のリンクよりSPAPI連携をするために認証してください。</span>
    </div>

    <div class="mb-4">
        <a href="" class="text-success d-block mb-2">SPAPIキー連携</a>
        <span class="text-danger d-block">更新日：</span>
        <span class="text-danger d-block">有効期限：</span>
    </div>

    <table class="w-100 mb-2">
        <tbody>
            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">ログインID</td>
                <td class="custom-border p-2">
                    <input type="text" class="form-control w-300px">
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">メールアドレス</td>
                <td class="custom-border p-2">
                    <input type="email" class="form-control w-300px">
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">追跡価格変更条件種別</td>
                <td class="custom-border p-2">
                    <div class="d-inline-block pe-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label" for="">商品個別</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label" for="">デフォルト設定</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label" for="">一律</label>
                        </div>
                    </div>

                    <div class="d-inline-block">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label" for="">利益率</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label" for="">利益額</label>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">在庫補充条件種別</td>
                <td class="custom-border p-2">
                    <div class="d-inline-block pe-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label" for="">商品個別</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label" for="">一律</label>
                        </div>
                    </div>

                    <div class="d-inline-block">
                        <input type="number" class="form-control w-100px d-inline-block me-2"><span>個</span>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">楽天ショップ名</td>
                <td class="custom-border p-2">
                    <input type="text" class="form-control w-300px">
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">楽天ショップ担当者名</td>
                <td class="custom-border p-2">
                    <input type="text" class="form-control w-300px">
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">楽天総手数料率</td>
                <td class="custom-border p-2">
                    <input type="number" class="form-control w-100px d-inline-block me-2"><span>%</span>
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">楽天ストアID</td>
                <td class="custom-border p-2">
                    <input type="text" class="form-control w-300px">
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">楽天APIserviceSecret</td>
                <td class="custom-border p-2">
                    <input type="text" class="form-control w-300px">
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">楽天APIライセンスキー</td>
                <td class="custom-border p-2">
                    <input type="text" class="form-control w-300px">
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">楽天あんしんメルアドサーバのSMTP AUTH ID</td>
                <td class="custom-border p-2">
                    <input type="text" class="form-control w-300px">
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">楽天あんしんメルアドサーバのSMTP AUTH パスワード</td>
                <td class="custom-border p-2">
                    <input type="text" class="form-control w-300px">
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">自己配送時送料</td>
                <td class="custom-border p-2">
                    <div class="me-1">
                        <label class="small" for="">SSサイズ</label>
                        <div>
                            <input type="number" class="form-control w-100px me-2 d-inline-block"><small>円</small> 
                        </div>
                    </div>
                    <div class="me-1">
                        <label class="small" for="">60サイズ</label>
                        <div>
                            <input type="number" class="form-control w-100px me-2 d-inline-block"><small>円</small> 
                        </div>
                    </div>
                    <div class="me-1">
                        <label class="small" for="">80サイズ</label>
                        <div>
                            <input type="number" class="form-control w-100px me-2 d-inline-block"><small>円</small> 
                        </div>
                    </div>
                    <div class="me-1">
                        <label class="small" for="">100サイズ</label>
                        <div>
                            <input type="number" class="form-control w-100px me-2 d-inline-block"><small>円</small> 
                        </div>
                    </div>
                    <div class="me-1">
                        <label class="small" for="">120サイズ</label>
                        <div>
                            <input type="number" class="form-control w-100px me-2 d-inline-block"><small>円</small> 
                        </div>
                    </div>
                    <div class="me-1">
                        <label class="small" for="">140サイズ</label>
                        <div>
                            <input type="number" class="form-control w-100px me-2 d-inline-block"><small>円</small> 
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">送信元メールアドレス</td>
                <td class="custom-border p-2">
                    <input type="email" class="form-control w-300px">
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">BCC用メールアドレス</td>
                <td class="custom-border p-2">
                    <input type="email" class="form-control w-300px">
                </td>
            </tr>

            <tr>
                <td class="custom-border bg-secondary text-end text-white p-2">メール署名</td>
                <td class="custom-border p-2">
                    <textarea class="form-control w-100" rows="10"></textarea>
                </td>
            </tr>
        </tbody>
    </table>

    <div>
        <input type="submit" class="btn btn-success d-inline-block" value=" 更  新 ">
    </div>
</section>