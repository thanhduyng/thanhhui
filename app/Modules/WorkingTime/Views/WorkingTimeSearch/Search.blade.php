<!-- search-->
<div>
    <div style="height: 15px; background-color: #EEEEEE;">
    </div>
    <div class="container-fluid border" style="width: 99%;margin-left: 14px;background-color: white;">
        <div class="row">
            <div class="col-sm-11">
                <div class="btn-sm-6">
                    <h3 style="margin-left: 20px;">作業時間一覧</h3>
                </div>
            </div>
            <div class="col-sm-1"> <a class="btn-default btn-sm-2" onclick="$('#down').toggle();return false;"> <i class="glyphicon glyphicon-chevron-down" style="margin-top: 20px; margin-left: 50px;"></i></a> </div>
        </div>

        <div id="down" style="margin-top: -20px;">
            <hr>
            <div class="form-group row"> <label for="" class="col-sm-0 col-form-label" style="margin-left: 199px;">作業日報番号</label>
                <div class="col-sm-3">
                    <select name="work_report_no" id="TXT_work_report_no" class="form-control">
                        <option value="">-- Chọn --</option>
                        @foreach($workReportNo as $nd => $value)
                        <option value="{{$nd}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row"> <label for="" class="col-sm-0 col-form-label" style="margin-left: 170px;">作業担当者コード</label>
                <div class="col-sm-3">
                    <select name="work_user_cd" id="TXT_work_user_cd" class="form-control">
                        <option value="">-- Chọn --</option>
                        @foreach($workUserCd as $nd => $value)
                        <option value="{{$nd}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row"> <label for="" class="col-sm-0 col-form-label" style="margin-left: 170px;">ユーザー名称和文</label>
                <div class="col-sm-3">
                    <select name="user_nm_j" id="TXT_user_nm_j" class="form-control">
                    <option value="">-- Chọn --</option>
                        @foreach($userNmJ as $nd => $value)
                        <option value="{{$nd}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row" style="margin-left: 155px;">
                <label for="">ユーザー名称和文</label>
                <div class="col-sm-1">
                    <input id="TXT_working_date_no_from" type="text" class="form-control" style=" width: 70%;">
                </div>
                <div class="col-sm-2">
                    <input id="TXT_working_date_from" type="date" class="form-control" style="margin-left: -40px;width: 85%;">
                </div>
                <label style="font-size: 23px; margin-left: -68px;"> ~</label>
                <div class="col-sm-1">
                    <input id="TXT_working_date_no_to" type="text" class="form-control" style="margin-left: -3px;width: 70%;">
                </div>
                <div class="col-sm-2">
                    <input id="TXT_working_date_to" type="date" class="form-control" style="margin-left: -44px;width: 85%;">
                </div>

            </div>

            <div class="form-group row"> <label for="" class="col-sm-0 col-form-label" style="margin-left: 198px;">製造指示番号</label>
                <div class="col-sm-3">
                    <input id="TXT_manufacture_no" name="manufacture_no" type="text" class="required form-control" placeholder="" value="" style="height: 31px;">
                </div>
            </div>
            <div class="col-sm-4 col-xs-3"> </div>
            </form>
        </div>
    </div>
    <div style="height: 30px; background-color: #EEEEEE">
    </div>
</div>
<!-- end search-->
