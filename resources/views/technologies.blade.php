{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('icon', 'Icon:') !!}
			{!! Form::text('icon') !!}
		</li>
		<li>
			{!! Form::label('cost', 'Cost:') !!}
			{!! Form::text('cost') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}