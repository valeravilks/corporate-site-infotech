<?php get_header(); ?>
    <section class="main-screen">
        <!--<div class="js-main-slider owl-carousel">
            <div class="main-screen__container">
                <img src="<?php /*echo get_template_directory_uri() */?>/img/main/1.jpg" alt="" class="main-screen__bg">
            </div>
            <div class="main-screen__container">
                2
            </div>
            <div class="main-screen__container">
                3
            </div>
        </div>-->
    </section>
<div class="container">dfdf</div>
<div class="container">
    <div class="row">
        <div class="col col-xl-6">1</div>
        <div class="col col-xl-6">2</div>
        <div class="col col-xl-6">3</div>

    </div>
    <div style="position: relative;">
        <label for="select-1">ss</label>
        <select id="select-1" class="select">
            <option value="0">Сейчас</option>
            <option value="1">Audi</option>
            <option value="2">BMW</option>
            <option value="3">Citroen</option>
            <option value="4">Ford</option>
            <option value="5">Honda</option>
            <option value="6">Jaguar</option>
            <option value="7">Land Rover</option>
            <option value="8">Mercedes</option>
            <option value="9">Mini</option>
            <option value="10">Nissan</option>
            <option value="11">Toyota</option>
            <option value="12">Volvo</option>
        </select>
    </div>

    </div>

    <style>
        .jqselect {
            border-radius: 4px;
            border: 1px solid rgba(0,0,0,0);
        }
        .jqselect.opened {
            border: 1px solid var(--blue);
        }

        .jq-selectbox__select::after {
            position: absolute;
            right: 20px;
            top: 9px;
            left: 20px;
            content: 'Удобное время звонка';
            font-family: Gordita, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            color: var(--black-blue-50);
        }
        .jq-selectbox__select::before {
            position: absolute;
            right: 20px;
            top: 19px;
            content: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTAiIHZpZXdCb3g9IjAgMCAxNiAxMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMSAxTDggOEwxNSAxIiBzdHJva2U9IiM4NjkzOUIiIHN0cm9rZS13aWR0aD0iMiIvPjwvc3ZnPg==);
        }

        .jq-selectbox__select:hover:before {
            position: absolute;
            right: 20px;
            top: 19px;
            content: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTAiIHZpZXdCb3g9IjAgMCAxNiAxMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMSAxTDggOEwxNSAxIiBzdHJva2U9IiMxNTI1NEIiIHN0cm9rZS13aWR0aD0iMiIvPjwvc3ZnPg==);        }
        }
        .jqselect {
            border: 1px solid rgba(0,0,0,0);
        }
        .jq-selectbox__select {
            border: 1px solid rgba(255, 255, 255, 0);
        }
        .jq-selectbox__select:hover {
            border: 1px solid var(--tertiary-text-1);
        }

        .jq-checkbox,
        .jq-radio {
            position: relative;
            display: inline-block;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .jq-checkbox input,
        .jq-radio input {
            position: absolute;
            z-index: -1;
            margin: 0;
            padding: 0;
            opacity: 0;
        }
        .jq-file {
            position: relative;
            display: inline-block;
            overflow: hidden;
        }
        .jq-file input {
            position: absolute;
            top: 0;
            right: 0;
            height: auto;
            margin: 0;
            padding: 0;
            opacity: 0;
            font-size: 100px;
            line-height: 1em;
        }
        .jq-file__name {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .jq-selectbox,
        .jq-select-multiple {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        .jq-selectbox select,
        .jq-select-multiple select {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            opacity: 0;
        }
        .jq-selectbox li,
        .jq-select-multiple li {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
        }
        .jq-selectbox {
            z-index: 10;
        }
        .jq-selectbox__select {
            cursor: pointer;
            font-family: Gordita, sans-serif;
            position: relative;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            background-color: var(--blue-light);
            height: 60px;
            border-radius: 4px;
            padding-top: 29px;
            padding-left: 20px;
            padding-right: 20px;
            line-height: 150%;
        }
        .jq-selectbox__select-text {
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .jq-selectbox__dropdown {
            position: absolute;
            width: 100%;
            margin-top: 10px;
            border-radius: 4px;
            background-color: var(--white);
            box-sizing: border-box;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        }
        .jq-selectbox__search input {
            -webkit-appearance: textfield;
        }
        .jq-selectbox__search input::-webkit-search-cancel-button,
        .jq-selectbox__search input::-webkit-search-decoration {
            -webkit-appearance: none;
        }
        .jq-selectbox__dropdown ul {
            padding: 10px 0;
            position: relative;
            overflow: hidden;
            overflow-x: hidden;
            list-style: none;
            -webkit-overflow-scrolling: touch;
        }
        .jq-selectbox__dropdown .selected{
            background-color: var(--blue-light);
        }
        .jq-selectbox__dropdown li:hover{
            background-color: var(--tertiary-text-2);
            color: var(--dark-90);
        }
        .jq-select-multiple ul {
            position: relative;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch;
        }
        .jq-selectbox li {
            padding: 5px 20px 4px;
            cursor: pointer;
            font-family: Gordita, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 199.5%;
            color: var(--black-blue-100);

        }
        .jq-number {
            display: inline-block;
        }
        .jq-number__field input {
            -moz-appearance: textfield;
            text-align: left; /* для Opera Presto */
        }
        .jq-number__field input::-webkit-inner-spin-button,
        .jq-number__field input::-webkit-outer-spin-button {
            margin: 0; /* в каких-то браузерах присутствует отступ */
            -webkit-appearance: none;
        }
    </style>
</div>
    <div class="container-photo">

        <div class="resize"></div>
    </div>
<?php
get_footer() ?>