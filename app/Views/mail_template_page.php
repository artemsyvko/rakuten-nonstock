<!-- CONTENT -->

<section>
    
    <div class="row">
        <div class="col-md-8">
            <div class="mb-4">
                <label for="">メール種別</label>
                <select class="form-select w-200px">
                    <option selected="selected" value="order_accept">注文承諾メール</option>
                    <option value="shipping_complete">発送完了メール</option>
                    <option value="client_cancel">顧客都合キャンセルメール</option>
                    <option value="shop_cancel">店舗都合キャンセルメール</option>
                    <option value="evaluation_request">評価依頼メール</option>
                    <option value="shipping_add_confirm">送料追加確認メール</option>
                    <option value="free_input">自由入力メール</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="">件名</label>
                <div>
                    <input type="text" class="form-control w-100">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="mb-2">
                <label for="">本文</label>
                <textarea class="form-control w-100" rows="20">
ご注文ありがとうございます。
%%SHOP_NAME%% 通販担当の %%MAIL_NAME%% です。

以下のとおりご注文を承りました。

注文ID：%%ORDER_CODE%%
商品：%%ITEM_LIST%%


※%%SHOP_NAME%% では、ご注文頂いてから発送までに
通常1日～3日頂戴しております。

※このたびのご注文商品は、発送を委託しているAmazon配送センターからの出荷となります。
Amazon提携の配送業者がお届けに伺うことがございます。
配達時に「Amazonからのお届け」と申し出たり、不在票にAmazonと記載する等があります。
ご理解のほど、どうぞよろしくお願いいたします。

%%SIGNATURE%%
                </textarea>
            </div>
            <div class="mb-4">
                <input type="submit" class="btn btn-success d-inline-block" value=" 更  新 ">
            </div>
        </div>
        
        <div class="col-md-4 pt-4">
            <p><b>■ 置換用タグ一覧</b></p>

            <p>%%SHOP_NAME%%・・・ショップ名</p>
            <p>%%MAIL_NAME%%・・・ショップ担当者名</p>
            <p>%%SHOP_CODE%%・・・楽天ストアID</p>
            <p>%%CUSTOMER_NAME%%・・・顧客名</p>
            <p>%%ORDER_CODE%%・・・注文番号</p>
            <p>%%ITEM_LIST%%・・・商品一覧</p>
            <p>%%DELI_CARRIER%%・・・配送業者</p>
            <p>%%TRACKING_CODE%%・・・伝票番号</p>
            <p>%%DELI_URL%%・・・追跡詳細URL</p>
            <p>%%SHIPPING_DATE%%・・・発送日</p>
            <p>%%SIGNATURE%%・・・署名</p>
        </div>
    </div>

</section>