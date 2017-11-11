const merge = require('webpack-merge')
const webpack = require('webpack')
const ExtractTextPlugin = require('extract-text-webpack-plugin')
const baseWebpack = require('./webpack.config.base')

const webpackConfig = merge(baseWebpack, {
  module: {
    rules: [
      {
        test: /\.s(a|c)ss$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [
            { loader: 'css-loader', options: { importLoaders: 1, minimize: true } },
            'postcss-loader',
            'sass-loader'
          ]
        })
      }
    ]
  },
  plugins: [
    new ExtractTextPlugin('assets/css/app.bundle.css'),
    new webpack.optimize.UglifyJsPlugin()
  ]
})

module.exports = webpackConfig
