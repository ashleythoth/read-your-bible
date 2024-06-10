<?php
include "db.php";

if ( isset($_POST['chpt']) AND isset($_POST['book']) ) {
	
	header("Location: /index.php?book=".$_POST['book']."&chapter=".$_POST['chpt']);
	exit;
	
}

echo "<style>
			table {
				margin: auto;
			}
			td,th {
				padding-top: 10px;
				padding-bottom: 10px;
				padding-right: 50px;
				padding-left: 50px;
				color: black;
			}
			a {
				color: black;
			}
		</style>";

if ( !isset($_GET['book']) OR !isset($_GET['chapter']) ) {
	
	echo "<table>
			<tr>
				<th>Old Testament</th>
				<th>New Testament</th>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=1&chapter=1\">Genesis</a></td>
				<td><a href=\"/index.php?book=40&chapter=1\">Matthew</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=2&chapter=1\">Exodus</a></td>
				<td><a href=\"/index.php?book=41&chapter=1\">Mark</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=3&chapter=1\">Leviticus</a></td>
				<td><a href=\"/index.php?book=42&chapter=1\">Luke</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=4&chapter=1\">Numbers</a></td>
				<td><a href=\"/index.php?book=43&chapter=1\">John</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=5&chapter=1\">Deuteronomy</a></td>
				<td><a href=\"/index.php?book=44&chapter=1\">Acts</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=6&chapter=1\">Joshua</a></td>
				<td><a href=\"/index.php?book=45&chapter=1\">Romans</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=7&chapter=1\">Judges</a></td>
				<td><a href=\"/index.php?book=46&chapter=1\">1 Corinthians</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=8&chapter=1\">Ruth</a></td>
				<td><a href=\"/index.php?book=47&chapter=1\">2 Corinthians</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=9&chapter=1\">1 Samuel</a></td>
				<td><a href=\"/index.php?book=48&chapter=1\">Galatians</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=10&chapter=1\">2 Samuel</a></td>
				<td><a href=\"/index.php?book=49&chapter=1\">Ephesians</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=11&chapter=1\">1 Kings</a></td>
				<td><a href=\"/index.php?book=50&chapter=1\">Philippians</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=12&chapter=1\">2 Kings</a></td>
				<td><a href=\"/index.php?book=51&chapter=1\">Colossians</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=13&chapter=1\">1 Chronicles</a></td>
				<td><a href=\"/index.php?book=52&chapter=1\">1 Thessalonians</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=14&chapter=1\">2 Chronicles</a></td>
				<td><a href=\"/index.php?book=53&chapter=1\">2 Thessalonians</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=15&chapter=1\">Ezra</a></td>
				<td><a href=\"/index.php?book=54&chapter=1\">1 Timothy</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=16&chapter=1\">Nehemiah</a></td>
				<td><a href=\"/index.php?book=55&chapter=1\">2 Timothy</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=17&chapter=1\">Esther</a></td>
				<td><a href=\"/index.php?book=56&chapter=1\">Titus</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=18&chapter=1\">Job</a></td>
				<td><a href=\"/index.php?book=57&chapter=1\">Philemon</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=19&chapter=1\">Psalms</a></td>
				<td><a href=\"/index.php?book=58&chapter=1\">Hebrews</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=20&chapter=1\">Proverbs</a></td>
				<td><a href=\"/index.php?book=59&chapter=1\">James</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=21&chapter=1\">Ecclesiastes</a></td>
				<td><a href=\"/index.php?book=60&chapter=1\">1 Peter</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=22&chapter=1\">Song of Solomon</a></td>
				<td><a href=\"/index.php?book=61&chapter=1\">2 Peter</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=23&chapter=1\">Isaiah</a></td>
				<td><a href=\"/index.php?book=62&chapter=1\">1 John</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=24&chapter=1\">Jeremiah</a></td>
				<td><a href=\"/index.php?book=63&chapter=1\">2 John</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=25&chapter=1\">Lamentations</a></td>
				<td><a href=\"/index.php?book=64&chapter=1\">3 John</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=26&chapter=1\">Ezekiel</a></td>
				<td><a href=\"/index.php?book=65&chapter=1\">Jude</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=27&chapter=1\">Daniel</a></td>
				<td><a href=\"/index.php?book=66&chapter=1\">Revelation</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=28&chapter=1\">Hosea</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=29&chapter=1\">Joel</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=30&chapter=1\">Amos</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=31&chapter=1\">Obadiah</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=32&chapter=1\">Jonah</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=33&chapter=1\">Micah</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=34&chapter=1\">Nahum</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=35&chapter=1\">Habakkuk</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=36&chapter=1\">Zephaniah</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=37&chapter=1\">Haggai</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=38&chapter=1\">Zechariah</a></td>
			</tr>
			<tr>
				<td><a href=\"/index.php?book=39&chapter=1\">Malachi</a></td>
			</tr>
		</table>";
			
} else { 
	
	// get book name
	$sql = "SELECT book FROM rybc_bible_books WHERE id = '".$_GET['book']."'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$bname = $row['book'];
		}
	} else {
		echo "0 results";
	}
	
	// get chapter text
	$sql = "SELECT id,book,chapter,verse,text FROM rybc_bible_kjv WHERE book = '".$_GET['book']."' AND `chapter` = '".$_GET['chapter']."' ORDER BY verse ASC";
	$result = $conn->query($sql);
	$a = 0;
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$text[$a]['book'] = $row['book'];
			$text[$a]['chapter'] = $row['chapter'];
			$text[$a]['verse'] = $row['verse'];
			$text[$a]['text'] = $row['text'];
			$a++;
		}
	} else {
		echo "0 results";
	}
	
	// get last chapter
	$sql = "SELECT chapter FROM rybc_bible_kjv WHERE book = '".$_GET['book']."' ORDER BY chapter DESC LIMIT 1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$lchap = $row['chapter'];
		}
	} else {
		echo "0 results";
	}
	
	// display book name and chapter
	echo "<h1 style='text-align: center;'>".$bname."<br><a href='/discuss.php?book=".$_GET['book']."&chapter=".$_GET['chapter']."' title='Discuss this chapter'>Chapter ".$_GET['chapter']."</a></h1>";
	
	// display chapter
	echo "<p>";
	for ( $a = 0; $a < sizeof($text); $a++ ) {
		
		echo "<a href='discuss.php?book=".$text[$a]['book']."&chapter=".$text[$a]['chapter']."&verse=".$text[$a]['verse']."' title='Discuss this verse'><sup>".$text[$a]['verse']."</sup>".$text[$a]['text']." ";
		
	}
	echo "</p>";
	
	// change page
	echo "<div style='margin: auto; text-align: center; font-size: 42px; font-weight: 900; width: 50%;'>";
	
	if ( $_GET['chapter'] != 1 ) {
		$pchap = $_GET['chapter'] - 1;
		echo "<a href='/index.php?book=".$_GET['book']."&chapter=".$pchap."' title='Previous chapter'><</a> ";
	}
	
	if ( $_GET['chapter'] != $lchap ) {
		$nchap = $_GET['chapter'] + 1;
		echo " <a href='/index.php?book=".$_GET['book']."&chapter=".$nchap."' title='Next chapter'>></a>";
	}
	
	echo "</div>";
	
	echo "<div style='float: right;'>
			<form method='post' action='/index.php'>
				<label for='chpt'>Jump to chapter: </label>
				<input type='hidden' name='book' value='".$_GET['book']."'>
				<input type='number' name='chpt' min='1' max='".$lchap."' style='width: 150px;' value='".$_GET['chapter']."'><br>
				<input type='submit' value='submit'>
			</form>
		</div>"; 
	
}

?>
