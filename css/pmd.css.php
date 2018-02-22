<?php
	/* vim: set expandtab sw=4 ts=4 sts=4: */
	/**
	 * Designer styles for the pmahomme theme
	 *
	 * @package	PhpMyAdmin-theme
	 * @subpackage PMAHomme
	 */
	use PhpMyAdmin\Theme;

	// unplanned execution path
	if (! defined('PHPMYADMIN') && ! defined('TESTSUITE')) {
		exit();
	}

	$headerImg = $theme->getImgPath('pmd/Header.png');
	$headerLinkedImg = $theme->getImgPath('pmd/Header_Linked.png');
	$minusImg = $theme->getImgPath('pmd/minus.png');
	$plusImg = $theme->getImgPath('pmd/plus.png');
	$leftPanelButtonImg = $theme->getImgPath('pmd/left_panel_butt.png');
	$topPanelImg = $theme->getImgPath('pmd/top_panel.png');
	$smallTabImg = $theme->getImgPath('pmd/small_tab.png');
	$frams1Img = $theme->getImgPath('pmd/1.png');
	$frams2Img = $theme->getImgPath('pmd/2.png');
	$frams3Img = $theme->getImgPath('pmd/3.png');
	$frams4Img = $theme->getImgPath('pmd/4.png');
	$frams5Img = $theme->getImgPath('pmd/5.png');
	$frams6Img = $theme->getImgPath('pmd/6.png');
	$frams7Img = $theme->getImgPath('pmd/7.png');
	$frams8Img = $theme->getImgPath('pmd/8.png');
	$resizeImg = $theme->getImgPath('pmd/resize.png');
?>

/* Designer */
.input_tab {
	background-color: #A6C7E1;
	color: #000;
}

.content_fullscreen {
	position: relative;
	overflow: auto;
}

#canvas_outer {
	position: relative;
	width: 100%;
	display: block;
}

#canvas {
	background-color: #fff;
	color: #000;
}

canvas.pmd {
	display: inline-block;
	overflow: hidden;
	text-align: left;
}

canvas.pmd * {
	behavior: url(#default#VML);
}

.pmd_tab {
	background-color: #fff;
	color: #000;
	border-collapse: collapse;
	border: 1px solid #aaa;
	z-index: 1;
	-moz-user-select: none;
}

.pmd_tab .header {
	background-image: url(<?= $headerImg; ?>);
	background-repeat: repeat-x;
}

.tab_zag {
	text-align: center;
	cursor: move;
	padding: 1px;
	font-weight: bold;
}

.tab_zag_2 {
	background-image: url(<?= $headerLinkedImg; ?>);
	background-repeat: repeat-x;
	text-align: center;
	cursor: move;
	padding: 1px;
	font-weight: bold;
}

.tab_field {
	background: #fff;
	color: #000;
	cursor: default;
}

.tab_field:hover, .tab_field_3:hover {
	background-color: #CCFFCC;
	color: #000;
	background-repeat: repeat-x;
	cursor: default;
}

.tab_field_3 {
	background-color: #FFE6E6; /*#DDEEFF*/
	color: #000;
	cursor: default;
}

#pmd_hint {
	white-space: nowrap;
	position: absolute;
	background-color: #99FF99;
	color: #000;
	z-index: 3;
	border: #00CC66 solid 1px;
	display: none;
}

.scroll_tab {
	overflow: auto;
	width: 100%;
	height: 500px;
}

.pmd_Tabs {
	cursor: default;
	color: #0055bb;
	white-space: nowrap;
	text-decoration: none;
	text-indent: 3px;
	font-weight: bold;
	margin-left: 2px;
	text-align: <?= $left; ?>;
	background-color: #fff;
	background-image: url(<?= $leftPanelButtonImg; ?>);
	border: #ccc solid 1px;
}

.pmd_Tabs:hover {
	cursor: default;
	color: #0055bb;
	background: #FFEE99;
	text-indent: 3px;
	font-weight: bold;
	white-space: nowrap;
	text-decoration: none;
	border: #9999FF solid 1px;
	text-align: <?= $left; ?>;
}

.owner {
	font-weight: normal;
	color: #888;
}

.option_tab {
	padding-left: 2px;
	padding-right: 2px;
	width: 5px;
}

.select_all {
	vertical-align: top;
	padding-left: 2px;
	padding-right: 2px;
	cursor: default;
	width: 1px;
	color: #000;
	background-image: url(<?= $headerImg; ?>);
	background-repeat: repeat-x;
}

.small_tab {
	vertical-align: top;
	background-color: #0064ea;
	color: #fff;
	background-image: url(<?= $smallTabImg; ?>);
	cursor: default;
	text-align: center;
	font-weight: bold;
	padding-left: 2px;
	padding-right: 2px;
	width: 1px;
	text-decoration: none;
}

.small_tab:hover {
	vertical-align: top;
	color: #fff;
	background-color: #FF9966;
	cursor: default;
	padding-left: 2px;
	padding-right: 2px;
	text-align: center;
	font-weight: bold;
	width: 1px;
	text-decoration: none;
}

.small_tab_pref {
	background-image: url(<?= $headerImg; ?>);
	background-repeat: repeat-x;
	text-align: center;
	width: 1px;
}

.small_tab_pref:hover {
	vertical-align: top;
	color: #fff;
	background-color: #FF9966;
	cursor: default;
	text-align: center;
	font-weight: bold;
	width: 1px;
	text-decoration: none;
}

.butt {
	border: #4477aa solid 1px;
	font-weight: bold;
	height: 19px;
	width: 70px;
	background-color: #fff;
	color: #000;
	vertical-align: baseline;
}

.L_butt2_1 {
	padding: 1px;
	text-decoration: none;
	vertical-align: middle;
	cursor: default;
}

.L_butt2_1:hover {
	padding: 0;
	border: #0099CC solid 1px;
	background: #FFEE99;
	color: #000;
	text-decoration: none;
	vertical-align: middle;
	cursor: default;
}

/* ---------------------------------------------------------------------------*/
.bor {
	width: 10px;
	height: 10px;
}

.frams1 {
	background: url(<?= $frams1Img; ?>) no-repeat right bottom;
}

.frams2 {
	background: url(<?= $frams2Img; ?>) no-repeat left bottom;
}

.frams3 {
	background: url(<?= $frams3Img; ?>) no-repeat left top;
}

.frams4 {
	background: url(<?= $frams4Img; ?>) no-repeat right top;
}

.frams5 {
	background: url(<?= $frams5Img; ?>) repeat-x center bottom;
}

.frams6 {
	background: url(<?= $frams6Img; ?>) repeat-y left;
}

.frams7 {
	background: url(<?= $frams7Img; ?>) repeat-x top;
}

.frams8 {
	background: url(<?= $frams8Img; ?>) repeat-y right;
}

#osn_tab {
	position: absolute;
	background-color: #fff;
	color: #000;
}

.pmd_header {
	background-color: #EAEEF0;
	color: #000;
	text-align: center;
	font-weight: bold;
	margin: 0;
	padding: 0;
	background-image: url(<?= $topPanelImg; ?>);
	background-position: top;
	background-repeat: repeat-x;
	border-right: #999 solid 1px;
	border-left: #999 solid 1px;
	height: 28px;
	z-index: 101;
	width: 100%;
	position: fixed;
}

.pmd_header a, .pmd_header span{
	display: block;
	float: <?= $left; ?>;
	margin: 3px 1px 4px;
	height: 20px;
	border: 1px dotted #fff;
}

.pmd_header .M_bord {
	display: block;
	float: <?= $left; ?>;
	margin: 4px;
	height: 20px;
	width: 2px;
}

.pmd_header a.first {
	margin-right: 1em;
}

.pmd_header a.last {
	margin-left: 1em;
}

a.M_butt_Selected_down_IE,
a.M_butt_Selected_down {
	border: 1px solid #C0C0BB;
	background-color: #99FF99;
	color: #000;
}

a.M_butt_Selected_down_IE:hover,
a.M_butt_Selected_down:hover,
a.M_butt:hover {
	border: 1px solid #0099CC;
	background-color: #FFEE99;
	color: #000;
}

#layer_menu {
	z-index: 98;
	position: relative;
	float: right;
	background-color: #EAEEF0;
	border: #999 solid 1px;
}

#layer_menu.left {
	float: left;
}

#layer_upd_relation {
	position: absolute;
	<?= $left; ?>: 637px;
	top: 224px;
	z-index: 100;
}

#layer_new_relation {
	position: absolute;
	<?= $left; ?>: 636px;
	top: 85px;
	z-index: 100;
	width: 153px;
}

#pmd_optionse {
	position: absolute;
	<?= $left; ?>: 636px;
	top: 85px;
	z-index: 100;
	width: 153px;
}

#layer_menu_sizer {
	background-image: url(<?= $resizeImg; ?>);
	cursor: ew-resize;
}

#layer_menu_sizer .icon {
	margin: 0;
}

.panel {
	position: fixed;
	top: 60px;
	<?= $right; ?>: 0;
	width: 350px;
	max-height: 500px;
	display: none;
	overflow: auto;
	padding-top: 34px;
	z-index: 102;
}

a.trigger {
	position: fixed;
	text-decoration: none;
	top: 60px;
	<?= $right; ?>: 0;
	color: #fff;
	padding: 10px 40px 10px 15px;
	background: #333 url(<?= $plusImg; ?>) 85% 55% no-repeat;
	border: 1px solid #444;
	display: block;
	z-index: 102;
}

a.trigger:hover {
	color: #080808;
	background: #fff696 url(<?= $plusImg; ?>) 85% 55% no-repeat;
	border: 1px solid #999;
}

a.active.trigger {
	background: #222 url(<?= $minusImg; ?>) 85% 55% no-repeat;
	z-index: 999;
}

a.active.trigger:hover {
	background: #fff696 url(<?= $minusImg; ?>) 85% 55% no-repeat;
}

.toggle_container .block {
	background-color: #DBE4E8;
	border-top: 1px solid #999;
}

.history_table {
	text-align: center;
	cursor: pointer;
	background-color: #DBE4E8;
}

.history_table:hover {
	background-color: #9999CC;
}

#ab {
	min-width: 300px;
}

#ab .ui-accordion-content {
	padding: 0;
}

#box {
	display: none;
}

#foreignkeychk {
	text-align: <?= $left; ?>;
	position: absolute;
	cursor: pointer;
}

.side-menu {
	float: left;
	position: fixed;
	width: auto;
	height: auto;
	background: #efefef;
	border: 1px solid grey;
	overflow: hidden;
	z-index: 50;
	padding: 2px;
}

.side-menu.right {
	float: right;
	right: 0;
}

.side-menu .hide {
	display: none;
}

.side-menu a {
	display: block;
	float: none;
	overflow: hidden;
}

.side-menu img,
.side-menu .text {
	float: left;
}

#name-panel {
	border-bottom: 1px solid grey;
	text-align: center;
	background: #efefef;
	width: 100%;
	font-size: 1.2em;
	padding: 10px;
	font-weight: bold;
}

#container-form {
	width: 100%;
	position: absolute;
	left: 0;
}
