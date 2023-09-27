import gulp from 'gulp';
var sass = require('gulp-sass')(require('sass'));
var cssmin = require('gulp-cssnano');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');

prefixerOptions = {
    overrideBrowserslist: ['last 2 versions']
};

sass.compiler = require('node-sass');

gulp.task(
    'crivenezia',
    function () {
        return gulp
        .src('src/sass/cri-child.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer(prefixerOptions))
        .pipe(cssmin({zindex: false}))
        .pipe(sourcemaps.write('.', undefined))
        .pipe(gulp.dest('/assets/css/'));
    }
);