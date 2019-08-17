{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('required_id', 'Required_id:') !!}
			{!! Form::text('required_id') !!}
		</li>
		<li>
			{!! Form::label('for_id', 'For_id:') !!}
			{!! Form::text('for_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}