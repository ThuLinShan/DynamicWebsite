const APIKey = "a01c8b5da817462fa3f458067d897cf5";
const date = new Date();
date.setMonth(date.getMonth() - 1);

var isoFormat = date.toISOString();
isoFormat = isoFormat.substring(0, isoFormat.indexOf('T'));

const NewsURL = `https://newsapi.org/v2/everything?q=%22internet%20safety%20%22&from=${isoFormat}&sortBy=publishedAt&language=en&apiKey=${APIKey}`;
const fetchFunction = async () => {
    const data = await fetch(NewsURL)
        .then((res) => res.json())
        .catch((err) => console.log(err))

    let totalResults = Math.min(data.totalResults, 100);

    const article1 = document.getElementById("article1");
    const article2 = document.getElementById("article2");
    const article3 = document.getElementById("article3");

    const allArticles = [article1, article2, article3];

    allArticles.forEach(article => {
        let article_num = Math.floor(Math.random() * totalResults);
        let articlePublishDate = data.articles[article_num].publishedAt;
        let author = data.articles[article_num].author;
        author = (author == null ? "Unknown Author" : author);
        articlePublishDate = articlePublishDate.substring(0, articlePublishDate.indexOf('T'));

        article.querySelector("#title").innerHTML = data.articles[article_num].title;
        article.querySelector("#content").innerHTML = data.articles[article_num].content;
        article.querySelector("#desc").innerHTML = data.articles[article_num].description;
        article.querySelector("#publishedDate").innerHTML += articlePublishDate;
        article.querySelector("#author").innerHTML += author;
        article.querySelector("#source").href = data.articles[article_num].url;
    });
}

fetchFunction();