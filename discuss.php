<style>
.divTable{
	display: table;
	width: 100%;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
}
.divTableCell, .divTableHead {
	display: table-cell;
	width: 85%;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}
th,td {
	padding: 10px;
	text-align: center;
	border: 1px solid black;
}
table {
	margin: auto;
}
</style>

<?php
include "./config/db.php";

if ( !isset($_GET['book']) OR !isset($_GET['chapter']) OR !isset($_GET['verse']) ) {
	
	header("Location: /index.php");
	
}

if ( isset($_POST['comment']) ) {
	
	define("RECAPTCHA_V3_SECRET_KEY", $scrt);
	
	// variables
	$badword = array("a55", "a55hole", "aeolus", "ahole", "anal", "analprobe", "anilingus", "anus", "areola", "areole", "arian", "aryan", "ass", "assbang", "assbanged", "assbangs", "asses", "assfuck", "assfucker", "assh0le", "asshat", "assho1e", "ass hole", "assholes", "assmaster", "assmunch", "asswipe", "asswipes", "azazel", "azz", "b1tch", "babe", "babes", "ballsack", "bang", "banger", "barf", "bastard", "bastards", "bawdy", "beaner", "beardedclam", "beastiality", "beatch", "beater", "beaver", "beer", "beeyotch", "beotch", "biatch", "bigtits", "big tits", "bimbo", "bitch", "bitched", "bitches", "bitchy", "blow job", "blow", "blowjob", "blowjobs", "bod", "bodily", "boink", "bollock", "bollocks", "bollok", "bone", "boned", "boner", "boners", "bong", "boob", "boobies", "boobs", "booby", "booger", "bookie", "bootee", "bootie", "booty", "booze", "boozer", "boozy", "bosom", "bosomy", "bowel", "bowels", "bra", "brassiere", "breast", "breasts", "bugger", "bukkake", "bullshit", "bull shit", "bullshits", "bullshitted", "bullturds", "bung", "busty", "butt", "butt fuck", "buttfuck", "buttfucker", "buttfucker", "buttplug", "c.0.c.k", "c.o.c.k.", "c.u.n.t", "c0ck", "c-0-c-k", "caca", "cahone", "cameltoe", "carpetmuncher", "cawk", "cervix", "chinc", "chincs", "chink", "chink", "chode", "chodes", "cl1t", "climax", "clit", "clitoris", "clitorus", "clits", "clitty", "cocain", "cocaine", "cock", "c-o-c-k", "cockblock", "cockholster", "cockknocker", "cocks", "cocksmoker", "cocksucker", "cock sucker", "coital", "commie", "condom", "coon", "coons", "corksucker", "crabs", "crack", "cracker", "crackwhore", "crap", "crappy", "cum", "cummin", "cumming", "cumshot", "cumshots", "cumslut", "cumstain", "cunilingus", "cunnilingus", "cunny", "cunt", "cunt", "c-u-n-t", "cuntface", "cunthunter", "cuntlick", "cuntlicker", "cunts", "d0ng", "d0uch3", "d0uche", "d1ck", "d1ld0", "d1ldo", "dago", "dagos", "dammit", "damn", "damned", "damnit", "dawgie-style", "dick", "dickbag", "dickdipper", "dickface", "dickflipper", "dickhead", "dickheads", "dickish", "dick-ish", "dickripper", "dicksipper", "dickweed", "dickwhipper", "dickzipper", "diddle", "dike", "dildo", "dildos", "diligaf", "dillweed", "dimwit", "dingle", "dipship", "doggie-style", "doggy-style", "dong", "doofus", "doosh", "dopey", "douch3", "douche", "douchebag", "douchebags", "douchey", "drunk", "dumass", "dumbass", "dumbasses", "dummy", "dyke", "dykes", "ejaculate", "enlargement", "erect", "erection", "erotic", "essohbee", "extacy", "extasy", "f.u.c.k", "fack", "fag", "fagg", "fagged", "faggit", "faggot", "fagot", "fags", "faig", "faigt", "fannybandit", "fart", "fartknocker", "fat", "felch", "felcher", "felching", "fellate", "fellatio", "feltch", "feltcher", "fisted", "fisting", "fisty", "floozy", "foad", "fondle", "foobar", "foreskin", "freex", "frigg", "frigga", "fubar", "fuck", "f-u-c-k", "fuckass", "fucked", "fucked", "fucker", "fuckface", "fuckin", "fucking", "fucknugget", "fucknut", "fuckoff", "fucks", "fucktard", "fuck-tard", "fuckup", "fuckwad", "fuckwit", "fudgepacker", "fuk", "fvck", "fxck", "gae", "gai", "ganja", "gay", "gays", "gey", "gfy", "ghay", "ghey", "gigolo", "glans", "goatse", "godamn", "godamnit", "goddam", "goddammit", "goddamn", "goldenshower", "gonad", "gonads", "gook", "gooks", "gringo", "gspot", "g-spot", "gtfo", "guido", "h0m0", "h0mo", "handjob", "hard on", "he11", "hebe", "heeb", "hell", "hemp", "heroin", "herp", "herpes", "herpy", "hitler", "hiv", "hobag", "hom0", "homey", "homo", "homoey", "honky", "hooch", "hookah", "hooker", "hoor", "hootch", "hooter", "hooters", "horny", "hump", "humped", "humping", "hussy", "hymen", "inbred", "incest", "injun", "j3rk0ff", "jackass", "jackhole", "jackoff", "jap", "japs", "jerk", "jerk0ff", "jerked", "jerkoff", "jism", "jiz", "jizm", "jizz", "jizzed", "junkie", "junky", "kike", "kikes", "kill", "kinky", "kkk", "klan", "knobend", "kooch", "kooches", "kootch", "kraut", "kyke", "labia", "lech", "leper", "lesbians", "lesbo", "lesbos", "lez", "lezbian", "lezbians", "lezbo", "lezbos", "lezzie", "lezzies", "lezzy", "lmao", "lmfao", "loin", "loins", "lube", "lusty", "mams", "massa", "masterbate", "masterbating", "masterbation", "masturbate", "masturbating", "masturbation", "maxi", "menses", "menstruate", "menstruation", "meth", "m-fucking", "mofo", "molest", "moolie", "moron", "motherfucka", "motherfucker", "motherfucking", "mtherfucker", "mthrfucker", "mthrfucking", "muff", "muffdiver", "murder", "muthafuckaz", "muthafucker", "mutherfucker", "mutherfucking", "muthrfucking", "nad", "nads", "naked", "napalm", "nappy", "nazi", "nazism", "negro", "nigga", "niggah", "niggas", "niggaz", "nigger", "nigger", "niggers", "niggle", "niglet", "nimrod", "ninny", "nipple", "nooky", "nympho", "opiate", "opium", "oral", "orally", "organ", "orgasm", "orgasmic", "orgies", "orgy", "ovary", "ovum", "ovums", "p.u.s.s.y.", "paddy", "paki", "pantie", "panties", "panty", "pastie", "pasty", "pcp", "pecker", "pedo", "pedophile", "pedophilia", "pedophiliac", "pee", "peepee", "penetrate", "penetration", "penial", "penile", "penis", "perversion", "peyote", "phalli", "phallic", "phuck", "pillowbiter", "pimp", "pinko", "piss", "pissed", "pissoff", "piss-off", "pms", "polack", "pollock", "poon", "poontang", "porn", "porno", "pornography", "pot", "potty", "prick", "prig", "prostitute", "prude", "pube", "pubic", "pubis", "punkass", "punky", "puss", "pussies", "pussy", "pussypounder", "puto", "queaf", "queef", "queef", "queer", "queero", "queers", "quicky", "quim", "racy", "rape", "raped", "raper", "rapist", "raunch", "rectal", "rectum", "rectus", "reefer", "reetard", "reich", "retard", "retarded", "revue", "rimjob", "ritard", "rtard", "r-tard", "rum", "rump", "rumprammer", "ruski", "s.h.i.t.", "s.o.b.", "s0b", "sadism", "sadist", "scag", "scantily", "schizo", "schlong", "screw", "screwed", "scrog", "scrot", "scrote", "scrotum", "scrud", "scum", "seaman", "seamen", "seduce", "semen", "sex", "sexual", "sh1t", "s-h-1-t", "shamedame", "shit", "s-h-i-t", "shite", "shiteater", "shitface", "shithead", "shithole", "shithouse", "shits", "shitt", "shitted", "shitter", "shitty", "shiz", "sissy", "skag", "skank", "slave", "sleaze", "sleazy", "slut", "slutdumper", "slutkiss", "sluts", "smegma", "smut", "smutty", "snatch", "sniper", "snuff", "s-o-b", "sodom", "souse", "soused", "sperm", "spic", "spick", "spik", "spiks", "spooge", "spunk", "steamy", "stfu", "stiffy", "stoned", "strip", "stroke", "stupid", "suck", "sucked", "sucking", "sumofabiatch", "t1t", "tampon", "tard", "tawdry", "teabagging", "teat", "terd", "teste", "testee", "testes", "testicle", "testis", "thrust", "thug", "tinkle", "tit", "titfuck", "titi", "tits", "tittiefucker", "titties", "titty", "tittyfuck", "tittyfucker", "toke", "toots", "tramp", "transsexual", "trashy", "tubgirl", "turd", "tush", "twat", "twats", "ugly", "undies", "unwed", "urinal", "urine", "uterus", "uzi", "vag", "vagina", "valium", "viagra", "virgin", "vixen", "vodka", "vomit", "voyeur", "vulgar", "vulva", "wad", "wang", "wank", "wanker", "wazoo", "wedgie", "weed", "weenie", "weewee", "weiner", "weirdo", "wench", "wetback", "wh0re", "wh0reface", "whitey", "whiz", "whoralicious", "whore", "whorealicious", "whored", "whoreface", "whorehopper", "whorehouse", "whores", "whoring", "wigger", "womb", "woody", "wop", "wtf", "x-rated", "xxx", "yeasty", "yobbo", "zoophile");
	
	if (isset($_POST['comment']) && $_POST['comment']) {

		$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
		$comment = strip_tags($comment);
		foreach ($badword as $url) {
			if (stripos($comment, $url) !== FALSE) {
			header("location: discuss.php?err=language&book=".$_POST['book']."&chapter=".$_POST['chapter']."&verse=".$_POST['verse']);
			exit;
			}
		}

	} else {

		// set error message and redirect back to form...

		header("location: discuss.php?err=empty_comment&book=".$_POST['book']."&chapter=".$_POST['chapter']."&verse=".$_POST['verse']);

		exit;

	}



	$token = $_POST['token'];
	
	$action = $_POST['action'];
	
	// call curl to POST request
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	$arrResponse = json_decode($response, true);

	// verify the response
	if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
	
		// valid submission
		
		// go ahead and do necessary stuff
		
		// Write comment to db	
		$sql = "INSERT INTO rybc_bible_discuss (book, chapter, verse, comment, ip, timestamp) VALUES ('".$_POST['book']."', '".$_POST['chapter']."', '".$_POST['verse']."', '".$_POST['comment']."', '".$_SERVER['REMOTE_ADDR']."', '".date('Y-m-d H:i:s')."');";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		
		header("location: discuss.php?book=".$_POST['book']."&chapter=".$_POST['chapter']."&verse=".$_POST['verse']);
		
	} else {

		// spam submission

		// show error message
	
		header("location: /discuss.php?err=spam&book=".$_POST['book']."&chapter=".$_POST['chapter']."&verse=".$_POST['verse']);

	}
	
}

// Display Errors
if ( $_GET['err'] == "language" ) {
	echo "<h2 style='color: red;'>This is a family friendly website, please watch your language.</h2>";
} elseif ( $_GET['err'] == "empty_comment" ) {
	echo "<h2 style='color: red;'>Your comment didn't contain anything.</h2>";
} elseif ( $_GET['err'] == "spam" ) {
	echo "<h2 style='color: red;'>Recaptcha detected spam, if this is in error try again in a little bit.</h2>";
}

// Get comments then display them
$sql = "SELECT id, comment FROM rybc_bible_discuss WHERE book='".$_GET['book']."' AND chapter='".$_GET['chapter']."' AND verse='".$_GET['verse']."' ORDER BY id ASC LIMIT 100;";
$result = $conn->query($sql);
$a = 0;
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$results[$a] = $row['comment'];
		$a++;
	}
}

if ( isset($results) ) {
	for ( $a = 0; $a < sizeof($results); $a++ ) {
		
		echo "<div style='border-bottom: 1px solid black; padding: 10px; width: 100%;";
		
		if ( $a % 2 != 0 ) {
			echo "background-color: #fefbec;";
		}
		
		echo "'>".$results[$a]."</div>";
		
	}
}

// Get verse
$sql = "SELECT id, text FROM rybc_bible_kjv WHERE book='".$_GET['book']."' AND chapter='".$_GET['chapter']."' AND verse='".$_GET['verse']."';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$text = $row['text'];
	}
} else {
	echo "0 results";
}

?>

<head>
	<script src="https://www.google.com/recaptcha/api.js?render=6LeP1XgnAAAAALyYPJqUW_WnoOhNjEOZwlwzKF9G"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<?php if ( isset($_GET['book']) AND isset($_GET['chapter']) AND isset($_GET['verse']) ) { ?>
<form id="num_comment" action="/discuss.php" method="post">
	<div style="margin: auto; text-align: center; position: fixed; bottom: 0; width: 100%;">
		<div>
			<input id="book" name="book" type="hidden" value="<?php echo $_GET['book']; ?>">
			<input id="chapter" name="chapter" type="hidden" value="<?php echo $_GET['chapter']; ?>">
			<input id="verse" name="verse" type="hidden" value="<?php echo $_GET['verse']; ?>">
			
			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell"><textarea id="comment" name="comment" style="width: 85%; height:100px; position: fixed; bottom: 0; left: 0;" placeholder="Your Comment... <?php echo $text; ?>"></textarea></div>
						<div class="divTableCell"><input style="background-color: #04AA6D; border: none; color: white; padding: 16px 32px; text-decoration: none; cursor: pointer; height: 100px; width: 15%; position: fixed; bottom: 0; right: 0;" type="submit" value="submit"></div>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</form>
<?php } ?>


	<script>

	$('#num_comment').submit(function(event) {

		event.preventDefault();

		var comment = $('#comment').val();



		grecaptcha.ready(function() {

			grecaptcha.execute($ky, {action: 'subscribe_newsletter'}).then(function(token) {

				$('#num_comment').prepend('<input type="hidden" name="token" value="' + token + '">');

				$('#num_comment').prepend('<input type="hidden" name="action" value="subscribe_newsletter">');

				$('#num_comment').unbind('submit').submit();

			});;

		});

	});

	</script>
