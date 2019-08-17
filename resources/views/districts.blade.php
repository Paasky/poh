{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('district_type_id', 'District_type_id:') !!}
			{!! Form::text('district_type_id') !!}
		</li>
		<li>
			{!! Form::label('hex_id', 'Hex_id:') !!}
			{!! Form::text('hex_id') !!}
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
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}