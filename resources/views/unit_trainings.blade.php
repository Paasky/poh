{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('city_id', 'City_id:') !!}
			{!! Form::text('city_id') !!}
		</li>
		<li>
			{!! Form::label('unit_type_id', 'Unit_type_id:') !!}
			{!! Form::text('unit_type_id') !!}
		</li>
		<li>
			{!! Form::label('built_amount', 'Built_amount:') !!}
			{!! Form::text('built_amount') !!}
		</li>
		<li>
			{!! Form::label('player_id', 'Player_id:') !!}
			{!! Form::text('player_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}