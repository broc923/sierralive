<!DOCTYPE html>
<html>
    <head>
        <link href="http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>XeCloak</title>
        <meta name="description" content="XeCloak bypass server.">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/pure-min.css">
		<link rel="stylesheet" href="css/colorbox.css" />
        <meta content="width=device-width, target-densitydpi=160, initial-scale=1.0" name="viewport">
        <meta content="on" http-equiv="cleartype">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<script src="js/jquery.lightbox_me.js"></script>
    </head>
    <body>
        <div id="dashboardwrapper">
            <div class="backdropTop">
            </div>
            <header>
                <nav id="global-nav">
                    <ul class="global-nav-list">
                        <li class="global-nav-list-item"><a href="#search" class="global-nav-list-item-link">Search</a></li>
                        <li class="global-nav-list-item"><a href="#About" class="global-nav-list-item-link -active">About</a></li>
                        <li class="global-nav-list-item"><a href="#FAQ" class="global-nav-list-item-link">FAQ</a></li>
                        <li class="global-nav-list-item"><a href="#Buy" class="global-nav-list-item-link">Buy</a></li>
                        <li class="global-nav-list-item"><a href="#Downloads" class="global-nav-list-item-link">Downloads</a></li>
                        <li class="global-nav-list-item"><a href="#Proof" class="global-nav-list-item-link">Proof</a></li>
                        <li class="global-nav-list-item"><a href="#Account" class="global-nav-list-item-link">Account</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <div id="panels-area">
                    <ul data-position="#About" class="global-panel-list">
                        <li id="search" class="global-panel-list-item">
                            <form id="searchForm" name="searchForm" action="search.js" method="get" class="searchForm">
                                <input type="text" name="searchSearchTerm" placeholder="Can't find something?">
                            </form>
                        </li>
                        <li id="About" class="global-panel-list-item -active">
                            <ul class="tile-list">
                                <li class="tile-item"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Placeholder</div></li>
                                <li class="tile-item"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Placeholder</div></li>
                                <li class="tile-item"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Placeholder</div></li>
                                <li class="tile-item"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Placeholder</div></li>
                                <li class="tile-item"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Placeholder</div></li>
                                <li class="tile-item"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Placeholder</div></li>
                                <li class="tile-item"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Placeholder</div></li>
                                <li class="tile-item"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Placeholder</div></li>
                                <li class="tile-item"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Placeholder</div></li>
                            </ul>
                        </li>
                        <li id="FAQ" class="global-panel-list-item">
                            <ul class="tile-list">
                                <li class="tile-item" onclick="$('#q2').popup('hide');$('#q3').popup('hide');$('#q4').popup('hide');$('#q5').popup('hide');$('#q1').popup('show');"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Where is my CPU Key?</div></li>
								<li class="tile-item" onclick="$('#q1').popup('hide');$('#q3').popup('hide');$('#q4').popup('hide');$('#q5').popup('hide');$('#q2').popup('show');"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">How do I install XeCloak?</div></li>
								<li class="tile-item" onclick="$('#q1').popup('hide');$('#q2').popup('hide');$('#q4').popup('hide');$('#q5').popup('hide');$('#q3').popup('show');"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">What features do I get?</div></li>
								<li class="tile-item" onclick="$('#q1').popup('hide');$('#q2').popup('hide');$('#q3').popup('hide');$('#q5').popup('hide');$('#q4').popup('show');"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Do I have to wait long?</div></li>
								<li class="tile-item" onclick="$('#q1').popup('hide');$('#q2').popup('hide');$('#q3').popup('hide');$('#q4').popup('hide');$('#q5').popup('show');"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Where is my Token I bought?</div></li>
                            </ul>
                        </li>
                        <li id="Buy" class="global-panel-list-item">
                            <ul class="tile-list">
                                <li class="tile-item" onclick="$('#buytime').popup('show');"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Directly Buy Time</div></li>
                                <li class="tile-item" onclick="$('#buytoken').popup('show');"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Buy a Token</div></li>
                            </ul>
                        </li>
                        <li id="Downloads" class="global-panel-list-item">
                            <ul class="tile-list">
                                <li class="tile-item" onclick="location.href = 'downloads/files.zip';"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">XeCloak and Instructions</div></li>
                                <li class="tile-item" onclick="location.href = 'downloads/17349_xeBuild_GUI_and_DL.zip';"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">xeBuild with Dashlaunch</div></li>
                            </ul>
                        </li>
                        <li id="Proof" class="global-panel-list-item">
                            <ul class="tile-list">
                                <li id="proof1" class="tile-item" href="https://www.youtube.com/embed/XQu8TTBmGhA?rel=0&amp;wmode=transparent"><img src="images/proof.png" style="width:40%;height:40%;"><div id="tileText">Proof Video by Broc923</div></li>
                                <li id="proof2" class="tile-item" href="https://www.youtube.com/embed/XQu8TTBmGhA?rel=0&amp;wmode=transparent"><img src="images/proof.png" style="width:40%;height:40%;"><div id="tileText">Proof Video #2</div></li>
                            </ul>
                        </li>
                        <li id="Account" class="global-panel-list-item">
                            <ul class="tile-list">
								<li class="tile-item"><img src="images/settings.png" style="width:40%;height:40%;"><div id="tileText">Redeem a Token</div></li>
                                <li class="tile-item"><img src="images/settings.png" style="width:40%;height:40%;"><div id="tileText">Time Remaining</div></li>
                                <li class="tile-item"><img src="images/settings.png" style="width:40%;height:40%;"><div id="tileText">Update CPU Key</div></li>
								<li class="tile-item"><img src="images/settings.png" style="width:40%;height:40%;"><div id="tileText">Reset Security Code</div></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
		<!--Hidden About Popups-->
		
		<!--Hidden FAQ Popups-->
		<div id="q1">
		A CPU Key can be obtained in the information screen on Dashlaunch, by booting into XeLL, or even in XeX Menu.
		</div>
		<div id="q2">
		Set XeCloak.xex as a dashlaunch plugin in plugin spot #1. Save the ini file and reboot your console. If you have bought time you can instantly sign into an account!
		</div>
		<div id="q3">
		Coming soon.
		</div>
		<div id="q4">
		Wait until you get an email telling you time has been added; it should not be any longer than 5-10 minutes depending on your payment method.
		</div>
		<div id="q5">
		Check your email! It will be there in 5-10 minutes. Contact our support team if not, every purchase is logged so we can easily help you!
		</div>
		<!--Hidden Buy Popups-->
		<div id="buytime">
			<form class="pure-form">
				<fieldset class="pure-group">
					<input type="email" class="pure-input-1-2" placeholder="Email" size="45" required>
					<input type="text" class="pure-input-1-2" placeholder="CPU Key" required>
				</fieldset>

				<fieldset class="pure-group">
					<div class="pure-u-1 pure-u-md-1-3">
						<select id="timelength" class="pure-input-1-2" required>
							<option selected="selected" disabled="disabled">Select a Time</option>
							<option>1 Day</option>
							<option>3 Days</option>
							<option>5 Days</option>
							<option>7 Days</option>
							<option>14 Days</option>
							<option>30 Days</option>
							<option>60 Days</option>
							<option>365 Days</option>
							<option>Life</option>
						</select>
					</div>
				</fieldset>

				<button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Continue to Paypal</button>
			</form>
		</div>
		<div id="buytoken">
			<form class="pure-form">
				<fieldset class="pure-group">
					<input type="email" class="pure-input-1-2" placeholder="Email" size="45" required>
				</fieldset>

				<fieldset class="pure-group">
					<div class="pure-u-1 pure-u-md-1-3">
						<select id="timetoken" class="pure-input-1-2" required>
							<option selected="selected" disabled="disabled">Select a Time</option>
							<option>1 Day</option>
							<option>3 Days</option>
							<option>5 Days</option>
							<option>7 Days</option>
							<option>14 Days</option>
							<option>30 Days</option>
							<option>60 Days</option>
							<option>365 Days</option>
							<option>Life</option>
						</select>
					</div>
				</fieldset>

				<button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Continue to Paypal</button>
			</form>
		</div>
		<!--Hidden Proof Popus-->
		
        <script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="js/jquery.colorbox-min.js"></script>
		<script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.10/jquery.popupoverlay.js"></script>
        <script type="text/javascript">
            (function() {
              var loc;
            
              loc = window.location.href;
            
              $(document).ready(function() {
                var URLindex;
                URLindex = loc.indexOf("#");
                if (URLindex > 0) {
                  window.location = loc.substring(0, URLindex);
                }
                $("body").removeClass("invisible");
                $(".global-nav-list-item-link").click(function(e) {
                  var thisID;
                  thisID = $(this).attr("href");
                  $(".global-nav-list-item-link").removeClass("-active");
                  $(this).addClass("-active");
                  if (thisID === "Downloads") {
                    thisID = "Downloads";
                  }
                  $(".global-panel-list-item").removeClass("-active").filter(thisID).toggleClass("-active");
                  $(".global-panel-list-item").parent().attr("data-position", thisID);
                  return e.preventDefault();
                });
                return $(window).keypress(function(event) {
                  var currentPanel;
                  currentPanel = $(".global-panel-list").attr("data-position");
                  if (event.which === 91) {
                    $(".global-nav-list").find("li a[href=" + currentPanel + "]").parent().prev().find("a").trigger("click");
                  }
                  if (event.which === 93) {
                    return $(".global-nav-list").find("li a[href=" + currentPanel + "]").parent().next().find("a").trigger("click");
                  }
                });
              });
            
            }).call(this);
        </script>
		<script>
    $(document).ready(function() {
		//About
		
		//FAQ
		$('#q1').popup({
			transition: 'all 0.3s'
		});
		$('#q2').popup({
			transition: 'all 0.3s'
		});
		$('#q3').popup({
			transition: 'all 0.3s'
		});
		$('#q4').popup({
			transition: 'all 0.3s'
		});
		$('#q5').popup({
			transition: 'all 0.3s'
		});
		//Buy
		$('#buytime').popup({
			transition: 'all 0.3s'
		});
		$('#buytoken').popup({
			transition: 'all 0.3s'
		});
		//Proof
		$('#proof1').colorbox({iframe:true, innerWidth:640, innerHeight:390});
		$('#proof2').colorbox({iframe:true, innerWidth:640, innerHeight:390});
    });
  </script>
	</body>
</html>