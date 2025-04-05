module.exports = {
    plugins: [
        require('@csstools/postcss-global-data')({
            files: ['./assets/src/css/media.css'],  // @custom-mediaをまとめたファイル
        }),
        require('postcss-custom-media'),
        require('postcss-preset-env'),
        require('postcss-nested-import'),
        require('postcss-nested'),
        require('postcss-import'),
        require('postcss-mixins')({
            mixinsDir: './assets/src'
        }),
        require('postcss-simple-vars'),
        require('autoprefixer')
    ]
}
