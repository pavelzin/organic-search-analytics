		</div>
		<footer>
			<div class="floatleft">
				Developed by <a href="http://www.promincproductions.com/blog" target="_blank">Brian Prom</a>
			</div>
			<div class="floatright">
				<?php $currerntVersion = file_get_contents( $GLOBALS['basedir'] . 'version.txt' ); ?>
				<span>ver <?php echo $currerntVersion; ?></span>
				<span>
					<span class="floatright" id="upgradeVersion" style="display:none;">A newer version is available.  <a>Download <span id="upgradeVersionNumber"></span> now!</a></span>
				</span>
				<script type="text/javascript">
				$.get('https://api.github.com/repos/prominc/organic-search-analytics/releases/latest', function (data) {
					var latestVersion = data.tag_name;
					if( latestVersion != '<?php echo $currerntVersion ?>' ) {
						$('#upgradeVersion a').attr('href', data.zipball_url);	
						$('#upgradeVersion a span#upgradeVersionNumber').text(latestVersion);	
						$('#upgradeVersion').show();	
					}
				});
				</script>
			</div>
			<div class="clear"></div>
		</footer>
	</body>
</html>