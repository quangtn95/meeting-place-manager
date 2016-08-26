@extends('web.admin.master')
@section('title', 'List Meeting')
@section('content')
<div class="row">

    <table class="table table-hover table-bordered table-striped">
        <caption></caption>
        <thead>
            <tr align="center" class="thead-list-meeting">
                <td>Week</td>
                <td>Day</td>
                <td>Date</td>
                <td>Title</td>
                <td>Time Start</td>
                <td>Time End</td>
                <td>Number People</td>
                <td colspan="2">Actions</td>
            </tr>
        </thead>
        <tbody>
                
            @foreach($data as $item)
				<tr align="center">
                    <td>W - {!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->time_start)->format('W') !!}</td>
                    <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->time_start)->format('l') !!}</td>
                    <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->time_start)->format('d/m/Y') !!}</td>
	                <td><a href="{!! URL::route('admin.meeting.getDetail', $item['id']) !!}">{!! ucfirst($item["name"]) !!}</a></td>
	                <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->time_start)->format('H:i') !!}</td>
	                <td>{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->time_end)->format('H:i') !!}</td>
	                <td>{!! $item["num_people"] !!}</td>
	                {{-- <td>
	                    <a href="{!! URL::route('admin.meeting.getEdit', $item['id']) !!}" class="btn btn-success">Edit</a>&nbsp;
	                    <a onclick="return confirm_update('Bạn có chắc muốn xóa không?')" href="{!! URL::route('admin.meeting.getDelete', $item['id']) !!}" class="btn btn-danger">Delete</a>
	                </td> --}}
                    <td>
                        <a href="{!! URL::route('admin.meeting.getEdit', $item['id']) !!}" class="btn btn-success">Edit</a>&nbsp;
                    </td>
                    <td>
                        <form  id="delete_form{{ $item['id'] }}" class="deleteMeeting" name="delete_form" method="GET" action="{!! route('admin.meeting.getDelete', $item['id']) !!}" accept-charset="utf-8">
                            <div style="display:none;">
                                <input type="hidden" name="_method" value="GET"/>
                            </div>
                            <div>
                                <button class="btn btn-danger getbutton" type="button" data-id="{!! $item['id'] !!}" >Delete </button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
	            
        </tbody>
    </table>
    
    {{-- <ul class="pagination">
        @if($data->currentPage() != 1)
        <li><a href="{!! str_replace('/?','?',$data->url($data->currentPage() - 1)) !!}">Prev</a></li>
        @endif
        @for($i = 1; $i <= $data->lastPage(); $i++)
        <li class="{!! ($data->currentPage() == $i) ? "active" : "" !!}"><a href="{!! str_replace('/?','?',$data->url($i)) !!}">{!! $i !!}</a></li>
        @endfor
        @if($data->currentPage() != $data->lastPage())
        <li><a href="{!! str_replace('/?','?',$data->url($data->currentPage() + 1)) !!}">Next</a></li>
        @endif
    </ul> --}}
    {{ $data->links() }}
	   
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.deleteMeeting').on('click', function(e) {
            var isconfirm = confirm('Xác nhận xóa ?');

            if(isconfirm) {
                var dataId = $(this).find('button').attr('data-id');
                var isurl = $(this).attr('action');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                $.ajax({
                    url:  isurl,
                    method: 'GET',
                    data: '',
                    success : function(data){
                        $('#delete_form'+dataId).parent().parent().remove();
                    }
                }); 
            }
        });
    });

</script>
@stop