'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const maps = require('gulp-sourcemaps');

gulp.task('sass', function(){
	return gulp.src('sass/main.sass')
		.pipe(maps.init())
		.pipe(sass())
		.pipe(maps.write('./'))
		.pipe(gulp.dest('css/'))
});

gulp.task('watch', ['sass'], function(){
	gulp.watch('sass/*.sass', ['sass']);
});

gulp.task('default', ['watch']);