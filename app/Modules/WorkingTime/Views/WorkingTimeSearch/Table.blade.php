<!-- view  -->
<div class="container-fluid border" style="width: 98%; margin-left: 16px; background-color: white">
    <div class="row">
        <div class="col-sm-3" style="background-color: ;">
            <div class="dataTables_length" id="datatable_length" style="margin-top: 10px; width: 79px;"> <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                    <option value="10">10 作</option>
                    <option value="25">25 作</option>
                    <option value="50">50 作</option>
                    <option value="100">100 作</option>
                </select> </div>
        </div>

        <div class="col-sm-3"> <label style="margin-left:-248px;margin-top: 20px;"> {{ $Data->total() }}作成日 {{ $Data->firstItem()}}者-{{ $Data->lastItem()}}</label> </div>
        <div class="col-sm-6" style="margin-top: -30px;">
            <ul style="margin-left: 440px; margin-top: 20px;"> {{ $Data->links() }} </ul>
        </div>

    </div>

    <div id="table_data">
        <table class="show-products table table-bordered" id="searchTable" style="margin-top: -20px;">
            <thead>
                <tr style="background-color: #0099FF;">
                    <th class="tha"><label id="DSP_work_report_no">作業日報番号</label></th>
                    <th class="tha"><label id="DSP_manufacture_no">製造指示番号</label></th>
                    <th class="tha"><label id="DSP_work_date">作業実施日</label></th>
                    <th class="tha"><label id="DSP_work_user_cd">作業担当者コード</label></th>
                    <th class="tha"><label id="DSP_user_nm_j">ユーザー名称和文</label></th>
                    <th class="tha"><label id="DSP_work_hour_div">作業時間区分</label></th>
                </tr>
            </thead>
            <tbody>
                @foreach($Data as $value) <tr>
                <tr>
                    <td>{{$value->work_report_no}}</td>
                    <td>{{$value->manufacture_no}}</td>
                    <td>{{$value->work_date}}</td>
                    <td>{{$value->work_user_cd}}</td>
                    <td>{{$value->user_nm_j}}</td>
                    <td>{{$value->work_hour_div}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6" style="margin-top: -20px;">
        <div style="margin-left: 480px;"> {{ $Data->links() }} </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-9"> </div>
    </div>
</div>
<!-- end view  -->
