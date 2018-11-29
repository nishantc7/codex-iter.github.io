<?php
			unset($fields['_organizer_logo']);
					$field['value'] = array_shift($field['value']);
	 * input_wp_editor function.
	 *
	 * @param mixed $key
	 * @param mixed $field
	 * @since 2.8
	 */
	public static function input_wp_editor( $key, $field ) {
		global $thepostid;
		if ( ! isset( $field['value'] ) ) {
			$field['value'] = get_post_meta( $thepostid, $key, true );
		}
		if ( ! empty( $field['name'] ) ) {
			$name = $field['name'];
		} else {
			$name = $key;
			}?>
			<p class="form-field">
				<label for="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $field['label'] ) ; ?>: <?php if ( ! empty( $field['description'] ) ) : ?><span class="tips" data-tip="<?php echo esc_attr( $field['description'] ); ?>">[?]</span><?php endif; ?></label>
			
	
			<?php
			wp_editor( $field['value'], $name, array("media_buttons" => false) );
			?>
			</p>
			<?php
		}
	 * input_time function.
	 *
	 * @param mixed $key
	 * @param mixed $field
	 */
	public static function input_time( $key, $field ) {
		global $thepostid;
		if ( ! isset( $field['value'] ) ) {
			$field['value'] = get_post_meta( $thepostid, $key, true );
		}
		if ( ! empty( $field['name'] ) ) {
			$name = $field['name'];
		} else {
			$name = $key;
		}
		?>
			<p class="form-field">
				<label for="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $field['label'] ) ; ?>: <?php if ( ! empty( $field['description'] ) ) : ?><span class="tips" data-tip="<?php echo esc_attr( $field['description'] ); ?>">[?]</span><?php endif; ?></label>
			<?php get_event_manager_template( 'event-time.php',array('field' => $field ,'key' => $key) ); ?>
			</p>
			<?php
		}
		 * input_number function.
		 *
		 * @param mixed $key
		 * @param mixed $field
		 */
		public static function input_number( $key, $field ) {
			global $thepostid;
			if ( ! isset( $field['value'] ) ) {
				$field['value'] = get_post_meta( $thepostid, $key, true );
			}
			if ( ! empty( $field['name'] ) ) {
				$name = $field['name'];
			} else {
				$name = $key;
			}
			?>
				<p class="form-field">
					<label for="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $field['label'] ) ; ?>: <?php if ( ! empty( $field['description'] ) ) : ?><span class="tips" data-tip="<?php echo esc_attr( $field['description'] ); ?>">[?]</span><?php endif; ?></label>
					<input type="number" name="<?php echo esc_attr( $name ); ?>" id="<?php echo esc_attr( $key ); ?>" placeholder="<?php echo esc_attr( $field['placeholder'] ); ?>" value="<?php echo esc_attr( $field['value'] ); ?>" />
				</p>
				<?php
			}
			 * input_button function.
			 *
			 * @param mixed $key
			 * @param mixed $field
			 */
			public static function input_button( $key, $field ) {
				global $thepostid;
				if ( ! isset( $field['value'] ) ) {
					$field['value'] = $field['placeholder'];
				}
			
				if ( ! empty( $field['name'] ) ) {
					$name = $field['name'];
				} else {
					$name = $key;
				}
				?>
						<p class="form-field">
							<label for="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $field['label'] ) ; ?>: <?php if ( ! empty( $field['description'] ) ) : ?><span class="tips" data-tip="<?php echo esc_attr( $field['description'] ); ?>">[?]</span><?php endif; ?></label>
							<input type="button" class="button button-small" name="<?php echo esc_attr( $name ); ?>" id="<?php echo esc_attr( $key ); ?>" placeholder="<?php echo esc_attr( $field['placeholder'] ); ?>" value="<?php echo esc_attr( $field['value'] ); ?>" />
						</p>
						<?php
		}	