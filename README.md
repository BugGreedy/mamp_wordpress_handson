# MAMP_WordPress_handson
MAMP(Mac/Apache/mysql/php)にてローカル環境を構築し、WordPress内のphpを編集できるようにする。</br>
のち、オリジナルテーマを作成。</br>
Git管理についても記載。</br>

### 1 導入手順</br>
1. MAMPのDL/インストール
2. WordPressのDL/解凍
3. */Applications/MAMP/htdocs*内に2.で解凍したフォルダを配置(名前は何でも良い。今回はディレクトリ名は"mamp_wordpress_handson"とする)
4. */Applications/MAMP/htdocs/mamp_wordpress_handson/wp-content/themes*内に新しいディレクトリを追加。ディレクトリ名を"WP_TryOriginalTheme"とする。
</br>

### 2 MAMPでローカル環境を構築する</br>
1. */Applications/MAMP/htdocs/mamp_wordpress_handson/wp-content/themes*内に新しいディレクトリを追加。ディレクトリ名を"WP_TryOriginalTheme"とする。
2. mohemohe 

**WordPressをGit管理する上での検討事項**</br>
WordPressは基本的にサーバーにインストールし(今回MAMP内に設置したように)、管理画面にて運用する。また、プラグインや文章・画像のコンテンツ等も頻繁に変更が行われるためWordPressディレクトリ全体をGit管理するのは好ましくない。</br>
WordPressのカスタマイズは主にメインテーマで制御される。その事から*/Applications/MAMP/htdocs/mamp_wordpress_handson/wp-content/themes/{オリジナルテーマ名}*のディレクトリをGit管理する。
