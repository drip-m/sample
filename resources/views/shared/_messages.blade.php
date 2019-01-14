@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if (session()->has($msg)) {{-- has() 方法用来判断会话的KEY是否存在 --}}
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}">
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach