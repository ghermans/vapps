
<div class="container">
    <div class="well well">
        <p><i  class="fa fa-info-circle fa-lg"></i> Om optimaal ondersteuning te kunnen bieden, hebben we een online simulator van de ondersteunde besturingssystemen en mail applicaties.           
        </span>
    </div>

    
<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
	<div class="cbp-vm-options">
		<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">Grid View</a>
		<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">List View</a>
	</div>
	<ul>
		<li>
			<a class="cbp-vm-image" href="#"><img src="images/1.png"></a>
			<h3 class="cbp-vm-title">Windows vista</h3>
			
			<a class="cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
		</li>
		<li>
			<a class="cbp-vm-image" href="#"><img src="images/2.png"></a>
			<h3 class="cbp-vm-title">Windows 7</h3>

			<a class="cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
		</li> 
		<li>
			<a class="cbp-vm-image" href="#"><img src="images/3.png"></a>
			<h3 class="cbp-vm-title">Windows 8</h3>
			<a class="cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
		</li>                

	</ul>


</div>

</div>
    <footer class="footer">
      <div class="container">
	<p class="text-muted">Page rendered in <strong>{elapsed_time}</strong> seconds. -  <?php  echo  (ENVIRONMENT === 'development') ?  'Virtual simulators Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

</div>
    </footer>
    

 <script>
    function popupCenter(url, title, w, h) {
      var left = (screen.width/2)-(w/2);
      var top = (screen.height/2)-(h/2);
      return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
(function() {

	var container = document.getElementById( 'cbp-vm' ),
		optionSwitch = Array.prototype.slice.call( container.querySelectorAll( 'div.cbp-vm-options > a' ) );

	function init() {
		optionSwitch.forEach( function( el, i ) {
			el.addEventListener( 'click', function( ev ) {
				ev.preventDefault();
				_switch( this );
			}, false );
		} );
	}

	function _switch( opt ) {
		// remove other view classes and any any selected option
		optionSwitch.forEach(function(el) { 
			classie.remove( container, el.getAttribute( 'data-view' ) );
			classie.remove( el, 'cbp-vm-selected' );
		});
		// add the view class for this option
		classie.add( container, opt.getAttribute( 'data-view' ) );
		// this option stays selected
		classie.add( opt, 'cbp-vm-selected' );
	}

	init();

})();    
</script>
</body>
</html>