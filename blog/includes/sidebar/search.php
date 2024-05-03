<script>
document.getElementById("my_search_form").addEventListener("click", function(event) {
    event.preventDefault()
});
</script>

<div class="col-lg-12">
    <div class="sidebar-item search">
        <form id="my_search_form" name="gs" method="POST" action="">
            <input type="text" name="search_bar" class="searchText" placeholder="Type to search..." autocomplete="on"
                style="text-transform:none;" required>
            <br>
            <div style="width:100%;text-align:right;">
                <br>
                <button class="my-btn" type="submit" name="search_btn" id="search_btn">Search</button>


            </div>

        </form>

    </div>

</div>