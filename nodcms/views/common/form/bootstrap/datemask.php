<input data-mask="<?php echo $format; ?>" name="<?php echo $name; ?>" id="<?php echo $field_id; ?>" class="form-control input-large <?php echo $class; ?>" value="<?php echo $default; ?>" type="<?php echo $type; ?>" <?php foreach ($attr as $key=>$value){ echo $key.'="'.$value.'" '; } ?>>