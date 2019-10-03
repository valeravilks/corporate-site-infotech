let path = require('path');
let MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
var webpack = require('webpack');


let conf = {
    mode: 'development',
    entry: './src/script.js',
    output: {
        path: path.resolve(__dirname, './dist/'),
        filename: 'script.js'
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'styles.css',
        }),
        new CopyPlugin([
            { from: 'src/core', to: './' },
        ]),
        new BrowserSyncPlugin({
            proxy: 'http://infotech.valeravilks.ru',
            files: "dist/**/*.*",
            reloadDelay: 1000
        }),
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            'window.jQuery': 'jquery'
        })
    ],
    watchOptions: {
        ignored: /node_modules/,
        aggregateTimeout: 600,
        poll: 1000
    },
    resolve: {
        alias: {
            $: path.resolve('node_modules','jquery/src/jquery'),
            jquery: path.resolve('node_modules','jquery/src/jquery'),
            '~': path.resolve(__dirname, 'src'),
        },
        extensions: [
            ".sass",
            ".scss",
            ".css",
            ".wasm",
            ".web.js",
            ".mjs",
            ".js",
            ".web.jsx",
            ".jsx"
        ],
    },
    module: {
        rules: [
            {
                test: /\.exec\.jjs$/,
                use: [ 'script-loader' ]
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                test: /\.(scss|css)$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            hmr: process.env.NODE_ENV === 'development',
                        }
                    },
                    "css-loader", // translates CSS into CommonJS
                    'sass-loader',
                ]
            },
            {
                test: /\.(png|jpe?g|gif|svg)$/,
                use: [
                    {
                        loader: 'url-loader',
                        options: {
                            outputPath: 'images',
                            name: '[name][hash].[ext]',
                            limit: 8192
                        },
                    },
                ],
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            outputPath: 'font',
                            name: '[name].[ext]',
                        },
                    },
                ]
            }
        ]
    }
};

module.exports = conf;