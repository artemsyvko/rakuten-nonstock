<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rakuauto | 商品インポート</title>
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
                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 139 30" width="139" height="30">
                        <title>Rakuauto</title>
                        <defs>
                            <image  width="139" height="30" id="img1" href="data:image/png;base64,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"/>
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

        <h1>商品インポート</h1>

    </div>

</header>

<!-- CONTENT -->

<section>

    <div class="row">

        <div class="col-md-3">

            <form action="">

                <div class="mb-4">
                    <label for="" class="small">インポート名</label>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="mb-2">
                    <label for="" class="small">
                        ASIN<span class="text-danger">(上限1000件)※</span><br>
                        改行区切りで入力してください。
                    </label>
                    <textarea rows="20" class="form-control form-control-sm"></textarea>
                </div>

                <div>
                    <input type="submit" class="btn btn-success" value="登  録">
                </div>

            </form>

        </div>

        <div class="col-md-8">
            
            <table class="w-100">
                <tbody>
                    <tr>
                        <td class="pe-4">件数: 70件</td>
                        <td class="pe-4">登録商品数: 22,758件</td>
                        <td class="text-end pe-4 ps-4 w-auto">
                            <small class="text-danger">※実行中のインポート処理、出品処理が終わり次第、随時開始されます。</small><br>
                            <small class="text-danger">複数の処理の同時実行はできません。</small>
                        </td>
                        <td><input type="submit" class="btn btn-success" value="画面更新"></td>
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
