{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('city_id', 'City_id:') !!}
			{!! Form::text('city_id') !!}
		</li>
		<li>
			{!! Form::label('built_amount', 'Built_amount:') !!}
			{!! Form::text('built_amount') !!}
		</li>
		<li>
			{!! Form::label('damage_percent', 'Damage_percent:') !!}
			{!! Form::text('damage_percent') !!}
		</li>
		<li>
			{!! Form::label('building_type_id', 'Building_type_id:') !!}
			{!! Form::text('building_type_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}