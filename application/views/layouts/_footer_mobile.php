

	</div> 
        
	    <div id = "footer" data-role="footer" data-position="fixed">
            <div data-role="navbar" id="footer-nav">
            		<ul>
            		    <?php if ($this->uri->segment(2) === 'leaderboard' || $this->uri->segment(2) === 'track'|| $this->uri->segment(2) === 'tracklist' || $this->uri->segment(2) === 'country' || $this->uri->segment(2) === 'top' || $this->uri->segment(2) === 'prestige' || $this->uri->segment(2) === 'prestigelist'): ?>
                		    <li>
                		        <a href="<?php echo base_url() ?>mobile/leaderboard" data-icon="home">Home</a
                		    </li>
            		    <?php else: ?>
            		        <?php if (($this->uri->segment(1) === 'payment' || strpos(@$_SERVER['HTTP_REFERER'], 'payment'))): ?>
            		        <?php else: ?>
                    		    <li>
                    		        <a href="<?php echo base_url() ?>mobile/register" data-icon="home">Home</a
                    		    </li>
            		        <?php endif ?>
            		    <?php endif ?>
            		    
            		    <?php if ($this->uri->segment(1) === 'payment'): ?>
            		        <li><a href="<?php echo base_url() ?>payment/terms" data-icon ="info">Terms</a></li>
            		    <?php else: ?>
            		        <li><a href="<?php echo base_url() ?>mobile/terms" data-icon ="info">Terms</a></li>
            		    <?php endif ?>
                			
                			<li><a href="http://privacy.invictus.hu/m/" data-icon ="info">Privacy</a></li>        			
            		    
            		</ul>
            </div><!-- /navbar -->	    
        <!--

        -->
	</div> 
</div> <!-- page -->
    
		<?php if ($this->uri->segment(1) === 'payment'): ?>
		    <script type="text/javascript" src = "<?php echo base_url() ?>scripts/payment.js?<?php echo time(); ?>"></script>
		    <script type="text/javascript">
		        Payment.appId = '<?php echo FACEBOOK_PAYMENT_APP_ID ?>';
		        Payment.URL = '<?php echo base_url() ?>';
		    </script>
		<?php endif ?>	    

        <script type="text/javascript" src = "<?php echo base_url() ?>scripts/mobile.js?<?php echo time(); ?>"></script>

</body>
</html>