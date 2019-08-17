{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('promotion_type_id', 'Promotion_type_id:') !!}
			{!! Form::text('promotion_type_id') !!}
		</li>
		<li>
			{!! Form::label('unit_id', 'Unit_id:') !!}
			{!! Form::text('unit_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}