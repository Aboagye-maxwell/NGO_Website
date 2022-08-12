//declare variables
let news = document.getElementById('news');
let news_h = document.getElementById('news_h');
let news_p = document.getElementById('news_p');


news.addEventListener("mouseover", function(){
    news_h.style.color = '#c84869';
    news_p.style.color = '#c84869';
});

news.addEventListener("mouseout", function(){
    news_h.style.color = 'black';
    news_p.style.color = 'black';
});

