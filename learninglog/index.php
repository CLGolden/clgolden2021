<?php include("../header.php"); ?>

<main>
	<section class="learninglog">
		<div class="container">
			<h1>Learning Log</h1>
			<div>
				<p>I go to bed early and wake up early since the pandemic and have taken to learning JavaScript in the dark hours before dawn. It's my favorite time of day. I've been wanting to learn JS for a decade. All things finally converged to make it possible.</p>
				<p>By writing these notes in my own words, it will help with understanding. The outlined steps will be for future reference.</p>
			</div>
			
			<div style="columns:2;">
				<h2>Custom Gutenberg Blocks</h2>
				<p class="logDate">Sunday, 07 March 2021</p>
				<p>I want to build my own Gutenberg blocks in my custom WP themes. I found what seems to be an excellent series of tutorials through <a href="https://awhitepixel.com/blog/wordpress-gutenberg-create-custom-block-tutorial/" target="_blank">a white pixel</a>. I need to learn it fast, though, since it's based on WP 5.2.3 ( end of year 2019 ) and the current version of WordPress is 5.6.2 already!</p>

				<p>A few weeks ago, I took their advice and decided to learn React. I bought Wes Bos' <a href="https://reactforbeginners.com/" target="_blank">React for Beginners</a> and, to my surprise, finished it with a beginners level of understanding just yesterday. I am really wow'd by all the potential.</p>

				<p>Alright. To work learning Gutenberg Blocks.</p>

				<h3>Notes</h3>

				<h4><a href="https://awhitepixel.com/blog/wordpress-gutenberg-complete-guide-development-environment/" target="_blank">Setting up the development environment.</a></h4>

				<p>To work in React, one would need to install React and Webpack libraries. WordPress provides a number of JS libraries to use instead. In particular, use @wordpress/script.</p>
				<p class="sideNote">The node_modules directory is only needed during development. Do not commit to git!</p>
				<p>WP's Babel may need to be configured to include 'arrow functions,' but I didn't have any trouble with Wes' class, so I'll need to check on the version.</p>
				<p>WP's Webpack installs the source and build files in a fixed location for each. A white pixel recommends setting up more than one file to keep multiple features organized.</p>
				<ol>
					<li><pre>mkdir gutenberg-dev</pre></li>
					<li><pre>npm init -y</pre></li>
					<li><pre>npm install --save-dev --save-exact @wordpress/scripts</pre></li>
				</ol>
				<p>The WP library seems to have loaded. <em>Lots</em> of files under node_modules.</p>
				<p>I got a message in iTerm saying my npm is outdated. Just followed the instructions to update; got a lot of <span class="red">ERR</span> messages. In a few places, the log said, "0 info it worked if it ends with ok" and made references to 'silly install.' ??? But it seems to have updated to 6.9.0, so I'm moving on.</p>

				<ol start="4">
					<li></li>
					<li></li>
					<li></li>
				</ol>
			</div>
		</div>
	</section>













</main>

<?php include("../footer.php"); ?>