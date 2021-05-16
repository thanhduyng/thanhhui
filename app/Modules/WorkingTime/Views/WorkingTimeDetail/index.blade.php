@extends('layouts.layout')

@section('title', 'Working Time Detail Save')

@section('asset_footer')
<!-- <script src="../js/demo.js"></script> -->
@stop

@section('header_button')
<!-- tìm kiếm -->
<div class="fa fa-reply" style="margin-left: 40px;">
    <a href="{{route('working-time-search.index')}}" style="margin-left: 4px;margin-top: -3px;border: none;color: #0099FF;"> 戻る</a>
</div>
<!-- end tìm kiếm -->

<!-- save -->
<div class="glyphicon glyphicon-floppy-disk" style="margin-left: 30px;">
    <button id="addButton" disabled onclick="addData()" type="submit" style="margin-left: -18px;margin-top: -3px;border: none;background-color: white;">保存</button>
    <!-- <button id="updateButton" onclick="updateData()" type="submit" style="margin-left: -18px;margin-top: -3px;border: none;background-color: white;">保存</button> -->
</div>
<!-- end save -->

<!--  delete -->
<div class="glyphicon glyphicon-trash" style="margin-left: 30px;">
    <button id="BTN_Delete" style="margin-left: -18px;margin-top: -3px;border: none;background-color: white;">削除</button>
</div>
<!-- end delete  -->
</div>
@stop

@section('content')
<form id="idform">
    <div class="container-fluid" style="width: 100%;background-color: #EEEEEE;">
        <div style="height: 15px; background-color: #EEEEEE;">
        </div>
        <div class="container-fluid" style="width: 100%;margin-left: 4px;background-color: white;margin-bottom: 15px;">
            <div class="row" style="height: 50px;">
                <div class="col-sm-2" style="background-color: ;">
                    <h3 id="addT" style="margin-left: 34px;margin-top: 14px;">作業時間入力</h3>
                    <!-- <h3 id="updateT" style="margin-left: 34px;margin-top: 14px;">ユーザーマスタメンテナンス Cập nhập</h3> -->
                </div>
                <div class="col-sm-0" style="margin-top: 23px;margin-left: 500px;">
                    <p id="" style="font-weight: bold;margin-left: -57px;">登録者</p>
                </div>
                <div class="col-sm-0" style="margin-top: 23px">
                    <p id="">a</p>
                </div>
                <div class="col-sm-0" style="margin-top: 23px">
                    <p id="" style="margin-left: 15px;">a</p>
                </div>
                <div class="col-sm-0" style="margin-top: 23px">
                    <p id="" style="font-weight: bold; margin-left: 15px;">登録日</p>
                </div>
                <div class="col-sm-0" style="margin-top: 23px">
                    <p id="" style="margin-left: 15px;">a</p>
                </div>
                <div class="col-sm-0" style="margin-top: 23px">
                    <p id="" style="font-weight: bold; margin-left: 15px;">更新者</p>
                </div>
                <div class="col-sm-0" style="margin-top: 23px">
                    <p id="" style="margin-left: 15px;">a</p>
                </div>
                <div class="col-sm-0" style="margin-top: 23px">
                    <p id="" style="margin-left: 15px;">a</p>
                </div>
                <div class="col-sm-0" style="margin-top: 23px">
                    <p id="" style="font-weight: bold;margin-left: 15px;">更新日</p>
                </div>
                <div class="col-sm-0" style="margin-top: 23px">
                    <p id="" style="margin-left: 15px;">a</p>
                </div>
            </div>

            <!-- addorupdate -->

            {{ csrf_field() }}
            <div id="checkvalidate" style="margin-top: -20px;">
                <hr>
                <div class="form-group row" style="margin-top: -7px;margin-bottom: -16px;"> <label for="" class="col-sm-0 col-form-label" style="margin-left: 130px;">作業日報番号</label>
                    <div class="col-sm-6">
                        <input type="text" class="required form-control number-only " id="user_cd" value="" name="user_cd" style="height: 31px; width: 300px;">
                        <p id="user_cdError" class="text-danger"></p>
                    </div>
                    <div class="col-sm-3" style="margin-left: -413px; margin-top: -2px;">
                        <button id="searchid" style="width: 39px; height: 34px; background-color: #0099FF; border-color: white;" type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
                    </div>
                </div>
                <hr>
                <div id="" style="margin-top: -22px;">
                    <hr>
                    <div class="form-group row"> <label for="" class="col-sm-0 col-form-label" style="margin-left: 144px;margin-top: -7px;">作業実施日</label>
                        <div class="col-sm-2">
                            <input type="date" class="required form-control" id="user_nm_j" placeholder="" value="" name="user_nm_j" style="height: 31px;">
                            <p id="user_nm_jError" class="text-danger"></p>
                        </div>
                    </div>

                    <div class="form-group row"> <label for="" class="col-sm-0 col-form-label" style="margin-left: 144px;">作業担当者</label>
                        <div class="col-sm-2">
                            <input type="text" class="required form-control" id="user_nm_e" placeholder="" value="" name="user_nm_e" style="height: 31px;">
                            <p id="user_nm_eError" class="text-danger"></p>
                        </div>
                    </div>

                    <!-- table -->

                    <div id="table_data" style="margin-top: 36px;">
                        <table class="show-products table table-bordered" id="searchTable" style="margin-top: -20px;">
                            <thead>
                                <tr style="background-color: #0099FF;">
                                    <th class="tha"><label id="DSP_work_report_no">NO</label></th>
                                    <th class="tha"><label id="DSP_manufacture_no">製造指示番号</label></th>
                                    <th class="tha"><label id="DSP_work_date">品目名和文</label></th>
                                    <th class="tha" style="width: 28%;"><label id="DSP_work_user_cd">作業時間区分</label></th>
                                    <th class="tha"><label id="DSP_work_hour_div">+</label></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="red form-group row" style="margin-top: -7px;margin-bottom: -16px;">
                                            <div class="col-sm-10">
                                                <input type="text" class="required form-control number-only " id="user_cd" value="" name="user_cd" style="height: 31px;width: 87%;">
                                            </div>
                                            <div class="col-sm-2" style="margin-left: -60px; margin-top: -2px;">
                                                <button id="searchid" style="width: 39px; height: 34px; background-color: #0099FF; border-color: white;" type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>work_datework_datework_datework_datework_datework_date</td>
                                    <td>
                                        <div class="red form-group row">
                                            <div class="col-sm-6">
                                                <select name="" id="" class="form-control" style="width: 55%; height: 32px;">
                                                    <option value="">01</option>
                                                </select>
                                            </div>
                                            <label style="margin-left: -80px;color: black;margin-top: 4px;">時間</label>
                                            <div class="col-sm-6">
                                                <select name="" class="form-control" style="width: 55%; height: 32px;">
                                                    <option value="">01</option>
                                                </select>
                                            </div>
                                            <label style="margin-left: -80px;color: black;margin-top: 4px;">分</label>
                                        </div>
                                    </td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="red form-group row" style="margin-top: -7px;margin-bottom: -16px;">
                                            <div class="col-sm-10">
                                                <input type="text" class="required form-control number-only " id="user_cd" value="" name="user_cd" style="height: 31px;width: 87%;">
                                            </div>
                                            <div class="col-sm-2" style="margin-left: -60px; margin-top: -2px;">
                                                <button id="searchid" style="width: 39px; height: 34px; background-color: #0099FF; border-color: white;" type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>work_datework_datework_datework_datework_datework_date</td>
                                    <td>
                                        <div class="red form-group row">
                                            <div class="col-sm-6">
                                                <select name="" id="" class="form-control" style="width: 55%; height: 32px;">
                                                    <option value="">01</option>
                                                </select>
                                            </div>
                                            <label style="margin-left: -80px;color: black;margin-top: 4px;">時間</label>
                                            <div class="col-sm-6">
                                                <select name="" class="form-control" style="width: 55%; height: 32px;">
                                                    <option value="">01</option>
                                                </select>
                                            </div>
                                            <label style="margin-left: -80px;color: black;margin-top: 4px;">分</label>
                                        </div>
                                    </td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="red form-group row" style="margin-top: -7px;margin-bottom: -16px;">
                                            <div class="col-sm-10">
                                                <input type="text" class="required form-control number-only " id="user_cd" value="" name="user_cd" style="height: 31px;width: 87%;">
                                            </div>
                                            <div class="col-sm-2" style="margin-left: -60px; margin-top: -2px;">
                                                <button id="searchid" style="width: 39px; height: 34px; background-color: #0099FF; border-color: white;" type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>work_datework_datework_datework_datework_datework_date</td>
                                    <td>
                                        <div class="red form-group row">
                                            <div class="col-sm-6">
                                                <select name="" id="" class="form-control" style="width: 55%; height: 32px;">
                                                    <option value="">01</option>
                                                </select>
                                            </div>
                                            <label style="margin-left: -80px;color: black;margin-top: 4px;">時間</label>
                                            <div class="col-sm-6">
                                                <select name="" class="form-control" style="width: 55%; height: 32px;">
                                                    <option value="">01</option>
                                                </select>
                                            </div>
                                            <label style="margin-left: -80px;color: black;margin-top: 4px;">分</label>
                                        </div>
                                    </td>
                                    <td>x</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>


                    <div class="form-group row">
                        <div class="col-sm-7"> </div>
                        <div class="col-sm-1">
                            <p id="" style="font-weight: bold;">登録日</p>
                        </div>
                        <div class="col-sm-1" style="margin-left: -30px;">
                            <p id="" style="font-weight: bold;">更新者</p>
                        </div>
                        <div class="col-sm-1" style="margin-left: -30px;">
                            <p id="" style="font-weight: bold;">更新者</p>
                        </div>
                        <div class="col-sm-1" style="margin-left: -30px;">
                            <p id="" style="font-weight: bold;">更新者</p>
                        </div>
                        <div class="col-sm-1" style="margin-left: -30px;">
                            <p id="" style="font-weight: bold;">更新者</p>
                        </div>
                    </div>
                    <!-- end table -->

                    <div class="form-group row"> <label for="" class="col-sm-0 col-form-label" style="margin-left: 200px;">メモ</label>
                        <div class="col-sm-9">
                            <textarea rows="2" type="text" class="form-control" id="memo" placeholder="" value="" name="memo"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end addorupdate -->

        </div>
    </div>
</form>
@endsection