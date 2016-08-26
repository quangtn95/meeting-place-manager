@extends('web.admin.master')
@section('title', 'List User')
@section('content')
<div class="row">

    <div class="col-lg-12">
        <h3>List Of Users</h3>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered">
        <caption></caption>
        <thead>
            <tr align="center" class="thead">
                <td>#</td>
                <td>Userame</td>
                <td>Email</td>
                <td>Role</td>
                <td>Department</td>
                <td>Action</td>
            </tr>
        </thead>
            
        <tbody>
            
            <?php $stt = 0?>
            @foreach($list_data as $key => $item)
            <?php $stt++ ?>
                <tr align="center">
                    <td class="num">{!! $stt !!}</td>
                    <td>{!! $item["username"] !!}</td>
                    <td>{!! $item["email"] !!}</td>
                    <td>
                        @if($item["role"] == 1)
                            {!! "Superadmin" !!}
                        @elseif($item["role"] == 2)
                            {!! "Admin" !!}
                        @else
                            {!! "Member" !!}
                        @endif

                    </td>
                    <td>{!! ucfirst($item['department']["name"]) !!}</td>
                    @if($item["role"] > 1)
                        {{-- <td>
                            <a id="del-user" onclick="return confirm_update('Bạn có chắc muốn xóa không?')" href="{!! URL::route('admin.user.getDelete', $item['id']) !!}" class="btn btn-danger">Delete</a>
                        </td> --}}

                        <td>
                            <form  id="delete_form{{ $item['id'] }}" class="deleteUser" name="delete_form" method="GET" action="{!! route('admin.user.getDelete', $item['id']) !!}" accept-charset="utf-8">
                                <div style="display:none;">
                                    <input type="hidden" name="_method" value="GET"/>
                                </div>
                                <div>
                                    <button class="btn btn-danger getbutton" type="button" data-id="{!! $item['id'] !!}" >Delete </button>
                                </div>
                            </form>
                        </td>

                    @else
                        <td></td>
                    @endif
                </tr>

            @endforeach

        </tbody>
    </table>

    {{ $data->links() }}
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

</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.deleteUser').on('click', function(e) {
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