
<div id="main--sidebar">
    <div id="my-profile">
        
        <div id="my-profile--img-container">
            <img id="my-profile--img" src="/asset/img/myicon.jpg" alt="プロフィール画像">
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

    <div id="search-container">
        <p>&lt;ワード検索(30文字以内)&gt;</p>
        <form action="/search" method="get">
            <input id="search-box" type="search" name="w" placeholder="記事タイトル検索"
                value=<?php echo $searchBoxValue; ?>>
        </form>
    </div>
    
    <nav id="category-list-container">
        <p id="">&lt;カテゴリ検索&gt;</p>
        <p id="category-list-container--intro">カテゴリ名をクリックするとメニューが展開します。</p>
        <ul id="category-list">
            <?php 
                $c = 0;
                foreach($categoryArtclCount as $cac):
                    $c_id = $cac['id'];
                    $c_name = $cac['name'];
                    $c_count = $cac['count'];
            ?>
            
                <li>
                    <input id=<?php echo "category-checkbox{$c}"; ?> type="checkbox" class="category-checkbox">
                    <label for=<?php echo "category-checkbox{$c}"; ?> ><?php echo "{$c_name}({$c_count})"; ?></label>

                    <ul id="subCategory-list">
                        <li><a href=<?php echo "/search/{$c_id}"; ?> >- このカテゴリすべて(<?php echo $c_count; ?>)</a></li>

                        <?php if($subCategoryArtclCount[$c_id] != NULL): ?>
                            <?php
                                foreach($subCategoryArtclCount[$c_id] as $scac):
                                    if ($scac == NULL) {
                                        break;
                                    }
                                    $subc_id = $scac['id'];
                                    $subc_name = $scac['name'];
                                    $subc_count = $scac['count'];
                                    
                            ?>
                                
                                <li><a href=<?php echo "/search/{$c_id}/{$subc_id}"; ?> ><?php echo "- {$subc_name}({$subc_count})"; ?></a></li>
                                
                            <?php endforeach; ?>

                         <?php endif; ?>
                    </ul>
                </li>

            <?php
                $c++;
                endforeach; 
            ?>
        </ul>
    </nav>
</div>
