const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CopyPlugin = require("copy-webpack-plugin");

module.exports = {
  mode: 'development',
  entry: './src/assets/js/main.js',
  output: {
    path: path.resolve(__dirname, "dist"), 
    filename: 'assets/js/main.js',
  },
  devServer: {
    // static: path.resolve(__dirname, 'src'),
  },

  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: { publicPath: '../' },
          },
          {
            loader: "css-loader",
            options: { 
              url: false,
              sourceMap: true,
            },
          },
          {
            loader: "sass-loader",
          },
        ],
      },
      // {
      //   test: /\.(png|jpg|jpeg)/, 
      //   type: 'asset/resource',
      //   generator: {
      //     filename: 'img/[name][ext]'
      //   },
      //   use: [
      //     {
      //       loader: 'image-webpack-loader',
      //     },
      //   ],
      // },
    ],
  },

  plugins: [
    new MiniCssExtractPlugin({
      filename: "./assets/css/common.css",
    }),
    new CleanWebpackPlugin(),
    new CopyPlugin({
      patterns: [
        {
          from: "src/assets/fonts",
          to: "assets/fonts",
        },
        {
          from: "src/assets/img",
          to: "assets/img",
        },
      ],
    }),
  ],
}
