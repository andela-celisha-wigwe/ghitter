var HtmlWebpackPlugin = require('html-webpack-plugin')
var HTMLWebpackPluginConfig = new HtmlWebpackPlugin({
	template: __dirname + '/public/app.php',
	filename: 'index.php',
	inject: 'body'
});
module.exports = {
	entry : [
		'./dist/index.js'
	],
	module: {
		"loaders": [
			{test:/\.js$/, exclude: /node_modules/, loader: "babel-loader"}
		]
	},
	output: {
		filename: "index_bundle.js",
		path: __dirname + '/public',
	},
	plugins: [
		HTMLWebpackPluginConfig
	]
}