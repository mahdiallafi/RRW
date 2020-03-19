<!-- FOOTER START -->
<div class="footer">
    <div class="container">
        <div class="col">
            <h1>Company</h1>
            <ul>
                <li>About</li>
                <li>Mission</li>
                <li>Services</li>
                <li>Social</li>
                <li>Get in touch</li>
            </ul>
        </div>
        <div class="col">
            <h1>Products</h1>
            <ul>
                <li>About</li>
                <li>Mission</li>
                <li>Services</li>
                <li>Social</li>
                <li>Get in touch</li>
            </ul>
        </div>
        <div class="col">
            <h1>Accounts</h1>
            <ul>
                <li>About</li>
                <li>Mission</li>
                <li>Services</li>
                <li>Social</li>
                <li>Get in touch</li>
            </ul>
        </div>
        <div class="col">
            <h1>Resources</h1>
            <ul>
                <li>Webmail</li>
                <li>Redeem code</li>
                <li>WHOIS lookup</li>
                <li>Site map</li>
                <li>Web templates</li>
                <li>Email templates</li>
            </ul>
        </div>
        <div class="col">
            <h1>Support</h1>
            <ul>
                <li>Contact us</li>
                <li>Web chat</li>
                <li>Open ticket</li>
            </ul>
        </div>
        <div class="col social">
            <h1 class="text-center">Connect</h1>
            <ul>
                <li><i class="fab fa-facebook-square facebook fb"></i></li>
                <li><i class="fab fa-twitter twitter"></i></li>
                <li><i class="fab fa-instagram instagram"></i></li>
                <li><i class="fab fa-github github"></i></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- END OF FOOTER -->

<style>
    #main {
        overflow: auto;
    }

    .footer {
        width: 100%;
        position: sticky;
        height: auto;
        background-color: #070617;
        margin-top:25%;
    }

    .footer .col {
        width: 190px;
        height: auto;
        float: left;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        padding: 0px 20px 20px 20px;
    }

    .footer .col h1 {
        margin: 0;
        padding: 0;
        font-family: inherit;
        font-size: 12px;
        line-height: 17px;
        padding: 20px 0px 5px 0px;
        color: rgba(255, 255, 255, 0.2);
        font-weight: normal;
        text-transform: uppercase;
        letter-spacing: 0.250em;
    }

    .footer .col ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .footer .col ul li {
        color: #999999;
        font-size: 14px;
        font-family: inherit;
        font-weight: bold;
        padding: 5px 0px 5px 0px;
        cursor: pointer;
        transition: .2s;
        -webkit-transition: .2s;
        -moz-transition: .2s;
    }

    .social ul li {
        display: inline-block;
        padding-right: 5px !important;
    }

    .footer .col ul li:hover:not(.facebook) {
        color: #ffffff;
        transition: .1s;
        -webkit-transition: .1s;
        -moz-transition: .1s;
    }

    .clearfix {
        clear: both;
    }

    .facebook {
        padding: 10px;
    }

    .facebook:hover {
        color: #3B5998;
    }

    .instagram {
        padding: 2px;
    }

    .instagram:hover {

        position: relative;
        margin: .5*$size auto 0;
        width: $size;
        height: $size;
        border-radius: 18.5%;
        box-shadow: 0 0 $blur rgba(#000, .5);
        background: radial-gradient(circle at 33% 100%, #FED373 4%, #F15245 30%, #D92E7F 62%, #9B36B7 85%, #515ECF);

        &:before,
        &:after {
            position: absolute;
            top: 50%;
            left: 50%;
            width: $inner;
            height: $inner;
            border: solid $bw #fff;
            transform: translate(-50%, -50%);
            content: '';
        }

        &:before {
            border-radius: 18.5%;
        }

        &:after {
            width: $diam;
            height: $diam;
            border-radius: 50%;
            box-shadow: $off (-$off) 0 (-.8*$off) #fff;
        }
    }

    .twitter{
        padding: 10px;
    }

    .twitter:hover {
        color: #00B6F1;
        transition: .1s;
        -webkit-transition: .1s;
        -moz-transition: .1s;
    }

    .github{
        padding:10px;
    }

    .github:hover{
        color: white;
        transition: .1s;
        -webkit-transition: .1s;
        -moz-transition: .1s; 
    }
</style>