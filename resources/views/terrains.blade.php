{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('background', 'Background:') !!}
			{!! Form::text('background') !!}
		</li>
		<li>
			{!! Form::label('biome_id', 'Biome_id:') !!}
			{!! Form::text('biome_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}