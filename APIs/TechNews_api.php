<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech News</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color: #040036; */
            /* background-image: linear-gradient(#040036, #b30047, #ffcc00, #001a09, #000099); */
            background-image: linear-gradient(to  right, #c7e0e5 , #ffe6cc);
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        h1 {
            /* margin-left: -150px; */
            text-align: center;
            margin-bottom: 30px;
            color: #333333;
        }

        .article {
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .article h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .article p {
            margin: 10px 0;
        }

        .article a {
            text-decoration: none;
            color: whitesmoke;
        }

        .article a:hover {
            text-decoration: underline;
        }

        .article hr {
            border: none;
            border-top: 1px solid #ccc;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 80px;">
    <h1>Updated News </h1>
        <div id="news-container"></div>
    </div>

    <script>
        const apiKey = '829c845bf5c74493919f0f0d3f947205';
        // Fetch data from the News API
        fetch(`https://newsapi.org/v2/top-headlines?country=us&category=technology&apiKey=${apiKey}`)
            .then(response => response.json())
            .then(data => {
                // Check if the response is successful
                if (data.status === 'ok') {
                    // Loop through the articles and create HTML elements to display them
                    data.articles.forEach(article => {
                        const articleElement = document.createElement('div');
                        articleElement.classList.add('article');
                        articleElement.innerHTML = `
                            <h2>${article.title}</h2>
                            <p><strong>Source:</strong> ${article.source.name}</p>
                            <p><strong>Author:</strong> ${article.author || 'Unknown'}</p>
                            <p>${article.description}</p>
                            <p class="btn btn-primary" style="color:white;"><a href="${article.url}" target="_blank">Read more</a></p>
                            <hr>
                        `;
                        document.getElementById('news-container').appendChild(articleElement);
                    });
                } else {
                    // Display an error message if the response is not successful
                    document.getElementById('news-container').innerHTML = '<p>Error fetching news</p>';
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                // Display an error message if there's an error with the fetch request
                document.getElementById('news-container').innerHTML = '<p>Error fetching news</p>';
            });
    </script>
</body>

</html>