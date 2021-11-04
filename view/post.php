<div id="create" class="w-full mx-auto max-w-screen-xl my-20 px-4 py-4 bg-blue-100 border border-blue-200">
    <h1 class="text-2xl text-gray-700 mb-10">Create new Post</h1>
    <?php if($has_error) { ?>
        <div class="bg-red-50 border border-red-200 px-4 py-4 text-gray-700">
            There are some errors.
        </div>
    <?php } ?>
    <form action="" method="post">
        <fieldset class="my-4">
            <label class="text-lg text-gray-800" for="title">Title</label>
            <input name="title" type="text" class="px-4 h-12 my-2 block w-full border  focus:outline-none focus:ring-1  <?php if(isset($form_error['title']) && !empty($form_error['title'])) { ?> border-red-400 focus:ring-red-400 <?php } else { ?> border-gray-400 focus:ring-blue-400 <?php } ?> focus:border-transparent text-gray-500 rounded-sm" value="<?php if(isset($_POST['title'])) { echo $_POST['title']; } ?>">

            <?php if(isset($form_error['title']) && !empty($form_error['title'])) { ?>
                <span class="text-red-700 text-sm font-light"><?php echo $form_error['title']; ?></span>
            <?php } ?>
        </fieldset>

        <fieldset class="my-4">
            <label class="text-lg text-gray-800" for="title">Author's Name</label>
            <input name="author" type="text" class="px-4 h-12 my-2 block w-full border focus:outline-none focus:ring-1 <?php if(isset($form_error['author']) && !empty($form_error['author'])) { ?> border-red-400 focus:ring-red-400 <?php } else { ?> border-gray-400 focus:ring-blue-400 <?php } ?> focus:border-transparent text-gray-500 rounded-sm" value="<?php if(isset($_POST['author'])) { echo $_POST['author']; } ?>">
            <?php if(isset($form_error['author']) && !empty($form_error['author'])) { ?>
                <span class="text-red-700 text-sm font-light"><?php echo $form_error['author']; ?></span>
            <?php } ?>
        </fieldset>

        <fieldset class="my-4">
            <label class="text-lg text-gray-800" for="content">Message</label>
            <textarea id="select" name="content" type="text" class="px-4 py-4 my-2 block w-full border focus:outline-none focus:ring-1 <?php if(isset($form_error['content']) && !empty($form_error['content'])) { ?> border-red-400 focus:ring-red-400 <?php } else { ?> border-gray-400 focus:ring-blue-400 <?php } ?> focus:border-transparent text-gray-500 rounded-sm resize-none"><?php if(isset($_POST['author'])) { echo $_POST['author']; } ?></textarea>
            <?php if(isset($form_error['content']) && !empty($form_error['content'])) { ?>
                <span class="text-red-700 text-sm font-light"><?php echo $form_error['content']; ?></span>
            <?php } ?>
        </fieldset>

        <fieldset>
            <button name="post" type="submit" class="px-6 h-12 bg-blue-500 hover:bg-blue-600 border border-blue-700 text-white">Post</button>
        </fieldset>
    </form>
</div>

