@if (Auth::user()->id != $user->id) 
   
    
    @if (Auth::user()->is_favorite($user->id))
        {!! Form::open(['route' => ['users.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['users.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm "]) !!}
        {!! Form::close() !!}
    @endif
@endif
