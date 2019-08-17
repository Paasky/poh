{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('event_type_id', 'Event_type_id:') !!}
			{!! Form::text('event_type_id') !!}
		</li>
		<li>
			{!! Form::label('hex_id', 'Hex_id:') !!}
			{!! Form::text('hex_id') !!}
		</li>
		<li>
			{!! Form::label('ends_on_turn', 'Ends_on_turn:') !!}
			{!! Form::text('ends_on_turn') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}