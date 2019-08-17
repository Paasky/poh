{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('coords', 'Coords:') !!}
			{!! Form::text('coords') !!}
		</li>
		<li>
			{!! Form::label('map_id', 'Map_id:') !!}
			{!! Form::text('map_id') !!}
		</li>
		<li>
			{!! Form::label('biome_id', 'Biome_id:') !!}
			{!! Form::text('biome_id') !!}
		</li>
		<li>
			{!! Form::label('terrain_id', 'Terrain_id:') !!}
			{!! Form::text('terrain_id') !!}
		</li>
		<li>
			{!! Form::label('landscape_id', 'Landscape_id:') !!}
			{!! Form::text('landscape_id') !!}
		</li>
		<li>
			{!! Form::label('feature_id', 'Feature_id:') !!}
			{!! Form::text('feature_id') !!}
		</li>
		<li>
			{!! Form::label('resource_id', 'Resource_id:') !!}
			{!! Form::text('resource_id') !!}
		</li>
		<li>
			{!! Form::label('resource_amount', 'Resource_amount:') !!}
			{!! Form::text('resource_amount') !!}
		</li>
		<li>
			{!! Form::label('player_id', 'Player_id:') !!}
			{!! Form::text('player_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}