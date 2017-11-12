const path = require('path')

const webpackConfig = {
  entry: {
    app: path.resolve(__dirname, '../assets/theme')
  },
  output: {
    filename: 'assets/js/app.bundle.js',
    path: path.resolve(__dirname, '../theme'),
    publicPath: '/'
  },
  target: 'web',
  module: {
    rules: [
      {
        test: /\.js$/,
        loader: 'babel-loader'
      },
      {
        test: /\.vue$/,
        loader: 'vue-loader',
        options: {
          loaders: {}
        }
      }
    ]
  }
}

module.exports = webpackConfig
