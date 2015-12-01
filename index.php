* {
	padding:0;
	margin:0;
}
h1, h2, h3, h4, h5, h6, p, pre, blockquote, form, label, ul, ol, dl, fieldset, address { margin:0px 0; }
li, dd, blockquote { margin-left: 0px;}
fieldset { padding:0px; }

#container {
  width:100%;
}

.header, .navigation {
	font-family: "Times New Roman";
	font-size: 20px;
	width: 100%;
	list-style-type: none;
}
.header li {
  display: inline;
	padding: 8px 10px;
}
.navigation li{
	display: inline;
	padding: 15px 30px;
	border:1px solid transparent;
}
.header {
  text-align: right;
}
.navigation{
	text-align: left;
}
.header a, .navigation a {
	text-decoration: none;
	color: white;
}
.header ul {
	background-color: black;
	padding: 10px;
}
.navigation ul {
	background: linear-gradient(135deg, #131313 0%,#1c1c1c 9%,#2b2b2b 24%,#111111 40%,#595959 100%,#666666 100%,#474747 100%,#000000 100%,#2c2c2c 100%,#4c4c4c 100%);
	padding: 20px 0px;
	padding-left: 100px;
}

.header a:hover {
  text-decoration: underline;
	color: rgba(95,95,95,1);
}
.navigation li:hover {
  border-left: 1px solid rgba(88,88,88,0.4);
	border-right: 1px solid rgba(88,88,88,0.4);
}

body {
  background: url("http://pre00.deviantart.net/ebd2/th/pre/f/2008/290/e/2/nhl_wallpaper_by_sim25_design.jpg");
	background-size: cover;
  background-position: top;
}

h1 {
	margin: 40px 0px;
	text-align: center;
	font-size: 100px;
  color: black;
	text-shadow: 0 0 5px white, 0 0 10px white,
				 0 0 20px white, 0 0 30px white,
				 0 0 40px white;
	font-family: "Times New Roman"
  font-weight: thin;
}

.content, p {
	color: white;
	font-size: 40px;
	margin: 0;
}

.content {
	text-align: center;
	font-size: 35px;
	font-family: "Times New Roman"
	font-weight: thin;
	padding-bottom: 5px;
}
.content .login{
	margin: 70px 0px;
	margin-left:auto;
	margin-right:auto;
	width: 300px;
  background: linear-gradient(135deg, #131313 0%,#1c1c1c 9%,#2b2b2b 24%,#111111 40%,#595959 100%,#666666 100%,#474747 100%,#000000 100%,#2c2c2c 100%,#4c4c4c 100%);
	box-shadow: 0 0 5px white, 0 0 10px white,
				 			0 0 20px white, 0 0 30px white,
				 			0 0 40px white;

}
.content .search{
	margin: 70px 0px;
	margin-left:auto;
	margin-right:auto;
	width: 400px;
  background: linear-gradient(135deg, #131313 0%,#1c1c1c 9%,#2b2b2b 24%,#111111 40%,#595959 100%,#666666 100%,#474747 100%,#000000 100%,#2c2c2c 100%,#4c4c4c 100%);
	box-shadow: 0 0 5px white, 0 0 10px white,
				 			0 0 20px white, 0 0 30px white,
				 			0 0 40px white;
}

.content p{
	padding: 10px 0px;
  text-align: center;
  margin-bottom: 20px;
	border-bottom: 1px solid grey;
}
.content .login p{
	margin-bottom: 10px;
}

.content ul{
	margin-left: auto;
	margin-right: auto;
  width:440px;
}
.content li{
	padding: 5px 0px;
	list-style-type: none;
  float:left;
  width:200px;
}

.content input {
	font-family: "Times New Roman"
	font-weight: thin;
	margin:0;
  border: 0;
  padding: 10px;
  font-size: 18px;
	margin: 30px 0px;
}
.content .login .fields input{
	margin: 0 0 10px 0;
}

.content input[type="submit"]{
	font-family: "Times New Roman"
	font-weight: thin;
  background: black;
  color: white;
}
.content input[type="submit"]:hover {
	background: red;
}

.content ul {
	width: 400px;
}
.content li {
	float: left;
}
.content li:nth-child(even){
    margin-right:0;
}
