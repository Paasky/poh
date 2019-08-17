{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('game_id', 'Game_id:') !!}
			{!! Form::text('game_id') !!}
		</li>
		<li>
			{!! Form::label('turn', 'Turn:') !!}
			{!! Form::text('turn') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}