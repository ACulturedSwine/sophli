<!DOCTYPE html>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php'; ?>
<html>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/navbar.php'; ?>
    <h1>lifeiszoo ✨</h1>
    <div id = "splash-message-container" class="typewriter"></div>
    <p>
        enchanting creatures, inexplicable phenomena, things that spark imagination and move the heart.
    </p>
    <p id="lifeiszoo-bottom-desc">ah, life is a zoo, so won't you come and join me? let's embark on a mission and charter the whimsies of the world.</p>
    <div class="dropInfo">
        <div class="dropInfoHeader">
            <h1>about</h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg>
        </div>
        <div class="dropInfoEntries">
            <p class="typewriter">welcome to the zoo</p>
            <p>lifeiszoo is a personal project that i created to write about the various things in life that intrigue me.</p>
            <p>
                at first, i thought about creating a digital animal encyclopedia/dex of sorts covering various creatures.
                kind of like those animal videos that pop in your youtube recommendations from time to time, but in the form of a website.
            </p>
            <p>i realized, though, that there is so much more that i could write about.</p>
            <p>life is a zoo, after all, and i hope you'll enjoy it as much as i do.</p>
        </div>
    </div>
    <div class="dropInfo">
        <div class="dropInfoHeader">
            <h1>entries</h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg>
        </div>
        <div id="entriesContainer" class="dropInfoEntries">
            <div class="toc-section-container">
                <h1>lifeiszoo 🌴</h1>
                <p>your premier collection of all kinds of creatures that walk the world.</p>
                <div>
                    <a href="/entries/lifeiszoo/classicpack.php">classicpack</a>
                    <a href="/entries/lifeiszoo/treestrilogy.php">treestrilogy</a>
                    <a href="/entries/lifeiszoo/birdsbundle.php">birdsbundle</a>
                </div>
            </div>
            <div class="toc-section-container">
                <h1>cellula-e-cellula 🌌</h1>
                <p>experience the inexplicable, infinitely arising from each other like cells.</p>
                <div>
                    <i>danger-wonder collection:</i>
                    <a href="/entries/cellula-e-cellula/dangerwonder/danger-danger!.php">danger danger!</a>
                    <a href="/entries/cellula-e-cellula/dangerwonder/wonder-wonder!.php">wonder wonder!</a>
                </div>
            </div>
            <div class="toc-section-container">
                <h1>coffeeshop ☕</h1>
                <p>sit and down have some coffee while you wait. recs, musings, and everything in between.</p>
                <div>
                    <a href="/entries/coffeeshop/recs.php">recs</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>