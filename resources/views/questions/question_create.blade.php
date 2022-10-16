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

        <!-- 問題文作成フォーム -->
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

      </div>
  </div>
</div>

@endsection
