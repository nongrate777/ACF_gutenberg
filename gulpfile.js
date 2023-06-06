const {src, dest, watch, parallel, series} = require('gulp');

const scss = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const uglify = require('gulp-uglify');
const del = require('del');
const compress_images = require('compress-images');


function imageMin() {
    compress_images(
        "sources/images/**/*.{jpg,JPG,jpeg,JPEG,png,svg,gif}",
        "assets/images/",
        {compress_force: false, statistic: true, autoupdate: true},
        false,
        {jpg: {engine: "mozjpeg", command: ["-quality", "60"]}},
        {png: {engine: "pngquant", command: ["--quality=20-50", "-o"]}},
        {svg: {engine: "svgo", command: "--multipass"}},
        {
            gif: {engine: "gifsicle", command: ["--colors", "64", "--use-col=web"]},
        },
        function (err, completed) {
            if (completed === true) {
                // Doing something.
            }
        }
    );
}


function styles() {
    return src('sources/styles/styles.scss')
        .pipe(scss({outputStyle: 'compressed'}))
        .pipe(concat('styles.min.css'))
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 10 versions'],
            grid: true
        }))
        .pipe(dest('assets/styles'))

}

function scripts() {
    return src([
        'node_modules/parallax-js/dist/parallax.min.js',
        'node_modules/simplebar/dist/simplebar.min.js',
        'node_modules/swiper/swiper-bundle.min.js',
        'node_modules/jarallax/dist/jarallax.min.js',
        'node_modules/wow.js/dist/wow.min.js',
        'blocks/**/*.js'

    ])
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(dest('assets/js'))
}


function build() {
    return src([
        'assets/styles/styles.min.css',
        'assets/js/scripts.min.js',
        'assets/images/!**!/!*.*'
    ], {base: 'assets'})
        .pipe(dest('dist'))
}

function cleanDist() {
    return del('dist')
}

function watching() {
    watch(['sources/styles/**/*.scss', 'blocks/**/*.scss'], styles);
    watch(['sources/js/**/*.js', 'blocks/**/*.js'], scripts);
    watch(['sources/images/**/*.*'], imageMin);

}


exports.styles = styles;
exports.scripts = scripts;
exports.imageMin = imageMin;
exports.watching = watching;
exports.cleanDist = cleanDist;

exports.build = series(cleanDist, build);

exports.default = parallel(styles, scripts, imageMin, watching);
