<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cellular Automata</title>
    <?php include "includes/head.html";?>
  </head>

  <body>

  <?php include 'includes/navbar.php' ?>
  
  <div class="container">
      <div class="jumbotron">
        <h1 class="text-primary">Cellular Automata Code</h1>
        <p class="lead">Here is the code we have written:</p>
        <ul>
            <li><a target="_blank" href="https://github.com/riley-martine/cell_auto_site">
            Website Code</a> (HTML, Bootstrap, PHP)
            </li>
           
            <li><a target="_blank" href="https://github.com/auhsoja/Cellular-Automata-GUI">
            Conway's GOL + Langton's Ant</a> (Java, javafx)
            </li>
            
            <li><a target="_blank" href="https://github.com/riley-martine/cellular-automata-cryptography">
            Cryptography with cellular automata, generate defect cones</a> (Python, tkinter)
            </li>

            <li><a target="_blank" href="https://github.com/riley-martine/lyapunov-ca-gen">
            Visualization of defect cones of CAs</a> (Python, pillow)
            </li>
<!--
            <li><a target="_blank" href="">
           
            </a></li>
-->
		


	</ul>
	<h2 class='text-primary'> Miscellaneous Output Generated by Code</h2>
	<p class='lead'> Here are some files and images we've generated that haven't already been shown:</p>
	<ul>
		<li>A collection of histograms illustrating defect frequencies of various rules (Python, matplotlib, and plotly):</li>
		<?php
			$urls = [
		'150'=>'https://plot.ly/~JoshAbrams/20/lyapunov-profile-for-rule-150/'
		'22'=>'https://plot.ly/~JoshAbrams/22/lyapunov-profile-for-rule-22/'
		'225'=>'https://plot.ly/~JoshAbrams/24/lyapunov-profile-for-rule-225/'
		'25'=>'https://plot.ly/~JoshAbrams/26/lyapunov-profile-for-rule-25/'
		'30'=>'https://plot.ly/~JoshAbrams/28/lyapunov-profile-for-rule-30/'
		'38'=>'https://plot.ly/~JoshAbrams/30/lyapunov-profile-for-rule-38/'
		'39'=>'https://plot.ly/~JoshAbrams/32/lyapunov-profile-for-rule-39/'
		'45'=>'https://plot.ly/~JoshAbrams/34/lyapunov-profile-for-rule-45/'
		'57'=>'https://plot.ly/~JoshAbrams/36/lyapunov-profile-for-rule-57/'
		'6'=>'https://plot.ly/~JoshAbrams/38/lyapunov-profile-for-rule-6/'
		'60'=>'https://plot.ly/~JoshAbrams/40/lyapunov-profile-for-rule-60/'
		'62'=>'https://plot.ly/~JoshAbrams/42/lyapunov-profile-for-rule-62/'
		'73'=>'https://plot.ly/~JoshAbrams/44/lyapunov-profile-for-rule-73/'
		'90'=>'https://plot.ly/~JoshAbrams/46/lyapunov-profile-for-rule-90/'];
			foreach($urls as $rule=>$page){
				echo "<li><a target='_blank' href=\"" . $page . "\">Defect frequency for rule " . $rule . "</a></li>";
			}
		?>
	</ul>
      </div>
    </div>

  <?php include_once 'includes/scripts.html';?>
  </body>
</html>