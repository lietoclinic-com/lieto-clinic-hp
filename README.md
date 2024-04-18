## ディレクトリ変更
cd gulp
コンパイルはgulpディレクトリで行う

## セットアップ(初回のみ)
npm init -y
package.jsonファイルの読み込み

npm i
npm i -D gulp (gulpもインストールする場合)
node_modulesと、package-lock.jsonファイルの作成

## 立ち上げ
npx gulp default

## 画像
src/img/内に格納すると、dist/img/内に圧縮されたものを生成
src内のファイルを削除してもdist内の画像は削除されない。
パス指定はdistのものを指定する。

## css
src/scss/内に記述し、style.min.cssでまとめる
CSS設計はFLOCSSを使用

## js
機能ごとにファイルを分割し、main.jsでまとめる。
ページに読み込むのは[dist/assets/js/main.js]

## Git
[main]ブランチ：本番環境