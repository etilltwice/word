<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/component.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"crossorigin="anonymous">
</head>
<body>
    <div id="wrapper">
        <div id="header" class="card-header">
            <div><a href="{{url('/user')}}">my page</a></div>
            <div><a href="{{url('/top')}}">top</a></div>
            <div><a href="{{url('/transaction')}}">transaction</a></div>
            <div><a href="{{url('/login')}}">login</a></div>
        </div>


        <div style="border: solid 1px">
            <h5 style="border: solid 1px">最新の投稿</h5>
            <table>
                <tr>
                    <th>タイトル</th>
                    <th>内容</th>
                    <th>著者</th>
                </tr>
                @foreach ($latest as $item)
                        <tr style="border: solid 1px">
                            <th><a href="{{url( 'board/' . $item->id)}}">{{ $item['title'] }}</a></th>
                            <th>{{ $item['caption'] }}</th>
                            <th>{{ $item['users']['name'] }}</th>
                        </tr>
                @endforeach
            </table>
        </div>
    </div>

</body>
</html>
