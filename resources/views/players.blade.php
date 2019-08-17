{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('civilization_id', 'Civilization_id:') !!}
			{!! Form::text('civilization_id') !!}
		</li>
		<li>
			{!! Form::label('game_id', 'Game_id:') !!}
			{!! Form::text('game_id') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}