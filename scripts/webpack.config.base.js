const path = require('path')

const webpackConfig = {
  entry: {
    app: path.resolve(__dirname, '../assets/theme'),
    vue: path.resolve(__dirname, '../assets/theme/vue')
  },
  output: {
    filename: 'assets/js/[name].bundle.js',
    path: path.resolve(__dirname, '../theme'),
    publicPath: '/'
  },
  target: 'web',
  resolve: {
    extensions: ['.js', '.vue', '.json'],
    alias: {
      'vue$': 'vue/dist/vue.esm.js'
    }
  },
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
