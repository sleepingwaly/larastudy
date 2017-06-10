@if(count($errors)>0 or Session::has('message'))
    <div class="wu-tips animated shake">
        @if(count($errors)>0)
        <div class="am-alert am-alert-danger am-animation-delay-3 animated fadeOut" data-am-alert>
            <button type="button" class="am-close">&times;</button>
            <p>{{ $errors->first() }}</p>
        </div>
            @endif
        @if(Session::has('message'))
            <div class="am-alert am-alert-warning am-animation-delay-3 animated fadeOut" data-am-alert>
                <button type="button" class="am-close">&times;</button>
                <p>{{ Session::get('message') }}</p>
            </div>
            @endif
    </div>
@endif