
const purgecss = require('@fullhuman/postcss-purgecss')({
    content: ['./**/*.php', './**/*.html'], // Rutas de tus archivos PHP y HTML
    defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || [],
});

module.exports = {
    plugins: [
        purgecss,
        require('cssnano')({ preset: 'default' }), // Si también deseas minificar
    ],
};
