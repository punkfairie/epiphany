const fs = require('fs')
const postcss = require('postcss')
const postcssImportExtGlob = require('postcss-import-ext-glob')
const postcssImport = require('postcss-import')
const postcssPresetEnv = require('postcss-preset-env')
const cssnano = require('cssnano')
// const esbuild = require('esbuild')
const automaticNoopener = require('eleventy-plugin-automatic-noopener')

module.exports = function (eleventyConfig) {
    eleventyConfig.on('eleventy.before', async () => {
        const cssSrc = './src/style/style.css'
        const cssDest = './dist/style.css'

        fs.readFile(cssSrc, (err, css) => {
            // noinspection JSCheckFunctionSignatures
            postcss([
                postcssImportExtGlob,
                postcssImport,
                postcssPresetEnv,
                cssnano
            ])
                .process(css, {from: cssSrc, to: cssDest})
                .then(res => {
                    fs.writeFile(cssDest, res.css, () => true)
                })
        })

        // await esbuild.build({
        //     entryPoints: ['src/js/main.js'],
        //     bundle: true,
        //     minify: true,
        //     target: 'es2020',
        //     outfile: 'dist/main.js',
        // })
        //     .then(() => console.log('🧳 esbuild done'))
        //     .catch(() => process.exit(1))
    })

    eleventyConfig.addWatchTarget('./src/style/')
    eleventyConfig.addWatchTarget('./src/js/')

    eleventyConfig.addPlugin(automaticNoopener, {
        noreferrer: true,
    })

    eleventyConfig.addPassthroughCopy('./src/img/')

    return {dir: {input: 'src', output: 'dist'}}
}