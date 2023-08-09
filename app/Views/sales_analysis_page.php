<!-- CONTENT -->

<section>

    <div class="border border-gray rounded ps-4 pe-3 pt-2 pb-2 mb-4">

        <div class="mb-2">

            <div class="d-inline-block">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">期間選択</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">期間指定</label>
                </div>
            </div>

        </div>

        <div>

            <div class="d-inline-block">
                <label class="small" for="">集計期間</label>
                <input type="month" class="form-control w-150px me-2">
            </div>

            <div class="d-inline-block me-3 d-none">
                <label class="small" for="">集計期間</label>
                <div>
                    <input type="date" class="form-control w-150px me-2 d-inline-block"> ~ 
                    <input type="date" class="form-control w-150px ms-2 me-2 d-inline-block">
                </div>
            </div>

            <div class="d-inline-block">
                <input type="submit" name="" style="margin-bottom: 4px" value=" 集  計 " id="" class="btn btn-success">
            </div>

        </div>

    </div>

    <div class="mb-2">
        <h4>2023年06月の売上集計</h4>
    </div>

    <table class="mt-2 mb-4 w-100">
        <thead>
            <tr>
                <td class="custom-border text-center bg-info text-light">販売数</td>
                <td class="custom-border text-center bg-info text-light">売上合計</td>
                <td class="custom-border text-center bg-info text-light">仕入合計</td>
                <td class="custom-border text-center bg-info text-light">Amazonポイント</td>
                <td class="custom-border text-center bg-info text-light">楽天手数料合計</td>
                <td class="custom-border text-center bg-info text-light">楽天送料合計</td>
                <td class="custom-border text-center bg-info text-light">自己配送送料</td>
                <td class="custom-border text-center bg-warning text-light">利益額合計</td>
                <td class="custom-border text-center bg-warning text-light">利益率</td>
                <td class="custom-border text-center bg-info text-light">平均売上数/日</td>
                <td class="custom-border text-center bg-info text-light">平均売上単価/個</td>
                <td class="custom-border text-center bg-info text-light">平均仕入単価/個</td>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td class="custom-border p-1 text-end">377個</td>
                <td class="custom-border p-1 text-end">910,840円</td>
                <td class="custom-border p-1 text-end">525,577円</td>
                <td class="custom-border p-1 text-end">3,227円</td>
                <td class="custom-border p-1 text-end">89,451円</td>
                <td class="custom-border p-1 text-end">0円</td>
                <td class="custom-border p-1 text-end">0円</td>
                <td class="custom-border p-1 text-end">299,039円</td>
                <td class="custom-border p-1 text-end">32.8%</td>
                <td class="custom-border p-1 text-end">41.89個</td>
                <td class="custom-border p-1 text-end">101,204円</td>
                <td class="custom-border p-1 text-end">58,397円</td>
            </tr>
        </tbody>
    </table>

    <div>
        <h4>日別売上</h4>
    </div>

    <table class="mt-2 mb-2 w-100">
        <thead>
            <tr>
                <td class="custom-border text-center bg-secondary text-light">日付</td>
                <td class="custom-border text-center bg-secondary text-light">販売数</td>
                <td class="custom-border text-center bg-secondary text-light">売上</td>
                <td class="custom-border text-center bg-secondary text-light">仕入金額</td>
                <td class="custom-border text-center bg-secondary text-light">Amazonポイント</td>
                <td class="custom-border text-center bg-secondary text-light">楽天手数料</td>
                <td class="custom-border text-center bg-secondary text-light">楽天送料</td>
                <td class="custom-border text-center bg-secondary text-light">自己配送送料</td>
                <td class="custom-border text-center bg-secondary text-light">利益額</td>
                <td class="custom-border text-center bg-secondary text-light">利益率</td>
                <td class="custom-border text-center bg-secondary text-light">集計期間累計売上</td>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td class="custom-border p-1 text-end">2023/06/01</td>
                <td class="custom-border p-1 text-end">33個</td>
                <td class="custom-border p-1 text-end">74,078円</td>
                <td class="custom-border p-1 text-end">41,040円</td>
                <td class="custom-border p-1 text-end">348</td>
                <td class="custom-border p-1 text-end">7,275円</td>
                <td class="custom-border p-1 text-end">0円</td>
                <td class="custom-border p-1 text-end">0円</td>
                <td class="custom-border p-1 text-end">26,111円</td>
                <td class="custom-border p-1 text-end">35%</td>
                <td class="custom-border p-1 text-end">74,078円</td>
            </tr>
            <tr>
                <td class="custom-border p-1 text-end">2023/06/01</td>
                <td class="custom-border p-1 text-end">33個</td>
                <td class="custom-border p-1 text-end">74,078円</td>
                <td class="custom-border p-1 text-end">41,040円</td>
                <td class="custom-border p-1 text-end">348</td>
                <td class="custom-border p-1 text-end">7,275円</td>
                <td class="custom-border p-1 text-end">0円</td>
                <td class="custom-border p-1 text-end">0円</td>
                <td class="custom-border p-1 text-end">26,111円</td>
                <td class="custom-border p-1 text-end">35%</td>
                <td class="custom-border p-1 text-end">74,078円</td>
            </tr>
        </tbody>
    </table>
</section>