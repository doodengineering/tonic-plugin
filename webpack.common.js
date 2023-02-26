const path = require('path');
const webpack = require('webpack');

module.exports = {
  context: path.resolve(__dirname + '/resources/js'),
  entry: './index.js',
  output: {
    filename: 'plugin-name.js',
    path: path.resolve(__dirname + '/public/js'),
    clean: true,
  },
  externals: {
    jquery: 'jQuery',
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
    }),
  ],
};
