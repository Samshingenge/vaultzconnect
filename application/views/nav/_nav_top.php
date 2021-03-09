<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="top-bar">
    <div class="container">
        <div class="col-sm-12">
            <div class="row">

                <ul class="top-menu top-menu-left">
                    <!--Print top menu pages-->

                    <li>
                        <p id="demo" style="color:darkgray;"></p>
                    </li>

                    <script>
                        var d = new Date();
                        document.getElementById("demo").innerHTML = d.toDateString();
                    </script>
                    <li style="color:darkgray;">|</li>

                    <li>
                        <p style="color:darkgray;">Get in touch! +264 81 487 1442</p>
                    </li>

                    <li style="color:darkgray;">|</li>
                    <?php if (!empty($this->menu_links)) :
                        foreach ($this->menu_links as $item) : ?>
                            <?php if ($item->item_visibility == 1 && $item->item_location == "top") : ?>
                                <li><a style="color: darkgray;font-size:13px" href="<?php echo generate_menu_item_url($item); ?>"><?php echo html_escape($item->item_name); ?></a></li>
                    <?php endif;
                        endforeach;
                    endif; ?>

                </ul>


                <ul class="top-menu top-menu-right">
                    <li style="margin-right: 5px;">
                        <p><a href="">
                        
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="16" height="16" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z" fill="#efeaea" data-original="#000000" style="" class=""/></g></svg>

                            </a></p>
                    </li>

                    <li style="margin-right: 5px;"><p><a href="">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="16" height="16" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568    C480.224,136.96,497.728,118.496,512,97.248z" fill="#ede9e9" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
</g></svg></a></p></li>

<li style="margin-right: 5px;"><p><a href="">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="16" height="16" x="0" y="0" viewBox="0 0 511 511.9" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0" fill="#efeaea" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0" fill="#efeaea" data-original="#000000" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0" fill="#efeaea" data-original="#000000" style="" class=""/></g></svg>
</a></p></li>

<li><p><a href="">


<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="16" height="16" x="0" y="0" viewBox="0 0 90.677 90.677" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M82.287,45.907c-0.937-4.071-4.267-7.074-8.275-7.521c-9.489-1.06-19.098-1.065-28.66-1.06    c-9.566-0.005-19.173,0-28.665,1.06c-4.006,0.448-7.334,3.451-8.27,7.521c-1.334,5.797-1.35,12.125-1.35,18.094    c0,5.969,0,12.296,1.334,18.093c0.936,4.07,4.264,7.073,8.272,7.521c9.49,1.061,19.097,1.065,28.662,1.061    c9.566,0.005,19.171,0,28.664-1.061c4.006-0.448,7.336-3.451,8.272-7.521c1.333-5.797,1.34-12.124,1.34-18.093    C83.61,58.031,83.62,51.704,82.287,45.907z M28.9,50.4h-5.54v29.438h-5.146V50.4h-5.439v-4.822H28.9V50.4z M42.877,79.839h-4.629    v-2.785c-1.839,2.108-3.585,3.136-5.286,3.136c-1.491,0-2.517-0.604-2.98-1.897c-0.252-0.772-0.408-1.994-0.408-3.796V54.311    h4.625v18.795c0,1.084,0,1.647,0.042,1.799c0.111,0.718,0.462,1.082,1.082,1.082c0.928,0,1.898-0.715,2.924-2.166v-19.51h4.629    L42.877,79.839L42.877,79.839z M60.45,72.177c0,2.361-0.159,4.062-0.468,5.144c-0.618,1.899-1.855,2.869-3.695,2.869    c-1.646,0-3.234-0.914-4.781-2.824v2.474h-4.625V45.578h4.625v11.189c1.494-1.839,3.08-2.769,4.781-2.769    c1.84,0,3.078,0.969,3.695,2.88c0.311,1.027,0.468,2.715,0.468,5.132V72.177z M77.907,67.918h-9.251v4.525    c0,2.363,0.773,3.543,2.363,3.543c1.139,0,1.802-0.619,2.066-1.855c0.043-0.251,0.104-1.279,0.104-3.134h4.719v0.675    c0,1.491-0.057,2.518-0.099,2.98c-0.155,1.024-0.519,1.953-1.08,2.771c-1.281,1.854-3.179,2.768-5.595,2.768    c-2.42,0-4.262-0.871-5.599-2.614c-0.981-1.278-1.485-3.29-1.485-6.003v-8.941c0-2.729,0.447-4.725,1.43-6.015    c1.336-1.747,3.177-2.617,5.54-2.617c2.321,0,4.161,0.87,5.457,2.617c0.969,1.29,1.432,3.286,1.432,6.015v5.285H77.907z" fill="#efeaea" data-original="#000000" style=""/>
		<path d="M70.978,58.163c-1.546,0-2.321,1.181-2.321,3.541v2.362h4.625v-2.362C73.281,59.344,72.508,58.163,70.978,58.163z" fill="#efeaea" data-original="#000000" style=""/>
		<path d="M53.812,58.163c-0.762,0-1.534,0.36-2.307,1.125v15.559c0.772,0.774,1.545,1.14,2.307,1.14    c1.334,0,2.012-1.14,2.012-3.445V61.646C55.824,59.344,55.146,58.163,53.812,58.163z" fill="#efeaea" data-original="#000000" style=""/>
		<path d="M56.396,34.973c1.705,0,3.479-1.036,5.34-3.168v2.814h4.675V8.82h-4.675v19.718c-1.036,1.464-2.018,2.188-2.953,2.188    c-0.626,0-0.994-0.37-1.096-1.095c-0.057-0.153-0.057-0.722-0.057-1.817V8.82h-4.66v20.4c0,1.822,0.156,3.055,0.414,3.836    C53.854,34.363,54.891,34.973,56.396,34.973z" fill="#efeaea" data-original="#000000" style=""/>
		<path d="M23.851,20.598v14.021h5.184V20.598L35.271,0h-5.242l-3.537,13.595L22.812,0h-5.455c1.093,3.209,2.23,6.434,3.323,9.646    C22.343,14.474,23.381,18.114,23.851,20.598z" fill="#efeaea" data-original="#000000" style=""/>
		<path d="M42.219,34.973c2.342,0,4.162-0.881,5.453-2.641c0.981-1.291,1.451-3.325,1.451-6.067v-9.034    c0-2.758-0.469-4.774-1.451-6.077c-1.291-1.765-3.11-2.646-5.453-2.646c-2.33,0-4.149,0.881-5.443,2.646    c-0.993,1.303-1.463,3.319-1.463,6.077v9.034c0,2.742,0.47,4.776,1.463,6.067C38.069,34.092,39.889,34.973,42.219,34.973z     M39.988,16.294c0-2.387,0.724-3.577,2.231-3.577c1.507,0,2.229,1.189,2.229,3.577v10.852c0,2.387-0.722,3.581-2.229,3.581    c-1.507,0-2.231-1.194-2.231-3.581V16.294z" fill="#efeaea" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
</g></svg>


</a></p></li>
                    <!--Check auth-->

                </ul>
            </div>
        </div>
    </div>
    <!--/.container-->
</div>
<!--/.top-bar-->