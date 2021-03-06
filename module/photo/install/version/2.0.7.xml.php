<upgrade>
	<phpfox_update_settings>
		<setting>
			<group>image_processing</group>
			<module_id>photo</module_id>
			<is_hidden>0</is_hidden>
			<type>boolean</type>
			<var_name>enabled_watermark_on_photos</var_name>
			<phrase_var_name>setting_enabled_watermark_on_photos</phrase_var_name>
			<ordering>1</ordering>
			<version_id>2.0.0rc1</version_id>
			<value>0</value>
		</setting>
	</phpfox_update_settings>
	<hooks>
		<hook>
			<module_id>photo</module_id>
			<hook_type>service</hook_type>
			<module>photo</module>
			<call_name>photo.service_callback_getnewsfeedalbum_start</call_name>
			<added>1286546859</added>
			<version_id>2.0.7</version_id>
			<value />
		</hook>
		<hook>
			<module_id>photo</module_id>
			<hook_type>service</hook_type>
			<module>photo</module>
			<call_name>photo.service_callback_getnewsfeed_start</call_name>
			<added>1286546859</added>
			<version_id>2.0.7</version_id>
			<value />
		</hook>
		<hook>
			<module_id>photo</module_id>
			<hook_type>template</hook_type>
			<module>photo</module>
			<call_name>photo.template_default_block_photo_entry_hover_end</call_name>
			<added>1286546859</added>
			<version_id>2.0.7</version_id>
			<value />
		</hook>
		<hook>
			<module_id>photo</module_id>
			<hook_type>template</hook_type>
			<module>photo</module>
			<call_name>photo.template_block_menu</call_name>
			<added>1286546859</added>
			<version_id>2.0.7</version_id>
			<value />
		</hook>
	</hooks>
</upgrade>