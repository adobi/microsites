            <div class="clearfix">
                <label for="ga_category">Category</label>
                <div class="input">
                    <input type="text" name = "ga_category" id = "ga_category" class = "xxlarge" value = "<?php echo $item ? $item->ga_category : '' ?>"/>
                </div>
            </div>                  
            <div class="clearfix">
                <label for="ga_action">Action</label>
                <div class="input">
                    <input type="text" name = "ga_action" id = "ga_action" class = "xxlarge" value = "<?php echo $item ? $item->ga_action : '' ?>"/>
                </div>
            </div>                  
            <div class="clearfix">
                <label for="ga_label">Label</label>
                <div class="input">
                    <input type="text" name = "ga_label" id = "ga_label" class = "xxlarge" value = "<?php echo $item ? $item->ga_label : '' ?>"/>
                </div>
            </div>                  
            <div class="clearfix">
                <label for="ga_value">Value</label>
                <div class="input">
                    <input type="text" name = "ga_value" id = "ga_value" class = "xxlarge" value = "<?php echo $item ? $item->ga_value : '1' ?>"/>
                </div>
            </div>  
            <div class="clearfix">
                <label for="ga_noninteraction">Non interatction</label>
                <div class="input" style="text-align:left">
                    <input type="checkbox" name = "ga_noninteraction" id = "ga_noninteraction" value = "1" <?php echo $item && $item->ga_noninteraction ? 'checked = "checked"' : '' ?>/>
                </div>
            </div>                             
