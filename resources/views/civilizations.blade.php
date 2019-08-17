{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('color1', 'Color1:') !!}
			{!! Form::text('color1') !!}
		</li>
		<li>
			{!! Form::label('color2', 'Color2:') !!}
			{!! Form::text('color2') !!}
		</li>
		<li>
			{!! Form::label('icon', 'Icon:') !!}
			{!! Form::text('icon') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}