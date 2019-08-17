{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('improvement_type_id', 'Improvement_type_id:') !!}
			{!! Form::text('improvement_type_id') !!}
		</li>
		<li>
			{!! Form::label('hex_id', 'Hex_id:') !!}
			{!! Form::text('hex_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}