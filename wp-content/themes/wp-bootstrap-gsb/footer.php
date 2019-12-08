<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
<!--     <?php get_template_part( 'footer-widget' ); ?> -->
	<footer id="colophon" class="grid grid-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo"> <!--site-footer -->
		<div class="grid-4 bg-red yellow-light"> <!--class site-info -->
			<p class="pb-3">
				Main Office phone<br>
				919 555 1234<br>
				<a href="mailto:office@gsb.edu">office@gsb.edu</a>
			</p>
			<p class="pb-3">
				German School Brooklyn<br>
				<a href="https://www.google.com/maps/place/German+School+Brooklyn+NYC+-+Deutsche+Schule+Brooklyn+NYC/@40.6734383,-73.967952,15z/data=!4m2!3m1!1s0x0:0xaa22fc0f720f54a?sa=X&ved=2ahUKEwisop-J_vTjAhWRpFkKHYPICNwQ_BIwPnoECDAQCA" target="_blank">
				17 Eastern Parkway<br>
				Floor 5<br>
				Brooklyn, NY 11201</a><br>
			</p>
			<p><a href="">Sign up</a> for our mailing list</p>
			<div class="button">
				<a href="https://www.facebook.com/GermanSchoolBrooklyn/" class="text-decoration-none" target="_blank">
					<div class="icon-footer">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<style type="text/css">
							.icon-footer-fill {fill:#F1E6B1;}
						</style>
						<g>
							<g id="tvn9qG_1_">
								<g>
									<path class="icon-footer-fill" d="M24.71,24.29c-1.12,0-2.12-0.01-3.11,0c-0.95,0.01-1.25,0.31-1.26,1.26c0,1.27,0,2.54,0.02,3.81
										c0.01,0.82,0.33,1.13,1.14,1.14c1.04,0.01,2.08,0,3.17,0c0,4.54,0,8.99,0,13.49c-0.28,0.02-0.52,0.04-0.77,0.04
										c-4.21,0-8.43,0.01-12.64,0c-3.18-0.01-5.33-2.18-5.33-5.38c0-9.13,0-18.25,0-27.38c0-3.17,2.14-5.32,5.29-5.32
										c9.18,0,18.35,0,27.53,0c3.09,0,5.25,2.11,5.26,5.19c0.01,9.23,0.01,18.45,0,27.68c0,3.06-2.19,5.2-5.26,5.21
										c-2.39,0.01-4.79-0.01-7.18,0.01c-0.56,0.01-0.74-0.17-0.74-0.72c0.02-4.04,0.03-8.08,0.02-12.12c0-0.56,0.18-0.73,0.73-0.72
										c1.22,0.04,2.44,0,3.67,0.02c0.7,0.01,1.08-0.33,1.16-0.99c0.17-1.33,0.33-2.67,0.47-4.01c0.08-0.82-0.28-1.2-1.12-1.21
										c-1.42-0.02-2.84-0.02-4.26,0c-0.48,0.01-0.67-0.15-0.66-0.64c0.02-1.15-0.02-2.3,0.02-3.44c0.06-1.51,0.79-2.21,2.3-2.26
										c0.82-0.03,1.65,0,2.47-0.02c0.73-0.02,1.08-0.33,1.09-1.03c0.02-1.15,0.01-2.29,0-3.44c0-0.58-0.27-1.01-0.87-1
										c-1.79,0.01-3.61-0.1-5.37,0.17c-3.21,0.48-5.19,2.57-5.61,5.82c-0.21,1.6-0.12,3.23-0.17,4.85
										C24.7,23.59,24.71,23.89,24.71,24.29z"/>
								</g>
							</g>
						</g>
						</svg>
					</div>
				</a>
				<a href="http://instagram.com/germanschoolbrooklyn/" class="text-decoration-none" target="_blank">
					<div class="icon-footer">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<g>
							<g id="MqJaMX_1_">
								<g>
									<path class="icon-footer-fill" d="M44.38,25.03c0,3.18,0.01,6.36,0,9.54c-0.01,5.21-4.27,9.5-9.48,9.51c-6.43,0.01-12.86,0.01-19.29,0
										c-4.69-0.01-8.84-3.73-9.3-8.41c-0.14-1.44-0.09-2.89-0.09-4.34c-0.01-5.29-0.01-10.59,0-15.88c0.01-5.27,4.26-9.52,9.54-9.53
										c6.39-0.01,12.77-0.01,19.16,0c5.18,0.01,9.45,4.31,9.45,9.49C44.38,18.62,44.38,21.82,44.38,25.03z M41.65,25
										c0-3.16,0-6.33,0-9.49c-0.01-3.86-3-6.86-6.86-6.86c-6.33,0-12.66,0-18.99,0c-3.86,0-6.86,3-6.86,6.86c0,6.33,0,12.66,0,18.99
										c0,3.86,3,6.86,6.86,6.86c6.33,0.01,12.66,0.01,18.99,0c3.86,0,6.85-3,6.86-6.86C41.66,31.33,41.65,28.16,41.65,25z"/>
									<path class="icon-footer-fill" d="M34.84,25.02c-0.01,5.27-4.32,9.53-9.63,9.52c-5.16-0.01-9.46-4.35-9.45-9.54c0.01-5.29,4.31-9.56,9.61-9.54
										C30.56,15.47,34.84,19.8,34.84,25.02z M25.28,31.81c3.75,0.01,6.82-3.03,6.83-6.77c0.01-3.78-3.02-6.85-6.78-6.86
										c-3.78-0.01-6.84,3.03-6.85,6.79C18.48,28.75,21.51,31.81,25.28,31.81z"/>
									<path class="icon-footer-fill" d="M38.92,14.09c0,1.5-1.23,2.74-2.74,2.74c-1.47,0-2.71-1.24-2.72-2.72c0-1.5,1.24-2.74,2.74-2.74
										C37.69,11.37,38.92,12.61,38.92,14.09z"/>
								</g>
							</g>
						</g>
						</svg>
					</div>
				</a>
				<a href="https://twitter.com/german_s_brkln" class="text-decoration-none" target="_blank">
					<div class="icon-footer">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<g>
							<g id="_x34_CxmkQ_1_">
								<g>
									<path class="icon-footer-fill" d="M17.01,35.83c-4.56-0.9-7.66-3.32-8.08-6.27c1.16,0,2.31,0,3.46,0c0.04-0.07,0.08-0.14,0.13-0.22
										c-4.28-1.39-6.63-4.26-6.94-8.72c1.29,0.36,2.5,0.7,3.72,1.03c0.05-0.08,0.09-0.16,0.14-0.24c-2.02-1.55-3.31-3.54-3.64-6.06
										c-0.26-1.97,0.01-3.87,1.09-5.71c4.85,5.67,10.95,8.82,18.22,9.32c0.15-1.6,0.06-3.15,0.46-4.57c1.82-6.38,9.67-8.56,14.58-4.1
										c0.41,0.37,0.76,0.52,1.28,0.33c1.59-0.58,3.18-1.15,4.72-1.7c-0.27,1.34-0.86,2.12-3.35,4.68c1.49-0.4,2.99-0.79,4.48-1.19
										c0.06,0.05,0.11,0.11,0.17,0.16c-1.14,1.16-2.21,2.39-3.44,3.44c-0.66,0.57-0.88,1.09-0.91,1.94c-0.35,9.49-4.22,17.17-12.5,22
										c-8.49,4.96-17.25,4.69-25.88,0c-0.11-0.06-0.22-0.13-0.33-0.21c-0.05-0.04-0.07-0.1,0.03,0.05c2.1-0.3,4.33-0.51,6.51-0.96
										C13.14,38.39,15.09,37.29,17.01,35.83z"/>
								</g>
							</g>
						</g>
						</svg>
					</div>
				</a>
			</div>
		</div><!-- close .site-info -->
		<div class="grid-8 grid-slideshow">
			<!-- <img src="<?php echo esc_url( home_url( '/' )); ?>wp-content/themes/wp-bootstrap-gsb/img/map.png" class="w-100"> -->
			<svg version="1.1" id="map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1400 700" style="enable-background:new 0 0 1400 700;" xml:space="preserve">
			<style type="text/css">
				.st0{clip-path:url(#SVGID_2_);}
				.st1{fill:#94A780;}
				.st2{fill:none;stroke:#F1E6B1;stroke-width:4.6002;stroke-miterlimit:10;}
				.st3{fill:none;}
				.st4{fill:#F1E6B1;}
				.st5{fill:#E13E52;}
				.st6{font-family:'Poppins';}
				.st7{font-size:27.6013px;}
				.st8{font-size:18.4009px;}
				.st9{opacity:0.35;fill:#F1E6B1;}
				.st10{fill:#D83E52;}
				.st11{fill:#63676B;}
			</style>
			<g>
				<defs>
					<rect id="SVGID_1_" y="-0.54" width="1400" height="700"/>
				</defs>
				<clipPath id="SVGID_2_">
					<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
				</clipPath>
				<g class="st0">
					<rect x="-36.04" y="-25.37" class="st1" width="1479.92" height="735.87"/>
					<line class="st2" x1="836.38" y1="-24.49" x2="978.94" y2="944.97"/>
					<line class="st2" x1="396.06" y1="104.37" x2="1352.36" y2="367.57"/>
					<line class="st2" x1="1418.16" y1="136.17" x2="1194.44" y2="947.71"/>
					<line class="st2" x1="961.94" y1="834.76" x2="1206.5" y2="900.56"/>
					<line class="st2" x1="1208.7" y1="900.56" x2="1441.19" y2="914.81"/>
					<line class="st2" x1="953.17" y1="767.86" x2="1226.24" y2="841.34"/>
					<line class="st2" x1="1224.05" y1="841.34" x2="1439" y2="855.59"/>
					<line class="st2" x1="943.3" y1="702.06" x2="1241.6" y2="782.12"/>
					<line class="st2" x1="1239.4" y1="781.02" x2="1439" y2="795.28"/>
					<line class="st2" x1="931.24" y1="630.77" x2="1256.95" y2="723.99"/>
					<line class="st2" x1="1256.95" y1="726.19" x2="1434.61" y2="734.96"/>
					<line class="st2" x1="914.79" y1="515.62" x2="1285.46" y2="617.61"/>
					<line class="st2" x1="1285.46" y1="617.61" x2="1440.1" y2="628.58"/>
					<line class="st2" x1="945.49" y1="634.06" x2="1131.93" y2="-45.87"/>
					<line class="st2" x1="663.05" y1="417.91" x2="814.99" y2="-134.71"/>
					<line class="st2" x1="413.61" y1="109.85" x2="493.66" y2="-173.09"/>
					<line class="st2" x1="428.96" y1="49.54" x2="1373.2" y2="309.45"/>
					<path class="st2" d="M664.75-170.9L543.81,276.78c-1.51,4.77-1.07,13.75,0,21.57c0.53,3.85,3.68,16.58,7.26,24.61"/>
					<path class="st2" d="M244.72-171.99l253.1,457.4c3.96,7.47,6.02,16.97,7.27,22.79c1.32,6.17-0.73,18.01-1.95,21.59"/>
					<line class="st2" x1="1403.91" y1="188.81" x2="275.42" y2="-120.45"/>
					<line class="st2" x1="1386.36" y1="250.23" x2="317.1" y2="-44.78"/>
					<line class="st2" x1="1418.16" y1="138.37" x2="287.49" y2="-173.09"/>
					<line class="st2" x1="877.5" y1="256.81" x2="975.1" y2="-88.65"/>
					<line class="st2" x1="652.68" y1="-129.22" x2="1438.18" y2="90.35"/>
					<line class="st2" x1="438.9" y1="179.76" x2="1340.3" y2="425.7"/>
					<line class="st2" x1="1340.08" y1="425.06" x2="1440.97" y2="431.64"/>
					<line class="st2" x1="1354.62" y1="367.5" x2="1440.16" y2="374.08"/>
					<line class="st2" x1="1369.91" y1="309.45" x2="1440.1" y2="312.74"/>
					<line class="st2" x1="1386.39" y1="249.37" x2="1440.12" y2="250.46"/>
					<line class="st2" x1="1405.12" y1="188.88" x2="1442.41" y2="189.98"/>
					<line class="st2" x1="1321.38" y1="486.86" x2="1434.33" y2="493.44"/>
					<line class="st2" x1="1305.2" y1="545.23" x2="1442.29" y2="554.01"/>
					<line class="st2" x1="1306.3" y1="545.23" x2="904.92" y2="436.66"/>
					<line class="st2" x1="1320.56" y1="487.11" x2="692.16" y2="312.74"/>
					<line class="st2" x1="693.26" y1="311.64" x2="596.67" y2="348.01"/>
					<line class="st2" x1="662.55" y1="241.45" x2="582.97" y2="295.66"/>
					<line class="st2" x1="1417.07" y1="138.37" x2="1367.71" y2="943.33"/>
					<line class="st2" x1="556.62" y1="389.4" x2="855.79" y2="946.89"/>
					<line class="st2" x1="460.76" y1="228.29" x2="384" y2="377.44"/>
					<line class="st2" x1="513.62" y1="440.08" x2="-167.63" y2="93.4"/>
					<line class="st2" x1="512.31" y1="441.05" x2="206.33" y2="943.33"/>
					<line class="st2" x1="385.09" y1="375.25" x2="33.06" y2="948.81"/>
					<line class="st2" x1="378.51" y1="70.37" x2="257.88" y2="309.45"/>
					<line class="st2" x1="254.59" y1="308.35" x2="-140.22" y2="953.2"/>
					<line class="st2" x1="322.58" y1="-173.09" x2="296.26" y2="-80.97"/>
					<line class="st2" x1="294.07" y1="-80.97" x2="127.37" y2="246.94"/>
					<line class="st2" x1="127.37" y1="243.65" x2="-158.86" y2="714.12"/>
					<line class="st2" x1="178.92" y1="-170.9" x2="0.16" y2="182.23"/>
					<line class="st2" x1="0.16" y1="180.04" x2="-162.15" y2="452.02"/>
					<line class="st2" x1="14.42" y1="-173.09" x2="-161.05" y2="169.07"/>
					<line class="st2" x1="488.18" y1="480.53" x2="-162.15" y2="149.33"/>
					<line class="st2" x1="460.76" y1="522.2" x2="-167.63" y2="200.88"/>
					<line class="st2" x1="412.51" y1="606.65" x2="-159.96" y2="241.45"/>
					<line class="st2" x1="386.19" y1="647.22" x2="-168.73" y2="293"/>
					<line class="st2" x1="362.06" y1="688.9" x2="-176.41" y2="344.54"/>
					<line class="st2" x1="337.94" y1="730.57" x2="-170.92" y2="404.86"/>
					<line class="st2" x1="311.62" y1="768.96" x2="-178.6" y2="456.4"/>
					<line class="st2" x1="286.39" y1="812.82" x2="-174.21" y2="516.72"/>
					<line class="st2" x1="262.26" y1="850.11" x2="-173.12" y2="574.84"/>
					<line class="st2" x1="238.14" y1="891.78" x2="-164.34" y2="638.45"/>
					<line class="st2" x1="210.72" y1="933.46" x2="-165.44" y2="693.29"/>
					<line class="st2" x1="131.76" y1="941.13" x2="-161.05" y2="755.8"/>
					<line class="st2" x1="47.32" y1="943.33" x2="-164.34" y2="808.44"/>
					<line class="st2" x1="-41.51" y1="943.33" x2="-166.54" y2="865.46"/>
					<line class="st2" x1="464.86" y1="360.88" x2="-157.76" y2="44.05"/>
					<line class="st2" x1="464.59" y1="306.99" x2="-159.96" y2="-11.88"/>
					<line class="st2" x1="476.12" y1="253.52" x2="-175.31" y2="-72.2"/>
					<line class="st2" x1="438.9" y1="179.76" x2="-193.89" y2="-132.8"/>
					<line class="st2" x1="397.16" y1="103.27" x2="-154.47" y2="-170.9"/>
					<line class="st2" x1="354.39" y1="26.51" x2="-70.03" y2="-180.77"/>
					<line class="st2" x1="317.1" y1="-42.58" x2="14.42" y2="-187.35"/>
					<line class="st2" x1="276.52" y1="-119.35" x2="138.34" y2="-177.48"/>
					<line class="st2" x1="431.15" y1="49.54" x2="355.48" y2="27.6"/>
					<line class="st2" x1="665.84" y1="-171.99" x2="1442.29" y2="41.86"/>
					<line class="st2" x1="1417.07" y1="139.46" x2="1374.3" y2="-178.57"/>
					<line class="st2" x1="693.26" y1="-178.57" x2="1449.97" y2="28.7"/>
					<line class="st2" x1="1129.74" y1="-176.38" x2="1385.26" y2="-106.19"/>
					<line class="st2" x1="1386.36" y1="-106.19" x2="1439" y2="-101.81"/>
					<line class="st2" x1="1043.1" y1="949.91" x2="1292.04" y2="48.44"/>
					<line class="st2" x1="1291.29" y1="51.16" x2="1263.53" y2="-176.38"/>
					<line class="st2" x1="959.75" y1="578.13" x2="1273.4" y2="664.77"/>
					<line class="st2" x1="1271.21" y1="664.77" x2="1437.9" y2="674.64"/>
					<line class="st2" x1="1281.08" y1="-57.94" x2="1387.46" y2="-74.39"/>
					<line class="st2" x1="1136.32" y1="-57.94" x2="1118.77" y2="-184.06"/>
					<line class="st2" x1="980.59" y1="-99.61" x2="969.62" y2="-185.15"/>
					<line class="st2" x1="877.5" y1="-130.32" x2="868.73" y2="-181.86"/>
					<line class="st2" x1="838.02" y1="-21.75" x2="816.09" y2="-190.64"/>
					<line class="st2" x1="1276.69" y1="-77.68" x2="921.37" y2="-175.28"/>
					<line class="st2" x1="901.63" y1="422.41" x2="677.91" y2="360.99"/>
					<line class="st2" x1="296.26" y1="439.95" x2="254.59" y2="505.75"/>
					<line class="st2" x1="254.59" y1="419.12" x2="215.11" y2="481.63"/>
					<line class="st2" x1="435.54" y1="564.97" x2="316" y2="488.21"/>
					<line class="st2" x1="766.74" y1="-41.49" x2="751.38" y2="8.96"/>
					<line class="st2" x1="757.96" y1="-12.97" x2="677.91" y2="-33.81"/>
					<line class="st2" x1="677.91" y1="-33.81" x2="671.33" y2="-12.97"/>
					<path class="st2" d="M513.35,436.67c-13.31-5.66-28.89-25.53-34.91-36.89c-5.36-10.1-10.4-24.04-12.78-35.15
						c-5.32-24.85-4.86-50.25,3.45-74.26c2.7-7.82,6.5-15.21,10.53-22.43c4.84-8.68,10.37-17.47,18.84-22.67
						c12.16-7.46,28.29-5.81,40.84,0.96s22.13,17.92,30.6,29.39c6.46,8.74,12.48,17.87,16.93,27.79c15.6,34.82,10.22,75.33,0.4,112.2"
						/>
					<path class="st2" d="M585.94,416.16c80.24-12.87,158.28,26.3,234.04,55.7c54.42,21.11,104.94,36.57,156.15,50.48
						c14.35,3.9,117.96,31.17,172.3,46.14c32.48,8.95,111.8,30.91,140.23,37.46c8.51,1.96,98.26,6.14,159.61,9.86"/>
					<path class="st2" d="M510.31,444.34c4.3-6.5,7.28-15.72,6.86-22.93c-0.59-10.1-1.29-20.25-3.46-30.13
						c-1.99-9.03-5.19-17.75-7.58-26.68c-2.39-8.94-5.38-20.39-4.01-29.54s4.52-18.3,12.55-22.89c11.56-6.61,23.7-2.76,30.39,3.63
						c6.72,6.43,14.2,16.84,13.87,42.28c-0.31,24.19-2.97,26.32-3.3,50.59c-0.08,5.53-2.17,17.09,0.7,21.82
						c4.27,7.03,12.95,9.66,20.17,13.59c6.98,3.8,13.06,9.23,17.6,15.75"/>
					<path class="st2" d="M514.89,437.33c6.82,0,14.85-1.06,21.36-1.54c5.58-0.41,12.24-1.75,17.61-3.3c14.3-4.13,21-9.11,33.37-16.89"
						/>
					<rect x="19.3" y="-0.54" class="st3" width="1400" height="700.54"/>
					<g>
						<polygon class="st4" points="639.57,350.71 639.57,266.37 692.12,266.37 			"/>
						<rect x="589.65" y="188.83" class="st4" width="387.95" height="101.2"/>
					</g>
					<g>
						<rect x="617.26" y="212.75" class="st3" width="364.95" height="35.03"/>
						<text transform="matrix(1 0 0 1 617.2576 233.1787)" class="st5 st6 st7">German School Brooklyn</text>
						<rect x="617.26" y="248.02" class="st3" width="364.95" height="35.03"/>
						<text transform="matrix(1 0 0 1 617.2576 261.6386)" class="st5 st6 st8">17 Eastern Parkway</text>
					</g>
					<path class="st9" d="M351.14,705.78l162.9-268.31l-19.65-18.08c0,0-27.74-18.05-29.35-71.77c-1.19-39.97,1.6-56.59,6.2-64.26
						s21.23-45.61,47.3-44.08c26.07,1.53,40.92,22.06,47.06,28.19c6.13,6.13,27.3,41.23,31.05,66.49c2.32,15.65,3.14,31.05-1.21,49.07
						c-2.19,9.07-7.67,33.73-7.67,33.73s33.03-6.25,47.24-4.21c14.2,2.04,43.9,5.81,59.23,10.41s91.34,38.27,102.08,41.34
						c10.73,3.07,116.54,41.4,116.54,41.4l30.67,201.47L351.14,705.78z"/>
					<circle class="st10" cx="637.28" cy="382.18" r="27.6"/>
					<g>
						<rect x="830.47" y="443.92" class="st11" width="42.94" height="42.94"/>
						<rect x="832" y="454.9" class="st3" width="39.87" height="30.43"/>
						<text transform="matrix(1 0 0 1 839.6677 475.3203)" class="st4 st6 st7">M</text>
					</g>
					<g>
						<rect x="1121.82" y="295.18" class="st11" width="42.94" height="42.94"/>
						<rect x="1123.35" y="306.16" class="st3" width="39.87" height="30.43"/>
						<text transform="matrix(1 0 0 1 1131.0154 326.5801)" class="st4 st6 st7">M</text>
					</g>
					<g>
						<rect x="444.05" y="224.64" class="st11" width="42.94" height="42.94"/>
						<rect x="445.58" y="235.62" class="st3" width="39.87" height="30.43"/>
						<text transform="matrix(1 0 0 1 453.2502 256.043)" class="st4 st6 st7">M</text>
					</g>
					<g>
						<rect x="375.05" y="86.64" class="st11" width="42.94" height="42.94"/>
						<rect x="376.58" y="97.61" class="st3" width="39.87" height="30.43"/>
						<text transform="matrix(1 0 0 1 384.2468 118.0366)" class="st4 st6 st7">M</text>
					</g>
					<rect x="586.66" y="569.14" class="st4" width="149.37" height="27.6"/>
					<rect x="478.43" y="575.51" class="st3" width="364.95" height="35.03"/>
					<text transform="matrix(1 0 0 1 596.6701 589.1289)" class="st11 st6 st8">Prospect Park</text>
					<rect x="1106.48" y="266.29" class="st3" width="73.6" height="35.03"/>
					<text transform="matrix(1 0 0 1 1135.155 286.7109)" class="st11 st6 st7">S</text>
					<rect x="805.94" y="413.49" class="st3" width="93.54" height="35.03"/>
					<text transform="matrix(1 0 0 1 815.7048 433.918)" class="st11 st6 st7">2, 3, 4</text>
					<rect x="419.52" y="192.68" class="st3" width="93.54" height="35.03"/>
					<text transform="matrix(1 0 0 1 429.2863 213.1074)" class="st11 st6 st7">2, 3, 4</text>
					<rect x="348.98" y="54.68" class="st3" width="93.54" height="35.03"/>
					<text transform="matrix(1 0 0 1 370.135 75.1011)" class="st11 st6 st7">B, Q</text>
					<path class="st2" d="M489.46,269.77c8.76,13.91,49.98,31.24,59.89,49.73"/>
					<path class="st2" d="M547.93,261.15c-4.26,15.87-39.81,44.1-43.81,64.7"/>
					<path class="st2" d="M493.26,422.42c6.98-1.27,22.78-5.89,22.78-15.99"/>
					<path class="st2" d="M557.44,390.91c3.96,5.5,15.91,17.74,29.8,17.74"/>
					<path class="st2" d="M514.12,393.27c6.16,13.35,16.51,37.79,23.86,42.37"/>
				</g>
			</g>
			</svg>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo esc_url( home_url( '/' )); ?>wp-content/themes/wp-bootstrap-gsb/script.js"></script>
</body>
</html>