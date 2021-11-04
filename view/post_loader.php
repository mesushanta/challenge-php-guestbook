<div class="w-full mx-auto max-w-screen-xl my-20 px-4 py-4">
    <?php
    foreach($all_posts as $data) {
        ?>
        <div class="w-full border-b border-gray-300 py-6">
            <h2 class="text-xl text-gray-700"><?php echo $data->data->title; ?></h2>
            <p class="text-lg text-gray-700 font-light py-4">
                <?php echo $emoji->convertEmoji($data->data->content); ?>
            </p>
            <h3 class="text-gray-600 font-light"><?php echo $data->data->author; ?></h3>
            <span class="text-gray-500 font-light text-sm"><?php echo $data->data->date; ?></span>
        </div>
        <?php
    }
    ?>


    <div class="my-8">
        <?php if($posts->isPrev()) { ?>
        <a class="float-left" href="?page=<?php echo $page-1 ?>">
            <button class="h-10 px-6 text-gray-700 border border-gray-400 bg-gray-200 hover:bg-gray-300 rounded-sm">
                Previous
            </button>
        </a>
        <?php } ?>

        <?php if($posts->isNext()) { ?>
        <a class="float-right" href="?page=<?php echo $page+1 ?>">
            <button class="h-10 px-6 text-gray-700 border border-gray-400 bg-gray-200 hover:bg-gray-300 rounded-sm">
                Next
            </button>
        </a>
        <?php } ?>
    </div>
</div>

