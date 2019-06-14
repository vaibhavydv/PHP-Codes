<?php
require('html2pdf.php');
?>
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <style type="text/css">
        @import url(\'https://themes.googleusercontent.com/fonts/css?kit=fpjTOVmNbO4Lz34iLyptLUXza5VhXqVC6o75Eld_V98\');

        .lst-kix_list_4-1>li {
            counter-increment: lst-ctn-kix_list_4-1
        }

        ol.lst-kix_list_3-1 {
            list-style-type: none
        }

        ol.lst-kix_list_3-2 {
            list-style-type: none
        }

        .lst-kix_list_3-1>li {
            counter-increment: lst-ctn-kix_list_3-1
        }

        ol.lst-kix_list_3-3 {
            list-style-type: none
        }

        ol.lst-kix_list_3-4.start {
            counter-reset: lst-ctn-kix_list_3-4 0
        }

        .lst-kix_list_5-1>li {
            counter-increment: lst-ctn-kix_list_5-1
        }

        ol.lst-kix_list_3-4 {
            list-style-type: none
        }

        .lst-kix_list_2-1>li {
            counter-increment: lst-ctn-kix_list_2-1
        }

        ul.lst-kix_list_1-0 {
            list-style-type: none
        }

        ol.lst-kix_list_3-0 {
            list-style-type: none
        }

        ol.lst-kix_list_2-6.start {
            counter-reset: lst-ctn-kix_list_2-6 0
        }

        .lst-kix_list_3-0>li:before {
            content: ""counter(lst-ctn-kix_list_3-0, decimal) ". ";
            font-weight: 700 !important;
            font-size: 18pt !important;
        }

        ol.lst-kix_list_3-1.start {
            counter-reset: lst-ctn-kix_list_3-1 0
        }

        .lst-kix_list_3-1>li:before {
            content: ""counter(lst-ctn-kix_list_3-1, lower-latin) ". "
        }

        .lst-kix_list_3-2>li:before {
            content: ""counter(lst-ctn-kix_list_3-2, lower-roman) ". "
        }

        .lst-kix_list_4-0>li {
            counter-increment: lst-ctn-kix_list_4-0
        }

        .lst-kix_list_5-0>li {
            counter-increment: lst-ctn-kix_list_5-0
        }

        ol.lst-kix_list_2-3.start {
            counter-reset: lst-ctn-kix_list_2-3 0
        }

        ul.lst-kix_list_1-3 {
            list-style-type: none
        }

        .lst-kix_list_3-5>li:before {
            content: ""counter(lst-ctn-kix_list_3-5, lower-roman) ". "
        }

        ul.lst-kix_list_1-4 {
            list-style-type: none
        }

        ul.lst-kix_list_1-1 {
            list-style-type: none
        }

        .lst-kix_list_3-4>li:before {
            content: ""counter(lst-ctn-kix_list_3-4, lower-latin) ". "
        }

        ul.lst-kix_list_1-2 {
            list-style-type: none
        }

        ul.lst-kix_list_1-7 {
            list-style-type: none
        }

        .lst-kix_list_3-3>li:before {
            content: ""counter(lst-ctn-kix_list_3-3, decimal) ". "
        }

        ol.lst-kix_list_3-5 {
            list-style-type: none
        }

        ul.lst-kix_list_1-8 {
            list-style-type: none
        }

        ol.lst-kix_list_3-6 {
            list-style-type: none
        }

        ul.lst-kix_list_1-5 {
            list-style-type: none
        }

        ol.lst-kix_list_3-7 {
            list-style-type: none
        }

        ul.lst-kix_list_1-6 {
            list-style-type: none
        }

        ol.lst-kix_list_3-8 {
            list-style-type: none
        }

        .lst-kix_list_3-8>li:before {
            content: ""counter(lst-ctn-kix_list_3-8, lower-roman) ". "
        }

        .lst-kix_list_2-0>li {
            counter-increment: lst-ctn-kix_list_2-0
        }

        ol.lst-kix_list_5-3.start {
            counter-reset: lst-ctn-kix_list_5-3 0
        }

        .lst-kix_list_2-3>li {
            counter-increment: lst-ctn-kix_list_2-3
        }

        .lst-kix_list_3-6>li:before {
            content: ""counter(lst-ctn-kix_list_3-6, decimal) ". "
        }

        .lst-kix_list_4-3>li {
            counter-increment: lst-ctn-kix_list_4-3
        }

        .lst-kix_list_3-7>li:before {
            content: ""counter(lst-ctn-kix_list_3-7, lower-latin) ". "
        }

        ol.lst-kix_list_4-5.start {
            counter-reset: lst-ctn-kix_list_4-5 0
        }

        ol.lst-kix_list_5-0.start {
            counter-reset: lst-ctn-kix_list_5-0 0
        }

        ol.lst-kix_list_3-7.start {
            counter-reset: lst-ctn-kix_list_3-7 0
        }

        .lst-kix_list_5-2>li {
            counter-increment: lst-ctn-kix_list_5-2
        }

        ol.lst-kix_list_4-2.start {
            counter-reset: lst-ctn-kix_list_4-2 0
        }

        .lst-kix_list_3-2>li {
            counter-increment: lst-ctn-kix_list_3-2
        }

        ol.lst-kix_list_2-2 {
            list-style-type: none
        }

        ol.lst-kix_list_2-3 {
            list-style-type: none
        }

        .lst-kix_list_5-0>li:before {
            content: " "
        }

        ol.lst-kix_list_2-4 {
            list-style-type: none
        }

        ol.lst-kix_list_2-5 {
            list-style-type: none
        }

        .lst-kix_list_5-4>li {
            counter-increment: lst-ctn-kix_list_5-4
        }

        .lst-kix_list_4-4>li {
            counter-increment: lst-ctn-kix_list_4-4
        }

        ol.lst-kix_list_2-0 {
            list-style-type: none
        }

        ol.lst-kix_list_2-1 {
            list-style-type: none
        }

        .lst-kix_list_4-8>li:before {
            content: ""counter(lst-ctn-kix_list_4-8, lower-roman) ". "
        }

        .lst-kix_list_5-3>li:before {
            content: " "
        }

        .lst-kix_list_4-7>li:before {
            content: ""counter(lst-ctn-kix_list_4-7, lower-latin) ". "
        }

        .lst-kix_list_5-2>li:before {
            content: " "
        }

        .lst-kix_list_5-1>li:before {
            content: " "
        }

        .lst-kix_list_5-7>li:before {
            content: " "
        }

        ol.lst-kix_list_5-6.start {
            counter-reset: lst-ctn-kix_list_5-6 0
        }

        .lst-kix_list_5-6>li:before {
            content: " "
        }

        .lst-kix_list_5-8>li:before {
            content: " "
        }

        ol.lst-kix_list_4-1.start {
            counter-reset: lst-ctn-kix_list_4-1 0
        }

        ol.lst-kix_list_4-8.start {
            counter-reset: lst-ctn-kix_list_4-8 0
        }

        ol.lst-kix_list_3-3.start {
            counter-reset: lst-ctn-kix_list_3-3 0
        }

        .lst-kix_list_5-4>li:before {
            content: " "
        }

        .lst-kix_list_5-5>li:before {
            content: " "
        }

        ol.lst-kix_list_2-6 {
            list-style-type: none
        }

        ol.lst-kix_list_2-7 {
            list-style-type: none
        }

        ol.lst-kix_list_2-8 {
            list-style-type: none
        }

        .lst-kix_list_3-0>li {
            counter-increment: lst-ctn-kix_list_3-0
        }

        .lst-kix_list_3-3>li {
            counter-increment: lst-ctn-kix_list_3-3
        }

        ol.lst-kix_list_4-0.start {
            counter-reset: lst-ctn-kix_list_4-0 0
        }

        .lst-kix_list_3-6>li {
            counter-increment: lst-ctn-kix_list_3-6
        }

        .lst-kix_list_2-5>li {
            counter-increment: lst-ctn-kix_list_2-5
        }

        .lst-kix_list_2-8>li {
            counter-increment: lst-ctn-kix_list_2-8
        }

        ol.lst-kix_list_3-2.start {
            counter-reset: lst-ctn-kix_list_3-2 0
        }

        ol.lst-kix_list_5-5.start {
            counter-reset: lst-ctn-kix_list_5-5 0
        }

        .lst-kix_list_2-2>li {
            counter-increment: lst-ctn-kix_list_2-2
        }

        ol.lst-kix_list_2-4.start {
            counter-reset: lst-ctn-kix_list_2-4 0
        }

        ol.lst-kix_list_4-7.start {
            counter-reset: lst-ctn-kix_list_4-7 0
        }

        ol.lst-kix_list_5-0 {
            list-style-type: none
        }

        .lst-kix_list_2-6>li:before {
            content: ""counter(lst-ctn-kix_list_2-6, decimal) ". "
        }

        .lst-kix_list_2-7>li:before {
            content: ""counter(lst-ctn-kix_list_2-7, lower-latin) ". "
        }

        .lst-kix_list_2-7>li {
            counter-increment: lst-ctn-kix_list_2-7
        }

        .lst-kix_list_3-7>li {
            counter-increment: lst-ctn-kix_list_3-7
        }

        ol.lst-kix_list_5-1 {
            list-style-type: none
        }

        ol.lst-kix_list_5-2 {
            list-style-type: none
        }

        .lst-kix_list_2-4>li:before {
            content: ""counter(lst-ctn-kix_list_2-4, lower-latin) ". "
        }

        .lst-kix_list_2-5>li:before {
            content: ""counter(lst-ctn-kix_list_2-5, lower-roman) ". "
        }

        .lst-kix_list_2-8>li:before {
            content: ""counter(lst-ctn-kix_list_2-8, lower-roman) ". "
        }

        ol.lst-kix_list_5-4.start {
            counter-reset: lst-ctn-kix_list_5-4 0
        }

        ol.lst-kix_list_4-6.start {
            counter-reset: lst-ctn-kix_list_4-6 0
        }

        ol.lst-kix_list_5-1.start {
            counter-reset: lst-ctn-kix_list_5-1 0
        }

        ol.lst-kix_list_3-0.start {
            counter-reset: lst-ctn-kix_list_3-0 0
        }

        ol.lst-kix_list_5-7 {
            list-style-type: none
        }

        ol.lst-kix_list_5-8 {
            list-style-type: none
        }

        .lst-kix_list_5-7>li {
            counter-increment: lst-ctn-kix_list_5-7
        }

        ol.lst-kix_list_4-3.start {
            counter-reset: lst-ctn-kix_list_4-3 0
        }

        ol.lst-kix_list_5-3 {
            list-style-type: none
        }

        .lst-kix_list_4-7>li {
            counter-increment: lst-ctn-kix_list_4-7
        }

        ol.lst-kix_list_5-4 {
            list-style-type: none
        }

        ol.lst-kix_list_3-8.start {
            counter-reset: lst-ctn-kix_list_3-8 0
        }

        ol.lst-kix_list_5-5 {
            list-style-type: none
        }

        ol.lst-kix_list_5-6 {
            list-style-type: none
        }

        ol.lst-kix_list_2-5.start {
            counter-reset: lst-ctn-kix_list_2-5 0
        }

        .lst-kix_list_5-8>li {
            counter-increment: lst-ctn-kix_list_5-8
        }

        .lst-kix_list_4-0>li:before {
            content: ""counter(lst-ctn-kix_list_4-0, decimal) ". "
        }

        .lst-kix_list_2-6>li {
            counter-increment: lst-ctn-kix_list_2-6
        }

        .lst-kix_list_3-8>li {
            counter-increment: lst-ctn-kix_list_3-8
        }

        .lst-kix_list_4-1>li:before {
            content: ""counter(lst-ctn-kix_list_4-1, lower-latin) ". "
        }

        .lst-kix_list_4-6>li {
            counter-increment: lst-ctn-kix_list_4-6
        }

        .lst-kix_list_4-4>li:before {
            content: ""counter(lst-ctn-kix_list_4-4, lower-latin) ". "
        }

        ol.lst-kix_list_2-2.start {
            counter-reset: lst-ctn-kix_list_2-2 0
        }

        .lst-kix_list_4-3>li:before {
            content: ""counter(lst-ctn-kix_list_4-3, decimal) ". "
        }

        .lst-kix_list_4-5>li:before {
            content: ""counter(lst-ctn-kix_list_4-5, lower-roman) ". "
        }

        .lst-kix_list_4-2>li:before {
            content: ""counter(lst-ctn-kix_list_4-2, lower-roman) ". "
        }

        .lst-kix_list_4-6>li:before {
            content: ""counter(lst-ctn-kix_list_4-6, decimal) ". "
        }

        ol.lst-kix_list_5-7.start {
            counter-reset: lst-ctn-kix_list_5-7 0
        }

        .lst-kix_list_5-5>li {
            counter-increment: lst-ctn-kix_list_5-5
        }

        .lst-kix_list_3-5>li {
            counter-increment: lst-ctn-kix_list_3-5
        }

        ol.lst-kix_list_4-0 {
            list-style-type: none
        }

        .lst-kix_list_3-4>li {
            counter-increment: lst-ctn-kix_list_3-4
        }

        ol.lst-kix_list_4-1 {
            list-style-type: none
        }

        ol.lst-kix_list_4-4.start {
            counter-reset: lst-ctn-kix_list_4-4 0
        }

        ol.lst-kix_list_4-2 {
            list-style-type: none
        }

        ol.lst-kix_list_4-3 {
            list-style-type: none
        }

        .lst-kix_list_2-4>li {
            counter-increment: lst-ctn-kix_list_2-4
        }

        ol.lst-kix_list_3-6.start {
            counter-reset: lst-ctn-kix_list_3-6 0
        }

        .lst-kix_list_5-3>li {
            counter-increment: lst-ctn-kix_list_5-3
        }

        ol.lst-kix_list_2-8.start {
            counter-reset: lst-ctn-kix_list_2-8 0
        }

        ol.lst-kix_list_4-8 {
            list-style-type: none
        }

        .lst-kix_list_1-0>li:before {
            content: "\0025cf  "
        }

        ol.lst-kix_list_4-4 {
            list-style-type: none
        }

        ol.lst-kix_list_4-5 {
            list-style-type: none
        }

        .lst-kix_list_1-1>li:before {
            content: "o  "
        }

        .lst-kix_list_1-2>li:before {
            content: "\0025aa  "
        }

        ol.lst-kix_list_2-0.start {
            counter-reset: lst-ctn-kix_list_2-0 0
        }

        ol.lst-kix_list_4-6 {
            list-style-type: none
        }

        ol.lst-kix_list_4-7 {
            list-style-type: none
        }

        .lst-kix_list_1-3>li:before {
            content: "\0025cf  "
        }

        .lst-kix_list_1-4>li:before {
            content: "o  "
        }

        ol.lst-kix_list_3-5.start {
            counter-reset: lst-ctn-kix_list_3-5 0
        }

        .lst-kix_list_4-8>li {
            counter-increment: lst-ctn-kix_list_4-8
        }

        .lst-kix_list_1-7>li:before {
            content: "o  "
        }

        ol.lst-kix_list_5-8.start {
            counter-reset: lst-ctn-kix_list_5-8 0
        }

        ol.lst-kix_list_2-7.start {
            counter-reset: lst-ctn-kix_list_2-7 0
        }

        .lst-kix_list_1-5>li:before {
            content: "\0025aa  "
        }

        .lst-kix_list_1-6>li:before {
            content: "\0025cf  "
        }

        .lst-kix_list_5-6>li {
            counter-increment: lst-ctn-kix_list_5-6
        }

        .lst-kix_list_2-0>li:before {
            content: ""counter(lst-ctn-kix_list_2-0, upper-latin) ". " !important;
            font-weight: 700 !important;
            font-size: 18pt !important;
        }

        .lst-kix_list_2-1>li:before {
            content: ""counter(lst-ctn-kix_list_2-1, lower-latin) ". "
        }

        ol.lst-kix_list_2-1.start {
            counter-reset: lst-ctn-kix_list_2-1 0
        }

        .lst-kix_list_4-5>li {
            counter-increment: lst-ctn-kix_list_4-5
        }

        .lst-kix_list_1-8>li:before {
            content: "\0025aa  "
        }

        .lst-kix_list_2-2>li:before {
            content: ""counter(lst-ctn-kix_list_2-2, lower-roman) ". "
        }

        .lst-kix_list_2-3>li:before {
            content: ""counter(lst-ctn-kix_list_2-3, decimal) ". "
        }

        .lst-kix_list_4-2>li {
            counter-increment: lst-ctn-kix_list_4-2
        }

        ol.lst-kix_list_5-2.start {
            counter-reset: lst-ctn-kix_list_5-2 0
        }

        ol {
            margin: 0 !important;
            padding: 0 !important
        }

        table td,
        table th {
            padding: 0 !important
        }

        .c3 {
            color: #000000 !important;
            font-weight: 400 !important;
            text-decoration: none !important;
            vertical-align: baseline !important;
            font-size: 13pt !important;
            font-family: Calibri !important;
            font-style: normal !important
        }

        .c2 {
            color: #000000 !important;
            font-weight: 400 !important;
            text-decoration: none !important;
            vertical-align: baseline !important;
            font-size: 13pt !important;
            font-family: Calibri !important;
            font-style: normal !important
        }

        .c11 {
            margin-left: 36pt !important;
            padding-top: 0pt !important;
            padding-left: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 1.0 !important;
            text-align: justify !important
        }

        .c33 {
            margin-left: 54pt !important;
            padding-top: 0pt !important;
            padding-left: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 1.7 !important;
            text-align: left !important
        }

        .c23 {
            margin-left: 36pt !important;
            padding-top: 0pt !important;
            padding-left: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 2.0 !important;
            text-align: left !important
        }

        .c16 {
            margin-left: 18pt !important;
            padding-top: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 2.0 !important;
            text-align: justify !important
        }

        .c6 {
            padding-top: 0pt !important;
            padding-bottom: 6pt !important;
            line-height: 1.0 !important;
            text-indent: 36pt !important;
            text-align: justify !important
        }

        .c4 {
            padding-top: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 1.0 !important;
            text-align: justify !important;
            height: 13pt !important
        }

        .c12 {
            margin-left: 36pt !important;
            padding-top: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 1.0 !important;
            text-align: left !important;
            font-weight: 700 !important;
            font-size: 18pt !important;
            font-family: Calibri !important
        }

        .c19 {
            padding-top: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 1.0 !important;
            text-align: left !important;
            height: 13pt !important
        }

        .c21 {
            padding-top: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 1.0 !important;
            text-align: left !important
        }

        .c24 {
            padding-top: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 1.0 !important;
            text-align: center !important
        }

        .c18 {
            color: #000000 !important;
            text-decoration: none !important;
            vertical-align: baseline !important;
            font-style: italic !important
        }

        .c13 {
            padding-top: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 1.0 !important;
            text-align: justify !important
        }

        .c26 {
            padding-top: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 1.7 !important;
            text-align: center !important
        }

        .c29 {
            padding-top: 0pt !important;
            padding-bottom: 6pt !important;
            line-height: 2.0 !important;
            text-align: center !important
        }

        .c38 {
            padding-top: 0pt !important;
            padding-bottom: 0pt !important;
            line-height: 2.0 !important;
            text-align: left !important
        }

        .c7 {
            color: #000000 !important;
            text-decoration: none !important;
            vertical-align: baseline !important;
            font-style: normal !important
        }

        .c35 {
            color: #000000 !important;
            vertical-align: baseline !important;
            font-style: normal !important
        }

        .c0 {
            font-size: 13pt !important;
            font-family: Calibri !important;
            font-weight: 700 !important
        }

        .c10 {
            font-weight: 700 !important;
            font-size: 18pt !important;
            font-family: Calibri !important
        }

        .c20 {
            font-weight: 400 !important;
            font-size: 13pt !important;
            font-family: Calibri !important
        }

        .c27 {
            text-decoration: underline !important;
            font-size: 13pt !important;
            font-family: Calibri !important;
            font-weight: 700 !important
        }

        .c8 {
            font-weight: 400 !important;
            font-size: 13pt !important;
            font-family: Calibri !important
        }

        .c32 {
            background-color: #ffffff !important;
            max-width: 504pt !important;
            padding: 64.8pt 50.4pt 38.9pt 57.6pt !important
        }

        .c5 {
            font-size: 13pt !important;
            font-family: Calibri !important;
            font-weight: 400 !important
        }

        .c15 {
            font-weight: 700 !important;
            font-size: 13pt !important;
            font-family: Calibri !important
        }

        .c39 {
            font-weight: 400 !important;
            font-size: 18pt !important;
            font-family: Calibri !important
        }

        .c17 {
            font-size: 18pt !important;
            font-family: Calibri !important;
            font-weight: 700 !important
        }

        .c22 {
            font-weight: 700 !important;
            font-size: 18pt !important;
            font-family: Calibri !important
        }

        .c14 {
            font-weight: 400 !important;
            font-size: 12.5pt !important;
            font-family: Calibri !important
        }

        .c1 {
            padding: 0 !important;
            margin: 0 !important;
            font-weight: 700 !important;
            font-size: 18pt !important;
        }

        .c28 {
            font-weight: 700 !important;
            font-family: Calibri !important
        }

        .c37 {
            margin-left: 180pt !important;
            text-indent: -180pt !important
        }

        .c36 {
            padding-left: 0pt !important
        }

        .c30 {
            font-size: 24pt !important;
            font-weight: 700 !important;
            font-family: Calibri !important
        }

        .c31 {
            margin-left: 18pt !important
        }

        .c25 {
            height: 13pt !important
        }

        .c34 {
            color: #333333 !important
        }

        .c9 {
            text-indent: 36pt !important
        }

        .title {
            padding-top: 24pt !important;
            color: #000000;
            font-weight: 700 !important;
            font-size: 36pt !important;
            padding-bottom: 6pt !important;
            font-family: Calibri !important;
            line-height: 1.0 !important;
            page-break-after: avoid;
            text-align: left !important
        }

        .subtitle {
            padding-top: 18pt;
            color: #666666;
            font-size: 24pt;
            padding-bottom: 4pt;
            font-family: Calibri;
            line-height: 1.0;
            page-break-after: avoid;
            font-style: italic;
            text-align: left
        }

        li {
            color: #000000;
            font-size: 13pt;
            font-family: Calibri
        }

        p {
            margin: 0;
            color: #000000;
            font-size: 13pt;
            font-family: Calibri !important;
        }

        h1 {
            padding-top: 0pt;
            color: #000000;
            font-size: 13pt;
            padding-bottom: 0pt;
            font-family: Calibri;
            line-height: 1.0;
            text-align: left
        }

        h2 {
            padding-top: 18pt;
            color: #000000;
            font-weight: 700;
            font-size: 18pt;
            padding-bottom: 4pt;
            font-family: Calibri;
            line-height: 1.0;
            page-break-after: avoid;
            text-align: left
        }

        h3 {
            padding-top: 18pt;
            color: #000000;
            font-weight: 700;
            font-size: 18pt;
            padding-bottom: 4pt;
            font-family: Calibri;
            line-height: 1.0;
            page-break-after: avoid;
            text-align: left
        }

        h4 {
            padding-top: 13pt;
            color: #000000;
            font-weight: 700;
            font-size: 13pt;
            padding-bottom: 2pt;
            font-family: Calibri;
            line-height: 1.0;
            page-break-after: avoid;
            text-align: left
        }

        h5 {
            padding-top: 11pt;
            color: #000000;
            font-weight: 700;
            font-size: 11pt;
            padding-bottom: 2pt;
            font-family: Calibri;
            line-height: 1.0;
            page-break-after: avoid;
            text-align: left
        }

        h6 {
            padding-top: 10pt;
            color: #000000;
            font-weight: 700;
            font-size: 10pt;
            padding-bottom: 2pt;
            font-family: Calibri;
            line-height: 1.0;
            page-break-after: avoid;
            text-align: left
        }
    </style>
</head>

<body class="c32">
    <p class="c26"><span class="c30 c7 ">THE {{ trustName }} TRUST</span></p>
    <p class="c26 c25"><span class="c30 c7"></span></p>
    <p class="c29"><span class="c17 c7">DECLARATION OF TRUST </span></p>
    <p class="c29"><span class="c10 c7">&amp; TRUST ESTATE DISTRIBUTION DOCUMENT</span></p>
    <p class="c29 c25"><span class="c10 c7"></span></p>
    <p class="c9 c13"><span class="c5">I,</span><span class="c0"> {{ trustName }}, </span><span class="c5">a resident of
        </span><span class="c0">{{ state }}</span><span class="c5">, by attaching my digital signature hereto, hereby
            create </span><span class="c0">THE {{ trustName }} TRUST, DATED {{ createdAt }}</span><span class="c3">.
            &nbsp;I am creating this trust for the purpose of holding title to and managing my assets during my
            lifetime, and in order to efficiently administer and distribute the remaining trust assets upon my demise.
            &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13"><span class="c5">By creating this trust, I hereby revoke all prior trusts that I may have
            established, if any, to be completely restated and replaced by the terms of this new Declaration of Trust,
            and to be funded with all of my assets, including the assets of any prior trust I may have created and which
            is now hereby considered to be revoked and restated completely by the terms of this new Declaration of
            Trust. &nbsp;All property hereinafter transferred or conveyed to and received by the Trustee to be held
            pursuant to the terms of this Instrument, is herein called the &ldquo;Trust Estate.&rdquo; </span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c26"><span class="c17 c7">DEFINITIONS</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c5">I, </span><span class="c0">{{ trustName }},</span><span class="c3"> am the
            &ldquo;Creator&rdquo; (Trustor) of this trust. </span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">I am also the &ldquo;Trustee&rdquo; (Manager) of this trust during my
            lifetime.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">The &ldquo;Successor Trustee&rdquo; is the person(s) I have chosen to manage the
            Trust Estate for my benefit upon my incapacitation, or to settle and distribute the Trust Estate after my
            demise. &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">{{ single_user_with_child }}</span></p>
    <p class="c9 c13 "><span class="c3">The term &ldquo;Beneficiary&rdquo; or &ldquo;Beneficiaries&rdquo; shall refer
            first to me, and upon my death, then to the subsequent beneficiaries who will receive my Trust Estate in the
            manner indicated below.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">The term &ldquo;Trust Estate&rdquo; refers to all of those assets and property,
            both real and personal, which I transfer or assign into my trust, including any income, dividends, rents or
            royalties generated therefrom.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c26"><span class="c17 c7">TERMS OF TRUST</span></p>
    <p class="c4"><span class="c3"></span></p>
    <ol class="c1 lst-kix_list_3-0 start" start="1">
        <li class="c12 c36"><span class="c10 c7">DURING MY LIFETIME:</span></li>
    </ol>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13"><span class="c3">During my lifetime, I am the primary beneficiary of the trust, and I alone may
            use and consume any or all of the income or principal of this trust for my own benefit for any reason
            whatsoever. &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c5">I may also revoke, amend or restate this trust, in whole or in part, at any time
            during my lifetime by doing so in writing, or by attaching my digital signature to any amendment or
            restatement of this trust. &nbsp;Upon my death or incapacitation, this trust shall become
            irrevocable.</span><span class="c7 c14">&nbsp;</span></p>
    <p class="c4"><span class="c3"></span></p>
    <ol class="c1 lst-kix_list_3-0" start="2">
        <li class="c12 c36"><span class="c10 c7">BENEFICIARIES:</span></li>
    </ol>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13"><span class="c3">After my death, I direct my successor trustee to settle my Trust Estate, to pay
            my outstanding bills and taxes, and then to distribute the remaining net Trust Estate as follows:
            &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13"><span class="c3"> {{ special_bequest }}</span></p>
    <p class="c9 c13"><span class="c3">{{ jewelry_all_single }}</span></p>
    <p class="c9 c13 "><span class="c5">{{ jewelry_all_itemized }}</span></p>
    <p class="c9 c21"><span class="c3">{{ pets_all_single }}</span></p>
    <p class="c9 c13 "><span class="c3">{{ pets_all_itemized }}</span></p>
    <p class="c9 c13 "><span class="c3">{{ personal_property_single_bequest }} </span></p>
    <p class="c9 c13 "><span class="c3">{{ real_property_single_bequest }}</span></p>
    <p class="c9 c13 "><span class="c3">{{ business_single_bequest }}</span></p>
    <p class="c9 c13 "><span class="c3">{{ life_estate_provision }}</span></p>
    <p class="c8"><span class="c0 c7">{{ single_initials }}</span></p>
    <p class="c9 c13 "><span class="c0 c7">{{ serialNumber }}&nbsp;DISTRIBUTION OF THE BALANCE &amp; RESIDUE OF THE
            TRUST ESTATE:</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">{{ all_children_equality }} </span></p>
    <p class="c9 c13 "><span class="c3">{{ all_children_non_equality }}</span></p>
    <p class="c9 c13 "><span class="c3">{{ children_non_equal_beneficiary_all }}</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c0 c7">_____</span></p>
    <p class="c13"><span class="c0 c7">My Initials &nbsp; </span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">{{ disinheritance_clause }} </span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c0 c7">{{ disinheritance_clause_single_initials }}</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">{{ contingent_beneficiary_clause_by_ROR }}</span></p>
    <p class="c13"><span class="c3">{{ contingent_beneficiary_clause_survivors }}</span></p>
    <p class="c13"><span class="c3">{{ final_contingent_beneficiary_clause_heirs }}</span></p>
    <p class="c13"><span class="c3">{{ final_contingent_beneficiary_clause_charity }}</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c0 c7">_____</span></p>
    <p class="c13"><span class="c0 c7">My Initials &nbsp;</span></p>
    <p class="c4"><span class="c3"></span></p>
    <ol class="c1 lst-kix_list_3-0" start="3">
        <li class="c12 c36"><span class="c10 c7">DISTRIBUTIONS OF INCOME AND PRINCIPAL:</span></li>
    </ol>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13 "><span class="c0 c7">A. &nbsp;INCOME: &nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">Following my death, the trustee shall distribute, at frequent and convenient
            intervals but at least annually, all of the trust&#39;s income, in amounts which are proportional to the
            interests held by each of the beneficiaries of the Trust.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c0 c7">B. &nbsp;PRINCIPAL:</span></p>
    <p class="c9 c13 "><span class="c5">{{ distribution_age_one }}</span></p>
    <p class="c9 c13 "><span class="c3">{{ staggered_ages_two }}</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c0">C. &nbsp;</span><span class="c3">Nevertheless, in any interim period before any
            such beneficiary has qualified for all of his or her entire principal distribution, the trustee may
            distribute from the principal of that beneficiary&rsquo;s individual share of the Trust Estate, such sums as
            in the trustee&rsquo;s discretion are necessary for the proper support, health, education, and maintenance
            of that beneficiary.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c21 c9"><span class="c3">{{ education_funding_clause }}</span></p>
    <p class="c9 c13 "><span class="c3">{{ education_incentive_clause }} </span></p>
    <p class="c9 c13 "><span class="c3">{{ health_clause }}</span></p>
    <p class="c9 c13"><span class="c3">{{ substance_abuse_clause }}</span></p>
    <p class="c9 c13 "><span class="c3">{{ spousal_separate_prop_clause }}</span></p>
    <p class="c13 c31"><span class="c3">{{ new_business_clause }}</span></p>
    <p class="c9 c13 "><span class="c5">{{ purchase_home_clause }}</span></p>
    <p class="c4"><span class="c3"></span></p>
    <ol class="c1 lst-kix_list_3-0" start="4">
        <li class="c12 c36"><span class="c10 c7">SUCCESSOR TRUSTEES:</span></li>
    </ol>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13 "><span class="c5">I, </span><span class="c0">{{ trustName }},</span><span class="c3">&nbsp;declare
            that I am the initial trustee of this trust, with complete individual signature authority to transact any
            and all trust business. &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">{{ consecutive_trustees_single }} </span></p>
    <p class="c9 c13 "><span class="c3">{{ co_trustees_single }} </span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c0 c7">_____</span></p>
    <p class="c13"><span class="c0 c7">My Initials &nbsp; </span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">My successor trustee(s) shall possess all trustee powers described in this trust
            and in addition, shall have all reasonable and necessary powers available to a successor trustee under
            applicable State law, unless specifically prohibited by this trust. &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">The acting successor trustee(s) shall be entitled to be reimbursed for any
            necessary and reasonable expenses incurred in administering the Trust Estate. &nbsp;In addition, my
            successor trustee(s) shall also be entitled to reasonable compensation, on a per annum basis, as
            compensation for the trustee&rsquo;s time and effort expended while administering the Trust Estate. &nbsp;If
            I select a corporate trustee, or if a corporate trustee is appointed for my trust, the corporate trustee
            shall receive compensation for its services in accordance with its published schedule of fees in effect on
            the date services are rendered, and may pay itself compensation from the assets of the trust. &nbsp;The
            corporate trustee&rsquo;s compensation shall be in addition to, and shall not be reduced by, any other
            compensation or benefit received by the corporate trustee or its affiliates, or third parties. &nbsp;</span>
    </p>
    <p class="c4"><span class="c3"></span></p>
    <ol class="c1 lst-kix_list_3-0" start="5">
        <li class="c12 c36"><span class="c10 c7">MY TRUST ASSETS:</span></li>
    </ol>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13 "><span class="c5">I hereby transfer and assign into </span><span class="c0">THE {{ trustName }}
            TRUST, DATED {{ createdAt }}</span><span class="c5">&nbsp;all of my real and personal property of any kind,
            wherever held or located, which I now own an interest in, and including any and all assets which I may have
            held in a prior trust, which prior trust, if any, is now hereby revoked. &nbsp;All property and assets, real
            and personal, including those described on Schedule A of the</span><span class="c0">&nbsp;General Assignment
            into Trust &amp; Declaration of Intent </span><span class="c3">attached to this trust, and properties titled
            in the name of the trust, shall also be considered transferred to this trust and shall be held,
            administered, and distributed by the trustee as provided for in this Declaration of Trust.</span></p>
    <p class="c4"><span class="c3"></span></p>
    <ol class="c1 lst-kix_list_3-0" start="6">
        <li class="c12 c36"><span class="c10 c7">ELECTRONIC FORMAT OF TRUST AGREEMENT:</span></li>
    </ol>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13 "><span class="c3">By executing this Trust Agreement I am intentionally choosing to create this
            Declaration of Trust through Modern Trust in a digital, electronic format, where my trust documents can be
            maintained, accessed and modified by me, privately and conveniently online. &nbsp;The Trust document will be
            made available to my successor trustee upon my death or incapacitation, upon presentation of satisfactory
            proof that I have either died or become physically and mentally incapacitated. </span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">To prove that I have died, my successor trustee must present Modern Trust, or
            its successor in interest, with a valid, original death certificate issued by the appropriate governing body
            or county health department responsible for issuing death certificates upon my demise. &nbsp;Alternatively,
            to verify that I have become incapacitated, my successor trustee must present either 1) a determination of
            incapacitation rendered by a court of proper jurisdiction; or ii) two letters from two (2) unrelated
            licensed physicians, each duly witnessed by two witnesses, explaining my condition and why I am mentally
            incapacitated and unable to manage my own affairs, which letters of incapacitation shall be subject to
            verification.</span></p>
    <p class="c4"><span class="c3"></span></p>
    <ol class="c1 lst-kix_list_3-0" start="7">
        <li class="c12 c36"><span class="c10 c7">TRUSTEE POWERS:</span></li>
    </ol>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13 "><span class="c0 c7">A. GENERAL ADMINISTRATIVE POWERS: &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">The trustee of this trustee, including me, as the initial trustee, and also
            including my designated successor trustee(s), shall have all reasonable and customary powers available to an
            acting successor trustee under State or applicable law, including the power to open, close, manage bank or
            credit union accounts, the authority to write checks upon any bank, credit union, or investment brokerage
            account; the power to buy, sell and trade securities, including stocks, bonds or mutual funds and securities
            of any kind; the power to maintain a margin account; the power to buy, sell, lease, convey, exchange,
            convert, improve, repair, partition, divide, subdivide, create restrictions or easements upon, or manage
            real estate or real property of any kind; the power to foreclose on a trust asset; the power to remove or
            evict an unlawful or holdover tenant from a trust property; the power to buy or sell personal property; the
            power to lease, mortgage, borrow upon or encumber trust property; the power to litigate on behalf of the
            trust; the power to vote or exercise any proxy rights relating to any trust asset; the power to hire
            professional accountants, lawyers, appraisers, or financial advisors, or other experts to assist the trustee
            in performing the trustee&rsquo;s duties, the power to delegate certain responsibilities to others who the
            trustee determines, in the trustee&rsquo;s discretion, are qualified and experienced to perform certain
            tasks required for proper trust administration, as directed by the trustee; the power to pay bills and
            expenses of the estate and the power to negotiate and settle claims of the Trust Estate; the power to loan
            trust assets upon reasonable terms and with a reasonable rate of interest; the power to prepare and file any
            necessary state or federal tax returns on behalf of the trust; the power to manage an ongoing trust or
            sub-trust for the benefit of a beneficiary not yet entitled to receive his or her full distribution, the
            power to purchase, manage or administer insurance of any kind; the power to distribute trust assets in cash
            or kind; the power to retain non-income producing property during the lifetime of the Creator, the power to
            manage a business; the power to manage, invest and reinvest trust funds in a manner permitted by law; and
            finally, the trustee shall have any and all other reasonable powers necessary to the proper administration
            of the Trust Estate available to the trustee under applicable law</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">If shares of S-corporation stock are allocated to any trust created under this
            instrument and that trust does not otherwise qualify as a permitted shareholder under Internal Revenue Code
            Section 1361(c)(2), or any successor section, then that trust (or any portion of that trust containing
            S&nbsp;corporation stock) shall be administered in such a manner to ensure that the trust is a Qualified
            Subchapter&nbsp;S Trust (QSST) within the meaning of Internal Revenue Code Section 1361(d)(3), or any
            successor section, and the S&nbsp;corporation stock in each trust shall be held in separate share trusts
            (within the meaning of Internal Revenue Code Section 663(c), or any successor section) for each beneficiary;
            and all other property in each trust shall be held in a separate trust, which shall continue to be
            administered in accordance with the terms of this instrument, and the trustee shall make distributions of
            income and principal, and otherwise administer the trusts, to ensure that those trusts do not become
            ineligible shareholders of an S&nbsp;corporation, and to the extent that the terms of this instrument are
            inconsistent with those separate share trusts qualifying as QSSTs, those terms shall be disregarded; and the
            trustee may allocate amounts received and taxes on undistributed income between income and principal, and
            the Trustee may enter into agreements with shareholders stating that (1) that the beneficiary will consent
            to any election to qualify the corporation as an S&nbsp;corporation, (2) that the beneficiary will not
            interfere with the S&nbsp;corporation maintaining its S&nbsp;corporation status, (3) that the beneficiary
            will not transfer the S&nbsp;corporation stock to any transferee who does not agree to execute a similar
            consent, (4) that the beneficiary will not transfer the stock in a manner that will cause a termination of
            S&nbsp;corporation status under the then applicable federal and state tax law and regulations, and (5) that
            the beneficiary will join in any attempt to obtain a waiver from the Internal Revenue Service of a
            terminating event on the grounds of inadvertence if S&nbsp;corporation status is inadvertently terminated
            and the S&nbsp;corporation or any shareholder desires that S&nbsp;corporation status should continue.
            &nbsp;</span></p>
    <p class="c4 c9"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c0 c7">B. DUTIES CONCERNING PRIOR TRUSTEES: &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">No successor trustee shall be required to audit the books or records or
            investigate the actions of any predecessor trustee or estate representative nor shall such successor trustee
            be liable for any act or omission of any predecessor trustee or estate representative, whether known or
            unknown to the trustee. &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c0 c7">C. &nbsp;ENVIRONMENTAL PROVISIONS FOR REAL PROPERTY: &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">The trustee shall have the power to (A) inspect or investigate property the
            trustee holds or has been asked to hold, or property owned or operated by an organization in which the
            trustee holds or has been asked to hold an interest, for the purpose of determining the application of
            environmental law with respect to the property; (B) take action to prevent, abate, or otherwise remedy any
            actual or potential violation of any environmental law affecting property held directly or indirectly by the
            trustee, whether taken before or after the assertion of a claim or the initiation of governmental
            enforcement; (C) decline to accept property into trust or disclaim any power with respect to property that
            is or may be burdened with liability for violation or environmental law; (D) compromise claims against the
            trust which may be asserted for an alleged violation of environmental law; and (E) pay or be indemnified
            beforehand for the expense of any inspection review, abatement, or remedial action to comply with
            environmental law. &nbsp;The trustee and its affiliates and their respective officers, directors,
            shareholders, employees and agents shall be held harmless and indemnified from the assets of the trust from
            and against any loss, liability or expense including reasonable attorneys&rsquo; fees, which the trustee may
            incur as a result of any violation, whether actual or threatened, of any environmental law or regulation
            with respect to trust property. &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c0 c7">D. &nbsp;POWER TO DELEGATE AND EMPLOY AGENTS:</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">The trustee shall have the power to employ and compensate agents including,
            without limitation, accountants, attorneys, brokers, dealers, custodians, investment advisors, realtors, tax
            specialists, and other assistants and advisors deemed by the corporate trustee to be needed for the proper
            administration of the trust estate; to delegate to them its fiduciary powers; and to so employ, compensate
            or delegate without liability for any neglect, omission, misconduct or default of any such agent provided
            such person was selected and retained with reasonable care. &nbsp;Notwithstanding any rule of law against
            self-dealing, divided loyalty or conflict of interest, the agents may include corporations or other entities
            affiliated with the trustee. &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c0 c7">E. &nbsp;POWER TO DELEGATE TO A CO-TRUSTEE:</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">A trustee may delegate to a co-trustee part or all of the trustee&rsquo;s powers
            and duties, including the power and duty to invest trust assets, in a writing signed by the delegating
            trustee and delivered to such co-trustee. &nbsp;The delegating trustee shall have no liability for the
            exercise by such co-trustee of any delegated power. &nbsp;The delegating trustee may revoke any such
            delegation at any time.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c0 c7">F. &nbsp;TRUSTEE RESIGNATION:</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">A trustee may resign as trustee of any trust created under this instrument at
            any time without court approval, which resignation shall be effective upon written notice to any co-trustees
            of such trust, or if none, to the competent income beneficiaries thereof. &nbsp;If the trustee is the sole
            trustee, then resignation shall be effective upon written acceptance by a successor trustee of such trust;
            provided, however that if no successor trustee is designated under the terms of such trust, a successor
            trustee may be appointed by a majority of the then-competent income beneficiaries of such trust, or if none,
            by the resigning sole trustee in its sole discretion</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c0 c7">G. &nbsp;TRUSTEE ACCOUNTING:</span></p>
    <p class="c4 c9"><span class="c3"></span></p>
    <p class="c9 c13 "><span class="c3">The trustee shall provide an accounting to the current income beneficiaries at
            least annually. &nbsp;To the extent allowed by applicable law, the trustor expressly relieves the trustee of
            any duty to account to other beneficiaries. &nbsp;A duty to account to an incompetent current income
            beneficiary shall be satisfied by delivery of the accounting to such beneficiary&rsquo;s parent or guardian.
            &nbsp;To the extent allowed by applicable law, a current income beneficiary shall be deemed to consent and
            acquiesce to an accounting unless the trustee receives written objection from such beneficiary within ninety
            (90) days of the delivery of the accounting. &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13"><span class="c3">The trustee shall not be liable for the management, care, or protection of any
            tangible personal property owned by the trustee if the trustor or any trust beneficiary retains possession
            or control of such property. &nbsp;The trustee&rsquo;s sole duty with regard to any such property shall be
            to hold legal title thereto.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c0 c7">H. &nbsp;TERMINATION OF TRUST </span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">Notwithstanding anything to the contrary in this instrument, the trustee may in
            its sole, absolute, and uncontrolled discretion, terminate any trust created under this instrument if it
            determines that the continued administration of any such trust is inadvisable. &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c0 c7">I. &nbsp;POWER TO RETAIN, OR INVEST IN AFFILIATED PRODUCTS:</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">Notwithstanding any rule of law against self-dealing divided loyalty or conflict
            of interest, a corporate trustee may in its discretion retain and/or invest some or all of the assets of the
            trust estate in, any financial instrument, contract or investment vehicle sold, managed, advised,
            distributed, underwritten, or issued by, or which receives compensated services from, the corporate trustee
            or its affiliates including, but not limited to, money market funds and mutual funds, annuities, life and
            other insurance contracts or policies, as well as deposit products, whether savings accounts, time deposits,
            certificate of deposit and transaction accounts, of the corporate trustee or any other affiliated or
            unaffiliated FDIC-insured depository institution. &nbsp;The corporate trustee may retain or invest in such
            assets notwithstanding the corporate trustee or its affiliates may also receive credit, compensation or
            benefit from one another in addition to the corporate trustee&rsquo;s compensation from the trust.
            &nbsp;This power is in addition to other powers granted to the trustee by law or by this instrument.</span>
    </p>
    <p class="c4"><span class="c3"></span></p>
    <ol class="c1 lst-kix_list_3-0" start="8">
        <li class="c12 c36"><span class="c10 c7">TAX APPORTIONMENT:</span></li>
    </ol>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c5">Any beneficiary receiving real property shall be responsible for paying any
            estate or inheritance taxes related or attributable to that real property. &nbsp;Thereafter, the trustee
            shall pay any remaining estate and inheritance taxes out of the Residue of the Trust Estate. </span></p>
    <p class="c4 c9"><span class="c7 c14"></span></p>
    <ol class="c1 lst-kix_list_3-0" start="9">
        <li class="c12 c36"><span class="c10 c7">SPENDTHRIFT PROVISION:</span></li>
    </ol>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13 "><span class="c3">Unless expressly provided for in this Declaration, no beneficiary of any trust
            herein shall have any right, power or authority to alienate, encumber, or hypothecate his or her interest in
            the principal or income of such trust in any manner. &nbsp;No interest of any beneficiary shall be subject
            to claims of his or her creditors or liable to attachment, execution or other process of law.</span></p>
    <p class="c4"><span class="c3"></span></p>
    <ol class="c1 lst-kix_list_3-0" start="10">
        <li class="c12 c36"><span class="c10 c7">JURISDICTION:</span></li>
    </ol>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13 "><span class="c3">This trust shall be valid in and interpreted under the laws of the State or
            jurisdiction with which I am most closely associated at the time of my demise and where most of my assets
            are situated.</span></p>
    <p class="c4"><span class="c3"></span></p>
    <ol class="c1 lst-kix_list_3-0" start="11">
        <li class="c12 c36"><span class="c10 c7">NO CONTEST CLAUSE:</span></li>
    </ol>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13 "><span class="c5">If any person contests this trust by filing suit against the trustee or the
            trust, or by directly or indirectly impeding the lawful actions of the successor trustee, then that person
            shall be completely disinherited, as if he or she had of predeceased me. </span><span
            class="c7 c14">&nbsp;</span></p>
    <p class="c4"><span class="c3"></span></p>
    <ol class="c1 lst-kix_list_3-0" start="12">
        <li class="c12 c36"><span class="c10 c7">CERTIFICATION OF TRUST:</span></li>
    </ol>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13 "><span class="c5">I, </span><span class="c0">{{ trustName }}, </span><span class="c5">declare that
            I am of sound and disposing mind, and I am not under any duress or undue influence, and I have read and
            agree with all of the terms of </span><span class="c0">THE {{ trustName }} TRUST, DATED
            {{ createdAt }}</span><span class="c5">, as described herein, and I hereby establish this Declaration of
            Trust on this date of </span><span class="c0">{{ createdAt }}, </span><span class="c3">and my digital
            signature below shall be considered to have the same force and full, legal binding effect to establish this
            trust just as if my signature had been written on physical paper. &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c5">EXECUTED ON &nbsp;</span><span class="c0">{{ createdAt }}</span><span class="c5">,
            at </span><span class="c27">{{ city }}</span><span class="c5">, </span><span
            class="c0 c7">{{ state }}.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c18 c5">SIGNATURE: &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c5">BY:</span><span class="c27 c5">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="c3">&nbsp;CREATOR &amp;
            TRUSTEE</span></p>
    <p class="c13"><span class="c0 c7">&nbsp;{{ trustName }}</span></p>
    <div style="page-break-before:always">&nbsp;</div>
    <p class="c24"><span></span><span class="c22 c7">GENERAL ASSIGNMENT INTO TRUST</span></p>
    <p class="c24 c31"><span class="c22 c7">&amp;</span></p>
    <p class="c24 c31"><span class="c22 c7">DECLARATION OF INTENT:</span></p>
    <p class="c19"><span class="c7 c20">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c5">In order to provide my trustee with the necessary authority and legal title to
            make all of the distributions described in my trust, I, </span><span class="c0">{{ trustName }},
        </span><span class="c5">the undersigned, as a resident of the State of {{ state }}, hereby transfer and assign
            all of my real and personal property, wherever located, into </span><span class="c0">THE {{ trustName }}
            TRUST</span><span class="c5">, </span><span class="c0">DATED</span><span class="c5">&nbsp;</span><span
            class="c0">{{ createdAt }},</span><span class="c3">&nbsp;including all items listed on Schedule A attached
            hereto, and also including all of my bank accounts, checking and savings accounts, investment and brokerage
            accounts, cash, stocks, bonds, mutual funds, securities of any kind, patents, trademarks, copyrights,
            royalties, leasehold interests, promissory notes, business interests, corporations, partnerships, sole
            proprietorships, limited liability companies, and also including automobiles and vehicles, watercraft,
            recreational vehicles, furniture, household furnishings, appliances, clothing, jewelry, watches, art,
            paintings, sculpture, statuary, precious metals, dishes, firearms, if any, tools, equipment, collections of
            any kind, books, photographs, antiques, computers, cell phones, electronic equipment, cameras, pets and
            animals; and also including life insurance, annuities and retirement accounts where there is no named or
            living beneficiary, or where the beneficiary is my trust; and also including all of my digital assets,
            usernames and passwords, social media accounts, blogs, digital photographs, digital videos and music and the
            like; and also including any and all of interest in real property which I may own including land,
            residential property, commercial real estate, timeshares, leasehold interest, mining, oil, gas and mineral
            rights, life estate, contingent or remainder interest, or any other such property, real or personal, whether
            owned by me now or acquired by me in the future. &nbsp;This general assignment shall be considered effective
            immediately and shall remain ongoing and effective until revoked by me. &nbsp;I intend for this to be an
            assignment into trust of all of my assets. &nbsp;This general assignment and affirmation of trust ownership
            and my intent to hold title within my trust shall be binding upon all of my heirs, administrators, successor
            trustees, executors and assigns, and henceforth all such assets shall belong to my Trust and not to me
            individually.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c24 c31"><span class="c10 c7">AUTHENTICATION OF GENERAL ASSIGNMENT INTO TRUST:</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c5">By affixing my digital signature below, I, </span><span
            class="c0">{{ trustName }}, </span><span class="c5">hereby execute this </span><span class="c0">General
            Assignment Into Trust &amp; Declaration of Intent </span><span class="c5">effectively transferring and
            assigning my assets into </span><span class="c0">THE {{ trustName }} TRUST, DATED {{ createdAt }}.
            &nbsp;</span><span class="c3">This assignment shall be considered effective and shall have the same force
            and full, legal binding effect just as if my signature had been written on physical paper. &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c5">EXECUTED ON </span><span class="c0">{{ createdAt }}</span><span class="c5">, at
        </span><span class="c27">{{ city }}</span><span class="c5">, </span><span class="c0 c7">{{ state }}.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c18 c5">SIGNATURE: &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c5">BY:</span><span class="c27 c5">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="c3">&nbsp;CREATOR &amp;
            TRUSTEE</span></p>
    <p class="c13"><span class="c0 c7">{{ trustName }}</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <div style="page-break-before:always"> &nbsp;</div>
    <p class="c24"><span class="c22 c7">SCHEDULE A &nbsp;- &nbsp;MY TRUST ASSETS</span></p>
    <p class="c24 c25"><span class="c22 c7"></span></p>
    <p class="c21 c9"><span class="c5">I declare that in addition to the assets described in the </span><span
            class="c0">General Assignment Into Trust &amp; Declaration of Intent </span><span class="c5">above, the
            following assets shall also be considered to be transferred to and assigned into </span><span class="c0">THE
            {{ trustName }} TRUST, DATED {{ createdAt }}</span><span class="c3">:</span></p>
    <p class="c4"><span class="c3"></span></p>
    <p class="c12"><span class="c5">{{ assets }}</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c18 c5">SIGNATURE: &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c5">BY:</span><span class="c27 c5">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="c3">&nbsp;CREATOR &amp;
            TRUSTEE</span></p>
    <p class="c13"><span class="c0 c7">{{ trustName }}</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <div style="page-break-before:always"> &nbsp;</div>
    <p class="c24 c31"><span class="c22 c7">TRUST ASSET TITLING INSTRUCTIONS &amp; ACKNOWLEDGMENT</span></p>
    <p class="c19"><span class="c7 c20">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">I understand that in order for my assets to avoid probate and be distributed
            according to the terms of this trust I must title my assets in the name of my trust, as follows:
            &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c24 c9"><span class="c0 c7">{{ trustName }}, TRUSTEE OF </span></p>
    <p class="c24 c9 "><span class="c0 c7">THE {{ trustName }} TRUST, </span></p>
    <p class="c24 c9"><span class="c0 c7">DATED {{ createdAt }}</span></p>
    <p class="c24 c25 c9"><span class="c7 c15">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c10 c7">Which Assets should be titled in the name of my Trust?</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c3">Specifically, I understand that in order to avoid probate it is my
            responsibility to title each of the following in the name of my trust, as indicated above:</span></p>
    <p class="c4"><span class="c3"></span></p>
    <ul class="c1 lst-kix_list_1-0 start">
        <li class="c11"><span class="c0 c7">Personal Bank and Credit Union Accounts</span><span class="c3">, (like
                checking, savings, &amp; certificates of deposit)</span></li>
        <li class="c11"><span class="c0 c7">Stock and Securities Investment or Brokerage Accounts</span><span
                class="c3">, (like Charles Schwab, E-Trade, etc., but not including Tax-Deferred Retirement Accounts,
                like IRA&rsquo;s or 401k&rsquo;s).</span></li>
        <li class="c11"><span class="c0 c7">Mutual Funds</span></li>
        <li class="c11"><span class="c0 c7">Bonds</span></li>
        <li class="c11"><span class="c0 c7">Business Interests</span><span class="c3">, (Sole Proprietorships,
                Partnerships, Corporations and LLC&rsquo;s).</span></li>
        <li class="c11"><span class="c0 c7">Real Estate</span></li>
    </ul>
    <p class="c4"><span class="c3"></span></p>
    <p class="c9 c13 "><span class="c3">In order to assist a financial institution in titling my accounts in the name of
            the trust, I may need to provide them with a copy of my trust. &nbsp;</span></p>
    <p class="c9 c13 "><span class="c5">Additionally, any and all </span><span class="c0">real property</span><span
            class="c3">&nbsp;I may own or acquire should be titled in the name of my trust, as indicated above, in order
            to avoid probate, and in order to avoid passing to a surviving joint tenant, upon my death. &nbsp;Even if I
            only own a fractional interest in a piece of real estate, to allow the property to pass to the named
            beneficiaries of my trust upon my death, I should title any interest in the property which I own into my
            trust by creating a property transfer deed and then recording that deed in the county wherein the property
            is located.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c10 c7">Which Assets do NOT need to be titled in the name of my Trust?</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c5">I understand that accounts with </span><span class="c0">designated
            beneficiaries</span><span class="c5">, </span><span class="c0">including retirement accounts,
            &nbsp;IRA&rsquo;s, 401k&rsquo;s, and other tax-deferred retirement accounts, annuities, and life insurance
            policies</span><span class="c3">, will pass without probate to the beneficiaries I have named on each such
            account or policy, and that I do not need to name this trust as the beneficiary of any such retirement
            account or policy unless I want the account or policy to be paid directly to my trust upon my death, and
            that to do so could cause any deferred income taxes within a tax-deferred retirement account to be
            immediately due and payable upon my death. &nbsp;I also understand that a named beneficiary on any account
            or policy will always prevail over the terms of my trust, and that I am responsible for naming the
            beneficiaries on any of retirement accounts, tax-deferred accounts, annuities and life insurance policies
            that I may own. &nbsp;If I have questions about the tax-implications of naming beneficiaries on tax-deferred
            retirement accounts, I should consult a qualified financial advisor, tax professional, or estate planning
            attorney. </span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c9 c13 "><span class="c5">I understand the above Trust Asset Titling Instructions and hereby hold Modern
            Trust harmless from, and indemnify it against, any damages, probate or legal fees resulting from my failure
            to properly title my assets in the name of my trust. &nbsp;Executed on </span><span
            class="c0">{{ createdAt }}</span><span class="c5">, at </span><span class="c27">{{ city }}</span><span
            class="c5">, </span><span class="c0 c7">{{ state }}.</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c18 c5">SIGNATURE: &nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c4"><span class="c3">&nbsp;</span></p>
    <p class="c13"><span class="c5">BY:</span><span class="c27 c5 ">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span class="c3">&nbsp;CREATOR &amp;
            TRUSTEE</span></p>
    <p class="c13"><span class="c0 c7">{{ trustName }}</span></p>
    <p class="c24"><span class="c17">{{ nomination_of_guardians }}</span></p>
</body>

</html>