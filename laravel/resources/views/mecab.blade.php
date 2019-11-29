<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>mecab</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container">
            <a class="navbar-brand" href="#">Company Name</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        <form method="POST" action="{{ route('mecab.post') }}">
                            @csrf
                            <textarea class="form-control" name="text"></textarea>
                            <button class="btn btn-primary float-right" type="reset">クリア</button>
                            <button class="btn btn-primary float-right" type="submit">解析実行</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><strong>表層</strong></th>
                                <th><strong>品詞</strong></th>
                                <th><strong>活用形,活用型</strong></th>
                                <th><strong>原形</strong></th>
                                <th><strong>読み</strong></th>
                                <th><strong>発音</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                                <td>Cell 2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <p class="copyright">Company Name © 2017</p>
        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
