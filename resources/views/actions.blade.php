{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('player_turn_id', 'Player_turn_id:') !!}
			{!! Form::text('player_turn_id') !!}
		</li>
		<li>
			{!! Form::label('model_id', 'Model_id:') !!}
			{!! Form::text('model_id') !!}
		</li>
		<li>
			{!! Form::label('model_class', 'Model_class:') !!}
			{!! Form::text('model_class') !!}
		</li>
		<li>
			{!! Form::label('data', 'Data:') !!}
			{!! Form::text('data') !!}
		</li>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}