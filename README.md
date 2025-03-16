# Laravel 11 透過表達式取代任何原生查詢

引入 tpetry 的 laravel-query-expressions 套件來擴增透過表達式取代任何原生查詢，可以使用表達式來選擇數據、更好地過濾或排序結果。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/posts` 來顯示文章過濾。

----

## 畫面截圖
![](https://i.imgur.com/BTH4zmI.png)
> 原生陳述句會被作為字串注入到查詢，所以你應該要非常小心，別造成了 SQL 注入漏洞
