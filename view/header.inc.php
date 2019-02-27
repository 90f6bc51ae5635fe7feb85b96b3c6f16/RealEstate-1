<script>
	function setLanguage(lng){
		$.post( "controls/setLanguage.php", { lng: lng })
			.done(function( data ) {
                window.location.reload();
		});
	}
</script>

<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
    <a class="navbar-brand" href="#">HANDCRAFTZ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">COLLECTIONS</a>
            <a class="nav-item nav-link" href="#">ABOUT</a>
            <a class="nav-item nav-link" href="#">SALE</a>
            <a class="nav-item nav-link" href="#">BLOG</a>
            <a class="nav-item nav-link" href="#">CONTACT</a>
        </div>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="What are you looking for ?" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit">Search</button>
    </form>
    
    <a onclick="setLanguage('EN')" class="right btn p-1 ml-5 <?php if($lng != "TH"){ echo "active-lng"; } ?>">
                    EN</a>
                <a class="right">
                    |
                </a>
                <a onclick="setLanguage('TH')" class="right btn p-1 <?php if($lng == "TH"){ echo "active-lng"; } ?>">
                    TH
                </a>
         
</nav>