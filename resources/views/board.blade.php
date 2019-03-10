<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/component.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"crossorigin="anonymous">
</head>
<body>
    <div id='wapper'>
            <div id="header" class="card-header">
                    <div><a href="{{url('/user')}}">my page</a></div>
                    <div><a href="{{url('/top')}}">top</a></div>
                    <div><a href="{{url('/transaction')}}">transaction</a></div>
                    <div><a href="{{url('/login')}}">login</a></div>
            </div>
            <div>
                <div id="faceArea" style="border: solid 1px">
                    <div>題名:{{ $board['title'] }}</div>
                    <div>作者:{{ $board['users']['name'] }}</div>
                    <div>内容:{{ $board['caption'] }}</div>
                </div>

                <table>
                    {{-- @foreach($feeds->$item)
                        @if($item['view_point'] == 1)
                            <tr><th>{{ $item['users']['name'] }}</th><th>{{ $item.comment }}</th></tr>
                            <tr></tr>
                        @else
                            <tr><th>{{ $item['characters']['name'] }}</th><th>{{ $item.comment }}</th></tr>
                            <tr></tr>
                        @endif
                    @endforeach --}}
                </table>
            </div>
    </div>
</body>
</html>
