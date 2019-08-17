{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('unit_type_id', 'Unit_type_id:') !!}
			{!! Form::text('unit_type_id') !!}
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
			{!! Form::label('moves', 'Moves:') !!}
			{!! Form::text('moves') !!}
		</li>
		<li>
			{!! Form::label('damage_percent', 'Damage_percent:') !!}
			{!! Form::text('damage_percent') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}