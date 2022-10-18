import './bootstrap';
import './fontawesome';

import '../sass/app.scss';

import '../css/app.css';
import '../css/font/raleway.css';

$(document).ready(function(){
    $('.toTop').click(function(){
        this.scrollTo = 0;
    });
});
