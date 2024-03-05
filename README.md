## セットアップ(初回のみ)
npm i

## 立ち上げ
yarn build
yarnのインストールはこちらを参照
https://qiita.com/uttiy3/items/1b89446e03991c7c2c3d

## 画像
src/img/内に格納すると、dist/img/内に圧縮されたものを生成
src内のファイルを削除してもdist内の画像は削除されない。
パス指定はdistのものを指定する。

## css
src/scss/内に記述
ページに読み込むのは[dist/assets/css/common.css]
CSS設計はFLOCSSを使用

## js
機能ごとにファイルを分割し、main.jsでまとめる。
ページに読み込むのは[dist/assets/js/main.js]

## Git
[main]ブランチ：本番環境
