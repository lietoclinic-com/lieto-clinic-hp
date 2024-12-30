// gulpのメソッド呼び出し(分割代入)
const { src, dest, watch, series, parallel} = require("gulp");

// dir
const srcBase = '../src'; // gulpフォルダを作成した場合
const srcPath = {
  css: srcBase + '/scss/**/*.scss',
  img: srcBase + '/img/**/*',
  js: srcBase + '/js/*.js',
}

const distBase = '../dist'; // gulpフォルダを作成した場合
const distPath = {
  css: distBase + '/css/',
  img: distBase + '/img/',
  js: distBase + '/js/'
}

// Scss Compile
const sass = require('gulp-sass')(require('sass')); // sassコンパイル（DartSass対応）
const sassGlob = require('gulp-sass-glob-use-forward'); // globパターンを使用可にする
const plumber = require("gulp-plumber"); // エラーが発生しても強制終了させない
// const rename = require("gulp-rename");
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const cleancss = require('gulp-clean-css');
const purgecss = require("gulp-purgecss");
const notify = require("gulp-notify"); // エラー発生時のアラート出力
const postcss = require("gulp-postcss"); // PostCSS利用
const cssnext = require("postcss-cssnext"); // 最新CSS使用を先取り
const sourcemaps = require("gulp-sourcemaps"); // ソースマップ生成
const browsers = [ // 対応ブラウザの指定
  'last 2 versions',
  '> 5%',
  'ie = 11',
  'not ie <= 10',
  'ios >= 8',
  'and_chr >= 5',
  'Android >= 5',
]
const scssCompile = () => {
  return src(srcPath.css)
  .pipe(sourcemaps.init()) // ソースマップの初期化
  .pipe(
    plumber({ // エラーが出ても処理を止めない
      errorHandler: notify.onError('Error:<%= error.message %>')
    })
  )
  .pipe(sassGlob()) // globパターンを使用可にする
  .pipe(sass.sync({ // sassコンパイル
    includePaths: ['src/scss'], // 相対パス省略
    outputStyle: 'expanded' // expanded 出力形式をCSSの一般的な記法("compressed"で1行に)
  }))
  .pipe(postcss([cssnext({
    features: {
      rem: false // rem単位をpxに変換しない
    }
  },browsers)])) // 最新CSS使用を先取り
  .pipe(sourcemaps.write('./')) // ソースマップの出力先をcssファイルから見たパスに指定
  .pipe(dest(distPath.css)) // style.cssのコンパイル

  //【style.min.css生成】
  .pipe(concat('style.min.css')) // 名前変更
  .pipe(cleancss()) // 1行生成
  // .pipe(sourcemaps.write('./')) // sourcemap 
  .pipe(dest(distPath.css))

  .pipe(notify({ // エラー発生時のアラート出力
    message: 'Sassをコンパイルしました',
    onLast: true
  }))
}

// JS Compile
const jsCompile = () => {
  return src(srcPath.js)
  .pipe(
    plumber({ // エラーが出ても処理を止めない
      errorHandler: notify.onError('Error:<%= error.message %>')
    })
  )
  .pipe(concat('main.js')) // jsファイルをmain.js1つにまとめる
  .pipe(dest(distPath.js))

    //【main.min.js生成】
  .pipe(concat('main.min.js'))
  .pipe(uglify()) // min
  .pipe(dest(distPath.js))

  .pipe(notify({ // エラー発生時のアラート出力
    message: 'JSをコンパイルしました',
    onLast: true
  }))
}

// 画像圧縮
const imagemin = require("gulp-imagemin"); // 画像圧縮
const imageminMozjpeg = require("imagemin-mozjpeg"); // jpgの高圧縮
const imageminPngquant = require("imagemin-pngquant"); // pngの高圧縮
const imageminSvgo = require("imagemin-svgo");  // svgの高圧縮

const imgImagemin = () => {
  return src(srcPath.img)
  .pipe(imagemin([
    imageminMozjpeg({
      quality: 80
    }),
    imageminPngquant(),
    imageminSvgo({
      plugins: [{
        removeViewbox: false // viewBox属性を削除しない
      }]
    })],
    {
      verbose: true // コンソールに圧縮率などを出力する
    }
  ))
  // .pipe(webp())
  .pipe(dest(distPath.img))
}

// ファイル変更を監視
const watchFiles = () => {
  watch(srcPath.css, scssCompile)
  watch(srcPath.js, jsCompile)
  watch(srcPath.img, imgImagemin)
}

// distフォルダ内削除
const del = require('del');
const delPath = {
	css: distBase + '/css/style.css',
	cssMap: distBase + '/css/style.css.map',
	cssmin: distBase + '/css/style.min.css',
	cssminMap: distBase + '/css/style.min.css.map',
	js: distBase + '/js/main.js',
	jsmin: distBase + '/js/main.min.js',
  img: distBase + '/img/',
}
const clean = (done) => {
  del(delPath.css, { force: true });
  del(delPath.cssMap, { force: true });
  del(delPath.cssmin, { force: true });
  del(delPath.cssminMap, { force: true });
  del(delPath.js, { force: true });
  del(delPath.jsmin, { force: true });
  done();
};

exports.default = series(series(clean, imgImagemin, scssCompile, jsCompile), parallel(watchFiles));


