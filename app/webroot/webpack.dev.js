const merge = require('webpack-merge');
const common = require('./webpack.common.js');
const CleanWebpackPlugin = require('clean-webpack-plugin');

module.exports = merge(common, {
	mode: 'development',
	devtool: 'cheap-module-source-map',
	plugins: [
	    new CleanWebpackPlugin(['js/compiled/'])
	],
	devServer: {
		contentBase: './public'
	}
});