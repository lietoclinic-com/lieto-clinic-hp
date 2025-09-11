<style>
    html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  background-color: unset;
}
    /* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block;
}

body {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
  content: "";
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

*,
*:before,
*:after {
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}

*:focus {
  outline: none;
}
    html {
  font-size: 62.5%;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
    }

    body {
    position: relative;
    font-family: "Zen Old Mincho", serif;
    line-height: 1.5;
    font-weight: normal;
    font-size: 1.6rem;
    color: #393327;
    }
    body.is-active {
    height: 100%;
    overflow: hidden;
    }

    a {
    text-decoration: none;
    color: #393327;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    }
    a:hover {
    opacity: 0.7;
    }

    img {
    width: 100%;
    height: auto;
    vertical-align: bottom;
    }

    iframe {
    vertical-align: bottom;
    }

    button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: transparent;
    border: none;
    outline: none;
    font: inherit;
    padding: 0;
    margin: 0;
    }
    .l-inner {
  max-width: 117rem;
  padding-right: 2.5rem;
  padding-left: 2.5rem;
  margin-right: auto;
  margin-left: auto;
}
    /* header */
    .l-header {
    display: none;
    }
    @media screen and (min-width: 1025px) {
    .l-header {
        display: block;
        width: 100%;
        padding: 2rem 0;
        z-index: 10;
        background-color: #fff;
    }
    .l-header._top {
        position: absolute;
        background-color: transparent;
    }
    }

    .l-header__body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    }

    .l-header__left {
    padding-left: 1.8rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    gap: 0 2rem;
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    }

    .l-header__logo img {
    width: 12.2rem;
    height: 9rem;
    }

    .l-header__clinic {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    gap: 0.5rem;
    }

    .l-header__clinicName a {
    width: 10rem;
    height: 2.2rem;
    background-color: #AE8954;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    border-radius: 0.1rem;
    font-family: "Zen Old Mincho", serif;
    font-weight: 500;
    font-size: 1.3rem;
    color: #fff;
    }

    .l-header__nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    }

    .l-header__topListWrap {
    display: inline-block;
    margin-left: auto;
    }

    .l-header__topList {
    height: 3rem;
    margin-top: 0.2rem;
    margin-left: auto;
    background-color: #442906;
    border-radius: 2rem 0 0 2rem;
    padding-right: 1.8rem;
    padding-left: 3rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    gap: 0 2rem;
    }
    @media screen and (min-width: 1200px) {
    .l-header__topList {
        padding-right: 4.8rem;
    }
    }

    .l-header__topItem {
    font-size: 1.4rem;
    }
    .l-header__topItem a {
    color: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    gap: 0 0.4rem;
    letter-spacing: 1.4px;
    }
    .l-header__topItem a::before {
    content: "";
    display: inline-block;
    width: 0.9rem;
    height: 0.9rem;
    background-color: #B88D50;
    border-radius: 50%;
    }

    .l-header__bottomList {
    margin-top: 1.6rem;
    margin-right: 1.8rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    font-size: 1.5rem;
    }
    @media screen and (min-width: 1025px) {
    .l-header__bottomList {
        font-size: 1.4rem;
    }
    }
    @media screen and (min-width: 1200px) {
    .l-header__bottomList {
        margin-right: 5rem;
        font-size: 1.6rem;
    }
    }

    .l-header__bottomItem a {
    font-weight: 700;
    color: #393327;
    }
    ._top .l-header__bottomItem a {
    font-weight: 400;
    text-shadow: 0px 0px 1rem rgba(0, 0, 0, .4);
    color: #fff;
    }

    .l-spHeader {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999; /* 表示順序を制御 */
    width: 100%;
    margin: auto;
    background-color: #fff;
    }
    @media screen and (min-width: 1025px) {
    .l-spHeader {
        display: none;
    }
    }

    .l-spHeader__top {
    height: 6.4rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    padding-left: 1rem;
    }

    .l-spHeader__logo {
    width: 17.2rem;
    }

    .l-spHeader__nav {
    display: none;
    background-color: #fff;
    height: calc(100vh - 6.4rem);
    padding-bottom: 4rem;
    overflow: scroll;
    z-index: 10;
    }

    .l-spHeader__list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    }

    .l-spHeader__item {
    font-size: 18px;
    font-weight: 700;
    border-bottom: 1px solid #FFD7A4;
    }
    .l-spHeader__item:last-of-type {
    border-bottom: none;
    }
    .l-spHeader__item > a, .l-spHeader__item > div {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    height: 4.2rem;
    background-color: #FFE9CD;
    color: #442906;
    padding: 0 3rem 0 2.6rem;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    }
    .l-spHeader__item > a:hover, .l-spHeader__item > div:hover {
    opacity: 1;
    }
    .l-spHeader__item > a .l-spHeader__itemOpen, .l-spHeader__item > div .l-spHeader__itemOpen {
    position: relative;
    width: 2.5rem;
    height: 2.5rem;
    background-color: #442906;
    border-radius: 50%;
    }
    .l-spHeader__item > a .l-spHeader__itemOpen::before, .l-spHeader__item > a .l-spHeader__itemOpen::after, .l-spHeader__item > div .l-spHeader__itemOpen::before, .l-spHeader__item > div .l-spHeader__itemOpen::after {
    content: "";
    position: absolute;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    width: 1.3rem;
    height: 0.2rem;
    background-color: #fff;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    }
    .l-spHeader__item > a .l-spHeader__itemOpen::after, .l-spHeader__item > div .l-spHeader__itemOpen::after {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
    }
    .l-spHeader__item > a.is-active, .l-spHeader__item > div.is-active {
    background-color: #442906;
    color: #fff;
    }
    .l-spHeader__item > a.is-active .l-spHeader__itemOpen, .l-spHeader__item > div.is-active .l-spHeader__itemOpen {
    background-color: #fff;
    }
    .l-spHeader__item > a.is-active .l-spHeader__itemOpen::before, .l-spHeader__item > a.is-active .l-spHeader__itemOpen::after, .l-spHeader__item > div.is-active .l-spHeader__itemOpen::before, .l-spHeader__item > div.is-active .l-spHeader__itemOpen::after {
    background-color: #442906;
    -webkit-transform: rotate(0);
            transform: rotate(0);
    }

    .l-spHeader__sublist {
    display: none;
    }

    .l-spHeader__subitem > a {
    display: block;
    padding: 0.8rem 3rem 0.8rem 2.6rem;
    border-bottom: 1px solid #FFD7A4;
    background: #fff;
    font-size: 1.6rem;
    color: #ED8500;
    }
    .l-spHeader__subitem > a::before {
    content: "";
    width: 1.5rem;
    height: 0.2rem;
    display: inline-block;
    margin-right: 1rem;
    margin-bottom: 0.5rem;
    background-color: #ED8500;
    }
    .l-spHeader__subitem > a span {
    display: block;
    margin-left: 2.5rem;
    line-height: 1;
    font-weight: 500;
    font-size: 1.2rem;
    color: #808080;
    }

    .l-spHeader__btn {
    margin-top: 3rem;
    }
    .l-spHeader__btn a {
    font-size: 18px;
    font-weight: 700;
    line-height: 15px; /* 83.333% */
    letter-spacing: -1.44px;
    margin: 0 auto;
    }
    .l-spHeader__btn a::after {
    display: none;
    }
    .l-spHeader__btn a img {
    width: 2.8rem;
    height: 2.8rem;
    }

    .l-spHeader__btn--lp {
    margin-top: 3rem;
    }
    .l-spHeader__btn--lp a {
    width: 32rem;
    margin: 0 auto;
    display: block;
    }

    .l-spHeader__tel {
    margin-top: 3.4rem;
    }

    .l-spHeader__telList {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    gap: 2.6rem 0;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    }

    .l-spHeader__telItem {
    width: 30rem;
    margin: 0 auto;
    padding-bottom: 1.5rem;
    border: 1px solid #8A652F;
    background-color: #F8F8F8;
    }

    .l-spHeader__itemTitle {
    margin: -1.2rem auto 0;
    width: 16rem;
    height: 2.4rem;
    border-radius: 1.2rem;
    background-color: #8A652F;
    text-align: center;
    font-family: "Zen Old Mincho", serif;
    color: #fff;
    font-weight: 600;
    font-size: 1.4rem;
    }

    .l-spHeader__itemTel {
    margin-top: 0.5rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    gap: 0.7rem;
    }
    .l-spHeader__itemTel img {
    width: 2.2rem;
    height: 2.2rem;
    }

    .l-spHeader__itemNum {
    color: #ED8500;
    font-family: "Cinzel", serif;
    font-size: 28px;
    font-weight: 700;
    }

    .l-spHeader__itemTime {
    text-align: center;
    color: #000;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.52px;
    }

    .c-hamburger {
  width: 6.4rem;
  height: 6.4rem;
  background-color: #ED8500;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 0.5rem;
  cursor: pointer;
}

.c-hamburger__text {
  color: #fff;
  font-size: 12px;
  font-weight: 900;
  letter-spacing: 1.8px;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}
.c-hamburger__text._menu {
  display: block;
}
.c-hamburger__text._menu.is-active {
  display: none;
}
.c-hamburger__text._close {
  display: none;
}
.c-hamburger__text._close.is-active {
  display: block;
}

.c-hamburger__lines {
  width: 3.8rem;
  height: 1.3rem;
  position: relative;
}
.c-hamburger__lines span {
  position: absolute;
  display: block;
  width: 100%;
  height: 0.3rem;
  background-color: #fff;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.c-hamburger__lines span:first-child {
  top: 0;
}
.c-hamburger__lines span:last-child {
  bottom: 0;
}
.c-hamburger__lines.is-active span {
  top: 0;
  bottom: 0;
  margin: auto;
}
.c-hamburger__lines.is-active span:first-child {
  -webkit-transform: rotate(20deg);
          transform: rotate(20deg);
}
.c-hamburger__lines.is-active span:last-child {
  -webkit-transform: rotate(-20deg);
          transform: rotate(-20deg);
}

.pagination {
  position: relative;
}

    .p-topFv {
    background-image: url("<?php echo get_template_directory_uri(); ?>/dist/img/top/fv_bg_sp.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
    width: 100%;
    height: 47rem;
    }
    @media screen and (min-width: 769px) {
    .p-topFv {
        height: 53rem;
        background-image: url("<?php echo get_template_directory_uri(); ?>/dist/img/top/fv_bg.jpg");
    }
    }
    @media screen and (min-width: 1025px) {
    .p-topFv {
        min-height: 76rem;
        height: 52.778vw;
    }
    }

    .p-topFv__img {
    background-image: url("<?php echo get_template_directory_uri(); ?>/dist/img/top/fv_sp.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: absolute;
    top: 1rem;
    left: 1rem;
    bottom: 1rem;
    right: 1rem;
    width: calc(100% - 2rem);
    height: calc(100% - 2rem);
    }
    @media screen and (min-width: 600px) {
    .p-topFv__img {
        background-image: url("<?php echo get_template_directory_uri(); ?>/dist/img/top/fv_tab.png");
    }
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__img {
        background-image: url("<?php echo get_template_directory_uri(); ?>/dist/img/top/fv.png");
        background-position: center;
        top: 0;
        left: 0;
        right: auto;
        right: initial;
        bottom: auto;
        bottom: initial;
        margin-left: 28rem;
        padding: 0;
        width: calc(100% - 28rem);
        min-height: 70rem;
        height: 48.611vw;
    }
    }

    .p-topFv__body {
    position: inherit;
    z-index: 2;
    padding-top: 7rem;
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__body {
        padding-top: 18.3rem;
        margin-left: 8rem;
    }
    }

    .p-topFv__message {
    color: #fff;
    text-align: center;
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__message {
        text-align: left;
    }
    }

    .p-topFv__messageTop {
    font-size: 22px;
    font-weight: 600;
    letter-spacing: 1.98px;
    text-shadow: 0px 0px 20px rgba(255, 255, 255, .4);
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__messageTop {
        font-size: 4.4rem;
        letter-spacing: 0.07em;
    }
    }

    .p-topFv__messageMiddle {
    font-weight: 600;
    line-height: 1.3;
    }
    .p-topFv__messageMiddle span._small {
    font-size: 24px;
    letter-spacing: -1.92px;
    }
    .p-topFv__messageMiddle span._large {
    font-size: 52px;
    }
    .p-topFv__messageMiddle span._large:nth-of-type(1) {
    letter-spacing: -2.6px;
    }
    .p-topFv__messageMiddle span._large:nth-of-type(2) {
    letter-spacing: -12.48px;
    }
    .p-topFv__messageMiddle span._large:nth-of-type(3) {
    letter-spacing: -10.4px;
    }
    .p-topFv__messageMiddle span._large:nth-of-type(5) {
    letter-spacing: 0.52px;
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__messageMiddle span._small {
        font-size: 4.4rem;
        letter-spacing: 10px;
    }
    .p-topFv__messageMiddle span._large {
        font-size: 9rem;
    }
    .p-topFv__messageMiddle span._large:nth-of-type(1) {
        letter-spacing: 5px;
    }
    .p-topFv__messageMiddle span._large:nth-of-type(2) {
        letter-spacing: -11px;
    }
    .p-topFv__messageMiddle span._large:nth-of-type(3) {
        letter-spacing: -8.6px;
    }
    .p-topFv__messageMiddle span._large:nth-of-type(5) {
        letter-spacing: 9.6px;
    }
    }

    .p-topFv__messageBottom {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    gap: 0 1.1rem;
    font-family: "Lora", serif;
    font-size: 16px;
    letter-spacing: 3.52px;
    }
    .p-topFv__messageBottom::before, .p-topFv__messageBottom::after {
    content: "";
    display: inline-block;
    width: 3rem;
    height: 0.1rem;
    background-color: #fff;
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__messageBottom {
        -webkit-box-pack: start;
            -ms-flex-pack: start;
                justify-content: flex-start;
        font-family: "Lora", serif;
        font-size: 3rem;
        line-height: 2.1;
        letter-spacing: 0.26em;
    }
    .p-topFv__messageBottom::before {
        width: 13.7rem;
        height: 0.1rem;
        background-color: #fff;
    }
    .p-topFv__messageBottom::after {
        display: none;
    }
    }

    .p-topFv__clinics {
    margin-top: 3rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    gap: 1rem;
    }
    @media screen and (min-width: 769px) {
    .p-topFv__clinics {
        gap: 2rem;
    }
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__clinics {
        margin-top: 4rem;
        -webkit-box-pack: start;
            -ms-flex-pack: start;
                justify-content: flex-start;
    }
    }

    .p-topFv__clinic {
    background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/top/fv_walktime.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    width: 11rem;
    height: 11rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    color: #fff;
    text-align: center;
    line-height: 1;
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__clinic {
        width: 16.5rem;
        height: 16.5rem;
    }
    }

    .p-topFv__clinicName {
    display: block;
    margin-top: 2.3rem;
    font-weight: 700;
    font-size: 1.3rem;
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__clinicName {
        margin-top: 3.4rem;
        font-size: 2rem;
    }
    }

    .p-topFv__clinicWalk {
    display: block;
    margin-bottom: 1.3rem;
    font-weight: 400;
    line-height: 1.1;
    font-size: 1.2rem;
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__clinicWalk {
        margin-bottom: 2.5rem;
        line-height: 1.5;
        font-size: 1.8rem;
    }
    }
    .p-topFv__clinicWalk ._num {
    margin: 0 0.2rem;
    font-family: "Cinzel", serif;
    font-size: 2.4rem;
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__clinicWalk ._num {
        line-height: 1;
        font-size: 3.6rem;
    }
    }

    .p-topFv__scroll {
    position: absolute;
    right: 0;
    left: 0;
    margin: 0 auto;
    bottom: 3rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    gap: 0.6rem 0;
    z-index: 3;
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__scroll {
        right: 16.3rem;
        left: auto;
        left: initial;
        margin: 0;
        margin: initial;
        bottom: 2.2rem;
        gap: 1rem 0;
    }
    }

    .p-topFv__scrollLine {
    width: 0.1rem;
    height: 5.5rem;
    background-color: #fff;
    -webkit-animation: scrollDown 2s ease infinite;
            animation: scrollDown 2s ease infinite;
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__scrollLine {
        height: 8.5rem;
    }
    }

    .p-topFv__scrollText {
    text-transform: uppercase;
    font-family: "Lora", serif;
    letter-spacing: 3.6px;
    font-size: 1.2rem;
    color: #fff;
    }
    @media screen and (min-width: 1025px) {
    .p-topFv__scrollText {
        -webkit-writing-mode: vertical-rl;
            -ms-writing-mode: tb-rl;
                writing-mode: vertical-rl;
        letter-spacing: 0.6em;
        font-size: 1.3rem;
    }
    }

    .c-fixedCta {
    position: fixed;
    right: 0;
    height: fit-content;
    top: 17.4rem;
    z-index: 99;
    display: none;
    }
    @media screen and (min-width: 1025px) {
    .c-fixedCta {
        display: block;
    }
    }

    .c-fixedCta__List {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    gap: 1rem 0;
    height: fit-content;
    }

    .c-fixedCta__Item {
    -webkit-filter: drop-shadow(-4px 4px 20px rgba(0, 0, 0, .3));
            filter: drop-shadow(-4px 4px 20px rgba(0, 0, 0, .3));
    letter-spacing: -0.45em;
    }
    .c-fixedCta__Item > a, .c-fixedCta__Item > div {
    width: 6.3rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    gap: 0 0.7rem;
    -webkit-writing-mode: vertical-rl;
        -ms-writing-mode: tb-rl;
            writing-mode: vertical-rl;
    font-weight: 700;
    font-size: 1.5rem;
    line-height: 1.2;
    }

    .c-fixedCta__Item--tel {
    background-color: #fff;
    border: 1px solid #ED8500;
    border-right: none;
    }
    .c-fixedCta__Item--tel > a, .c-fixedCta__Item--tel > div {
    height: 17rem;
    color: #ED8500;
    cursor: pointer;
    }
    .c-fixedCta__Item--tel > a img, .c-fixedCta__Item--tel > div img {
    width: 2.6rem;
    }

    .c-fixedCta__Item--counseling {
    background-color: #ED8500;
    border: 1px solid #fff;
    border-right: none;
    }
    .c-fixedCta__Item--counseling a {
    height: 22.8rem;
    color: #fff;
    cursor: pointer;
    }
    .c-fixedCta__Item--counseling a img {
    width: 2.5rem;
    }

    .c-fixedCtaSp {
    position: fixed;
    right: 0;
    left: 0;
    bottom: 0.6rem;
    margin: auto;
    width: 100%;
    z-index: 99;
    }
    @media screen and (min-width: 769px) {
    .c-fixedCtaSp {
        display: none;
    }
    }

    .c-fixedCtaSp__list {
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    gap: 0 0.6rem;
    }

    .c-fixedCtaSp__item {
    width: 47.33333%;
    max-width: 35rem;
    }

    .c-fixedCtaSp__itemTelLink {
    width: 100%;
    height: 5.4rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    gap: 0 1rem;
    border-radius: 0.4rem;
    }

    .c-fixedCtaSp__itemTelLink--tel {
    border: 3px solid #442906;
    background-color: #fff;
    }
    .c-fixedCtaSp__itemTelLink--tel img {
    width: 2.6rem;
    height: 2.6rem;
    }

    .c-fixedCtaSp__itemTelLink--counseling {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    border: 3px solid #BE6B00;
    background: #ED8500;
    }
    .c-fixedCtaSp__itemTelLink--counseling img {
    width: 1.6rem;
    height: 1.6rem;
    }

    .c-fixedCtaSp__itemCounseling--large {
    color: #442906;
    font-size: 14px;
    font-weight: 700;
    line-height: 1.3;
    }
    .c-fixedCtaSp__itemTelLink--counseling .c-fixedCtaSp__itemCounseling--large {
    color: #fff;
    letter-spacing: -1.12px;
    }

    .c-fixedCtaSp__itemCounseling--small {
    color: #FFF;
    font-size: 10px;
    letter-spacing: 0.28px;
    }
    .c-fixedCtaSp__itemCounseling--small ._num {
    font-weight: 700;
    font-size: 14px;
    }
    .p-modal {
  display: none;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 100;
}

.p-modal__bg {
  background: rgba(0, 0, 0, .5);
  height: 100vh;
  position: absolute;
  width: 100%;
}

.p-modal__area {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  padding: 3.7rem 0 2.8rem;
  width: 30rem;
  max-width: 75rem;
  background-color: #000;
  border-radius: 0.6rem;
}
@media screen and (min-width: 769px) {
  .p-modal__area {
    width: 90%;
    padding: 4.6rem 6rem 4.2rem;
  }
}

.p-modal__list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 3rem;
}
@media screen and (min-width: 769px) {
  .p-modal__list {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
}

.p-modal__item {
  width: 26rem;
  height: 9.2rem;
  background-color: #fff;
  border: 1px solid #8A652F;
}
@media screen and (min-width: 769px) {
  .p-modal__item {
    width: 29.9rem;
  }
}

.p-modal__itemTitle {
  margin: -1.2rem auto 0;
  width: 16rem;
  height: 2.4rem;
  background-color: #8A652F;
  border-radius: 2rem;
  text-align: center;
  color: #fff;
  font-family: "Zen Old Mincho", serif;
  font-size: 14px;
  font-weight: 600;
}

.p-modal__itemTel {
  margin-top: 0.7rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 0 0.7rem;
}
.p-modal__itemTel img {
  width: 2.2rem;
  height: 2.2rem;
}
.p-modal__itemTel .p-modal__itemNum {
  color: #ED8500;
  font-family: "Cinzel", serif;
  font-size: 28px;
  font-weight: 700;
}

.p-modal__itemTime {
  color: #000;
  text-align: center;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.52px;
}

.p-modal__closeBtn {
  position: absolute;
  top: -1.6rem;
  right: -1.6rem;
  width: 3.2rem;
  height: 3.2rem;
  cursor: pointer;
}
@media screen and (min-width: 769px) {
  .p-modal__closeBtn {
    top: -2rem;
    right: -2rem;
    width: 4rem;
    height: 4rem;
  }
}
.p-topSlider {
  overflow: hidden;
}

.p-topSlider__inner {
  max-width: 134rem;
  margin: 0 auto;
}
@media screen and (min-width: 769px) {
  .p-topSlider__inner {
    padding: 0 4rem;
  }
}

.p-topSliderList {
  margin: 0 -0.7rem;
}
@media screen and (min-width: 769px) {
  .p-topSliderList {
    margin: 0 -1.5rem;
  }
}

.p-topSliderItem {
  margin: 0 0.7rem;
}
@media screen and (min-width: 769px) {
  .p-topSliderItem {
    margin: 0 1.5rem;
  }
}

.slide-arrow {
  background-color: transparent;
  bottom: 0;
  height: 0;
  margin: auto;
  position: absolute;
  top: 0;
  width: 2.5rem;
  height: 2.5rem;
  cursor: pointer;
  z-index: 5;
}

.prev-arrow {
  border-bottom: 2px solid #ED8500;
  border-left: 2px solid #ED8500;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  left: -12px;
}
@media screen and (min-width: 1200px) {
  .prev-arrow {
    left: -20px;
  }
}

.next-arrow {
  border-bottom: 2px solid #ED8500;
  border-right: 2px solid #ED8500;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
  right: -12px;
}
@media screen and (min-width: 1200px) {
  .next-arrow {
    right: -20px;
  }
}

.p-topBanner__img {
  margin-top: 2rem;
  text-align: center;
}
.p-topBanner__img img {
  max-width: 65rem;
}
@media screen and (min-width: 769px) {
  .p-topBanner__img {
    margin-top: 10rem;
  }
}

.p-topCta {
  margin-top: 4rem;
}
@media screen and (min-width: 769px) {
  .p-topCta {
    margin-top: 8rem;
  }
}

.p-cta__bg {
  background-image: url("<?php echo get_template_directory_uri(); ?>/dist/img/common/cta_bg.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
  width: 100%;
  padding: 2.5rem 0 4rem;
  border-radius: 0.6rem;
  overflow: hidden;
}
@media screen and (min-width: 1025px) {
  .p-cta__bg {
    padding: 3.8rem 0 4.2rem;
  }
}
.p-singleColumn__cta .p-cta__bg {
  padding: 2.5rem 0 3.4rem;
}
@media screen and (min-width: 1025px) {
  .p-singleColumn__cta .p-cta__bg {
    padding: 3.8rem 0 4.2rem;
  }
}

.p-cta__top {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 0 1rem;
}
.p-cta__top img {
  width: 8.68rem;
  height: 8rem;
}
@media screen and (min-width: 769px) {
  .p-cta__top {
    gap: 0 4rem;
  }
  .p-cta__top img {
    width: 14.1rem;
    height: 13rem;
  }
}

.p-cta__reserveText {
  color: #fff;
  text-shadow: 0px 0px 10px rgba(0, 0, 0, .4);
  font-family: "Zen Old Mincho", serif;
  font-size: 16px;
  font-weight: 700;
}
.p-cta__reserveText ._num {
  font-size: 24px;
  font-family: "Cardo", serif;
}
.p-cta__reserveText ._en {
  font-size: 20px;
}
@media screen and (min-width: 769px) {
  .p-cta__reserveText {
    font-size: 28px;
    letter-spacing: 2.8px;
  }
  .p-cta__reserveText ._num {
    font-size: 46px;
    font-family: "Cardo", serif;
    letter-spacing: 4.6px;
  }
  .p-cta__reserveText ._en {
    font-size: 36px;
    letter-spacing: 3.6px;
  }
}

.p-cta__reserveBtn {
  margin-top: 0.6rem;
}
.p-cta__reserveBtn a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 0 1.2rem;
  margin: 2rem auto 0;
  width: 28rem;
  height: 5.4rem;
  border-radius: 2px;
  background: #ED8500;
  -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, .1);
          box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, .1);
  color: #fff;
  font-family: "Zen Old Mincho", serif;
  font-weight: 700;
  font-size: 18px;
  font-weight: 700;
  line-height: 15px; /* 83.333% */
  letter-spacing: -1.44px;
}
.p-cta__reserveBtn a img {
  width: 3.6rem;
  height: 3.6rem;
}
@media screen and (min-width: 769px) {
  .p-cta__reserveBtn a {
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
    margin: 0;
    margin: initial;
    padding-left: 3rem;
    border: 1px solid #fff;
    width: 33rem;
    height: 6rem;
    font-size: 19px;
    letter-spacing: normal;
    line-height: normal;
  }
}

.p-cta__bottom {
  margin: 3rem auto 0;
  padding: 0 1rem;
  max-width: 82.2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  gap: 2.5rem 7.4rem;
}
@media screen and (min-width: 1025px) {
  .p-cta__bottom {
    row-gap: 4rem;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
    margin-top: 5.8rem;
  }
  .p-singleColumn__cta .p-cta__bottom {
    margin-top: 4rem;
    gap: 2rem 3rem;
    max-width: 65.5rem;
  }
}

.p-cta__clinic a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 0.8rem 2rem;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #fff;
}
@media screen and (min-width: 769px) {
  .p-cta__clinic a {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .p-singleColumn__cta .p-cta__clinic a {
    gap: 0.8rem 1rem;
  }
}

.p-cta__clinicName {
  width: 16rem;
  height: 2.4rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  background-color: #8A652F;
  border-radius: 2rem;
  font-family: "Zen Old Mincho", serif;
  font-weight: 600;
  font-size: 1.4rem;
}
@media screen and (min-width: 769px) {
  .p-cta__clinicName {
    width: 12rem;
    height: 6.8rem;
    border-radius: 0.1rem;
    font-size: 1.6rem;
  }
  .p-singleColumn__cta .p-cta__clinicName {
    width: 10rem;
    height: 5rem;
  }
}

.p-cta__clinicTel {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  gap: 0 0.7rem;
}
.p-cta__clinicTel img {
  width: 2.2rem;
  height: 2.2rem;
}
@media screen and (min-width: 769px) {
  .p-cta__clinicTel {
    gap: 0 1rem;
  }
  .p-cta__clinicTel img {
    width: 2.4rem;
    height: 2.4rem;
  }
  .p-singleColumn__cta .p-cta__clinicTel img {
    width: 2rem;
    height: 2rem;
  }
}
.p-cta__clinicTel .p-cta__clinicTelNum {
  font-family: "Cardo", serif;
  font-size: 28px;
  font-weight: 700;
  letter-spacing: 0.6px;
  line-height: 1.36;
}
.p-cta__clinicTel .p-cta__clinicTelNum span {
  font-weight: 400;
}
@media screen and (min-width: 769px) {
  .p-cta__clinicTel .p-cta__clinicTelNum {
    font-size: 30px;
  }
  .p-singleColumn__cta .p-cta__clinicTel .p-cta__clinicTelNum {
    font-size: 25px;
  }
}

.p-cta__clinicTime {
  margin-top: 0.2rem;
  text-align: center;
  font-size: 13px;
  letter-spacing: 0.07em;
  line-height: 1;
}
@media screen and (min-width: 769px) {
  .p-cta__clinicTime {
    text-align: left;
    font-size: 14px;
    line-height: normal;
  }
  .p-singleColumn__cta .p-cta__clinicTime {
    font-size: 13px;
  }
}

@media screen and (min-width: 769px) {
  ._sp {
    display: none;
  }
}
.l-main {
  padding-top: 6.4rem;
}
@media screen and (min-width: 1025px) {
  .l-main {
    padding-top: 0;
  }
}
.l-main._top {
  padding-bottom: 8rem;
}
@media screen and (min-width: 1025px) {
  .l-main._top {
    padding-bottom: 12rem;
  }
}
</style>