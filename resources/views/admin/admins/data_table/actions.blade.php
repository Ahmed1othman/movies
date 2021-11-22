@if (auth()->user()->hasPermission('update_admins'))
    <a href="{{ route('admin.admins.edit', $id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>@lang('site.edit')</a>
@endif

@if (auth()->user()->hasPermission('delete_admins'))
    <form action="{{ route('admin.admins.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i>@lang('site.delete')</button>
    </form>
@endif

@if (auth()->user()->hasPermission('delete_admins'))
    <form action="{{ route('admin.admins.update_status', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('put')
        @if($status == 'active')
            <button type="submit" class="btn btn-secondary btn-sm update_status"><i class="fa fa-thumbs-o-up"></i>@lang('site.disable')</button>
        @else
            <button type="submit" class="btn btn-primary btn-sm update_status"><i class="fa fa-thumbs-o-up"></i>@lang('site.enable')</button>
    @endif
    </form>
@endif
