


<link rel="stylesheet" href="{{asset('/new_assets')}}/styles.fbb88be0f92e13de4d4a.css" media="all" onload="this.media=&#39;all&#39;"><noscript>
    <link rel="stylesheet" href="styles.fbb88be0f92e13de4d4a.css">
</noscript>
<style></style>
<link rel="stylesheet" href="{{asset('/new_assets')}}/common.css">
<link rel="stylesheet" href="{{asset('/new_assets')}}/m-style.css">
<link rel="stylesheet" href="{{asset('/new_assets')}}/custom.css">
<link rel="stylesheet" href="{{asset('/new_assets')}}/theme.css">
<style>
    .header-bottom {
        overflow: auto
    }

    .header-bottom li a {
        white-space: nowrap
    }

    .modal-content-padding-custom {
        margin-top: 30%
    }

    .rae_btns {
        padding: 6px 0;
        font-size: 12px
    }

    .rae_btns span {
        font-size: 13px
    }

    .balance-information {
        border-bottom: 1px solid var(--theme2-bg85) !important;
        padding-bottom: 3px;
        padding-top: 3px
    }

    .balance-row {
        display: flex;
        align-items: center;
        color: #000;
        font-size: 13px;
        font-weight: 700;
        line-height: 25px;
        padding: 4px
    }

    .balance-text-left {
        font-weight: 300 !important;
        flex-basis: 55%;
        font-size: 13px;
        font-weight: 500;
        line-height: 1rem;
        color: #000
    }

    .balance-text-left small {
        font-size: 10px
    }

    .balance-price {
        color: var(--theme2-bg85)
    }

    .ab_rae_btns {
        border-bottom: 1px solid var(--theme2-bg85);
        padding: 5px
    }

    .ab_btns {
        background: var(--theme2-bg);
        color: #fff !important;
        border-radius: 100px;
        margin-bottom: 3px
    }

    .ab_btns,
    .rae_btns {
        text-align: center;
        line-height: normal
    }

    .rae_btns {
        border: 1px solid var(--theme2-bg);
        color: var(--theme2-bg);
        border-radius: 100px
    }

    .auth-link {
        background-color: var(--primary-color);
        color: var(--theme1-bg);
        padding: 5px 10px;
        text-decoration: none
    }

    .auth-mob {
        margin-top: 10px
    }

    .auth-mob .auth-link:first-child {
        background: var(--theme2-bg);
        color: #fff
    }

    .auth-mob .auth-link {
        margin-left: 4px;
        height: 40px;
        display: inline-flex;
        align-items: center;
        padding: 0 16px;
        border-radius: 2px;
        box-shadow: 0 0 1px 0 #000;
        color: #000;
        font-size: 13px;
        font-weight: 300
    }

    a.whatsapp_link {
        position: fixed;
        right: 4%;
        bottom: 3%;
        z-index: 9
    }

    a.whatsapp_link img {
        width: 75px;
        animation: simple-scale 1s linear 1s infinite alternate
    }

    @keyframes simple-scale {
        to {
            transform: scale(1.2)
        }
    }

    .btns__deposit_withdrawal {
        display: flex
    }

    .btns__deposit_withdrawal a {
        text-align: center;
        color: #fff;
        padding: 5px;
        text-transform: uppercase;
        font-size: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        font-weight: 900;
        border: 1px solid #fff;
        margin: 0 5px;
        text-decoration: none
    }

    a.btn_deposit {
        background: linear-gradient(180deg, #007b15, #138e00)
    }

    a.btn_withdrawal {
        background: linear-gradient(180deg, #7b0000, #d10000)
    }

    a.btn_deposit img,
    a.btn_withdrawal img {
        width: 22px;
        margin-right: 3px;
        filter: invert(1)
    }

    @media screen and (max-width: 767px) {
        .btns__deposit_withdrawal {
            display: flex;
            justify-content: end;
            width: 100%;
            padding: 3px 0
        }

        .btns__deposit_withdrawal a img {
            filter: invert(1);
            margin-right: 5px;
            width: 25px
        }

        a.btn_deposit,
        a.btn_withdrawal {
            width: 50%
        }
    }
</style>
<style>
    ul.live_virtual {
        list-style: none;
        padding: 0;
        display: flex !important;
        align-items: center;
        position: absolute;
        top: 1px;
        left: 5px;
        width: auto;
        margin: 0
    }

    ul.live_virtual li {
        display: inline
    }

    ul.live_virtual li label {
        display: inline-block;
        border: 1px solid var(--theme1-bg);
        color: var(--theme1-bg);
        border-radius: 25px;
        white-space: nowrap;
        margin: 0 1px;
        -webkit-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
        transition: all .2s;
        font-weight: 400;
        padding: 0 10px;
        cursor: pointer;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 2
    }

    ul.live_virtual li label:before {
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        font-size: 12px;
        padding-right: 2px;
        content: "-";
        transition: transform .3s ease-in-out;
        line-height: 0
    }

    ul.live_virtual li input[type=checkbox]:checked+label:before {
        content: "+";
        transform: rotate(-1turn);
        transition: transform .3s ease-in-out
    }

    ul.live_virtual li input[type=checkbox]:checked+label {
        border: 1px solid #00ad6f;
        background-color: #00ad6f;
        color: #fff;
        transition: all .2s
    }

    ul.live_virtual li input[type=checkbox] {
        display: absolute;
        position: absolute;
        opacity: 0
    }

    .home-animated {
        position: absolute;
        padding: 3px 10px;
        color: #fff;
        text-decoration: none;
        overflow: hidden;
        border-radius: 3px;
        background: var(--theme2-bg);
        right: 10px;
        bottom: 5px;
        font-size: 9px;
        text-transform: uppercase;
        animation: zoom-in-zoom-out 1s ease-out infinite
    }

    @keyframes zoom-in-zoom-out {
        0% {
            transform: scale(1)
        }

        50% {
            transform: scale(1.1)
        }

        to {
            transform: scale(1)
        }
    }

    .home-animated:hover {
        color: #000
    }

    .home-animated i {
        color: darkred
    }

    .home-animated span {
        border-radisu: 10px
    }

    .home-animated span:first-child {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 4px;
        border-radisu: 10px;
        background: linear-gradient(90deg, #fff400, #fff);
        animation: animate1 2s linear infinite
    }

    @keyframes animate1 {
        0% {
            transform: translateX(-100%)
        }

        to {
            transform: translateX(100%)
        }
    }

    .home-animated span:nth-child(2) {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 4px;
        background: linear-gradient(180deg, #05fb33, #fff);
        animation: animate2 2s linear infinite;
        animation-delay: 1s
    }

    @keyframes animate2 {
        0% {
            transform: translateY(-100%)
        }

        to {
            transform: translateY(100%)
        }
    }

    .home-animated span:nth-child(3) {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(270deg, #ff7d88, #fff);
        animation: animate3 2s linear infinite
    }

    @keyframes animate3 {
        0% {
            transform: translateX(100%)
        }

        to {
            transform: translateX(-100%)
        }
    }

    .home-animated span:nth-child(4) {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 4px;
        background: linear-gradient(0deg, #05d8fb, #fff);
        animation: animate4 2s linear infinite;
        animation-delay: 1s
    }

    @keyframes animate4 {
        0% {
            transform: translateY(100%)
        }

        to {
            transform: translateY(-100%)
        }
    }

    .popularDiv {
        position: relative;
        margin-bottom: 0
    }

    .popularDiv svg {
        position: absolute;
        width: 98%;
        margin: 0 auto;
        height: auto;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: #02020282
    }

    .popularDiv svg text {
        text-transform: uppercase;
        animation: stroke 3s infinite alternate;
        stroke-width: 3;
        stroke: red;
        font-size: 90px;
        font-family: fangsong
    }

    .popularDiv i {
        position: absolute;
        right: 15%;
        top: 6px;
        font-size: 15px;
        color: #fff;
        animation: bounce 3s cubic-bezier(.445, .05, .55, .95) infinite;
        height: auto;
        padding: 0
    }

    @keyframes bounce {
        50% {
            transform: translate(-15px);
            color: #ff0
        }
    }

    @keyframes stroke {
        0% {
            fill: #fff700;
            stroke: #fff;
            stroke-dashoffset: 25%;
            stroke-dasharray: 0 50%;
            stroke-width: 4
        }

        70% {
            fill: #fff200;
            stroke: #fff
        }

        80% {
            fill: #00ff07;
            stroke: #fff;
            stroke-width: 4px
        }

        to {
            fill: #d4ff00;
            stroke: #fff;
            stroke-dashoffset: -25%;
            stroke-dasharray: 50% 0;
            stroke-width: 0
        }
    }

    .new_games {
        font-size: 12px;
        position: absolute;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        left: 20%;
        right: 20%;
        bottom: 0;
        text-transform: uppercase;
        color: #fff;
        font-weight: 900;
        letter-spacing: 1px;
        padding: 2px 0;
        animation: newgames 2s infinite
    }

    @keyframes newgames {
        0% {
            opacity: .5;
            background: #000
        }

        to {
            opacity: 1;
            background: green
        }
    }

    .new_games:before {
        left: -10px;
        transform: skew(339deg)
    }

    .new_games:after,
    .new_games:before {
        content: "";
        width: 20px;
        height: 100%;
        position: absolute;
        top: 0;
        animation: newgames 2s infinite
    }

    .new_games:after {
        right: -10px;
        transform: skew(-339deg)
    }

    .casino-tables .container-fluid {
        padding: 0
    }

    .casino-tables .container-fluid .row {
        margin: 0
    }

    .casino-tables .container-fluid .row .col-3 {
        padding: 0
    }

    .sports .nav-tabs .nav-link em {
        display: none
    }

    .new-tag-menus-sb em {
        display: block;
        position: absolute;
        right: 0;
        top: 0;
        line-height: normal;
        font-style: normal;
        font-size: 7px;
        padding: 1px 4px;
        border-radius: 1px;
        font-weight: 900;
        text-transform: uppercase;
        animation: tagmenu 2s ease-out infinite
    }

    .casinoicons .casino-name {
        white-space: nowrap
    }

    .casinoicons img {
        height: 70px !important
    }
</style>
<style>
    [_nghost-rxg-c46] .nav-tabs .nav-item.disabled a.disabled {
        cursor: default
    }
</style>
<style>
    #loadInner {
        position: absolute !important;
        top: 0
    }
</style>