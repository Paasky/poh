{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('city_type_id', 'City_type_id:') !!}
			{!! Form::text('city_type_id') !!}
		</li>
		<li>
			{!! Form::label('player_id', 'Player_id:') !!}
			{!! Form::text('player_id') !!}
		</li>
		<li>
			{!! Form::label('hex_id', 'Hex_id:') !!}
			{!! Form::text('hex_id') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}