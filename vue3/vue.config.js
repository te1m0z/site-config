const { defineConfig } = require('@vue/cli-service')

module.exports = defineConfig({
    transpileDependencies: true,
    chainWebpack: config => {
        config
            .plugin('html')
            .tap(args => {
                args[0].slug = process.env.VUE_APP_PLUGIN_SLUG
                return args
            })
    },
    css: {
        loaderOptions: {
            sass: {
                additionalData: `
                    @import "@/styles/_variables.scss";
                `
            }
        }
    }
})
