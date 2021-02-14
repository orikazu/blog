<?php
    $categoryArtclCount = $vm->getCategoryArtclCount();
    $subCategoryArtclCount = $vm->getSubCategoryArtclCount();
?>


<div id="main--sidebar">
    <div id="search-container">

        <form action="/search" method="get">
            <input id="search-box" type="search" name="artclName" placeholder="記事フリーワード検索">
        </form>
        <p>→詳細検索は<a href="">コチラ</a></p>
    </div>
    
    <div id="category-list-container">
        <p>&lt;カテゴリ検索&gt;</p>
        <ul>
            <?php foreach($categoryArtclCount as $category => $count): ?>

            <li>
                <a href=""><?php echo "{$category}({$count})"; ?></a>

                <ul>
                    <?php foreach($subCategoryArtclCount["{$category}"] as $subCategory => $subCount): ?>

                    <li><a href=""><?php echo "- {$subCategory}({$subCount})"; ?></a></li>
                    
                    <?php endforeach; ?>
                </ul>
            </li>

            
            <?php endforeach; ?>
        </ul>
    </div>

    <div id="my-profile">
        
        <div id="my-profile--img-container">
            <img class="img-to-circle" src="/asset/img/myProfile.jpg" alt="プロフィール画像">
        </div>
        <h4 id="my-profile--name">クソメガネ</h2>
        <p id="my-profile--txt" class="break-word">
            &emsp;ゲーム開発業界志望の文系大学生。怠惰な生活を好む、クソなメガネ。たまに、めっちゃ頑張る。
        </p>
        
        <!--twitter follow button-->
        <a id="twitter-follow-button" href="https://twitter.com/kusomeg61908444?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">
            Follow @kusomeg61908444
        </a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>
