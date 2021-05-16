@extends('layouts.layout')

@section('title', 'Working Time Search View')

@section('asset_footer')
<script src="../js/workingtime/search.js"></script>
@stop

@section('header_button')
<!-- tìm kiếm -->
<div class="glyphicon glyphicon-search" style="margin-left: 40px;">
    <button id="BTN_Search" onclick="BTN_Search()" href="" style="margin-left: -10px;border: none;background-color: white;">検索</button>
</div>
<!-- end tìm kiếm -->

<!-- save -->
<div class="glyphicon glyphicon-plus" style="margin-left: 30px;">
    <a id="" href="{{route('working-time-detail.index')}}" style="color: #0099FF;margin-left: -18px;margin-top: -3px;border: none;background-color: white;"> 新規追加</a>
</div>
<!-- end save -->

<!--  delete -->
<div class="glyphicon glyphicon-floppy-disk" style="margin-left: 30px;">
    <button id="" style="margin-left: -18px;margin-top: -3px;border: none;background-color: white;">出力</button>
</div>
<!-- end delete  -->
</div>
@stop

@section('content')

@include('WorkingTime::WorkingTimeSearch.Search')

<div id="table-users">
    @include('WorkingTime::WorkingTimeSearch.Table')
</div>
@endsection




