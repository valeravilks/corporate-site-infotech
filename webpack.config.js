let path = require('path');
let MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

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
            proxy: 'http://infotech.valeravilks.ru'
        })
    ],
    watchOptions: {
        ignored: /node_modules/
    },

    module: {
        rules: [
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
                test: /\.scss$/,
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
            }
        ]
    }
};

module.exports = conf;