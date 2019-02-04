var webpack = require('webpack');

module.exports = {
  // Tell webpack to start bundling our app at js/
  entry: {
    main: "./js/main.js"
  },
  // Output our app to the js/ directory
  output: {
    filename: '[name].js',
    path: __dirname + "/js/compiled"
  },
  // Emit source maps so we can debug our code in the browser
  // devtool: 'source-map',
  // Tell webpack to run our source code through Babel
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader"
        }
      }
    ]
  },
  // expose jquery's $ for imports
  plugins: [
     new webpack.ProvidePlugin({
       $: 'jquery',
       jQuery: 'jquery'
     })
  ]
}

