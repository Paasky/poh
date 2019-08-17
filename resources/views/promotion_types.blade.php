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
			{!! Form::label('technology_id', 'Technology_id:') !!}
			{!! Form::text('technology_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}