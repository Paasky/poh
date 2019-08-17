{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('model_id', 'Model_id:') !!}
			{!! Form::text('model_id') !!}
		</li>
		<li>
			{!! Form::label('model_class', 'Model_class:') !!}
			{!! Form::text('model_class') !!}
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
			{!! Form::label('food', 'Food:') !!}
			{!! Form::text('food') !!}
		</li>
		<li>
			{!! Form::label('gold', 'Gold:') !!}
			{!! Form::text('gold') !!}
		</li>
		<li>
			{!! Form::label('production', 'Production:') !!}
			{!! Form::text('production') !!}
		</li>
		<li>
			{!! Form::label('culture', 'Culture:') !!}
			{!! Form::text('culture') !!}
		</li>
		<li>
			{!! Form::label('research', 'Research:') !!}
			{!! Form::text('research') !!}
		</li>
		<li>
			{!! Form::label('religion', 'Religion:') !!}
			{!! Form::text('religion') !!}
		</li>
		<li>
			{!! Form::label('health', 'Health:') !!}
			{!! Form::text('health') !!}
		</li>
		<li>
			{!! Form::label('order', 'Order:') !!}
			{!! Form::text('order') !!}
		</li>
		<li>
			{!! Form::label('corruption', 'Corruption:') !!}
			{!! Form::text('corruption') !!}
		</li>
		<li>
			{!! Form::label('espionage', 'Espionage:') !!}
			{!! Form::text('espionage') !!}
		</li>
		<li>
			{!! Form::label('trade_routes', 'Trade_routes:') !!}
			{!! Form::text('trade_routes') !!}
		</li>
		<li>
			{!! Form::label('trade_gold', 'Trade_gold:') !!}
			{!! Form::text('trade_gold') !!}
		</li>
		<li>
			{!! Form::label('trade_research', 'Trade_research:') !!}
			{!! Form::text('trade_research') !!}
		</li>
		<li>
			{!! Form::label('trade_espionage', 'Trade_espionage:') !!}
			{!! Form::text('trade_espionage') !!}
		</li>
		<li>
			{!! Form::label('trade_values_affect_land', 'Trade_values_affect_land:') !!}
			{!! Form::text('trade_values_affect_land') !!}
		</li>
		<li>
			{!! Form::label('trade_values_affect_water', 'Trade_values_affect_water:') !!}
			{!! Form::text('trade_values_affect_water') !!}
		</li>
		<li>
			{!! Form::label('trade_values_affect_air', 'Trade_values_affect_air:') !!}
			{!! Form::text('trade_values_affect_air') !!}
		</li>
		<li>
			{!! Form::label('is_local', 'Is_local:') !!}
			{!! Form::text('is_local') !!}
		</li>
		<li>
			{!! Form::label('is_percent', 'Is_percent:') !!}
			{!! Form::text('is_percent') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}