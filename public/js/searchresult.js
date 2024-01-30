$(document).ready(function() {
    var $searchResult = $(".search-result-container");
    var $searchInput = $("#searchInput");

    $searchInput.on("input", function() {
        var searchTerm = $(this).val().toLowerCase();

        // Clear previous search results
        $searchResult.empty();

        // Store the found results
        var foundResults = [];

        // Loop through each blog card
        $(".blogCard").each(function(index) {
            var $blogTitle = $(this).find("h1").text().toLowerCase();
            var $blogContent = $(this).find("h4").text();

            if ($blogTitle.includes(searchTerm)) {
                // If the blog title contains the search term, add it to the found results
                var $resultLink = $("<h6><a style='font-size: 16px;' href='" + $(this).find("a").attr("href") + "'>" + $blogTitle + "</a></h6>");
                var $resultContent = $("<p style='font-size: 12px;'>" + $blogContent + "</p>");
                var $br = $("<br>");

                // Add a light gray border-bottom to all results except the last one
                if (index < $(".blogCard").length - 1) {
                    $resultContent.addClass("border-bottom");
                    $resultLink.addClass("pb-2");
                    $resultContent.addClass("pb-2");
                }

                foundResults.push($resultLink, $resultContent, $br);
            }
        });

        // Toggle the visibility and height of the search result container based on results
        if (searchTerm !== "") {
            $searchResult.css({
                "display": "block",
                "height": "210px",
                "overflow-y": "scroll"
            });

            // Append all found results to the container
            if (foundResults.length > 0) {
                $searchResult.append(foundResults);
            } else {
                $searchResult.css("height", "auto");
                $searchResult.html("No results found.");
            }
        } else {
            $searchResult.css("display", "none");
        }
    });

    // Handle clicks on search result links
    $searchResult.on("click", "a", function(e) {
        e.preventDefault();
        var link = $(this).attr("href");

        // Clear the input field, remove the placeholder, and clear the search results
        $searchInput.val("").removeAttr("placeholder");
        $searchResult.empty();

        // Redirect to the linked page
        window.location.href = link;
    });

    // Hide the search result container when clicking anywhere on the page
    $(document).on("click", function(e) {
        if (!$searchResult.is(e.target) && $searchResult.has(e.target).length === 0) {
            $searchResult.hide();
        }
    });
});
