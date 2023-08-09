<!-- CONTENT -->

<section>

    <div class="row">

        <div class="col-md-3">

            <form action="">

                <div class="mb-4">
                    <label for="">インポート名</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">
                        ASIN <span class="text-danger fw-bold">(上限1000件)※</span><br>
                        改行区切りで入力してください。
                    </label>
                    <textarea rows="20" class="form-control"></textarea>
                </div>

                <div>
                    <input type="submit" class="btn btn-success" value=" 登  録 ">
                </div>

            </form>

        </div>

        <div class="col-md-9">
            
            <table class="w-100">
                <tbody>
                    <tr>
                        <td class="pe-4">件数: 70件</td>
                        <td class="pe-4">登録商品数: 22,758件</td>
                        <td class="text-end pe-4 ps-4 w-auto">
                            <small class="text-danger"><b>※実行中のインポート処理、出品処理が終わり次第、随時開始されます。</b></small><br>
                            <small class="text-danger"><b>複数の処理の同時実行はできません。</b></small>
                        </td>
                        <td class="text-end"><input type="submit" class="btn btn-success" value="画面更新"></td>
                    </tr>
                </tbody>
            </table>

            <table class="w-100 custom-bordered-table">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">インポート名</th>
                        <th class="text-center">登録日時</th>
                        <th class="text-center">対象ASIN数</th>
                        <th class="text-center">ステータス</th>
                        <th class="text-center">詳細</th>
                        <th class="text-center">リンク</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center small">350</td>
                        <td class="small ps-3">kp23</td>
                        <td class="small ps-3">
                            <span>
                                登録日時: 2023/03/24 10:29:10
                            </span><br>
                            <span>
                                開始日時: 2023/03/24 10:30:12
                            </span><br>
                            <span>
                                完了日時: 2023/03/24 11:59:38
                            </span>
                        </td>
                        <td class="text-end small pe-3">706</td>
                        <td class="small ps-3">完了</td>
                        <td class="small ps-3">
                            <span>OK商品: 68</span><br>
                            <span>NG商品: 628</span><br>
                            <span>取込不可商品: 10</span><br>
                            <span>合計: 706</span>
                        </td>
                        <td class="text-center small">
                            <a class="d-block mb-3"href="">商品管理画面</a>
                            <a class="d-block" href="">取込不可詳細</a>
                        </td>
                    </tr>
                </tbody>
            </table>
                

        </div>

    </div>

</section>