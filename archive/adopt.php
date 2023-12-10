<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/stuff.css">
    <title></title>
</head>
<body>

<div class="text">
    <p>This is where you can apply to adopt! You MUST read the rules.</p>

    <p>If you give me your site in the form, I'll add it to the links page!</p>

    <div class="divide"></div>

    <h1>Rules</h1>

    <div class="left">
		<ul class="list">
			<li>4 petz/week and 2 petz/litter</li>
			<li>No selling please! Trading for other petz is fine.</li>
			<li>Return or MPA if no longer wanted.</li>
			<li>No hexing other than eyelids.</li>
			<li>Keep my prefix when showing - "EP's/[your prefix]"</li>
			<li>Keep my rules in the profile when trading/MPA</li>
			<li>Tree-trimming, gender swaps, name, and owner changes are fine!</li>
		</ul>
    </div>

	<div class="divide"></div>

    <h1>Adoption Form</h1>

    <form action="submit_adoption.php" method="post">
        <div class="form-item">
            <label for="name">* name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-item">
            <label for="email">* email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-item">
            <label for="site">your site:</label>
            <input type="url" name="site" id="site">
        </div>

        <div class="form-item">
            <label for="petz">* which petz:</label>
            <input type="text" name="petz" id="petz" required>
        </div>

        <div class="form-btns">
            <input type="submit" name="submit" value="submit">
            <input type="reset" name="reset" value="reset">
        </div>
    </form>

</div>


</body>
</html>