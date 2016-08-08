@extends('web.admin.master')
@section('title', 'Detail Room')
@section('content')
<br>
<a href="" class="btn btn-default">&nbsp;Back</a>
<h3 align="center">Lịch họp phòng họp số 1</h3>

<div class="row">

    <table class="table table-hover table-bordered">
        
        <thead>
            <tr align="center" class="thead">
                <td>Giờ</td>
                <td><span class=""></span>Thứ 2 (01/08)</td>
                <td><span class=""></span>Thứ 3 (02/08)</td>
                <td><span class=""></span>Thứ 4 (03/08)</td>
                <td><span class=""></span>Thứ 5 (04/08)</td>
                <td><span class=""></span>Thứ 6 (05/08)</td>
                <td><span class=""></span>Thứ 7 (06/08)</td>
                {{-- Hiển thị thông tin các cuộc họp của mỗi phòng theo từng tuần --}}
            </tr>
        </thead>
        <tbody>
            @for($i = 7; $i < 18; $i++)
				<tr align="center">
	                <td class="">{{ $i }}</td>
	                <td><a href="">Họp dự án 1 <br> Từ 7h - 9h</a></td>
	                <td></td>
	                <td></td>
	                <td></td>
	                <td></td>
	                <td></td>
	            </tr>
	            {{-- Khi co lịch họp sẽ điền thông tin (Tên, thời gian) vào khung giờ bắt đầu cuộc họp
	            Khung giờ nào nằm trong giờ họp sẽ ghi Bận, nếu không ghi /trống--}}
            @endfor
	            
        </tbody>
    </table>
    
    <ul class="pagination">
    <li><a href="#">«</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li><a href="#">»</a></li>
  </ul>
	   
</div>
@stop