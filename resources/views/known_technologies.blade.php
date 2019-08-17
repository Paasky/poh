{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('technology_id', 'Technology_id:') !!}
			{!! Form::text('technology_id') !!}
		</li>
		<li>
			{!! Form::label('player_id', 'Player_id:') !!}
			{!! Form::text('player_id') !!}
		</li>
		<li>
			{!! Form::label('percent', 'Percent:') !!}
			{!! Form::text('percent') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}