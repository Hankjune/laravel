@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="{{ route('Worker.store') }}">
                @csrf

                <br>
                <select name="status">
                    　<option value="上班">上班</option>
                    　<option value="下班">下班</option>
                </select>
                <button type="submit">送出</button>
            </form>
            <table class="table" style="margin-top: 50px;">
                <thead><tr>
                    <th>名稱</th>
                    <th>狀態</th>
                    <th>時間</th>
                    <th>描述</th>
                </tr>
                </thead>
                <tbody>

                @foreach($time_data as $time)
                    <tr>
                        <td>{{$time->name}}</td>
                        <td>{{$time->status}}</td>
                        <td>{{$time->created_at}}</td>
                        <td>{{$time->detail}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
