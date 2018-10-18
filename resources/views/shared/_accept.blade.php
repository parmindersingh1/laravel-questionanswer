@can('accept', $model)
    <a title="Mark as best answer (Click again to undo)" 
        class="mt-2 {{ $model->status }}"
        onclick="event.preventDefault(); document.getElementById('accept-answer-{{ $model->id }}').submit();">
        <i class="fas fa-check fa-2x"></i>
    </a>     

    <form
        id="accept-answer-{{ $model->id }}" 
        action="{{ route('answers.accept', $model->id)}}" 
        method="post" style="display:none;">
        @csrf
    </form>
@else 
    @if($model->is_best) 
    <a title="This is best answer (Click again to undo)" 
        class="mt-2 {{ $model->status }}">
        <i class="fas fa-check fa-2x"></i>
    </a>  
    @endif
@endcan   