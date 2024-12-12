<div class="w3-top shadow">
    <div class="w3-bar w3-wide w3-padding w3-card">
        <a href="./" class="w3-bar-item w3-button hoverable-text" style="font-size: 18px"><b>J.</b> Memories</a>
        <div class="w3-right w3-hide-small">
            <a href="./" class="w3-bar-item w3-button hoverable-text" style="font-size: 16px">Home</a>
            
            <div class="w3-dropdown-click dropdown-center" style="font-size: 16px">
                <button class="w3-button dropdown-toggle" type="button" data-bs-toggle="dropdown">Islands</button>
                <ul class="dropdown-menu">
                    <?php
                    foreach ($islands as $islandInfo) {
                        echo "<li><a class='dropdown-item' href='view.php?id=" . $islandInfo->islandID . "'>" . $islandInfo->name . "</a></li>";
                    }
                    ?>
                </ul>
            </div>

            <a href="../" class="w3-bar-item w3-button hoverable-text" style="font-size: 16px">Portfolio</a>
        </div>
    </div>
</div>
