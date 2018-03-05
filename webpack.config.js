const path = require('path');
const webpack = require('webpack');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');


const config = {
  context: path.resolve(__dirname, "src"),
  // configurations here
  entry: "./js/main.js",
  output: {
      path: path.resolve(__dirname, 'dist'),
      filename: "./js/main.js"
  },
  // Adding jQuery as external library
  externals: {
    jquery: 'jQuery'
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract({
          fallback: "style-loader",
          use: [
            { loader: 'css-loader', options: { url: false, sourceMap: true } }, 
            { loader: 'postcss-loader', options: { sourceMap: true } },
            { loader: 'sass-loader', options: { sourceMap: true } }
            ]
        })
      },
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        use: [
          {
              loader: 'babel-loader',
              options: {
                  presets: ['env']
              }   
          }
        ]
      }
    ]
  },
  watch: true,
  plugins: [
    require('autoprefixer'),
    new ExtractTextPlugin("/css/main.css"),
    new BrowserSyncPlugin({
        files: [
          './**/*.php'
        ],
        host: 'localhost',
        port: 3000,
        proxy: 'http://localhost/formatealo',
        logPrefix: 'webpack',
        logLevel: 'debug',
        ghostMode: false
    })
  ]
};

module.exports = config;