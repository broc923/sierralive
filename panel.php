<!DOCTYPE html>
<?php
require_once 'config.php';

try {
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//Populate table
$sql = "SELECT * FROM users ORDER BY ID";
$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

//user count
$sql2 = "SELECT count(*) FROM users"; 
$q2 = $conn->prepare($sql2); 
$q2->execute(); 
$userCount = $q2->fetchColumn();

//Total MOney Earned
$sql3 = "SELECT SUM(Price) AS totalEarned FROM payments"; 
$q3 = $conn->prepare($sql3); 
$q3->execute();
$q3->setFetchMode(PDO::FETCH_ASSOC);
$r3 = $q3->fetch();

//Total Earned This Week
$timezone = date_default_timezone_get();
$currentDate = date('Y-m-d h:i:s', time());
$lastweek = date("Y-m-d h:i:s",strtotime("-1 week"));
$sql4 = "SELECT SUM(Price) AS totalEarnedWeek FROM payments WHERE PaymentDate >= '$lastweek' AND PaymentDate <= '$currentDate'";
$q4 = $conn->prepare($sql4); 
$q4->execute();
$q4->setFetchMode(PDO::FETCH_ASSOC);
$r4 = $q4->fetch();

$conn = null; 
} catch (PDOException $pe) {
die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>
<html>
    <head>
        <link href="http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>XeCloak Panel</title>
        <meta name="description" content="XeCloak bypass server.">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/pure-min.css">
		<link rel="stylesheet" href="css/colorbox.css" />
        <meta content="width=device-width, target-densitydpi=160, initial-scale=1.0" name="viewport">
        <meta content="on" http-equiv="cleartype">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<script src="js/jquery.lightbox_me.js"></script>
		<script>
		function editEmail(Email,ID) {
			var uEmail = prompt("Please enter the new Email", Email);
			if (uEmail != null) {
				//document.getElementById(Name).innerHTML = uName;
				$.ajax({
					type: "POST",
					url: "edit_email.php",
					data: { 'Email': uEmail, 'ID': ID},
					success:function( msg ) {
					window.location = "panel.php";
					}
				});
			}
		}
    </script>
	<script>
		function editCPUKey(CPUKey,ID) {
			var uCPUKey = prompt("Please enter the new CPUKey", CPUKey);
			if (uCPUKey != null) {
				//document.getElementById(Name).innerHTML = uName;
				$.ajax({
					type: "POST",
					url: "edit_cpukey.php",
					data: { 'CPUKey': uCPUKey, 'ID': ID},
					success:function( msg ) {
					window.location = "panel.php";
					}
				});
			}
		}
    </script>
    </head>
    <body>
        <div id="dashboardwrapper">
            <div class="backdropTop">
            </div>
            <header>
                <nav id="global-nav">
                    <ul class="global-nav-list">
                        <li class="global-nav-list-item"><a href="#Info" class="global-nav-list-item-link">Info</a></li>
                        <li class="global-nav-list-item"><a href="#Users" class="global-nav-list-item-link  -active">Users</a></li>
                        <li class="global-nav-list-item"><a href="#PanelDownloads" class="global-nav-list-item-link">Downloads</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <div id="panels-area">
                    <ul data-position="#Users" class="global-panel-list">
                        <li id="Info" class="global-panel-list-item">
                            <ul class="tile-list">
                                <li class="tile-item" onclick="$('#moneyStats').popup('show');"><img src="images/profit.png" style="width:40%;height:40%;"><div id="tileText">Profit Stats</div></li>
								<li class="tile-item" onclick="$('#userStats').popup('show');"><img src="images/user.png" style="width:40%;height:40%;"><div id="tileText">User Stats</div></li>
                            </ul>
                        </li>
                        <li id="Users" class="global-panel-list-item -active">
						<div id="tableScroll">
							<table id="t01">
								<tr id="t01">
									<th id="t01">Unique ID</th>
									<th id="t01">IP</th>
									<th id="t01">Email</th>
									<th id="t01">CPUKey</th>
									<th id="t01">Time</th>
								</tr>
								<?php while ($r = $q->fetch()): ?>
								<?php
									//time calculation
									$timeLeft = $r['Time'];
									$date1 = new DateTime($timeLeft);
									
									$timezone = date_default_timezone_get();
									$date = date('Y-m-d h:i:s', time());
									$date2 = new DateTime($date);
									
										$diff = $date1->diff($date2);
										$hours = $diff->h;
										$hours = $hours + ($diff->d*24);
										$hours = 'None';
								?>
								<tr id="t01">
									<td id="t01"><?php echo htmlspecialchars($r['ID'])?></td>
									<td id="t01"><?php echo htmlspecialchars($r['IP'])?></td>
									<td id="t01" onclick="editEmail(Email='<?php echo $r['Email']?>',ID='<?php echo $r['ID']?>')"><?php echo htmlspecialchars($r['Email'])?></td>
									<td id="t01" onclick="editCPUKey(CPUKey='<?php echo $r['CPUKey']?>',ID='<?php echo $r['ID']?>')"><?php echo htmlspecialchars($r['CPUKey'])?></td>
									<td id="t01" onclick="$('#changetime').popup('show');">
									<?php 
									//staff check
									$staff = $r['Staff'];
									if ($staff == 1) {
										echo '<font color="red"><b>Staff</b></font>';
									} else {
										if ($date1 > $date2) {
											echo $diff->format('%a Days and %h Hours');
										} else {
											echo 'None';
										}
									}
									?>
									</td>
								</tr>
								<?php endwhile; ?>
							</table>
						</div>
							<br />
							<ul class="tile-list">
								<li class="tile-item" onclick="$('#adduser').popup('show');"><img src="images/add_user.png" style="width:40%;height:40%;"><div id="tileText">Add User</div></li>
							</ul>							
                        </li>
                        <li id="PanelDownloads" class="global-panel-list-item">
                            <ul class="tile-list">
                                <li class="tile-item" onclick="location.href = 'somewhere_else/files.zip';"><img src="images/log.png" style="width:40%;height:40%;"><div id="tileText">Panel Logs</div></li>
                                <li class="tile-item" onclick="location.href = 'somewhere_else/files.zip';"><img src="images/log.png" style="width:40%;height:40%;"><div id="tileText">Sales Logs</div></li>
								<li class="tile-item" onclick="location.href = 'somewhere_else/files.zip';"><img src="images/log.png" style="width:40%;height:40%;"><div id="tileText">Token Logs</div></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
		<!--Hidden Info Popups-->
		<div id="moneyStats">
			<?php
				echo 'Server Weekly Profit: $' . $r4['totalEarnedWeek'] . '<br >';
				$serverCost =  .0244 * $r4['totalEarnedWeek'];
				echo 'Server Fee: -$' . $serverCost . '<br >';
				$staffProfit = $r4['totalEarnedWeek'] - $serverCost;
				echo 'Total Profitable By All Staff: $' . $staffProfit . '<br >';
				$adminProfit = ($staffProfit) / 4;
				echo 'Your Share: $' . $adminProfit . '<br >';
			?>
		</div>
		<div id="userStats">
			<?php echo 'Total Users: ' . $userCount; ?>
		</div>
		<!--Hidden Panel Users Popups-->
		<div id="adduser">
			<form class="pure-form" action="add_user.php" method="post">
				<fieldset class="pure-group">
					<input type="email" name="Email" class="pure-input-1-2" placeholder="Email" size="45" required>
					<input type="text" name="CPUKey" class="pure-input-1-2" placeholder="CPU Key" required>
				</fieldset>

				<fieldset class="pure-group">
					<div class="pure-u-1 pure-u-md-1-3">
						<select id="timelength" name="Time" class="pure-input-1-2" required>
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

				<button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Manually Add User</button>
			</form>
		</div>
		<div id="changetime">
			<form class="pure-form" action="edit_time.php" method="post">
			<b><font color="red">Altering time manually is a serious action, you must type in the Unique ID below...</font></b>
				<fieldset class="pure-group">
					<input type="text" name="ID" class="pure-input-1-2" placeholder="Unique ID Here..." size="45" required>
					<input type="text" name="ID2" class="pure-input-1-2" placeholder="Re-type Unique ID Here..." size="45" required>
				</fieldset>
				<fieldset class="pure-group">
					<div class="pure-u-1 pure-u-md-1-3">
						<select id="timelength" name="Time" class="pure-input-1-2" required>
							<option selected="selected" disabled="disabled">Select a Time</option>
							<option>None</option>
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

				<button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Update Time</button>
			</form>
		</div>
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
		//Info
		$('#moneyStats').popup({
			transition: 'all 0.3s'
		});
		$('#userStats').popup({
			transition: 'all 0.3s'
		});
		//Users
		$('#adduser').popup({
			transition: 'all 0.3s'
		});
		$('#changetime').popup({
			transition: 'all 0.3s'
		});
    });
  </script>
	</body>
</html>