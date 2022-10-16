@extends('layouts.app')


@section('content')
<!-- -->
@push('script')
  <script src="{{ asset('js/home/home_list.js') }}"></script>
@endpush

<!-- 各画面遷移  -->
<div class="head-container">
  <div class="container">
      <div class="row justify-content-center">
        <!-- -->
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header">{{ __('問題作成') }}</div>
  
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
  
                      <p>aaaa</p>
                  </div>
              </div>
          </div>
  
        <!-- -->
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header">{{ __('問題編集') }}</div>
  
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
  
                      <p>aaaa</p>
                  </div>
              </div>
          </div>
          
        <!-- -->
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header">{{ __('ジャンル分け') }}</div>
  
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
  
                      <p>aaaa</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- 問題文一覧 -->
<div class="content-container my-3">
  <div class="container">
    <div class="row justify-content-center">
      <table class="table">
        <thead class="thead">
          <tr>
            <th>問題ID</th>
            <th>カテゴリー</th>
            <th>問題</th>
            <th>作成ユーザー</th>
            <th>作成日時</th>
            <th>更新日時</th>
            <th>詳細</th>
            <th>編集</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
