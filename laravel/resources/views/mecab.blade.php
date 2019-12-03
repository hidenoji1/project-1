<!DOCTYPE html>
<<<<<<< HEAD
<html lang="ja">

=======
>>>>>>> origin/develop
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>mecab</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }} ">
=======
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
>>>>>>> origin/develop
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
<<<<<<< HEAD
                    <h4 class="card-title">Title</h4>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        <form method="POST" action="{{ route('mecab.post') }}">
                            @csrf
                            <textarea class="form-control {{ $errors->has('text') ? 'is-invalid' : '' }}" name="text">{{ old('text') }}</textarea>
                            @if ($errors->has('text'))
                                <div class="invalid-feedback">{{ $errors->first('text') }}</div>
                            @endif
=======
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        <form method="POST" action="{{ route('mecab.post') }}">
                            @csrf
                            <textarea class="form-control" name="text"></textarea>
>>>>>>> origin/develop
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
<<<<<<< HEAD
                    @if (Session::has('words'))
                    <table class="table">
                        <thead>
                            <tr>
                                <th><strong>表層形</strong></th>
                                <th><strong>品詞</strong></th>
                                <th colspan="3"><strong>品詞細分類</strong></th>
                                <th><strong>活用型</strong></th>
                                <th><strong>活用形</strong></th>
=======
                    <table class="table">
                        <thead>
                            <tr>
                                <th><strong>表層</strong></th>
                                <th><strong>品詞</strong></th>
                                <th><strong>活用形,活用型</strong></th>
>>>>>>> origin/develop
                                <th><strong>原形</strong></th>
                                <th><strong>読み</strong></th>
                                <th><strong>発音</strong></th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD
                            @foreach (Session::get('words') as $item)
                            <tr>
                                <td>{{ $item['text'] }}</td>
                                <td>{{ $item['speech'] }}</td>
                                <td>{{ $item['speechInfo1'] }}</td>
                                <td>{{ $item['speechInfo2'] }}</td>
                                <td>{{ $item['speechInfo3'] }}</td>
                                <td>{{ $item['conjugate'] }}</td>
                                <td>{{ $item['conjugateType'] }}</td>
                                <td>{{ $item['original'] }}</td>
                                <td>{{ $item['reading'] }}</td>
                                <td>{{ $item['pronunciation'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
=======
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
>>>>>>> origin/develop
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <p class="copyright">Company Name © 2017</p>
        </footer>
    </div>
<<<<<<< HEAD
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
=======
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
>>>>>>> origin/develop
</body>

</html>
