<!DOCTYPE html>
<html>
<head>
    <title>Overview</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <script src="./js/jquery.min.js"></script>
    <script src="./js/kendo.mobile.min.js"></script>
    <script src="./content/shared/js/console.js"></script>
    <link href="./styles/kendo.common.min.css" rel="stylesheet" />
    <link href="./styles/kendo.mobile.all.min.css" rel="stylesheet" />
</head>



<body>
    <div data-role="view" data-layout="overview-layout" id="overview-cities" data-title="Favourite Cities">
    <ul data-role="listview" data-style="inset" data-type="group">
        <li>
            Africa
            <ul>
                <li><h2>Nairobi</h2><img src="../../content/mobile/overview/nairobi.jpg" /></li>
            </ul>
        </li>
        <li>
            America
            <ul>
                <li><h2>Boston</h2><img src="../../content/mobile/overview/boston.jpg" /></li>
                <li><h2>Ottawa</h2><img src="../../content/mobile/overview/ottawa.jpg" /></li>
                <li><h2>San Francisco</h2><img src="../../content/mobile/overview/san-francisco.jpg" /></li>
            </ul>
        </li>
        <li>
            Asia
            <ul>
                <li><h2>Bombay</h2><img src="../../content/mobile/overview/bombay.jpg" /></li>
            </ul>
        </li>
        <li>
            Australia
            <ul>
                <li><h2>Melbourne</h2><img src="../../content/mobile/overview/melbourne.jpg" /></li>
                <li><h2>Sydney</h2><img src="../../content/mobile/overview/sydney.jpg" /></li>
            </ul>
        </li>
        <li>
            Europe
            <ul>
                <li><h2>Cannes</h2><img src="../../content/mobile/overview/cannes.jpg" /></li>
                <li><h2>Liverpool</h2><img src="../../content/mobile/overview/liverpool.jpg" /></li>
                <li><h2>London</h2><img src="../../content/mobile/overview/london.jpg" /></li>
            </ul>
        </li>
    </ul>
</div>

<div data-role="view" data-layout="overview-layout" id="overview-gallery" data-title="Photo Gallery">
    <div id="scrollview-container">
        <div data-role="scrollview">
            <div class="photo photo1"></div>

            <div class="photo photo2"></div>

            <div class="photo photo3"></div>

            <div class="photo photo4"></div>

            <div class="photo photo5"></div>

            <div class="photo photo6"></div>

            <div class="photo photo7"></div>

            <div class="photo photo8"></div>

            <div class="photo photo9"></div>

            <div class="photo photo10"></div>
        </div>
    </div>
</div>

<div data-role="view" data-layout="overview-layout" id="overview-contacts" data-title="My Contacts">
    <ul data-role="listview" data-type="group">
        <li>
            A
            <ul>
                <li><h2>Ann Devon</h2><img src="../../content/mobile/overview/ann.jpg" /></li>
                <li><h2>Annette Roulet</h2><img src="../../content/mobile/overview/annette.jpg" /></li>
                <li><h2>Antonio Moreno</h2><img src="../../content/mobile/overview/antonio.jpg" /></li>
            </ul>
        </li>
        <li>
            C
            <ul>
                <li><h2>Carine Schmitt</h2><img src="../../content/mobile/overview/carine.jpg" /></li>
                <li><h2>Catherine Dewey</h2><img src="../../content/mobile/overview/catherine.jpg" /></li>
            </ul>
        </li>
        <li>
           D
            <ul>
                <li><h2>Daniel Tonini</h2><img src="../../content/mobile/overview/daniel.jpg" /></li>
                <li><h2>Diego Roel</h2><img src="../../content/mobile/overview/diego.jpg" /></li>
            </ul>
        </li>
        <li>
            E
            <ul>
                <li><h2>Eduardo Saavedra</h2><img src="../../content/mobile/overview/eduardo.jpg" /></li>
                <li><h2>Elizabeth Brown</h2><img src="../../content/mobile/overview/elizabeth.jpg" /></li>
            </ul>
        </li>
        <li>
            F
            <ul>
                <li><h2>Felipe Izquierdo</h2><img src="../../content/mobile/overview/felipe.jpg" /></li>
                <li><h2>Fran Wilson</h2><img src="../../content/mobile/overview/fran.jpg" /></li>
                <li><h2>Francisco Chang</h2><img src="../../content/mobile/overview/francisco.jpg" /></li>
            </ul>
        </li>
    </ul>
</div>

<div data-role="view" data-layout="overview-layout" data-init="mobileAccountViewInit" id="overview-account" data-title="Account Settings">
    <ul id="settings-view" data-index="0">
        <li>
            Profile
        </li>
        <li>
            General
        </li>
        <li>
            Group
        </li>
    </ul>
    <ul data-role="listview" data-style="inset" data-type="group">
        <li>
            Profile
            <ul>
                <li><h2>Christina <span>Berglund</span></h2><img src="../../content/mobile/overview/christina.jpg" /></li>
                <li>Username <span class="value">christina</span></li>
                <li>Email <span class="value">clientservice at kendoui.com</span></li>
            </ul>
        </li>
        <li>
            Languages
            <ul>
                <li>English <span class="value">Native</span></li>
                <li>French<span class="value">Advanced</span></li>
            </ul>
        </li>
        <li>
            PC Skills
            <ul>
                <li>MS Word</li>
                <li>MS Excel</li>
                <li>MS Outlook</li>
                <li>MS PowerPoint</li>
                <li>Windows (XP, Vista)</li>
                <li>Internet</li>
            </ul>
        </li>
    </ul>
    <ul data-role="listview" data-style="inset" data-type="group" style="display:none">
        <li>
            General Settings
            <ul>
                <li>Notifications <input type="checkbox" data-role="switch" checked></li>
                <li>Local Services <input type="checkbox" data-role="switch"></li>
                <li><a>About</a></li>
            </ul>
        </li>
    </ul>
    <ul data-role="listview" data-style="inset" data-type="group" style="display:none">
        <li>
            Group
            <ul>
                <li><a>Your Group Name</a></li>
                <li><a>Group Email</a></li>
            </ul>
        </li>
    </ul>
</div>

<div data-role="layout" data-id="overview-layout">
    <header data-role="header">
        <div data-role="navbar">
            <!--a class="nav-button" data-align="left" data-role="backbutton">Back</a-->
            <span data-role="view-title">My Contacts</span>
<a class="index-button" data-align="left" data-role="button" data-click="changeSkin">Flat</a>
            <a data-align="right" data-role="button" class="nav-button" href="#index">Index</a>
        </div>
    </header>

    <footer data-role="footer">
        <div data-role="tabstrip">
            <a data-icon="globe" href="#overview-cities">Cities
            </a><a data-icon="organize" href="#overview-gallery">Gallery
            </a><a data-icon="contacts" href="#overview-contacts">Contacts
            </a><a data-icon="settings" href="#overview-account">My Account</a>
        </div>
    </footer>
</div>

<script>
    function mobileAccountViewInit() {
        var listviews = this.element.find("ul.km-listview");

        $("#settings-view").kendoMobileButtonGroup({
            select: function() {
                listviews.hide()
                         .eq(this.selectedIndex)
                         .show();
            },
            index: 0
        });
    }
</script>

<style scoped>
#overview-contacts h2,
#overview-cities h2 {
    display: inline-block;
    font-size: 1.1em;
    margin: 1em 0 .5em 1em;
}
#overview-account h2 {
    display: inline-block;
    font-size: 1.1em;
    margin: 1.5em 0 0 .6em;
}
#overview-account h2 span {
    display: block;
    clear: both;
    font-size: 1.8em;
    margin: .1em 0 0 0;
}
#overview-contacts img,
#overview-cities img,
#overview-account img {
    float: left;
    width: 4em;
    height: 4em;
    margin: 0;
    -webkit-box-shadow: 0 1px 3px #333;
    box-shadow: 0 1px 3px #333;
    -webkit-border-radius: 8px;
    border-radius: 8px;
}

.km-flat #overview-contacts img,
.km-flat #overview-cities img,
.km-flat #overview-account img {
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,.1);
    box-shadow: 0 0 0 1px rgba(0,0,0,.1);
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

#overview-account img {
    width: 5em;
    height: 5em;
    margin: 1em;
}
#overview-account .value {
    float: right;
    color: #ccc;
}
#settings-view {
    margin: 1em auto .4em auto;
}
#overview-gallery .photo {
    width: 277px;
    margin: 20px 20px 7px;
    height: 220px;
    display: inline-block;
    -webkit-background-size: auto 100%;
    background-size: auto 100%;
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-transform: translatez(0);
}
.km-wp #overview-gallery .photo {
    width: 15em;
    height: 15em;
}
.photo1 {background-image: url("../../content/mobile/cities/220/sydney.jpg");}
.photo2 {background-image: url("../../content/mobile/cities/220/bonn.jpg");}
.photo3 {background-image: url("../../content/mobile/cities/220/boston.jpg");}
.photo4 {background-image: url("../../content/mobile/cities/220/cairo.jpg");}
.photo5 {background-image: url("../../content/mobile/cities/220/cancun.jpg");}
.photo6 {background-image: url("../../content/mobile/cities/220/cape-town.jpg");}
.photo7 {background-image: url("../../content/mobile/cities/220/liverpool.jpg");}
.photo8 {background-image: url("../../content/mobile/cities/220/london.jpg");}
.photo9 {background-image: url("../../content/mobile/cities/220/melbourne.jpg");}
.photo10 {background-image: url("../../content/mobile/cities/220/san-francisco.jpg");}

#scrollview-container {
    margin: 3px 0 1em 0;
    padding-bottom: 10px;
    background: rgba(0,0,0,.1);
    border: 1px solid rgba(0,0,0,.3);
    border-width: 1px 0;
    box-shadow: 0 1px 1px rgba(255,255,255,.3);
}
.km-flat #scrollview-container {
    background: transparent;
    border: 0;
    box-shadow: none;
}
#overview-gallery .km-ios .km-content {
    background: #bbb;
}
</style>


    <script>
        document.title = "";

        function triggerIndexButton(e) {
            var viewID = e.view.element.attr("id");
            e.layout.header.find(".index-button").css({display: viewID != "index" ? "none" : ""});
            e.layout.header.find(".nav-button").css({display: viewID != "index" ? "" : "none"});
        }



        window.kendoMobileApplication = new kendo.mobile.Application($(document.body), {
            skin : "flat",
            layout: "examples",
            transition: "slide",
            icon: {
                "" : '/favicon.png',
                "72x72" : '/favicon.png',
                "114x114" : '/favicon114.png'
            }
        });
    </script>


</body>
</html>
