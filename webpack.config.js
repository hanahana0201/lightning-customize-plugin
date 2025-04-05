const path = require("path");

module.exports = {
    entry: {
        script: "./assets/src/js/script.js",
        editor: "./assets/src/js/editor.js",
    },
    output: {
        path: path.resolve(__dirname, "assets/dist/js"),
        filename: "[name].min.js",
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ["@babel/preset-env", "@babel/preset-react"],
                    },
                },
            },
        ],
    },
};
