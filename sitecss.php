<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/include/prepend.inc'; ?>
/* Let no border around the body appear, and set
   it to display on a white background */
body, html {
    margin: 0px;
    padding: 0px;
    background-color: white;
}

/* Quicksearch table cell on top of every page. */
td.quicksearch {
    color: white;
}

/* Horizontal delimiter defaults */
hr {
    border: 0px;
    color: black;
    background-color: black;
    height: 1px;
}

/* Event month header on homepage */
h4.eventmonth {
    border-style: solid;
    border-color: black;
    border-width: 0px 1px 1px 0px;
    background-color: lightgray;
    padding: 2px;
}

/* Inactive and active TOC elements in the left
   sidebar of the manual pages */
div.toci, div.toca {
    padding: 0 0 0 14px;
    background-image: url("<?php echo $_SERVER['STATIC_ROOT']; ?>/images/box-0.gif");
    background-repeat: no-repeat;
    background-position: center left;
}
div.toca {
    background-image: url("<?php echo $_SERVER['STATIC_ROOT']; ?>/images/box-1.gif");
}

body, ul, td, th {
	font-family: verdana,arial,helvetica,sans-serif;
	font-size: 85%;
}

p {
	font-family: verdana,arial,helvetica,sans-serif;
}

li {
	padding-top: 3px;
	padding-bottom: 3px;
}

em {
	font-weight: bold;
	font-style: italic;
}

acronym {
        border-bottom: 1px dashed #00cc00;
        cursor: help;
}

.error {
        color: #cc0000;
}

.newsDate {
	font-size: 75%;
	font-style: italic;
	color: #6666cc;
}

.sidebar {
	font-size: 80%;
	padding: 5px;
}

.sidebar p {
	text-align: left !important;
}

code, pre, tt {
	font-family: Courier, "Courier New", monospace;
}

h1 {
	font-family: verdana,arial,helvetica,sans-serif;
	font-size: 130%;
	font-weight: bold;
	color: #000066;
}

h2 {
	font-family: verdana,arial,helvetica,sans-serif;
	font-size: 125%;
	font-weight: bold;
	color: #000066;
}

h3 {
	font-family: verdana,arial,helvetica,sans-serif;
	font-size: 110%;
	font-weight: bold;
	color: #000066;
}

h4 {
	font-family: verdana,arial,helvetica,sans-serif;
	font-size: 100%;
	font-weight: bold;
	color: #000066;
}

small {
	font-family: verdana,arial,helvetica,sans-serif;
	font-size: 75%;
}

a.small {
	font-family: verdana,arial,helvetica,sans-serif;
	font-size: 75%;
	text-decoration: none;
}

.tableTitle {
	font-family: verdana,arial,helvetica,sans-serif;
	font-weight: bold;
}

.tableExtras {
	font-family: verdana,arial,helvetica,sans-serif;
	font-size: 85%;
	color: #FFFFFF;
}

input {
	font-family: verdana,arial,helvetica,sans-serif;
}

textarea {
	font-family: verdana,arial,helvetica,sans-serif;
}

input.small, select.small {
	font-family: verdana,arial,helvetica,sans-serif;
	font-size: 75%;
}

textarea.small {
	font-family: verdana,arial,helvetica,sans-serif;
	font-size: 75%;
}

p.formerror {
        border: 1px solid #ff0000;
        color: #000000;
        background: #ffeeee;
        padding: 2px 4px;
}

div.errors {
        border: 1px dashed #666600;
        color: #660000;
        background: #ffeeee;
        margin: 4px;
        padding: 6px;
}

div.tip {
        border: 1px solid #00c;
        color: #000066;
        background: #eeeeff;
        padding: 0px 8px;
}

table#cal {
        font-size: smaller;
}

table#cal a, .sidetoc a {
        text-decoration: none;
}
table#cal a:hover, .sidetoc a:hover {
        text-decoration: underline;
}

table#cal a.day {
        float: right;
        font-weight: bold;
        color: #666666;
}

table#cal div.event {
        margin-bottom: 2px;
        padding-bottom: 2px;
        border-bottom: 1px dashed #000000;
}

form.thin {
	margin-bottom: 0px;
	margin-top: 0px;
}

.parameter:after {
	content: " ";
}

div.mirror {  
	border: 1px dashed #660000;
	background: #ffeeee;
	color: #660000;
	margin: 4px;
	padding: 6px;
} 

img.flag {
	border: 1px solid #000000;
}

.md5sum {
	color: #6666cc;
}

/* Used on the credits page [.e, .h, .v and .vr] */
.e {
	background-color: #ccccff; 
	font-weight: bold;
}

.h {
	background-color: #9999cc; 
	font-weight: bold;
}

.v {
	background-color: #cccccc;
}

.vr {
	background-color: #cccccc; 
	text-align: right;
}
