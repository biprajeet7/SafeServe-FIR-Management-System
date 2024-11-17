<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="Login/css/firstat.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register your complaint</title>
    <style type="text/css">
        .registerform{
            margin-top: 5%;
            width:50vw;
            max-width: 90vw;
        }
        .form-group{
            margin: 2vw;
        }
    </style>
  </head>
  <body>
    <div class=" card registerform">
        <form action="storecomplaint.php" method="POST">
          <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Enter name" name="name">
          </div>
          <div class="form-group">
            <label for="inputAge">Age</label>
            <input type="number" class="form-control" id="inputAge" placeholder="Enter Age" name="age">
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <textarea class="form-control" id="inputAddress" rows="3" placeholder="Enter Address" name="address"></textarea>
          </div>
          <div class="form-group">
            <label for="inputIncDT">Date & Time of Incidence</label>
            <input type="datetime-local" class="form-control" id="inputIncDT" placeholder="Enter Age" name="incDT">
          </div>

          <div class="form-group">
            <label for="inputComplaint">Select Complaint Type</label>
            <select class="form-control" id="inputComplaint" name="typeComplaint">
              <option>Attempt to Murder</option>
              <option>Theft</option>
              <option>Domestic Violence</option>
              <option>Others</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary" style="background-color:#333">Submit</button>
        </form>
    </div>
  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
