{{-- TODO: Acomodar y linkear --}}
<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:400,800);


    html,
    body {
        height: 100%;
    }

    *,
    *:after,
    *:before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    /* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
    .clearfix:before,
    .clearfix:after {
        content: " ";
        display: table;
    }

    .clearfix:after {
        clear: both;
    }

    .clearfix {
        *zoom: 1;
    }

    body {
        font-family: 'Lato', Calibri, Arial, sans-serif;
        background: #333;
        font-weight: 400;
        font-size: 15px;
        color: #fff;
        overflow: scroll;
        overflow-x: hidden;
    }

    a {
        color: #555;
        text-decoration: none;
    }

    .wrapper-table {
        display: table;
        width: 100%;
        height: 100%;
    }

    .wrapper-vertical {
        display: table-cell;
        vertical-align: middle;
    }

    .wrapper-horizontal {
        min-height: 350px;
        width: 50%;
        max-width: 500px;
        margin: auto;
        position: relative;
    }

    .wrapper-square {
        display: inline-block;
        position: relative;
        width: 100%;
    }

    .wrapper-square-dummy {
        margin-top: 100%;
    }

    .wrapper-square-element {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .hidden {
        display: none;
    }

    .bk-book {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transition: -webkit-transform .5s, margin .5s;
        -moz-transition: -moz-transform .5s, margin .5s;
        transition: transform .5s, margin .5s;
    }

    .bk-book>div,
    .bk-front>div {
        display: block;
        position: absolute;
    }

    .bk-front {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform-origin: 0% 50%;
        -moz-transform-origin: 0% 50%;
        transform-origin: 0% 50%;
        -webkit-transition: -webkit-transform .5s;
        -moz-transition: -moz-transform .5s;
        transition: transform .5s;
        -webkit-transform: translate3d(0, 0, 20px);
        -moz-transform: translate3d(0, 0, 20px);
        transform: translate3d(0, 0, 20px);
        z-index: 10;
    }

    .bk-front>div {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .bk-page {
        -webkit-transform: translate3d(0, 0, 19px);
        -moz-transform: translate3d(0, 0, 19px);
        transform: translate3d(0, 0, 19px);
        display: none;
        width: 100%;
        height: 100%;
        overflow: hidden;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
        z-index: 9;
    }

    .bk-page>div {
        margin-left: -100%;
    }

    .bk-front,
    .bk-back,
    .bk-front>div {
        width: 100%;
        height: 100%;
    }

    .bk-left,
    .bk-right {
        width: 40px;
        left: -20px;
    }

    .bk-top,
    .bk-bottom {
        width: 495px;
        height: 40px;
        top: -15px;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .bk-back {
        -webkit-transform: rotate3d(0, 1, 0, -180deg) translate3d(0, 0, 20px);
        -moz-transform: rotate3d(0, 1, 0, -180deg) translate3d(0, 0, 20px);
        transform: rotate3d(0, 1, 0, -180deg) translate3d(0, 0, 20px);
    }

    .bk-cover-back {
        background-color: #000;
        -webkit-transform: rotate3d(0, 1, 0, -180deg);
        -moz-transform: rotate3d(0, 1, 0, -180deg);
        transform: rotate3d(0, 1, 0, -180deg);
        overflow: hidden;
    }

    .bk-right {
        height: 390px;
        top: 5px;
        -webkit-transform: rotate3d(0, 1, 0, 90deg) translate3d(0, 0, 295px);
        -moz-transform: rotate3d(0, 1, 0, 90deg) translate3d(0, 0, 295px);
        transform: rotate3d(0, 1, 0, 90deg) translate3d(0, 0, 295px);
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .bk-left {
        height: 100%;
        -webkit-transform: rotate3d(0, 1, 0, -90deg);
        -moz-transform: rotate3d(0, 1, 0, -90deg);
        transform: rotate3d(0, 1, 0, -90deg);
    }

    .bk-top {
        -webkit-transform: rotate3d(1, 0, 0, 90deg);
        -moz-transform: rotate3d(1, 0, 0, 90deg);
        transform: rotate3d(1, 0, 0, 90deg);
    }

    .bk-bottom {
        -webkit-transform: rotate3d(1, 0, 0, -90deg) translate3d(0, 0, 390px);
        -moz-transform: rotate3d(1, 0, 0, -90deg) translate3d(0, 0, 390px);
        transform: rotate3d(1, 0, 0, -90deg) translate3d(0, 0, 390px);
    }

    /* Transform classes */

    .bk-viewinside {
        margin-left: 47%;
    }

    .bk-viewinside .bk-front {
        -webkit-transform: translate3d(0, 0, 20px) rotate3d(0, 1, 0, -160deg);
        -moz-transform: translate3d(0, 0, 20px) rotate3d(0, 1, 0, -160deg);
        transform: translate3d(0, 0, 20px) rotate3d(0, 1, 0, -160deg);
    }

    .bk-book.bk-viewinside {
        -webkit-transform: translate3d(0, 0, 200px) rotate3d(0, 1, 0, 0deg);
        -moz-transform: translate3d(0, 0, 200px) rotate3d(0, 1, 0, 0deg);
        transform: translate3d(0, 0, 200px) rotate3d(0, 1, 0, 0deg);
    }

    .bk-book.bk-viewback {
        -webkit-transform: translate3d(0, 0, 0px) rotate3d(0, 1, 0, 180deg);
        -moz-transform: translate3d(0, 0, 0px) rotate3d(0, 1, 0, 180deg);
        transform: translate3d(0, 0, 0px) rotate3d(0, 1, 0, 180deg);
    }

    .bk-viewback .bk-back {
        z-index: 10;
    }

    /* Main colors and content */

    .bk-front:after {
        content: '';
        position: absolute;
        top: 1px;
        bottom: 1px;
        left: -1px;
        width: 0px;
    }

    .bk-cover:after,
    .bk-back:after {
        content: '';
        position: absolute;
        top: 0;
        left: 10px;
        bottom: 0;
        width: 3px;
        background: rgba(0, 0, 0, 0.06);
    }

    .bk-back:after {
        left: auto;
        right: 10px;
    }

    /* Individual style */

    .bk-book .bk-front>div,
    .bk-book .bk-back,
    .bk-book .bk-left,
    .bk-book .bk-front:after {
        background-color: #241F20;
    }

    .bk-book .bk-cover {
        display: table;
        width: 100%;
        height: 100%;
        overflow: hidden;
        cursor: default;
    }

    .bk-book .bk-cover .color-container {
        position: absolute;
        width: 100%;
        height: 10%;
        bottom: 0;
        left: 0;
        -webkit-transition: top 0.5s, bottom 0.5s;
        -moz-transition: top 0.5s, bottom 0.5s;
        transition: top 0.5s, bottom 0.5s;
        cursor: pointer;
    }

    .bk-book .bk-cover .color-container.before {
        top: 0;
    }

    .bk-book .bk-cover .color-container.hidden {
        bottom: -10%;
        display: block;
    }

    .bk-book .bk-cover .color-container.before.hidden {
        top: -10%;
        display: block;
    }

    .bk-book .bk-cover .color-square {
        width: 10%;
        height: 100%;
        display: block;
        float: left;
        margin: 0;
        padding: 0;
    }

    .bk-book .bk-cover .bk-title {
        display: table-cell;
        vertical-align: middle;
        color: #fff;
        text-transform: uppercase;
    }

    .bk-book .bk-cover .bk-title div {
        display: block;
        width: 343px;
        margin: auto;
    }

    .bk-book .bk-cover .bk-title h1 {
        font: 800 4em "open sans";
        line-height: 1em;
    }

    .bk-book .bk-cover .bk-title h2 {
        text-align: right;
        font: 800 1em "open sans";
    }

    .bk-book .bk-cover .bk-title h2.before {
        text-align: left;
        margin-left: 3px;
        line-height: 1em;
    }

    .highlight {
        color: #ED5565;
    }

    .bk-book .bk-cover h3 {
        position: absolute;
        bottom: 15%;
        left: 0;
        text-align: center;
        width: 100%;
        font: 800 0.7em "open sans";
        color: #fff;
        text-transform: uppercase;
    }

    .bk-book .bk-content p {
        font-family: Georgia, Times, "Times New Roman", serif;
    }

    .bk-book .bk-left h2 {
        color: #fff;
        font-size: 15px;
        line-height: 40px;
        padding-right: 10px;
        text-align: right;
    }

    .bk-book .bk-back {
        display: table;
        overflow: hidden;
    }

    .bk-book .bk-back p {
        color: #fff;
        font-size: 0.9em;
        padding: 40px;
        text-align: center;
        font-weight: 700;
        position: absolute;
        width: 100%;
    }

    .bk-book .bk-back h1 {
        font: 800 8em "open sans";
        text-align: center;
        height: 100%;
        display: table-cell;
        vertical-align: middle;
    }

    .bk-book .bk-page .color-square,
    .bk-book .bk-cover-back .color-square {
        display: table;
        width: 50%;
        height: 100%;
        float: left;
        font: 800 8em "open sans";
        text-align: center;
        color: #333;
    }

    .bk-book .bk-page .color-square span,
    .bk-book .bk-cover-back .color-square span {
        display: table-cell;
        vertical-align: middle;
    }

    /* Colors */

    .background-color-ED5565 {
        background-color: #ED5565
    }

    .color-ED5565 {
        color: #ED5565
    }

    .background-color-DA4453 {
        background-color: #DA4453
    }

    .color-DA4453 {
        color: #DA4453
    }

    .background-color-FC6E51 {
        background-color: #FC6E51
    }

    .color-FC6E51 {
        color: #FC6E51
    }

    .background-color-E9573F {
        background-color: #E9573F
    }

    .color-E9573F {
        color: #E9573F
    }

    .background-color-FFCE54 {
        background-color: #FFCE54
    }

    .color-FFCE54 {
        color: #FFCE54
    }

    .background-color-FCBB42 {
        background-color: #FCBB42
    }

    .color-FCBB42 {
        color: #FCBB42
    }

    .background-color-A0D468 {
        background-color: #A0D468
    }

    .color-A0D468 {
        color: #A0D468
    }

    .background-color-8CC152 {
        background-color: #8CC152
    }

    .color-8CC152 {
        color: #8CC152
    }

    .background-color-48CFAD {
        background-color: #48CFAD
    }

    .color-48CFAD {
        color: #48CFAD
    }

    .background-color-37BC9B {
        background-color: #37BC9B
    }

    .color-37BC9B {
        color: #37BC9B
    }

    .background-color-4FC1E9 {
        background-color: #4FC1E9
    }

    .color-4FC1E9 {
        color: #4FC1E9
    }

    .background-color-3BAFDA {
        background-color: #3BAFDA
    }

    .color-3BAFDA {
        color: #3BAFDA
    }

    .background-color-5D9CEC {
        background-color: #5D9CEC
    }

    .color-5D9CEC {
        color: #5D9CEC
    }

    .background-color-4A89DC {
        background-color: #4A89DC
    }

    .color-4A89DC {
        color: #4A89DC
    }

    .background-color-AC92EC {
        background-color: #AC92EC
    }

    .color-AC92EC {
        color: #AC92EC
    }

    .background-color-967ADC {
        background-color: #967ADC
    }

    .color-967ADC {
        color: #967ADC
    }

    .background-color-EC87C0 {
        background-color: #EC87C0
    }

    .color-EC87C0 {
        color: #EC87C0
    }

    .background-color-D770AD {
        background-color: #D770AD
    }

    .color-D770AD {
        color: #D770AD
    }

    .background-color-AAB2BD {
        background-color: #AAB2BD
    }

    .color-AAB2BD {
        color: #AAB2BD
    }

    .background-color-656D78 {
        background-color: #656D78
    }

    .color-656D78 {
        color: #656D78
    }

    /* Fallbacks */

    .no-csstransforms3d .bk-book>div,
    .no-csstransforms3d .bk-book .bk-cover-back {
        display: none;
    }

    .no-csstransforms3d .bk-book>div.bk-front {
        display: block;
    }

    .no-csstransforms3d .bk-info button,
    .no-js .bk-info button {
        display: none;
    }

    @media (max-width: 700px) {
        body {
            font-size: 50%;
        }

        .bk-book .bk-cover .bk-title div {
            width: 184px;
        }
    }

    @media (max-width: 430px) {
        body {
            font-size: 35%;
        }

        .bk-book .bk-cover .bk-title div {
            width: 128px;
        }
    }

    .bb-bookblock {
        width: 200%;
        height: 100%;
        margin: 0 auto;
        overflow: hidden;
        position: relative;
        z-index: 100;
        -webkit-perspective: 1300px;
        -moz-perspective: 1300px;
        perspective: 1300px;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .bb-page {
        position: absolute;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transition-property: -webkit-transform;
        -moz-transition-property: -moz-transform;
        transition-property: transform;
    }

    .bb-vertical .bb-page {
        width: 50%;
        height: 100%;
        left: 50%;
        -webkit-transform-origin: left center;
        -moz-transform-origin: left center;
        transform-origin: left center;
    }

    .bb-horizontal .bb-page {
        width: 100%;
        height: 50%;
        top: 50%;
        -webkit-transform-origin: center top;
        -moz-transform-origin: center top;
        transform-origin: center top;
    }

    .bb-page>div,
    .bb-outer,
    .bb-content,
    .bb-inner {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
    }

    .bb-outer {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .bb-vertical .bb-content {
        width: 200%;
    }

    .bb-horizontal .bb-content {
        height: 200%;
    }

    .bb-page>div {
        width: 100%;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .bb-page>div:not(:only-child) {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .bb-vertical .bb-back {
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .bb-horizontal .bb-back {
        -webkit-transform: rotateX(-180deg);
        -moz-transform: rotateX(-180deg);
        transform: rotateX(-180deg);
    }

    .bb-outer {
        width: 100%;
        overflow: hidden;
        z-index: 999;
    }

    .bb-overlay,
    .bb-flipoverlay {
        background-color: rgba(0, 0, 0, 0.7);
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

    .bb-flipoverlay {
        background-color: rgba(0, 0, 0, 0.2);
    }

    /* */

    .bb-bookblock.bb-vertical>div.bb-page:first-child,
    .bb-bookblock.bb-vertical>div.bb-page:first-child .bb-back {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .bb-bookblock.bb-horizontal>div.bb-page:first-child,
    .bb-bookblock.bb-horizontal>div.bb-page:first-child .bb-back {
        -webkit-transform: rotateX(180deg);
        -moz-transform: rotateX(180deg);
        transform: rotateX(180deg);
    }

    /* Content display */
    .bb-vertical .bb-front .bb-content {
        left: -100%;
    }

    .bb-horizontal .bb-front .bb-content {
        top: -100%;
    }

    /* Flipping classes */
    .bb-vertical .bb-flip-next,
    .bb-vertical .bb-flip-initial {
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .bb-vertical .bb-flip-prev {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        transform: rotateY(0deg);
    }

    .bb-horizontal .bb-flip-next,
    .bb-horizontal .bb-flip-initial {
        -webkit-transform: rotateX(180deg);
        -moz-transform: rotateX(180deg);
        transform: rotateX(180deg);
    }

    .bb-horizontal .bb-flip-prev {
        -webkit-transform: rotateX(0deg);
        -moz-transform: rotateX(0deg);
        transform: rotateX(0deg);
    }

    .bb-vertical .bb-flip-next-end {
        -webkit-transform: rotateY(-15deg);
        -moz-transform: rotateY(-15deg);
        transform: rotateY(-15deg);
    }

    .bb-vertical .bb-flip-prev-end {
        -webkit-transform: rotateY(-165deg);
        -moz-transform: rotateY(-165deg);
        transform: rotateY(-165deg);
    }

    .bb-horizontal .bb-flip-next-end {
        -webkit-transform: rotateX(15deg);
        -moz-transform: rotateX(15deg);
        transform: rotateX(15deg);
    }

    .bb-horizontal .bb-flip-prev-end {
        -webkit-transform: rotateX(165deg);
        -moz-transform: rotateX(165deg);
        transform: rotateX(165deg);
    }

    .bb-item {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
    }

    /* No JS */
    .no-js .bb-bookblock,
    .no-js ul.bb-custom-grid li {
        width: auto;
        height: auto;
    }

    .no-js .bb-item {
        display: block;
        position: relative;
    }
</style>
<div class="portfolio wrapper-table">
    <div class="wrapper-vertical">
        <div class="wrapper-horizontal">
            <div class="wrapper-square">
                <div class="wrapper-square-dummy"></div>
                <div class="wrapper-square-element">
                    <div class="bk-book bk-bookdefault">
                        <div class="bk-front">
                            <div class="bk-cover">
                                <div class="color-container hidden before clearfix">
                                    <div class="color-square background-color-ED5565"></div>
                                    <div class="color-square background-color-DA4453"></div>
                                    <div class="color-square background-color-FC6E51"></div>
                                    <div class="color-square background-color-E9573F"></div>
                                    <div class="color-square background-color-FFCE54"></div>
                                    <div class="color-square background-color-FCBB42"></div>
                                    <div class="color-square background-color-A0D468"></div>
                                    <div class="color-square background-color-8CC152"></div>
                                    <div class="color-square background-color-48CFAD"></div>
                                    <div class="color-square background-color-37BC9B"></div>
                                </div>
                                <div class="bk-title">
                                    <div>
                                        <h2 class="highlight before">Stuff</h2>
                                        <h1><span class="highlight">PORT</span>FOLIO</h1>
                                        <h2>Federico Rampazzo</h2>
                                    </div>
                                </div>
                                <h3>
                                    <a href="#" class="change-color highlight">Change Color</a> |
                                    <a href="#" class="highlight bk-bookview">Open me</a> |
                                    <a href="#" class="highlight bk-bookback">Check my back</a>
                                </h3>
                                <div class="color-container hidden clearfix">
                                    <div class="color-square background-color-4FC1E9"></div>
                                    <div class="color-square background-color-3BAFDA"></div>
                                    <div class="color-square background-color-5D9CEC"></div>
                                    <div class="color-square background-color-4A89DC"></div>
                                    <div class="color-square background-color-AC92EC"></div>
                                    <div class="color-square background-color-967ADC"></div>
                                    <div class="color-square background-color-EC87C0"></div>
                                    <div class="color-square background-color-D770AD"></div>
                                    <div class="color-square background-color-AAB2BD"></div>
                                    <div class="color-square background-color-656D78"></div>
                                </div>
                            </div>
                            <div class="bk-cover-back"></div>
                        </div>
                        <div class="bk-page">
                            <div class="bb-bookblock">
                                <div class="bb-item clearfix">
                                    <div class="color-square background-color-ED5565"><span>1</span></div>
                                    <div class="color-square background-color-DA4453"><span>2</span></div>
                                </div>
                                <div class="bb-item clearfix">
                                    <div class="color-square background-color-FC6E51"><span>3</span></div>
                                    <div class="color-square background-color-E9573F"><span>4</span></div>
                                </div>
                                <div class="bb-item clearfix">
                                    <div class="color-square background-color-FFCE54"><span>5</span></div>
                                    <div class="color-square background-color-FCBB42"><span>6</span></div>
                                </div>
                                <div class="bb-item clearfix">
                                    <div class="color-square background-color-A0D468"><span>7</span></div>
                                    <div class="color-square background-color-8CC152"><span>8</span></div>
                                </div>
                                <div class="bb-item clearfix">
                                    <div class="color-square background-color-48CFAD"><span>9</span></div>
                                    <div class="color-square background-color-37BC9B"><span>10</span></div>
                                </div>
                                <div class="bb-item clearfix">
                                    <div class="color-square background-color-4FC1E9"><span>11</span></div>
                                    <div class="color-square background-color-3BAFDA"><span>12</span></div>
                                </div>
                                <div class="bb-item clearfix">
                                    <div class="color-square background-color-5D9CEC"><span>13</span></div>
                                    <div class="color-square background-color-4A89DC"><span>14</span></div>
                                </div>
                                <div class="bb-item clearfix">
                                    <div class="color-square background-color-AC92EC"><span>15</span></div>
                                    <div class="color-square background-color-967ADC"><span>16</span></div>
                                </div>
                                <div class="bb-item clearfix">
                                    <div class="color-square background-color-EC87C0"><span>17</span></div>
                                    <div class="color-square background-color-D770AD"><span>18</span></div>
                                </div>
                                <div class="bb-item clearfix">
                                    <div class="color-square background-color-AAB2BD"><span>19</span></div>
                                    <div class="color-square background-color-656D78"><span>20</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="bk-back bk-bookback">
                            <div class="wrapper-table">
                                <h1 class="highlight">42</h1>
                            </div>
                        </div>
                        <div class="bk-right"></div>
                        <div class="bk-left"></div>
                        <div class="bk-top"></div>
                        <div class="bk-bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/jquerypp.custom.js"></script>
    <script src="js/jquery.bookblock.js"></script>
    <script src="js/portfolio.js"></script>
</div>


<script>
    var book = $('.bk-book');
    var bookPage = book.children('div.bk-page');
    var viewBookLink = book.find('.bk-bookview');
    var viewBackLink = book.find('.bk-bookback');
    var changeColorLink = book.find('.change-color');
    var colorContainers = book.find('.color-container');

    var bookDefault = function() {
        book.data({
                opened: false,
                flip: false
            })
            .removeClass('bk-viewback bk-viewinside')
            .addClass('bk-bookdefault');
    };
    var bookBack = function() {
        book.data({
                opened: false,
                flip: true
            })
            .removeClass('bk-viewinside bk-bookdefault')
            .addClass('bk-viewback');
    };
    var bookInside = function() {
        book.data({
                opened: true,
                flip: false
            })
            .removeClass('bk-viewback bk-bookdefault')
            .addClass('bk-viewinside');
    };

    bookDefault();

    viewBackLink.on('click', function() {
        if (book.data('flip')) {
            bookDefault();
        } else {
            bookBack();
        }
        return false;
    });

    viewBookLink.on('click', function() {
        bookInside();
        return false;
    });

    //Detect click outside book
    $('html').on('click', function(event) {
        if ($(event.target).parents('.bk-book').length == 0) {
            bookDefault();
            if (!colorContainers.hasClass('hidden'))
                changeColorLink.click();
        }
        return false;
    });

    //Change color
    var colorLabel = (function() {
        var labels = ['Change Color', '❤ this color']
        return function() {
            labels.push(labels.shift());
            return labels[0];
        }
    })();
    changeColorLink.click(function() {
        colorContainers.toggleClass('hidden');
        $(this).text(colorLabel());
    });

    var css = $("<style type='text/css'></style>").appendTo('head');

    colorContainers.find('.color-square').click(function() {
        var color = $(this).attr('class').match(/background-color-([a-f0-9]{6})/i)[1];
        css.text('.highlight { color: #' + color + '; }');
    });

    //Bookblock clone and setup
    var bookBlock = $('.bb-bookblock');
    var backCover = bookBlock.parents('.bk-book').find('.bk-cover-back');
    var backCoverBookBlock = bookBlock.clone();
    backCoverBookBlock.appendTo(backCover);

    var bookBlockFirst = function() {
        bookBlock.bookblock('first');
        backCoverBookBlock.bookblock('first');
    }
    var bookBlockLast = function() {
        bookBlock.bookblock('last');
        backCoverBookBlock.bookblock('last');
    }

    var bookBlockLastIndex = bookBlock.children().length - 1;
    var bookBlockNext = function() {
        if (book.data('flip'))
            return bookDefault();
        if (!book.data('opened'))
            return bookInside();
        if (bookBlock.find('.bb-item:visible').index() === bookBlockLastIndex)
            return bookBack() + bookBlockFirst();
        bookBlock.bookblock('next');
        backCoverBookBlock.bookblock('next');
    }
    var bookBlockPrev = function() {
        if (book.data('flip'))
            return bookBlockLast() + bookInside();
        if (!book.data('opened'))
            return bookBack();
        if (bookBlock.find('.bb-item:visible').index() === 0)
            return bookDefault();
        bookBlock.bookblock('prev');
        backCoverBookBlock.bookblock('prev');
    }

    bookBlock.children().add(backCoverBookBlock.children()).on({
        'swipeleft': function(event) {
            bookBlockPrev();
            return false;
        },
        'swiperight': function(event) {
            bookBlockPrev();
            return false;
        },
        'click': function(event) {
            if ($(event.target).parents('.bk-cover-back').length == 0)
                bookBlockNext();
            else
                bookBlockPrev();
            return false;
        }
    });

    bookBlock.bookblock({
        speed: 800,
        shadow: false
    });
    backCoverBookBlock.bookblock({
        speed: 800,
        shadow: false
    });

    var throttleFunc = function(func, limit, limitQueue) {
        var lastTime = +new Date;
        var queued = 0;
        return function throttledFunc() {
            var now = +new Date;
            var args = Array.prototype.slice.call(arguments);
            if (now - lastTime > limit) {
                func.apply(this, args);
                lastTime = +new Date;
            } else {
                var boundFunc = throttledFunc.bind.apply(throttledFunc, [this].concat(args));
                queued++;
                if (queued < limitQueue)
                    window.setTimeout(boundFunc, lastTime + limit - now);
            }
        }
    }

    $(document).keydown(throttleFunc(function(e) {
        var keyCode = e.keyCode || e.which,
            arrow = {
                left: 37,
                up: 38,
                right: 39,
                down: 40
            };

        switch (keyCode) {
            case arrow.left:
                bookBlockPrev();
                break;
            case arrow.right:
                bookBlockNext();
                break;
        }
    }, 500, 2));
</script>
