{{-- Application flash message --}}
@if (Session::get('errors'))
    <div class="alert alert-error alert-danger">
        <strong>{{ trans('layout.backend.alert.error_title') }}</strong>&nbsp;

        @if (is_array(Session::get('errors')))
            {{ head(Session::get('errors')) }}
        @else
            {{ Session::get('errors')->first() }}
        @endif
    </div>
@endif

@if (Session::get('notice'))
    <div class="alert alert-success">
        <strong>{{ trans('layout.backend.alert.success_title') }}</strong>&nbsp;{{{ Session::get('notice') }}}
    </div>
@endif
