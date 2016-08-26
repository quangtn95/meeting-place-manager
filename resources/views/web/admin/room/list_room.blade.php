@extends('web.admin.master')
@section('title', 'List Room')
@section('content')
<div class="row">

    <table class="table table-hover table-bordered">
        <caption></caption>
        <thead>
            <tr align="center" class="thead">
                <td>#</td>
                <td>Name</td>
                <td>Avatar</td>
                <td>Capacity</td>
                <td>Equipment</td>
                <td colspan="2">Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php $stt = 0?>
            @foreach($data as $item)
            <?php $stt++ ?>

            <tr align="center">
                <td class="num">{!! $stt !!}</td>
                <td class=""><a href="{!! URL::route('admin.room.getDetail', $item['id']) !!}">{!! ucfirst($item["name"]) !!}</a></td>
                <td><a href="{!! URL::route('admin.room.getDetail', $item['id']) !!}" ><img src="{!! asset('public/uploads/'.$item->image) !!}" class="img"></a></td>
                <td>{!! $item["capacity"] !!}</td>
                <td>{!! $item["equipment"] !!}</td>
                <td>
                    <a href="{!! URL::route('admin.room.getEdit', $item['id']) !!}" class="btn btn-success">Edit</a>&nbsp;
                </td>
                <td>
                    {{-- <a onclick="return confirm_update('Bạn có chắc muốn xóa không?')" href="{!! URL::route('admin.room.getDelete', $item['id']) !!}" class="btn btn-danger">Delete</a> --}}
                    <form  id="delete_form{{ $item['id'] }}" class="deleteRoom" name="delete_form" method="GET" action="{!! route('admin.room.getDelete', $item['id']) !!}" accept-charset="utf-8">
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

    {{-- <ul class=" pagination">
        @if($data->currentPage() != 1)
            <li><a href="{!! str_replace('/?','?',$data->url($data->currentPage() - 1)) !!}">Previous</a></li>
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
        $('.deleteRoom').on('click', function(e) {
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