'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const maps = require('gulp-sourcemaps');
const browserSync = require('browser-sync');

gulp.task('browser-sync', function(){
	browserSync.init({
		open: false,
		online: false,
		proxy: 'localhost:8888'
	});
});

gulp.task('sass', function(){
	return gulp.src('sass/main.sass')
		.pipe(maps.init())
		.pipe(sass())
		.pipe(maps.write('./'))
		.pipe(gulp.dest('css/'))
		.pipe(browserSync.stream())
});

gulp.task('watch', ['sass'], function(){
	gulp.watch('sass/*.sass', ['sass']);
	gulp.watch('./*.php').on('change', browserSync.reload);
});

gulp.task('default', ['browser-sync', 'watch']);