@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    新しいタスク
                </div>

                <div class="panel-body">
                    <!-- バリデーションエラーの表示 -->
                @include('common.errors')

                <!-- 新タスクフォーム -->
                    <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                    @csrf

                    <!-- タスク名 -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">タスク</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- タスク追加ボタン -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i> タスク追加
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- TODO: 現在のタスク -->
        </div>
    </div>
@endsection
