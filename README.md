# MAMP_WordPress_handson
MAMP(Mac/Apache/mysql/php)にてローカル環境を構築し、WordPress内のphpを編集できるようにする。</br>
のち、オリジナルテーマを作成。</br>
Git管理についても記載。</br>

### 1 導入手順
1. MAMPのDL/インストール
2. WordPressのDL/解凍
3. */Applications/MAMP/htdocs*内に2.で解凍したフォルダを配置(名前は何でも良い。今回はディレクトリ名は"mamp_wordpress_handson"とする)</br>
</br>

### 2 データベースの作成
1. MAMPアプリケーションの*WebStart*を押す。</br>
   ブラウザで空のタブを開きアドレス欄に*localhost:8888/{WordPressディレクトリ名(今回はmamp_wordpress_handson)}*を入力して接続。WordPressの初期画面になるか確認。</br>
2. 1.の画面で各情報を記載</br>
   サーバー名：(仮にwordpressとしておく)</br>
   ユーザー名：root</br>
   パスワード：root</br>
   データベースのホスト名：localhost</br>
   テーブル名：wp_ (もともと記載されているので変えない)</br>
3. 再度MAMPアプリケーションの*WebStart*を押す。
4. ブラウザで"Welcome to MAMP"というページが開くので、そのページ上部にある"Tools"から**phpMyAdominを選択。
5. 左に"new"という項目があるのでクリック。
6. "database name"欄に先程仮につけたデータベース名(wordpress)を入力。</br>
   その右の欄に"utf8_general_ci"となっていればそのまま。なければドロップボックス内で選択する。
7. "create"ボタンを押し、左欄の一番下に今作ったデータベースができているか確認。

### 3 最小のオリジナルテーマを作る
1. */Applications/MAMP/htdocs/mamp_wordpress_handson/wp-content/themes*内に新しいディレクトリを追加。ディレクトリ名を"WP_TryOriginalTheme"とする。
2. 作成したテーマディレクトリをコード編集ツール(VScode)で開く。
3. 作成したテーマディレクトリ内に**index.php**と**style.css**というファイルを作成する。</br>
   内容は何も記載せず空のままでいい。
4. ブラウザのWordPress管理画面に戻って(localhost:8888/{WordPressディレクトリ名mamp_wordpress_handson})、"外観"欄にオリジナルテーマが追加されているか確認。
5. 表示されているのを確認したら先程作成したstyle.cssに下記の内容を記載</br>
   ```
   /*
   Theme Name: WP_TryOriginalTheme
   Author: BugGreedy
   Version: 1.0
   Description: WordPressオリジナルテーマの検討
   */
   ```
6. 再度WordPressの管理画面を確認し、先程style.cssに記載した内容がオリジナルテーマに反映されているか確認。</br>

**WordPressをGit管理する上での検討事項**</br>
WordPressは基本的にサーバーにインストールし(今回MAMP内に設置したように)、管理画面にて運用する。また、プラグインや文章・画像のコンテンツ等も頻繁に変更が行われるためWordPressディレクトリ全体をGit管理するのは好ましくない。</br>
WordPressのカスタマイズは主にメインテーマで制御される。その事から*/Applications/MAMP/htdocs/mamp_wordpress_handson/wp-content/themes/{オリジナルテーマ名}*のディレクトリをGit管理する。</br>
</br>
今回はこのディレクトリをMAMPとWordPressのハンズオンとしてプッシュし、以後はテーマディレクトリの内容を編集していく。</br>

### 4 テーマディレクトリをWordPress全体のGitから除外するように設定
1. */Applications/MAMP/htdocs/mamp_wordpress_handson*(wordpressディレクトリ)内に".ignore"という名前を付けたテキストファイルを作成。(拡張子なし)
2. ファイルの内容を下記のように記載する。
```
*
!.gitignore
!/wp-content/themes/{mytheme} 
# {mytheme}にはテーマ名を入れる.
# 今回は"WP_TryOriginalTheme"
```
</br>
参考：</br>
https://qiita.com/qst_exe/items/ef4c5ea1243ead214ac7</br>
https://qiita.com/inabe49/items/16ee3d9d1ce68daa9fff</br>