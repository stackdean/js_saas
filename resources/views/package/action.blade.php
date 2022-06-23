<span>
    @can('edit-user')
        <a class="btn btn-icon btn-primary btn-sm d-inline" href="{{url('packages/'. $package->id.'/edit')}}"><i class="ti ti-edit"></i></a>
    @endcan
    @can('delete-user')
    {!! Form::open(['method' => 'DELETE', 'route' => ['packages.destroy', $package->id], 'id' => 'delete-form-' . $package->id,'class'=>'d-inline']) !!}
        <a href="#" class="btn btn-sm small btn-danger show_confirm" id="delete-form-{{ $package->id }}"><i
            class="ti ti-trash mr-0"></i></a>
        {!! Form::close() !!}
    @endcan
</span>
