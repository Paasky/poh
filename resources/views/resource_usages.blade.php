{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('model_class', 'Model_class:') !!}
			{!! Form::text('model_class') !!}
		</li>
		<li>
			{!! Form::label('model_id', 'Model_id:') !!}
			{!! Form::text('model_id') !!}
		</li>
		<li>
			{!! Form::label('consume_resource_id', 'Consume_resource_id:') !!}
			{!! Form::text('consume_resource_id') !!}
		</li>
		<li>
			{!! Form::label('create_resource_id', 'Create_resource_id:') !!}
			{!! Form::text('create_resource_id') !!}
		</li>
		<li>
			{!! Form::label('require_resource_id', 'Require_resource_id:') !!}
			{!! Form::text('require_resource_id') !!}
		</li>
		<li>
			{!! Form::label('consume_count', 'Consume_count:') !!}
			{!! Form::text('consume_count') !!}
		</li>
		<li>
			{!! Form::label('create_count', 'Create_count:') !!}
			{!! Form::text('create_count') !!}
		</li>
		<li>
			{!! Form::label('is_local', 'Is_local:') !!}
			{!! Form::text('is_local') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}