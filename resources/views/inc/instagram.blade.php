<div class="instafeed-container">
    <div id="instafeed-container"></div>



    <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
    <script type="text/javascript">
        var userFeed = new Instafeed({
            get: 'user',
            target: "instafeed-container",
            resolution: 'low_resolution',
            accessToken: 'YOUR_INSTAGRAM_ACCESS_TOKEN_GOES_HERE'
        });
        userFeed.run();
    </script>
</div>
