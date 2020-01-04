<form role="search" method="get" action="<?php echo home_url( '/' );?>">
	<div class="input-group">
	  <input name="s" type="search" class="form-control" value="<?php echo get_search_query( ); ?>" >
	  <div class="input-group-append">
	    <button class="btn btn-my-color-5" type="submit">Buscar</button>
	  </div>
	</div>
</form>