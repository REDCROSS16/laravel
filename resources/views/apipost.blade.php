<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ApiPost</title>
</head>
<body>

<div class="container">
    <div class="row mt-3 articles"> </div>

    <div class="row mt-3 d-none full-article">
        <div class="card">
            <div class="card-header">
                Full Post
            </div>
        <div class="card-body">
            <h5 class="card-title article-title"></h5>
            <p class="card-text article-content"></p>
        </div>
    </div>
</div>


{{--<script src="./JS/jquery.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $.ajax({
        url: "api/articles",
        type: 'GET',
        datatype: 'Json',
        success(data) {
            for (let index in data) {
                $('.articles').append(`
                    <div class="card" style="width:18rem">
                        <div class="card-body">
                            <h5 class="card-title">${data[index].title}</h5>
                            <p class="card-text">${data[index].body.slice(0,20) + '...'}</p>
                            <a href="#" class="btn btn-primary" onclick="fullArticle(${data[index].id})">Show More</a>
                        </div>
                    </div>
                `);
            }
        }
    })

    function fullArticle(id) {
        $.ajax({
            url: "api/articles/" + id,
            type: 'GET',
            datatype: 'Json',
            success(data) {
                $('.article-title').text(data.title);
                $('.article-content').text(data.body);
                $('.full-article').removeClass('d-none');
            }
        })
    }
</script>

</body>
</html>
