<?php
$link = $_POST['url'];
$vid = explode("?v=", $link);
$vid = $vid[1];

include "setup.php";

$data = file_get_contents("https://www.googleapis.com/youtube/v3/videos?key=$api_key&part=snippet&id=$vid");
$json = json_decode($data);

$img2 = $json->items[0]->snippet->thumbnails->default->url;
$img3 = $json->items[0]->snippet->thumbnails->high->url;
$img4 = $json->items[0]->snippet->thumbnails->standard->url;
$img5 = $json->items[0]->snippet->thumbnails->maxres->url;

$title = $json->items[0]->snippet->title;
?>
<div class="show">

    <h1 class="title-font sm:text-4xl mt-4 text-3xl items-center text-center font-medium text-gray-900"><?php echo $title; ?></h1>

    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="4K" class="object-cover object-center w-full h-full block" src="<?php echo $img5; ?>">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">4K Quality</h2>
                        <br>
                        <a href="<?php echo $img5; ?>" download class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Download</a>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="HD" class="object-cover object-center w-full h-full block" src="<?php echo $img4; ?>">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">HD Quality</h2>
                        <br>
                        <a href="<?php echo $img4; ?>" download class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Download</a>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="SD" class="object-cover object-center w-full h-full block" src="<?php echo $img3; ?>">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">SD Quality</h2>
                        <br>
                        <a href="<?php echo $img3; ?>" download class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Download</a>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="Low" class="object-cover object-center w-full h-full block" src="<?php echo $img2; ?>">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">Low Quality</h2>
                        <br>
                        <a href="<?php echo $img2; ?>" download class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="close" class="fa fa-close fa-2x"></div>
</div>
<script>
    $("#close").on("click", function() {
        $('.datashow').hide();

    });
</script>